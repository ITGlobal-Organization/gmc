<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg.replace(':attribute',Lang.footer) }}</h1>
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
            
            <div class="card-body">
                <Form :fields="FormFields" :data="FormData" :action="store" :name="name" :errors="errors"/>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        
        </section>
</template>
<script>
import {Language} from '../../../helpers/lang/lang';
import Form from '../../commons/Form.vue';
import useFooters from '../../../composables/footers';
import useService  from '../../../services/index';
export default {
    components:{
        Form,
    },
    data(){
        return {
            Lang:Language,
            loader:false,
            errors:{},
            FormFields:[],
            options:[],
            FormData:{
                name:'',
                view:'',
            },
            name:"Create Footer",
        }
    },
    mounted(){ 
        let ref = this;
        ref.FormFields = [
                {
                    label:Language.name,
                    field:"name",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.view,
                    field:"view",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                }
            ]
    },

    methods:{
        async store(){
            const {storeFooter,errors} = useFooters();
            const {successAlert,errorAlert} = useService();
            this.loader =true;
            
            await storeFooter(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.header).replace(':action',Language.saved))
                setTimeout(() => {
                    window.location.href = '/admin/footers';
                }, 3000);
            }).catch((e) => {
                if(e.response.status === 422){
                    this.errors = e.response.data.errors
                }else if(e.response.status == 500){
                    errorAlert(e.message)
                }else{

                    errorAlert(e.response.data.message)
                }
            });;
            this.loader =false;
            this.errors = errors.value;
        },
        // async getData(){
        //     const {data,get} = useGenerals();
        //     await get(`/admin/layouts/select`);
        //     this.options = data.value;   
        // }

   }
}
</script>