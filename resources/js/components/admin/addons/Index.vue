<template>


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ Lang.addons }}</h1>
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
    <section class="content">

    <!-- Default box -->
    <div class="card card-secondary card-outline">

        <div class="card-body p-0">
            <div class="row">
                <div class="col-12 col-md-5 card card-box-shadow">
                    <div class="card-header">
                        <h5>{{ Lang.create_msg(Lang.addon) }}</h5>
                    </div>
                    <div class="card-body">
                        <Form :fields="FormFields" :data="FormData" :action="action" :name="name" :errors="errors"/>
                    </div>
                </div>
                <div class="col-12 col-md-7 card card-box-shadow" v-if="data">
                    <div class="card-header">
                        <h5>{{ Lang.addons }}</h5>
                    </div>
                    <div class="card-body">
                        <datatables :rows="data.data" :pages="data.pages" :columns="columns" :checkbox="false" :setPageNo="setPageNo" :filter="filter" :setPageSize="setPageSize" :setFilter="setFilter" :pageNo="pageNo" :pageSize="pageSize" :updateStatus="updateStatus" :setOrder="setOrder" :order="order" />
                    </div>
                </div>
                <div class="col-12 col-md-7 card" v-else>
                    <div class="card-header">
                        <h5>{{ Lang.addons }}</h5>
                    </div>
                    <div class="card-body">
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
                </div>
            </div>

        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </section>

<!-- /.content -->
</template>



<script>
import useAddons from '../../../composables/addons';
import {Language} from '../../../helpers/lang/lang';
import Datatables from '../../commons/Datatables.vue';
import useService  from '../../../services/';
import VueElementLoading from 'vue-element-loading';
import Form from '../../commons/Form.vue';

export default {

components: { Datatables,VueElementLoading,Form },

data(){
    return {
        Lang:Language,
        data:[],
        columns:[],
        pageNo:1,
        pageSize:10,
        id:0,
        loader:false,
        order:'desc',
        orderBy:'created_at',
        FormFields:[],
        errors:{},
        pages:1,
        filter:{
            search:'',
        },
        errors:[],
        id:0,
        FormData:{
            name:'',
            price:'',
            description:'',
            is_active:1,
            media:[],
            gallery:[],

        },
        name:"Submit",
    }
},
beforeMount(){
    // this.loader = true
},
mounted(){
    // this.loader = false
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
            label:Language.price,
            field:'price',
            orignal_name:'price',
            width:'4%',
            sorted:false,
            has_html:false,
        },
        {
            label:Language.status,
            field:'status',
            orignal_name:'is_active',
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

                        ref.edit(row.id);
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
    this.FormFields = [
            {
                label:Language.name,
                field:"name",
                class:"form-control",
                grid:"col-md-12 col-12",
                type:"text",
                placeholder:function(){
                    return Language.placholder_msg(this.label)
                },
                required:true,
            },
            {
                label:Language.price,
                field:"price",
                class:"form-control",
                grid:"col-md-12 col-12",
                type:"text",
                placeholder:function(){
                    return Language.placholder_msg(this.label)
                },
                required:true,
            },
            {
                label:Language.description,
                field:"description",
                class:"form-control",
                grid:"col-md-12 col-12",
                type:"textarea",
                placeholder:function(){
                    return Language.placholder_msg(this.label)
                },
                required:false,
            },
            {
                    label:Language.status,
                    field:"is_active",
                    class:"vue-select1",
                    grid:"col-md-12 col-12",
                    type:"select",
                    isdynamic:false,
                    searchable:true,
                    options:function(){
                            if(this.isdynamic){
                                return ref.options;
                            }
                            return [
                                {
                                    text:Language.active,
                                    id:1
                                },
                                {
                                    text:Language.inactive,
                                    id:0
                                }
                            ];
                    },
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },

                    required:true,
                },
                {
                    label:Language.image,
                    field:"gallery",
                    class:"files",
                    grid:"col-md-12 col-12",
                    type:"file",
                    placeholder:function(){
                        return "Upload"+this.label
                    },
                    multiple:true,
                    model:`App\\Models\\Addon`,
                    required:false,
                    fileType:"image/jpeg, image/png",
                    maxFiles:10
                },


        ]
    this.getAddons(this.pageNo,this.pageSize,this.filter);
},

