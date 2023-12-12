<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg(Lang.user) }}</h1>
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
import useUsers from '../../../composables/users';
import useService  from '../../../services/index';


export default {
    components:{
        Form,
    },
    data(){
        return {
            Lang:Language,
            loader:false,
            roles:[],
            errors:{},
            FormFields:[],
            FormData:{
                first_name:'',
                last_name:'',
                username:'',
                email:'',
                password:'',
                password_confirmation:'',
                address:'',
                postalcode:'',
                username:'',
                phone_no:'',
                // company:'',
                tel_no:'',
                website:'',
                venue_url:'',
                facebook_url:'',
                instagram_url:'',
                youtube_url:'',
                linkedin_url:'',
                is_approved:0,
                role_id:0,
                media:[],
                gallery:[]
            },
            name:"Create User",
        }
    },
    mounted(){
        let ref = this;
        ref.getRoles();
        ref.FormFields = [
                {
                    label:Language.first_name,
                    field:"first_name",
                    class:"form-control",
                    grid:"col-md-4 col-12",
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
                    grid:"col-md-4 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.username,
                    field:"username",
                    class:"form-control",
                    grid:"col-md-4 col-12",
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
                    grid:"col-md-6 col-12",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.roles,
                    field:"role_id",
                    class:"vue-select1",
                    grid:"col-md-6 col-12",
                    type:"select",
                    isdynamic:true,
                    searchable:true,
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    options:function(){
                            if(this.isdynamic){
                                return ref.roles;
                            }
                            return [];
                    },
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
                    label:Language.postal_code,
                    field:"postalcode",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.phone,
                    field:"phone",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.tel_no,
                    field:"tel_no",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.website,
                    field:"website",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.venue_url,
                    field:"venue_url",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.facebook_url,
                    field:"facebook_url",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.instagram_url,
                    field:"instagram_url",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.youtube_url,
                    field:"youtube_url",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.linkedin_url,
                    field:"linkedin_url",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                // {
                //     label:Language.company,
                //     field:"company",
                //     class:"form-control",
                //     grid:"col-md-6 col-12",
                //     type:"text",
                //     placeholder:function(){
                //         return Language.placholder_msg(this.label)
                //     },
                //     required:true,
                // },
                {
                    label:Language.status,
                    field:"is_approved",
                    class:"vue-select1",
                    grid:"col-md-6 col-12",
                    type:"select",
                    isdynamic:false,
                    searchable:true,
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
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
                    model:`App\\Models\\User`,
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
            const {store,errors} = useUsers();
            const {successAlert,errorAlert} = useService();

            if(this.FormData.password != this.FormData.password_confirmation){
                errorAlert(this.Lang.password_mismatch)
                return
            }
            this.loader =true;
            let ref = this
            await store(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.user).replace(':action',Language.saved))
                setTimeout(() => {
                    ref.$router.push('/admin/users')
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
        async getRoles(){
            const {records,getRoles} = useUsers();
            await getRoles();
            this.roles = records.value;
        },

        setFormData(field,data){
            this.FormData[field] = data;
            console.log(this.FormData);
        }

   }
}
</script>
