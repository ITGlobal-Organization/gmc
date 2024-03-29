<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg(Lang.event) }}</h1>
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
import useUsers from '../../../composables/users';
import useService  from '../../../services/index';
import { axiosWrapper } from '../../../helpers';
import useEventCalender from '../../../composables/eventcalenders';
// import VueTimepicker from 'vue3-timepicker'
// import 'vue3-timepicker/dist/VueTimepicker.css'

export default {
    components:{
        Form,
    },
    data(){
        return {
            Lang:Language,
            loader:false,
            users:[],
            categories:[],
            errors:{},
            FormFields:[],
            developerOptions:[],
            typesOptions:[],
            citiesOptions:[],
            FormData:{
                title:'',
                slug:'',
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
            name:"Create Event",
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

        // var autocomplete = new google.maps.places.Autocomplete(
        //     document.getElementById("address"),
        // );
    },

    methods:{
        async store(){
            const {store,errors} = useEventCalender();
            const {successAlert,errorAlert} = useService();
            this.loader =true;
            let ref = this
            console.log(this.FormData);
            await store(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.event).replace(':action',Language.saved))
                setTimeout(() => {
                    ref.$router.push('/admin/eventcalender')
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

        },
        async getAllCategories(){
            const {categories,getAllCategories} = useEventCalender();
            await getAllCategories();
            this.categories = categories.value;

        }


   }
}
</script>
