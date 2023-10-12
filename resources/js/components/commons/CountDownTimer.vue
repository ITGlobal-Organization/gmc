<template>
    <ul class="count-down-timer" v-if="loaded">

        <li>
            <div class="value">{{displayDays}}</div>
            <div class="text">Day{{displayDays > 1 ? 's' : ''}}</div>
        </li>
        <li class="sep"></li>
        <li>
            <div class="value">{{displayHours}}</div>
            <div class="text">Hour{{displayHours > 1 ? 's' : ''}}</div>
        </li>
        <li class="sep"></li>
        <li>
            <div class="value">{{displayMinutes}}</div>
            <div class="text">Minute{{displayMinutes > 1 ? 's' : ''}}</div>
        </li>
        <li class="sep"></li>
        <li>
            <div class="value">{{displaySeconds}}</div>
            <div class="text">Second{{displaySeconds > 1 ? 's' : ''}}</div>
        </li>
    </ul>
    <!-- <div v-if="expired">Time to sign release statement has elapsed</div> -->
</template>
<script>

export default {
    props: ['year', 'month', 'date', 'hour', 'minute', 'second', 'millisecond', 'serverTimeZone'],
    data: () => ({
        displayDays: 0,
        displayHours: 0,
        displayMinutes: 0,
        displaySeconds: 0,
        loaded: false,
        expired: false
    }),
    computed: {
        _seconds: () => 1000,
        _minutes() {
            return this._seconds * 60;
        },
        _hours() {
            return this._minutes * 60;
        },
        _days() {
            return this._hours * 24;
        },
        endTime() {
            return new Date(
                this.year,
                this.month,
                this.date,
                this.hour,
                this.minute,
                this.second,
                this.millisecond

            )
        },
    },
    mounted() {
        this.showRemainingTime();
    },
    methods: {
        convertToServerTZ: (date, tzString) => new Date((typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", {timeZone: tzString})),

        formatNum: (num) => num < 10 ? "0" + num : num,

        showRemainingTime() {
            const timer = setInterval(() => {
                const now = this.convertToServerTZ(new Date(), this.serverTimeZone);
                // const endTime = new Date(2022, 6, 3, 0, 0, 0, 0);
                const diff = this.endTime.getTime() - now.getTime();

                if(diff < 0) {
                    clearInterval(timer);
                    this.expired = true;
                    this.loaded = true;
                    return;
                }

                const days = Math.floor(diff / this._days);
                const hours = Math.floor((diff % this._days) / this._hours);
                const minutes = Math.floor((diff % this._hours) / this._minutes);
                const seconds = Math.floor((diff % this._minutes) / this._seconds);

                this.displayMinutes = this.formatNum(minutes);
                this.displaySeconds = this.formatNum(seconds);
                this.displayHours = this.formatNum(hours);
                this.displayDays = this.formatNum(days);

                this.loaded = true;
            }, 1000);
        }
    }
};

</script>
