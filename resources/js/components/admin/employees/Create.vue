<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg(Lang.employee) }}</h1>
                </div>
             
                </div>
            </div>
        </section>
        <!-- Main content -->
        <div class="loading" v-if="loader">Loading</div>
        <section class="content">

        <!-- Default box -->
        <div class="card card-secondary card-outline">
            
            <div class="card-body">
                <Form :fields="FormFields" :data="FormData" :action="store" :name="name" :errors="errors" id="0"/>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        
        </section>
</template>
<script>
import {Language} from '../../../helpers/lang/lang';
import Form from '../../commons/Form.vue';
import useEmployees from '../../../composables/employees';
import useService  from '../../../services/index';
import useGenerals from '../../../composables/general';

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
            developerOptions:[],
            typesOptions:[],
            citiesOptions:[],
            FormData:{
                first_name:'',
                last_name:'',
                email:'',
                password:'',
                password_confirmation:'',
                address:'',
                emp_code:'',
                designation:'',
                media:[],
                gallery:[]
            },
            name:"Create Employee",
        }
    },
    mounted(){ 
        let ref = this;

        ref.FormFields = [
                {
                    label:Language.first_name,
                    field:"first_name",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.last_name,
                    field:"last_name",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.email,
                    field:"email",
                    class:"form-control",
                    type:"text",
                    grid:"col-md-12 col-12",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.password,
                    field:"password",
                    class:"form-control",
                    type:"password",
                    grid:"col-md-6 col-12",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.confirm_password,
                    field:"password_confirmation",
                    class:"form-control",
                    type:"password",
                    grid:"col-md-6 col-12",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.address,
                    field:"address",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.employee_code,
                    field:"emp_code",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
            
             
                {
                    label:Language.designation,
                    field:"designation",
                    class:"form-control designation",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
              
                {
                    label:Language.profile_picture,
                    field:"gallery",
                    class:"files",
                    grid:"col-md-6 col-12",
                    type:"file",
                    placeholder:function(){
                        return "Upload"+this.label
                    },
                    multiple:false,
                    model:`App\\Models\\Employee`,
                    required:false,
                    fileType:"image/jpeg, image/png",
                    maxFiles:1
                },
                
        ]

        // var autocomplete = new google.maps.places.Autocomplete(
        //     document.getElementById("address"),
        // );
    },

    methods:{
        async store(){
            const {store,errors} = useEmployees();
            const {successAlert,errorAlert} = useService();
            
            if(this.FormData.password != this.FormData.password_confirmation){
                errorAlert(this.Lang.password_mismatch)
                return
            }
            this.loader =true;
            let ref = this
            await store(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.employee).replace(':action',Language.saved))
                setTimeout(() => {
                    ref.$router.push('/admin/employees')
                }, 3000);
            }).catch((e) => {
                if(e.response.status === 422){
                    this.errors = e.response.data.errors
                    console.log(this.errors);
                }else if(e.response.status == 500){
                    errorAlert(e.message)
                }else{

                    errorAlert(e.response.data.message)
                }
            });;
            this.loader =false;
            
            
    
        },

        setFormData(field,data){
            this.FormData[field] = data; 
            console.log(this.FormData);
        }

   }
}
</script>