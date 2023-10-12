<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg(Lang.customer) }}</h1>
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
import useCustomers from '../../../composables/customers';
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
                name:'',
                company:'',
                email:'',
                address:'',
                password:'',
            },
            name:"Create Customer",
        }
    },
    mounted(){
        let ref = this;

        ref.FormFields = [
                {
                    label:Language.name,
                    field:"name",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.company,
                    field:"company",
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
                    grid:"col-md-6 col-6",
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
                    grid:"col-md-6 col-6",
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



        ]

        // var autocomplete = new google.maps.places.Autocomplete(
        //     document.getElementById("address"),
        // );
    },

    methods:{
        async store(){
            const {store,errors} = useCustomers();
            const {successAlert,errorAlert} = useService();

            this.loader =true;
            let ref = this
            await store(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.customer).replace(':action',Language.saved))
                setTimeout(() => {
                    // window.location.href = '/admin/customers';
                    ref.$router.push(
                        "/admin/customers"
                    )
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
