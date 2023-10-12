<template>


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.newsletter }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <div class="loading" v-if="loader">Loading</div>
    <section class="content" v-else>

        <!-- Default box -->
        <div class="card card-secondary card-outline">
            <div class="card-header">
                <h3 class="card-title">{{ Lang.newsletter }}</h3>
            </div>
            <div class="card-body p-0" >
                <datatables :rows="data.data" :pages="data.pages" :columns="columns" :checkbox="false" :setPageNo="setPageNo" :filter="filter" :setPageSize="setPageSize" :setFilter="setFilter" :pageNo="pageNo" :pageSize="pageSize" :updateStatus="updateStatus" :setOrder="setOrder" :order="order"/>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>

    <!-- /.content -->
</template>



<script>
import useNewsletter from '../../composables/newsletter'
import {Language} from '../../helpers/lang/lang';
import Datatables from '../commons/Datatables.vue';
import useService  from '../../services/index';
import VueElementLoading from 'vue-element-loading';
export default {

    components: { Datatables,VueElementLoading },

    data(){
        return {
            Lang:Language,
            data:[],
            columns:[],
            pageNo:1,
            pageSize:10,
            loader:false,
            order:'desc',
            orderBy:'created_at',
            pages:1,
            filter:{
                search:'',
            }
        }
    },
    beforeMount(){
        this.loader = true
    },
    mounted(){
        this.loader = false
        this.columns = [
            {
                label:'S.no',
                field:'sno',
                orignal_name:'sno',
                width:'4%',
                sorted:false,
                has_html:true,
            },

            {
                label:'Email',
                field:'email',
                orignal_name:'email',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:'Subscribe At',
                field:'subscribe_at',
                orignal_name:'subscribe_at',
                width:'4%',
                sorted:true,
                has_html:false,
            },

        ]

        this.getNewsletters(this.pageNo,this.pageSize,this.filter)
    },

    methods:{
        setPageNo(pageNo){
            this.pageNo = pageNo;

            this.getNewsletters(this.pageNo,this.pageSize,this.filter);
        },
        setPageSize(pageSize){
            this.pageSize = pageSize
            this.getNewsletters();
        },
        setOrder(orderBy){
            this.orderBy = orderBy
            this.order = this.order == 'desc'?'asc':'desc';
            this.getNewsletters();
        },
        setFilter(filter){
            this.filter = {
                search:filter
            }

            this.getNewsletters(this.pageNo,this.pageSize,this.filter);
        },
        async getNewsletters(){

            const { newsletters, getNewsLetters } = useNewsletter();
            this.loader = true
            let ref = this

            try{
                await getNewsLetters(ref.pageNo,ref.pageSize,ref.orderBy,ref.order,ref.filter);
                ref.data = newsletters
                ref.loader = false;
            }catch(e){
                console.log(e);
                ref.loader = false;
            }

        },

        async deleteCompany(id){
            const {confirmAlert,successAlert} = useService();
            let ref = this
            confirmAlert(async () => {
                this.loader = true
                const { deleteCompany } = useCompanies();
                await deleteCompany(id)
                ref.getNewsletters(ref.pageNo,ref.pageSize,ref.filter);
                successAlert(Language.success_msg.replace(':attribute',Language.company).replace(':action',Language.deleted))

            })
        }

    },



}
</script>

