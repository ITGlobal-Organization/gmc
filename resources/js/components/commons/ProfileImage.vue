<template>
    <img :src="defaultImage" @error="error()">
</template>
<script>
export default {
    props:{
        image:String,
    },
    data(){
        return {
            defaultImage:'/images/avatar.png',
        }

    },
    mounted() {
        if(this.image){
           this.defaultImage = '/'+this.image;
        }
    },
    methods:{
        error(){
            this.defaultImage = '/images/avatar.png';
        }
    }
}
</script>
