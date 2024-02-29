
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

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div :class="'col-lg-'+(12/Counters.length)+' col-2'" v-for="(counter,index) in Counters" :key="index">
            <counters :counter="counter"/>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      

        <!-- /.row (main row) -->


      </div><!-- /.container-fluid -->
    </section>
        <!-- /.content -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            
          <div class="col-12 col-md-6 col-lg-6 ">
            <div class="card card-secondary card-outline">
                <div class="card-header">
                    <h3>{{ Lang.recent_msg(Lang.directories)}}</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive" v-if="DirectoriesData.data">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th v-for="(item,index) in DirectoriesCol" :key="index" >
                                                <div>
                                                    
                                                    <label style="cursor:pointer;">
                                                        <span class="mr-1">{{ item.label}}</span>
                                                    
                                                    </label>
                                                </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody v-if="DirectoriesData.data.length > 0">
                                    <tr v-for="(row,index) in DirectoriesData.data" :key="index">
                                            <td v-for="(column,key) in DirectoriesCol" :key="key">
                                                <p v-if="!column.has_html && column.field != 'action'">{{!row[column.field]?'---':row[column.field].length>25?row[column.field].substring(0,20).concat('...'):row[column.field]}}</p>
                                                <div v-if="column.has_html && column.field != 'action'" v-html="row[column.field]"></div>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <router-link class="btn btn-secondary" to="/admin/directory">
                            {{ Lang.view_all }}
                        </router-link>

        <!--                <h3 class="card-title">{{ Lang.companies }}</h3>-->
                    </div>`
                </div>
            </div>
                
        
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card card-secondary card-outline">
                <div class="card-header">
                    <h3>{{ Lang.recent_msg(Lang.spacefinders)}}</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive" v-if="SpaceFindersData.data">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th v-for="(item,index) in SpaceFindersCol" :key="index" >
                                                <div>
                                                    
                                                    <label style="cursor:pointer;">
                                                        <span class="mr-1">{{ item.label}}</span>
                                                    
                                                    </label>
                                                </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody v-if="SpaceFindersData.data.length > 0">
                                    <tr v-for="(row,index) in SpaceFindersData.data" :key="index">
                                            <td v-for="(column,key) in SpaceFindersCol" :key="key">
                                                <p v-if="!column.has_html && column.field != 'action'">{{!row[column.field]?'---':row[column.field].length>25?row[column.field].substring(0,20).concat('...'):row[column.field]}}</p>
                                                <div v-if="column.has_html && column.field != 'action'" v-html="row[column.field]"></div>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <router-link class="btn btn-secondary" to="/admin/spacefinder">
                            {{ Lang.view_all }}
                        </router-link>

        <!--                <h3 class="card-title">{{ Lang.companies }}</h3>-->
                    </div>`
                </div>
            </div>
                
        
          </div>
          <div class="col-12 col-md-6 col-lg-6 ">
            <div class="card card-secondary card-outline">
                <div class="card-header">
                    <h3>{{ Lang.recent_msg(Lang.eventcalenders)}}</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive" v-if="EventsData.data">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th v-for="(item,index) in EventsCol" :key="index" >
                                                <div>
                                                    
                                                    <label style="cursor:pointer;">
                                                        <span class="mr-1">{{ item.label}}</span>
                                                    
                                                    </label>
                                                </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody v-if="EventsData.data.length > 0">
                                    <tr v-for="(row,index) in EventsData.data" :key="index">
                                            <td v-for="(column,key) in EventsCol" :key="key">
                                                <p v-if="!column.has_html && column.field != 'action'">{{!row[column.field]?'---':row[column.field].length>25?row[column.field].substring(0,20).concat('...'):row[column.field]}}</p>
                                                <div v-if="column.has_html && column.field != 'action'" v-html="row[column.field]"></div>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <router-link class="btn btn-secondary" to="/admin/eventcalender">
                            {{ Lang.view_all }}
                        </router-link>

        <!--                <h3 class="card-title">{{ Lang.companies }}</h3>-->
                    </div>`
                </div>
            </div>
               
        
          </div>
          <div class="col-12 col-md-6 col-lg-6">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                    <h3>{{ Lang.recent_msg(Lang.offers)}}</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive" v-if="OffersData.data">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th v-for="(item,index) in OffersCol" :key="index" >
                                                <div>
                                                    
                                                    <label style="cursor:pointer;">
                                                        <span class="mr-1">{{ item.label}}</span>
                                                    
                                                    </label>
                                                </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody v-if="OffersData.data.length > 0">
                                    <tr v-for="(row,index) in OffersData.data" :key="index">
                                            <td v-for="(column,key) in OffersCol" :key="key">
                                                <p v-if="!column.has_html && column.field != 'action'">{{!row[column.field]?'---':row[column.field].length>25?row[column.field].substring(0,20).concat('...'):row[column.field]}}</p>
                                                <div v-if="column.has_html && column.field != 'action'" v-html="row[column.field]"></div>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <router-link class="btn btn-secondary" to="/admin/offers">
                            {{ Lang.view_all }}
                        </router-link>

        <!--                <h3 class="card-title">{{ Lang.companies }}</h3>-->
                    </div>`
                </div>
                </div>
        
          </div>
          <div class="col-12 col-md-6 col-lg-6">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                    <h3>{{ Lang.recent_msg(Lang.blogs)}}</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive" v-if="BlogsData.data">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th v-for="(item,index) in BlogsCol" :key="index" >
                                                <div>
                                                    
                                                    <label style="cursor:pointer;">
                                                        <span class="mr-1">{{ item.label}}</span>
                                                    
                                                    </label>
                                                </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody v-if="BlogsData.data.length > 0">
                                    <tr v-for="(row,index) in BlogsData.data" :key="index">
                                            <td v-for="(column,key) in BlogsCol" :key="key">
                                                <p v-if="!column.has_html && column.field != 'action'">{{!row[column.field]?'---':row[column.field].length>25?row[column.field].substring(0,20).concat('...'):row[column.field]}}</p>
                                                <div v-if="column.has_html && column.field != 'action'" v-html="row[column.field]"></div>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <router-link class="btn btn-secondary" to="/admin/blogs">
                            {{ Lang.view_all }}
                        </router-link>

        <!--                <h3 class="card-title">{{ Lang.companies }}</h3>-->
                    </div>`
                </div>
                </div>
        
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      

        <!-- /.row (main row) -->


      </div><!-- /.container-fluid -->
    </section>


    </div>
</template>

<script>
import {Language} from '../../helpers/lang/lang';
import Counters from '../commons/Counters.vue';
import useGenerals from '../../composables/general';
import SplineChart from '../commons/charts/SplineChart.vue';
import useDirectory from '../../composables/directories';
import useSpaceFinder from '../../composables/spacefinders';
import useEventCalender from '../../composables/eventcalenders.js';
import useOffers from '../../composables/offers.js';
import useBlogs from '../../composables/blogs.js';

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
            DirectoriesData:[],
            DirectoriesCol:[],

            SpaceFindersData:[],
            SpaceFindersCol:[],

            EventsData:[],
            EventsCol:[],

            OffersData:[],
            OffersCol:[],

            BlogsData:[],
            BlogsCol:[],
            
            years:[],
            year:new Date().getFullYear(),
        }
    },
    async mounted(){
        // for(var i =this.year-5;i<=this.year;i++){
        //     this.years.push(i);

        // }
        this.DirectoriesCol = [
            {
                label:Language.s_no,
                field:'sno',
                orignal_name:'sno',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:Language.title,
                field:'title',
                orignal_name:'title',
                width:'4%',
                sorted:true,
                has_html:true,
            },
            {
                label:Language.email,
                field:'email',
                orignal_name:'email',
                width:'4%',
                sorted:true,
                has_html:true,
            },
            {
                label:Language.is_approved,
                field:'is_approved',
                orignal_name:'is_approved',
                width:'4%',
                sorted:false,
                has_html:true,
            },
            {
                label:Language.created_at,
                field:'created_at',
                orignal_name:'created_at',
                width:'4%',
                sorted:true,
                has_html:false,
            },
           
        ]

        this.SpaceFindersCol = [
            {
                label:Language.s_no,
                field:'sno',
                orignal_name:'sno',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:Language.title,
                field:'title',
                orignal_name:'title',
                width:'4%',
                sorted:true,
                has_html:true,
            },
            {
                label:Language.email,
                field:'email',
                orignal_name:'email',
                width:'4%',
                sorted:true,
                has_html:true,
            },
         
            {
                label:Language.is_approved,
                field:'is_approved',
                orignal_name:'is_approved',
                width:'4%',
                sorted:false,
                has_html:true,
            },
            {
                label:Language.created_at,
                field:'created_at',
                orignal_name:'created_at',
                width:'4%',
                sorted:true,
                has_html:false,
            },
           
        ]

        this.EventsCol = [
            {
                label:Language.s_no,
                field:'sno',
                orignal_name:'sno',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:Language.title,
                field:'title',
                orignal_name:'title',
                width:'4%',
                sorted:true,
                has_html:true,
            },
            {
                label:Language.event_date,
                field:'event_date',
                orignal_name:'event_date',
                width:'4%',
                sorted:true,
                has_html:true,
            },
            // {
            //     label:Language.author,
            //     field:'author',
            //     orignal_name:'author',
            //     width:'4%',
            //     sorted:false,
            //     has_html:false,
            // },
            {
                label:Language.is_approved,
                field:'is_approved',
                orignal_name:'is_approved',
                width:'4%',
                sorted:false,
                has_html:true,
            },
            {
                label:Language.created_at,
                field:'created_at',
                orignal_name:'created_at',
                width:'4%',
                sorted:true,
                has_html:false,
            },
           
        ]

        this.OffersCol = [
        {
                label:Language.s_no,
                field:'sno',
                orignal_name:'sno',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:Language.first_name,
                field:'first_name',
                orignal_name:'first_name',
                width:'4%',
                sorted:true,
                has_html:true,
            },
            {
                label:Language.email,
                field:'email',
                orignal_name:'email',
                width:'4%',
                sorted:true,
                has_html:true,
            },

            {
                label:Language.is_approved,
                field:'is_approved',
                orignal_name:'is_approved',
                width:'4%',
                sorted:false,
                has_html:true,
            },
            {
                label:Language.created_at,
                field:'created_at',
                orignal_name:'created_at',
                width:'4%',
                sorted:true,
                has_html:false,
            },
      
           
        ]

        this.BlogsCol = [
        {
                label:Language.s_no,
                field:'sno',
                orignal_name:'sno',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:Language.title,
                field:'title',
                orignal_name:'title',
                width:'4%',
                sorted:true,
                has_html:true,
            },

            {
                label:Language.status,
                field:'status',
                orignal_name:'is_approved',
                width:'4%',
                sorted:false,
                has_html:true,
            },
            {
                label:Language.created_at,
                field:'created_at',
                orignal_name:'created_at',
                width:'4%',
                sorted:true,
                has_html:false,
            },
        
      
           
        ]
        await Promise.all([this.getDahsboardCounters(),this.getDirectories(),this.getSpaceFinders(),this.getEvents(),this.getOffers(),this.getNews()]);

    },
    methods:{
        async getDahsboardCounters(){
            const {counters,getCounters} = useGenerals();
            await getCounters();
            this.Counters = counters;
        },
        async getDirectories(){

            const { records, getAll } = useDirectory();
            this.loader = true
            let ref = this

            try{
                await getAll(1,10,'created_at','desc',{not_approved:1});
                ref.DirectoriesData = records;
              
                ref.loader = false;
            }catch(e){
                ref.loader = false;
            }

        },
        async getSpaceFinders(){

            const { records, getAll } = useSpaceFinder();
            this.loader = true
            let ref = this

            try{
                await getAll(1,10,'created_at','desc',{not_approved:1});
                ref.SpaceFindersData = records;
            
                ref.loader = false;
            }catch(e){
                ref.loader = false;
            }

        },
        async getEvents(){

            const { records, getAll } = useEventCalender();
            this.loader = true
            let ref = this

            try{
                await getAll(1,10,'created_at','desc',{not_approved:1});
                ref.EventsData = records;

                ref.loader = false;
            }catch(e){
                ref.loader = false;
            }

        },
        async getOffers(){

            const { records, getAll } = useOffers();
            this.loader = true
            let ref = this

            try{
                await getAll(1,10,'created_at','desc',{not_approved:1});
                ref.OffersData = records;

                ref.loader = false;
            }catch(e){
                ref.loader = false;
            }

        },
        async getNews(){

            const { records, getAll } = useBlogs();
            this.loader = true
            let ref = this

            try{
                await getAll(1,10,'created_at','desc',{not_approved:1});
                ref.BlogsData = records;

                ref.loader = false;
            }catch(e){
                ref.loader = false;
            }

        },
        // async getRegistrations(){
        //     //alert('hrere');
        //     const {registrations,getRegistrations} = useGenerals();
        //     await getRegistrations(this.year);

        //     this.Registrations = registrations;

        // }

    },
    watch:{
        year:function(){
            this.getRegistrations();
        }
    }
}
</script>
