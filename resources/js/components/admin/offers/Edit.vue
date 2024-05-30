<template>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.edit_msg.replace(':attribute',Lang.offer) }}</h1>
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
import useOffers from '../../../composables/offers';
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
            company_name:'',
                first_name:'',
                last_name:'',
                email:'',
                phone:'',
                web_url:'',
                user_id:0,
                offer_details:'',
                is_approved:'',
                // author:'',
                media:[],
                gallery:[],
                thumbnail:[],
                thumbnailGallery:[],
        },
        name:"Update Space Finder",
    }
},
mounted(){
    let ref = this;

    ref.getAllUsers();

    ref.FormFields = [
                {
                    label:Language.first_name,
                    field:"first_name",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
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
                    label:Language.company_name,
                    field:"company_name",
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
                    grid:"col-md-6 col-12",
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
                    grid:"col-md-6 col-12",
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
                    field:"offer_details",
                    class:"form-control",
                    type:"textarea",
                    grid:"col-md-12 col-12",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                // {
                //     label:Language.author,
                //     field:"author",
                //     class:"vue-select1",
                //     grid:"col-md-4 col-12",
                //     type:"select",
                //     isdynamic:true,
                //     searchable:true,
                //     options:function(){
                //             if(this.isdynamic){
                //                 return ref.users;
                //             }
                //             return [];
                //     },
                //     placeholder:function(){
                //         return Language.placholder_msg(this.label)
                //     },

                //     required:true,
                // },
                // {
                //     label:Language.publisher,
                //     field:"publisher",
                //     class:"form-control",
                //     grid:"col-md-4 col-12",
                //     type:"text",
                //     placeholder:function(){
                //         return "Enter "+this.label
                //     },
                //     required:true,
                // },
                // {
                //     label:Language.published_at,
                //     field:"publish_at",
                //     class:"form-control",
                //     grid:"col-md-4 col-12",
                //     type:"date",
                //     placeholder:function(){
                //         return "Enter "+this.label
                //     },
                //     required:true,
                // },

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
                    model:`App\\Models\\M2MOffer`,
                    required:false,
                    render:true,
                    fileType:"image/jpeg, image/png",
                    maxFiles:10
                },
                {
                    label:Language.thumbnail,
                    field:"thumbnailGallery",
                    class:"files",
                    grid:"col-md-12 col-12",
                    type:"file",
                    
                    placeholder:function(){
                        return "Upload"+this.label
                    },
                    multiple:true,
                    model:`App\\Models\\M2MOffer`,
                    required:false,
                    render:true,
                    fileType:"image/jpeg, image/png",
                    imageType:'thumbnail',
                    maxFiles:10
                },
                

        ]
        ref.edit();
},
methods:{
    async update(){
        const {update,errors} = useOffers();
        const {successAlert,errorAlert} = useService();
        this.loader =true;
        let ref = this;
        await update(this.id,this.form).then(async (response) => {
            successAlert(Language.success_msg.replace(':attribute',Language.offer).replace(':action',Language.updated))
            setTimeout(() => {
                ref.$router.push('/admin/offers')
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
            const {record,get} = useOffers();

            await get(this.id);
            console.log(record.value);
            this.form.first_name = record.value.first_name;
            this.form.user_id = record.value.user_id;
            this.form.web_url = record.value.web_url;
            this.form.company_name = record.value.company_name;
            this.form.last_name = record.value.last_name;
            this.form.phone = record.value.phone;
            this.form.email = record.value.email;
            this.form.is_active = record.value.is_active;
            this.form.is_approved = record.value.is_approved;
            this.form.categories = record.value.categories;
            this.form.offer_details = record.value.offer_details?record.value.offer_details:"";

            this.form.gallery = record.value.media;
            let data = []
            let thumbnails = [];
            let ref = this;
            data = this.form.gallery.filter(gall => {
                if(gall.img_type == "main")
                    return gall;
            }).map(gall => {
                return gall.image_url
            });
           

            thumbnails = this.form.gallery.filter(thumb => {
                if(thumb.img_type == "thumbnail")
                    return thumb;
            }).map(thumb => {
                return thumb.image_url
            });


           console.log(data,thumbnails)


            this.form.gallery = data;
            this.form.thumbnailGallery = thumbnails;
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
