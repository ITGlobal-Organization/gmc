<template>

    <apexchart :type="type" :options="chartOptions" :series="series"></apexchart>


</template>
<script>
import VueApexCharts from 'vue3-apexcharts'
export default {
    components:{
        apexchart:VueApexCharts,
    },
    props:{
        months:Array,
        data:Array,
        title:String,
        type:String,
    },
    data(){
        return {
            chartOptions: {

                xaxis: {
                    categories: []
                }
            },
            series: [{}]
        }
    },
    beforeMount(){
        this.series[0]['name'] = this.title;
        this.series[0]['data'] = this.data;
        this.chartOptions.xaxis.categories = this.months;
    },
    watch:{
        data:function(){
            this.series[0]['name'] = this.title;
            this.series[0]['data'] = this.data;
            this.chartOptions.xaxis.categories = this.months;
        }
    }
}
</script>
