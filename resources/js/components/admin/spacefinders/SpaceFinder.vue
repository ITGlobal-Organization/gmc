<template>


        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.spacefinder }}</h1>
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
            <div class="card-header">
               
               <div class="row">
                   <div class="col-8">
                           <div class="form-group d-flex col-6">
                               <Select2  :class="'vue-select1 w-100'"
                                   :options="Statuses" v-model="approved" :placeholder="'Select' + Lang.status">
                               </Select2>
                               <button class="btn btn-secondary ml-2" @click="updateStatus()">{{ Lang.update}}</button>
                           </div>
                       
                   </div>
                   <div class="col-4 d-flex justify-content-end">
                       <div class="row">
                           <div class="col-12">
                            <router-link class="btn btn-secondary" to="/admin/spacefinder/create">
                    {{ Lang.add_new_msg(Lang.spacefinder) }}
                </router-link>


                           </div>
                          
                       </div>
                      
                   </div>
               </div>
<!--                <h3 class="card-title">{{ Lang.companies }}</h3>-->
           </div>
   
            <div class="card-body p-0" v-if="data">
                <datatables :rows="data.data" :pages="data.pages" :columns="columns" :checkbox="true" :setPageNo="setPageNo" :filter="filter" :setPageSize="setPageSize" :setFilter="setFilter" :pageNo="pageNo" :pageSize="pageSize" :updateStatus="updateStatus" :setOrder="setOrder" :order="order" :bulk_checked="false" :item_checked="record_checked" :setBulkChecked="setBulkChecked"/>
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
import useSpaceFinder from '../../../composables/spacefinders';
import {Language} from '../../../helpers/lang/lang';
import Datatables from '../../commons/Datatables.vue';
import useService  from '../../../services';
import VueElementLoading from 'vue-element-loading';
import Select2 from 'vue3-select2-component';

export default {

  components: { Datatables,VueElementLoading,Select2 },

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
            Statuses:[
                {
                    id:1,
                    text:Language.active,
                },
                {
                    id:0,
                    text:Language.inactive,
                }
            ],
            approved:0,
            record_checked:[],
            bulk_checked:false,
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
                field:'checbox',
                orignal_name:'checbox',
                width:'4%',
                sorted:false,
                has_html:false,
                has_check:true
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
                label:Language.address,
                field:'address',
                orignal_name:'address',
                width:'4%',
                sorted:true,
                has_html:true,
            },
            {
                label:Language.mobile_no,
                field:'mobile_no',
                orignal_name:'mobile_no',
                width:'4%',
                sorted:true,
                has_html:true,
            },
            {
                label:Language.web_url,
                field:'web_url',
                orignal_name:'web_url',
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
            {
                label:Language.action,
                field:'action',
                orignal_name:'action',
                width:'4%',
                sorted:false,
                has_html:false,
                dropdown:[
                    {
                        name:(row) => {
                            return Language.edit
                        },
                        icon:(row) => {
                            return 'fa fa-edit mr-2'
                        },
                        action:(row) =>{
                            ref.$router.push('/admin/spacefinder/edit/'+row.id)
                        }
                    },
                    {
                        name:(row) => {
                            return Language.delete
                        },
                        icon:(row) => {
                            return 'fa fa-trash mr-2'
                        },
                        action:(row) =>{

                            ref._delete(row.id);
                        }
                    }



                ]


            },
        ]
        this.getSpaceFinders(this.pageNo,this.pageSize,this.filter);
    },

    methods:{
        setPageNo(pageNo){
            this.pageNo = pageNo;

            this.getSpaceFinders(this.pageNo,this.pageSize,this.filter);
        },
        setPageSize(pageSize){
            this.pageSize = pageSize
            this.getSpaceFinders();
        },
        setOrder(orderBy){
            this.orderBy = orderBy
            this.order = this.order == 'desc'?'asc':'desc';
            this.getSpaceFinders();
        },
        setFilter(filter){
            this.filter = {
                search:filter
            }

            this.getSpaceFinders(this.pageNo,this.pageSize,this.filter);
        },
        async getSpaceFinders(){

            const { records, getAll } = useSpaceFinder();
            this.loader = true
            let ref = this

            try{
                await getAll(ref.pageNo,ref.pageSize,ref.orderBy,ref.order,ref.filter);
                ref.data = records
                records.value.data.map(rec => {
                    ref.record_checked.push({
                        id:rec.id,
                        checked:false,
                    });
                })
                ref.loader = false;
            }catch(e){
                ref.loader = false;
            }

        },
        async updateStatus(){
            const {confirmAlert,errorAlert,successAlert} = useService();
            let ref = this
            let ids = this.record_checked.filter(record => {
                    if(record.checked == true) return record.id
                })
                if(ids.length > 0) {
                    confirmAlert(async () => {
                    this.loader = true
                        const { updateStatus } = useSpaceFinder();
                        await updateStatus({
                            ids:ids,
                            status:ref.approved
                        }).then((response) => {
                            successAlert(Language.success_msg.replace(':attribute',Language.spacefinders).replace(':action',Language.updated));
                            ref.loader = false;
                            ref.getSpaceFinders(ref.pageNo,ref.pageSize,ref.filter);
                        }).catch((e) => {
                            console.log(e)
                        ref.loader = false;
                        if(e.response.status === 422){
                            // ref.errors = e.response.data.errors
                            errorAlert(e.response.data.message)
                        }else if(e.response.status == 500){
                            errorAlert(e.message)
                        }else{
                            errorAlert(e.response.data.message)
                        }
                    })
                       
                })
                }else{
                    errorAlert('Please select atleast one record');
                }
               
        },
        setBulkChecked(){
            let ref = this
            let newitem = []
            ref.bulk_checked = !ref.bulk_checked
            
            ref.record_checked.map(item => {
                newitem.push({
                    id:item.id,
                    checked:ref.bulk_checked
                })
            })
            ref.record_checked = newitem
            console.log(newitem)
        },
        async _delete(id){
            const {confirmAlert,successAlert} = useService();
            let ref = this
                confirmAlert(async () => {
                    this.loader = true
                        const { _delete } = useSpaceFinder();
                        await _delete(id)
                        ref.getSpaceFinders(ref.pageNo,ref.pageSize,ref.filter);
                        successAlert(Language.success_msg.replace(':attribute',Language.directory).replace(':action',Language.deleted))

                })
        },

        async update(){
            const {update,errors} = useCategories();
            const {errorAlert,successAlert} = useService();

            this.errors = [];
            let ref = this;
            this.form.show_on_home = this.form.show_on_home ? 1 : 0;

                if(!this.store_modal_loader){
                        this.store_modal_loader = true;
                        await update(this.id,this.form).then((response) => {
                        successAlert(Language.success_msg.replace(':attribute',Language.category).replace(':action',Language.updated));
                        ref.store_modal_loader = false;
                        ref.is_show_modal = false;
                        ref.id = 0;
                        ref.getSpaceFinders();
                    }).catch((e) => {
                        ref.store_modal_loader = false;
                        if(e.response.status === 422){
                            ref.errors = e.response.data.errors
                        }else if(e.response.status == 500){
                            errorAlert(e.message)
                        }else{

                            errorAlert(e.response.data.message)
                        }
                    })
                }
            }



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

