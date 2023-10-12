<template>
    <div class="container">
        <div class="loading" v-if="loader">Loading</div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center font-weight-bold">{{ Language.login.toUpperCase() }}</div>

                <div class="card-body">
                    <Form :fields="FormFields" :data="FormData" :action="login" :name="name" :errors="errors"/>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import {Language} from '../../helpers/lang/lang';
import Form from '../commons/Form.vue';
import useAuth from '../../composables/auth';
export default {
    components:{
        Form,
    },
   data(){
        return {
            Language:Language,
            loader:false,
            errors:{},
            FormFields:[
                {
                    label:Language.email,
                    field:"email",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"email",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.password,
                    field:"password",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"password",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.remember_me,
                    field:"remember_me",
                    class:"form-check-input",
                    type:"checkbox",
                    grid:"col-md-12 col-12",
                    required:false,
                }
            ],
            FormData:{
                email:"",
                password:"",
                remember_me:false,
            },
            name:"Login"
        }
   },
   methods:{
        async login(){
            const {login,errors} = useAuth();
            this.loader =true;

            await login(this.FormData);
            this.loader =false;
            this.errors = errors.value;


        }
   }
}
</script>
