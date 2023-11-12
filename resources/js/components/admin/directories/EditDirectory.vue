<template>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.edit_msg.replace(':attribute',Lang.directory) }}</h1>
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
            <Form :fields="FormFields" :data="form" :action="update" :name="name" :errors="errors"/>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </section>
</template>
<script>
import {Language} from '../../../helpers/lang/lang';
import Form from '../../commons/Form.vue';
import useDirectory from '../../../composables/directories';
import useService  from '../../../services/index';
import useUsers from '../../../composables/users';


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
        users:[],
        form:{
                title:'',
                slug:'',
                email:'',
                mobile_no:'',
                phone:'',
                address:'',
                web_url:'',
                venue_url:'',
                facebook_url:'',
                youtube_url:'',
                linkedin_url:'',
                instagram_url:'',
                description:'',
                user_id:'',
                is_approved:'',
                is_active:0,
                media:[],
                gallery:[]
        },
        name:"Update Directory",
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
                    label:Language.slug,
                    field:"slug",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.email,
                    field:"email",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.mobile_no,
                    field:"mobile_no",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
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
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.address,
                    field:"address",
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
                    required:true,
                },
                {
                    label:Language.venue_url,
                    field:"venue_url",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
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
                        return "Enter "+this.label
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
                        return "Enter "+this.label
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
                        return "Enter "+this.label
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
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.user,
                    field:"user_id",
                    class:"vue-select1",
                    grid:"col-md-4 col-12",
                    type:"select",
                    isdynamic:true,
                    searchable:true,
                    options:function(){
                            if(this.isdynamic){
                                return ref.users;
                            }
                            return [];
                    },
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
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
                    label:Language.image,
                    field:"gallery",
                    class:"files",
                    grid:"col-md-12 col-12",
                    type:"file",
                    placeholder:function(){
                        return "Upload"+this.label
                    },
                    multiple:false,
                    model:`App\\Models\\Directory`,
                    required:false,
                    fileType:"image/jpeg, image/png",
                    maxFiles:1
                },

        ]
        ref.edit();
},
methods:{
    async update(){
        const {update,errors} = useDirectory();
        const {successAlert,errorAlert} = useService();
        this.loader =true;
        let ref = this;
        await update(this.id,this.form).then(async (response) => {
            successAlert(Language.success_msg.replace(':attribute',Language.directory).replace(':action',Language.updated))
            setTimeout(() => {
                ref.$router.push('/admin/directory')
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


    },
    async edit(){
            const {record,get} = useDirectory();

            await get(this.id);
            console.log(record.value);
            this.form.title = record.value.title;
            this.form.user_id = record.value.user_id;
            this.form.web_url = record.value.web_url;
            this.form.facebook_url = record.value.facebook_url;
            this.form.instagram_url = record.value.instagram_url;
            this.form.youtube_url = record.value.youtube_url;
            this.form.linkedin_url = record.value.linkedin_url;
            this.form.venue_url = record.value.venue_url;
            this.form.address = record.value.address;
            this.form.phone = record.value.phone;
            this.form.mobile_no = record.value.mobile_no;
            this.form.email = record.value.email;
            this.form.is_active = record.value.is_active;
            this.form.is_approved = record.value.is_approved;
            this.form.slug = record.value.slug;
            this.form.description = record.value.description?record.value.description:"";

            this.form.gallery = record.value.media;
            let data = []
            let ref = this;
            data = this.form.gallery.map(gall => {
                return gall.image_url;
            })
            console.log(data);
            this.form.gallery = data;
            record.value.media.filter(gallery => {
                ref.form.media.push(gallery.id);
            })
    },

    async getAllUsers(){
            const {records,getAllPublic} = useUsers();
            await getAllPublic();
            this.users = records.value;

    }


}
}
</script>
