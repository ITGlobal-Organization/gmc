<template>
    <div :class="'small-box '+ counter.bg_color">
        <div class="inner">
            <h3>{{ counter.count }}</h3>
            <p>{{ counter.title }}</p>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a :href="counter.link" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</template>
<script>
export default {
    props:{
        counter:{},
    }
}
</script>