methods:{
    setPageNo(pageNo){
        this.pageNo = pageNo;
        this.getAddons(this.pageNo,this.pageSize,this.filter);
    },
    setPageSize(pageSize){
        this.pageSize = pageSize
        this.getAddons();
    },
    setOrder(orderBy){
        this.orderBy = orderBy
        this.order = this.order == 'desc'?'asc':'desc';
        this.getAddons();
    },
    setFilter(filter){
        this.filter = {
            search:filter
        }

        this.getAddons(this.pageNo,this.pageSize,this.filter);
    },
    async getAddons(){

        const { records, getAll } = useAddons();
        this.loader = true
        let ref = this

        try{
            await getAll(ref.pageNo,ref.pageSize,ref.orderBy,ref.order,ref.filter);
            ref.data = records
            ref.loader = false;
        }catch(e){
            ref.loader = false;
        }

    },
    async updateStatus(id){
        const {confirmAlert} = useService();
        let ref = this
            confirmAlert(async () => {
                this.loader = true
                    const { udpateStatus } = useAddons();
                    await udpateStatus(id)
                    ref.getAddons(ref.pageNo,ref.pageSize,ref.filter);
            })
    },
    async _delete(id){
        const {confirmAlert,successAlert} = useService();
        let ref = this
            confirmAlert(async () => {
                this.loader = true
                    const { _delete } = useAddons();
                    await _delete(id)
                    ref.getAddons(ref.pageNo,ref.pageSize,ref.filter);
                    successAlert(Language.success_msg.replace(':attribute',Language.addon).replace(':action',Language.deleted))

            })
    },
    action(){
        if(this.id == 0){
            this.store();
        }else{
            this.update();
        }
    },
    async update(){
        const {update,errors} = useAddons();
        const {errorAlert,successAlert} = useService();

        this.errors = [];
        let ref = this;



        this.loader =true;
                await update(this.id,this.FormData).then((response) => {
                    successAlert(Language.success_msg.replace(':attribute',Language.addon).replace(':action',Language.updated));
                    ref.id = 0;
                    ref.getAddons();
                }).catch((e) => {

                    if(e.response.status === 422){
                        ref.errors = e.response.data.errors

                    }else if(e.response.status == 500){
                        errorAlert(e.message)
                    }else{

                        errorAlert(e.response.data.message)
                    }
                })
                this.loader =false;
                clearForm();


    },
    async store(){

            const {store,errors} = useAddons();
            const {successAlert,errorAlert} = useService();
            this.loader =true;
            let ref = this
            await store(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.addon).replace(':action',Language.saved))
                this.getAddons();
            }).catch((e) => {
                console.log(e.response.data.errors)
                if(e.response.status === 422){
                    ref.errors = e.response.data.errors
                }else if(e.response.status == 500){
                    errorAlert(e.message)
                }else{

                    errorAlert(e.response.data.message)
                }
            });
            this.loader =false;
            clearForm();
            // this.errors = errors.value;




    },
    async edit(id){
        const {record,get} = useAddons();
        this.id = id;
        await get(id);
        console.log(record.value);
        this.FormData.name = record.value.name;
        this.FormData.price = record.value.price;
        this.FormData.description = record.value.description;
        this.FormData.is_active = record.value.is_active;
        this.FormData.gallery = record.value.media;
        let data = []
            let ref = this;
            if(ref.FormData.gallery.length > 0) {
                data = this.FormData.gallery.map(gall => {
                    return gall.image_url;
                })

                ref.FormData.gallery = data;
                record.value.media.filter(gallery => {
                    ref.FormData.media.push(gallery.id);
                })
            }


    },
    clearForm(){
        ref = this
        Object.keys(ref.FormData).map(key => {
            if(Number.isInteger(ref.FormData[key]))
                ref.FormData[key] = 0;
            else
                ref.FormData[key] = '';
        })
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

