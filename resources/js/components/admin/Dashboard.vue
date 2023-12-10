
<template>
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ Lang.welcome }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ Lang.admin }}</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


    </div>
</template>

<script>
import {Language} from '../../helpers/lang/lang';
import Counters from '../commons/Counters.vue';
import useGenerals from '../../composables/general';
import SplineChart from '../commons/charts/SplineChart.vue';
export default {
    components:{
        Counters,
        SplineChart,
    },
    data(){
        return {
            Lang:Language,
            Counters:[],
            Registrations:[],

            years:[],
            year:new Date().getFullYear(),
        }
    },
    async mounted(){
        // for(var i =this.year-5;i<=this.year;i++){
        //     this.years.push(i);

        // }
        // await Promise.all([this.getDahsboardCounters(),this.getRegistrations()]);

    },
    methods:{
        async getDahsboardCounters(){
            const {counters,getCounters} = useGenerals();
            await getCounters();
            this.Counters = counters;
        },
        async getRegistrations(){
            //alert('hrere');
            const {registrations,getRegistrations} = useGenerals();
            await getRegistrations(this.year);

            this.Registrations = registrations;

        }

    },
    watch:{
        year:function(){
            this.getRegistrations();
        }
    }
}
</script>
