<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg.replace(':attribute',Lang.category) }}</h1>
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
export default {
    components:{
        Form,
    },
    data(){
        return {
            Lang:Language,
            loader:false,
            errors:{},
            FormFields:[
                {
                    label:Language.name,
                    field:"text",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"email",
                    required:true,
                },
                {
                    label:Language.category,
                    field:"select",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"select",
                    is_dynamic:true,
                    options:[],
                    url:'',
                    required:true,
                },
                {
                    label:Language.description,
                    field:"text",
                    class:"form-control",
                    type:"textarea",
                    grid:"col-md-12 col-12",
                    required:true,
                }
            ],
            FormData:{
                email:"",
                password:"",
                remember_me:false,
            },
            name:"Create Category",
        }
    },
    methods:{
        async store(){
            const {login,errors} = useAuth();
            this.loader =true;
            
            await store(this.FormData);
            this.loader =false;
            this.errors = errors.value;
            
    
        }
   }
}
</script>