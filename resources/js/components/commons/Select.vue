<template>

    <vue-select class="vue-select2" name="select2"
                :options="options" :model="model"
                :searchable="true" language="en-US" v-if="!is_dynamic">
    </vue-select>
    <vue-select class="vue-select2" name="select2"
                :options="options" :model="model"
                :searchable="true" language="en-US" v-else>
    </vue-select>
</template>
<script>
export default {
    props:{
        options:Array,
        is_dynamic:Boolean,
        model:String,
        url:String,
    },
    components:{
        "vue-select": require("vue-select")
    },
    mounted(){

    }
}
</script>