<template>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.edit_msg.replace(':attribute',Lang.user) }}</h1>
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
            <Form :fields="FormFields" :data="form" :action="update" :name="name" :errors="errors" :id="id"/>
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
props:['id'],
data(){
    return {
        Lang:Language,
        loader:false,
        errors:{},
        FormFields:[],
        developerOptions:[],
        typesOptions:[],
        citiesOptions:[],
        form:{
            first_name:'',
                last_name:'',
                email:'',
                password:'',
                username:'',
                password_confirmation:'',
                address:'',
                postalcode:'',
                username:'',
                phone:'',
                company:'',
                is_approved:0,
                role_id:0,
                media:[],
                gallery:[]
        },
        name:"Update User",
    }
},
mounted(){
    let ref = this;


    ref.getRoles();
    ref.edit();
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
                    required:false,
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
                    required:false,
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
},
methods:{
    async update(){
        const {update,errors} = useUsers();
        const {successAlert,errorAlert} = useService();
        this.loader =true;
        // if(this.password != '' && this.form.password != this.form.password_confirmation){
        //         errorAlert(this.Lang.password_mismatch)
        //         return
        // }
        let ref = this;
        await update(this.id,this.form).then(async (response) => {
            successAlert(Language.success_msg.replace(':attribute',Language.user).replace(':action',Language.updated))
            setTimeout(() => {

                if(user.employee != undefined){
                    ref.$router.push(route+'/user')

                }else{
                    ref.$router.push(route+'/users')

                }
            }, 3000);
        }).catch((e) => {
            if(e.response.status === 422){
                this.errors = e.response.data.errors
            }else if(e.response.status == 500){
                errorAlert(e.message)
            }else{

                errorAlert(e.response.data.message)
            }
        });
        this.loader =false;

    },
    async edit(){
            const {record,get} = useUsers();

            await get(this.id);

            this.form.first_name = record.value.first_name;
            this.form.last_name = record.value.last_name;
            this.form.email = record.value.email;
            this.form.address = record.value.address;
            this.form.company = record.value.company;
            this.form.phone = record.value.phone;
            this.form.username = record.value.username;
            this.form.postalcode = record.value.postalcode;
            this.form.is_approved = record.value.is_approved;
            this.form.role_id = record.value.role_id;
            this.form.gallery = record.value.media;

            let data = []
            let ref = this;
            if(ref.form.gallery.length > 0) {
                data = this.form.gallery.map(gall => {
                    return gall.image_url;
                })

                this.form.gallery = data;
                record.value.media.filter(gallery => {
                    ref.form.media.push(gallery.id);
                })
            }
    },

    async getRoles(){
            const {records,getRoles} = useUsers();
            await getRoles();
            this.roles = records.value;
    },


}
}
</script>
