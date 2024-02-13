<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg(Lang.platinumpartner) }}</h1>
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
import usePlatinumPartner from '../../../composables/platinumpartners';
import useUsers from '../../../composables/users';
import useService  from '../../../services/index';
import { axiosWrapper } from '../../../helpers';


export default {
    components:{
        Form,
    },
    data(){
        return {
            Lang:Language,
            loader:false,
            users:[],
            errors:{},
            FormFields:[],
            developerOptions:[],
            typesOptions:[],
            citiesOptions:[],
            FormData:{
                title:'',
                // slug:'',
                web_url:'',
                description:'',
                // author:'',
                media:[],
                gallery:[]
            },
            name:"Create Platinum Partner",
        }
    },
    mounted(){
        let ref = this;
        ref.getAllUsers();
        ref.FormFields = [
                {
                    label:Language.title,
                    field:"title",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.web_url,
                    field:"web_url",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:false,
                },
                {
                    label:Language.description,
                    field:"description",
                    class:"form-control",
                    type:"textarea",
                    grid:"col-md-12 col-12",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },

                {
                    label:Language.is_approved,
                    field:"is_approved",
                    class:"vue-select1",
                    grid:"col-md-2 col-12",
                    type:"select",
                    isdynamic:false,
                    searchable:true,
                    options:function(){
                            if(this.isdynamic){
                                return ref.options;
                            }
                            return [
                                {
                                    text:Language.yes,
                                    id:1
                                },
                                {
                                    text:Language.no,
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
                    model:`App\\Models\\PlatinumPartner`,
                    required:false,
                    fileType:"image/jpeg, image/png",
                    maxFiles:10
                },

        ]

        // var autocomplete = new google.maps.places.Autocomplete(
        //     document.getElementById("address"),
        // );
    },

    methods:{
        async store(){
            const {store,errors} = usePlatinumPartner();
            const {successAlert,errorAlert} = useService();
            this.loader =true;
            let ref = this
            console.log(this.FormData);
            await store(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.platinumpartner).replace(':action',Language.saved))
                setTimeout(() => {
                    ref.$router.push('/admin/platinumpartners')
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
            // this.errors = errors.value;


        },
        setFormData(field,data){
            this.FormData[field] = data;
            console.log(this.FormData);
        },
        async getAllUsers(){
            const {records,getAllPublic} = useUsers();
            await getAllPublic();
            this.users = records.value;

        }


   }
}
</script>
