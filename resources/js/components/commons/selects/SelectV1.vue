<template>
    <div v-if="dynamicOptions.length > 0 || options.length > 0">
        
    </div>
    <div v-else>Hello World</div>
</template>
<script>
import useGenerals from '../../../composables/general';
import Select2 from 'vue3-select2-component';
export default {
    components:{
        Select2
    },
    data(){
        return {
            dynamicOptions:[],
            selectedValue:''
        }
    },
    props:{
        name:String,
        url:String,
        options:Array,
        searchable:Boolean,
        isdynamic:Boolean,
        class:String,
        placeholder:String
    },  
    mounted(){
        this.getData();
    },
    methods:{
        
        async getData(){
            const {data,get} = useGenerals();
            if(this.isdynamic){
                
                await get(this.url);
                this.dynamicOptions = data.value
                console.log(this.dynamicOptions)
            }
        }
    }
}
</script>