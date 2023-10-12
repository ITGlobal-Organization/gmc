<template>


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ Lang.queries }}</h1>
            </div>
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"></a></li>
                <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div> -->
            </div>
        </div>
    </section>
    <!-- Main content -->
    <div class="loading" v-if="loader">Loading</div>
    <section class="content" v-else>

    <!-- Default box -->
    <div class="card card-secondary card-outline">
        <div class="card-header d-flex justify-content-end">
            <!-- <a class="btn btn-secondary" href="/admin/properties/create">
                {{ Lang.add_new_msg.replace(':attribute',Lang.property) }}
            </a> -->
            
<!--                <h3 class="card-title">{{ Lang.companies }}</h3>-->
        </div>
        <div class="card-body p-0" v-if="data">
            <datatables :rows="data.data" :pages="data.pages" :columns="columns" :checkbox="false" :setPageNo="setPageNo" :filter="filter" :setPageSize="setPageSize" :setFilter="setFilter" :pageNo="pageNo" :pageSize="pageSize" :updateStatus="updateStatus" :setOrder="setOrder" :order="order" />
        </div>
        <div class="card-body p-0" v-else>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th v-for="(item,index) in columns" :key="index" >
                            <div>
                                <label>
                                    <span class="mr-1">{{ item.label}}</span>
                                </label>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    
    </section>

<!-- /.content -->
</template>



<script>
import useQueries from '../../../composables/queries';
import {Language} from '../../../helpers/lang/lang';
import Datatables from '../../commons/Datatables.vue';
import useService  from '../../../services/';
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
        },
        errors:[],
        id:0,
    }
},
beforeMount(){
    this.loader = true
},
mounted(){
    this.loader = false
    let ref = this;
    this.columns = [
        {
            label:Language.s_no,
            field:'sno',
            orignal_name:'sno',
            width:'4%',
            sorted:false,
            has_html:false,
        },
        {
            label:Language.name,
            field:'name',
            orignal_name:'name',
            width:'4%',
            sorted:true,
            has_html:true,
        },
        {
            label:Language.email,
            field:'email',
            orignal_name:'email',
            width:'4%',
            sorted:false,
            has_html:false,
        },
        {
            label:Language.phone,
            field:'phone',
            orignal_name:'phone',
            width:'4%',
            sorted:false,
            has_html:false,
        },
        {
            label:Language.city,
            field:'city',
            orignal_name:'city',
            width:'4%',
            sorted:false,
            has_html:false,
        },
        {
            label:Language.message,
            field:'message',
            orignal_name:'message',
            width:'4%',
            sorted:false,
            has_html:false,
        },
        {
            label:Language.project,
            field:'project',
            orignal_name:'project',
            width:'4%',
            sorted:false,
            has_html:false,
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
    this.getQueries(this.pageNo,this.pageSize,this.filter);
},

methods:{
    setPageNo(pageNo){
        this.pageNo = pageNo;

        this.getQueries(this.pageNo,this.pageSize,this.filter);
    },
    setPageSize(pageSize){
        this.pageSize = pageSize
        this.getQueries();
    },
    setOrder(orderBy){
        this.orderBy = orderBy
        this.order = this.order == 'desc'?'asc':'desc';
        this.getQueries();
    },
    setFilter(filter){
        this.filter = {
            search:filter
        }

        this.getQueries(this.pageNo,this.pageSize,this.filter);
    },
    async getQueries(){

        const { queries, getQueries } = useQueries();
        this.loader = true
        let ref = this

        try{
            await getQueries(ref.pageNo,ref.pageSize,ref.orderBy,ref.order,ref.filter);
            ref.data = queries.value
            console.log(queries);
            ref.loader = false;
        }catch(e){
            console.log(e);
            ref.loader = false;
        }

    },
    async updateStatus(id){
        const {confirmAlert} = useService();
        let ref = this
            confirmAlert(async () => {
                this.loader = true
                    const { udpateStatus } = useProperties();
                    await udpateStatus(id)
                    ref.getQueries(ref.pageNo,ref.pageSize,ref.filter);
            })
    },
    // async _delete(id){
    //     const {confirmAlert,successAlert} = useService();
    //     let ref = this
    //         confirmAlert(async () => {
    //             this.loader = true
    //                 const { _delete } = useProperties();
    //                 await _delete(id)
    //                 ref.getQueries(ref.pageNo,ref.pageSize,ref.filter);
    //                 successAlert(Language.success_msg.replace(':attribute',Language.page).replace(':action',Language.deleted))

    //         })
    // },
    
    // async update(){
    //     const {update,errors} = useCategories();
    //     const {errorAlert,successAlert} = useService();

    //     this.errors = [];
    //     let ref = this;
    //     this.form.show_on_home = this.form.show_on_home ? 1 : 0;

    //         if(!this.store_modal_loader){
    //                 this.store_modal_loader = true;
    //                 await update(this.id,this.form).then((response) => {
    //                 successAlert(Language.success_msg.replace(':attribute',Language.category).replace(':action',Language.updated));
    //                 ref.store_modal_loader = false;
    //                 ref.is_show_modal = false;
    //                 ref.id = 0;
    //                 ref.getQueries();
    //             }).catch((e) => {
    //                 ref.store_modal_loader = false;
    //                 if(e.response.status === 422){
    //                     ref.errors = e.response.data.errors
    //                 }else if(e.response.status == 500){
    //                     errorAlert(e.message)
    //                 }else{

    //                     errorAlert(e.response.data.message)
    //                 }
    //             })
    //         }
    //     }



},
watch:{
    'form.name':function(newValue){
        this.form.slug = this.form.name
        .toString()                     // Cast to string
        .toLowerCase()                  // Convert the string to lowercase letters
        .trim()                         // Remove whitespace from both sides of a string
        .replace(/\s+/g, '-')           // Replace spaces with -
        .replace(/&/g, '-and-')           // Replace & with 'and'
        .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
        .replace(/\-\-+/g, '-');        // Replace multiple - with single -
    }
}



}
</script>

