
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
          <div :class="'col-lg-'+(12/Counters.length)+' col-6'" v-for="(counter,index) in Counters" :key="index">
            <counters :counter="counter"/>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                        <i class="fas fa-home mr-1"></i>
                            Properties Registrations
                        </h3>
                        <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <select class="custom-select" v-model="year">
                                    <option v-for="y in years" :key="y" :value="y">{{ y }}</option>
                                </select>
                            </li>
                        </ul>
                        </div>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content p-0" v-if="Registrations.PropertiesByDate">
                            <!-- Morris chart - Sales -->
                            <spline-chart :title="'Properties-Registration'" :type="'area'"
                                :data="Registrations.PropertiesByDate.PropertiesCount"
                                :months="Registrations.PropertiesByDate.Months"></spline-chart>
                        </div>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- DIRECT CHAT -->

                <!--/.direct-chat -->

                <!-- TO DO List -->

            </section>
            <section class="col-lg-6">
                <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Recent Queries</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive" v-if="Registrations.RecentQueries">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(queries,index) in Registrations.RecentQueries" :key="index">
                            <td>{{ queries.id}}</td>
                            <td>{{ queries.first_name}}</td>
                            <td><a :href="'mailto:'+queries.email">{{ queries.email}}</a></td>
                            <td>{{ queries.Message }}</td>
                            <td><a :href="'tel:'+queries.phone">{{ queries.phone }}</a></td>

                            <!-- <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                            </td> -->


                        </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="/admin/queries" class="btn btn-sm btn-secondary float-right">View All Queries</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </section>

        <!-- /.card -->
          <!-- /.Left col -->

        </div>

        <!-- /.row (main row) -->


      </div><!-- /.container-fluid -->
    </section>
        <!-- /.content -->
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
        for(var i =this.year-5;i<=this.year;i++){
            this.years.push(i);

        }
        await Promise.all([this.getDahsboardCounters(),this.getRegistrations()]);

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
