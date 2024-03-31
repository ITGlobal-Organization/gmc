<template>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.edit_msg.replace(':attribute',Lang.eventcalender) }}</h1>
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
import useService  from '../../../services/index';
import useUsers from '../../../composables/users';
import useEventCalender from '../../../composables/eventcalenders';


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
        categories:[],
        form:{
                title:'',
                // slug:'',
                user_id:'',
                description:'',
                venue:'',
                event_date:'',
                time:'',
                city:'',
                price:'',
                booking_link:'',
                is_approved:'',
                category_id:0,
                media:[],
                gallery:[]
            },
        name:"Update Event",
    }
},
mounted(){
    let ref = this;

    ref.getAllUsers();
    ref.getAllCategories()
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
                    label:Language.venue,
                    field:"venue",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                // {
                //     label:Language.slug,
                //     field:"slug",
                //     class:"form-control",
                //     grid:"col-md-12 col-12",
                //     type:"text",
                //     placeholder:function(){
                //         return "Enter "+this.label
                //     },
                //     required:true,
                // },
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
                {
                    label:Language.event_date,
                    field:"event_date",
                    class:"form-control",
                    grid:"col-md-4 col-12",
                    type:"date",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.time,
                    field:"time",
                    class:"form-control",
                    grid:"col-md-4 col-12",
                    type:"time",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.price,
                    field:"price",
                    class:"form-control",
                    grid:"col-md-4 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.booking_link,
                    field:"booking_link",
                    class:"form-control",
                    grid:"col-md-4 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:false,
                },
                {
                    label:Language.city,
                    field:"city",
                    class:"form-control",
                    grid:"col-md-4 col-12",
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
                    label:Language.category,
                    field:"category_id",
                    class:"vue-select1",
                    grid:"col-md-4 col-12",
                    type:"select",
                    isdynamic:true,
                    searchable:true,
                    options:function(){
                            if(this.isdynamic){
                                return ref.categories;
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
                    grid:"col-md-4 col-12",
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
                    multiple:true,
                    model:`App\\Models\\EventCalender`,
                    required:false,
                    fileType:"image/jpeg, image/png",
                    maxFiles:10
                },

        ]
        ref.edit();
},
methods:{
    async update(){
        const {update,errors} = useEventCalender();
        const {successAlert,errorAlert} = useService();
        this.loader =true;
        let ref = this;
        await update(this.id,this.form).then(async (response) => {
            successAlert(Language.success_msg.replace(':attribute',Language.eventcalender).replace(':action',Language.updated))
            setTimeout(() => {
                ref.$router.push('/admin/eventcalender')
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
            const {record,get} = useEventCalender();

            await get(this.id);
            console.log(record.value);
            this.form.title = record.value.title;
            this.form.event_date = record.value.event_date;
            this.form.price = record.value.price;
            this.form.venue = record.value.venue;
            this.form.time = record.value.time;
            this.form.user_id = record.value.user_id;
            this.form.price = record.value.price;
            this.form.city = record.value.city;
            // this.form.slug = record.value.slug;
            this.form.is_approved = record.value.is_approved;
            this.form.booking_link = record.value.booking_link;
            this.form.category_id = record.value.category_id;
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

    },
    async getAllCategories(){
            const {categories,getAllCategories} = useEventCalender();
            await getAllCategories();
            this.categories = categories.value;

    }


}
}
</script>
