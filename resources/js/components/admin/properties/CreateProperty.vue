<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg.replace(':attribute',Lang.property) }}</h1>
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
import useProperties from '../../../composables/properties';
import useDevelopers from '../../../composables/developers';
import usePropertyTypes from '../../../composables/propertytypes';
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
                slug:'',
                description:'',
                price:'',
                developer:'',
                address:'',
                area:'',
                city:'',
                type:'',
                category:'',
                lognitude:'',
                latitude:'',
                media:[],
                gallery:[]
            },
            name:"Create Property",
        }
    },
    mounted(){ 
        let ref = this;
        ref.getDevelopers();
        ref.getPropertyTypes();
        ref.getCities();
        ref.FormFields = [
                {
                    label:Language.name,
                    field:"name",
                    class:"form-control",
                    grid:"col-md-12 col-12",
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
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
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
                    label:Language.price,
                    field:"price",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.area,
                    field:"area",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.developer,
                    field:"developer",
                    class:"vue-select1",
                    grid:"col-md-6 col-12",
                    type:"select",
                    isdynamic:true,
                    searchable:true,
                    options:function(){
                            if(this.isdynamic){
                                return ref.developerOptions;            
                            }
                            return [
                                {
                                    text:'Residential',
                                    id:'Residential'
                                },
                                {
                                    text:'Commercial',
                                    id:'Commercial'
                                }
                            ];
                    },
                    placeholder:function(){
                        return "Select "+this.label
                    },
                },
                {
                    label:Language.city,
                    field:"city",
                    class:"vue-select1",
                    grid:"col-md-6 col-12",
                    type:"select",
                    isdynamic:false,
                    searchable:true,
                    options:function(){
                            if(this.isdynamic){
                                return ref.citiesOptions;            
                            }
                            return [
                            
                                {
                                    text:'Islamabad',
                                    id:'Islamabad'
                                },
                                {
                                    text:'Rawalpindi',
                                    id:'Rawalpindi'
                                },
                                {
                                    text:'Gujjar Khan',
                                    id:'Gujjar Khan'
                                },
                                {
                                    text:'Mardan',
                                    id:'Mardan'
                                },
                                {
                                    text:'Peshawar',
                                    id:'Peshawar'
                                },
                                {
                                    text:'Quetta',
                                    id:'Quetta'
                                },
                                {
                                    text:'Karachi',
                                    id:'Karachi'
                                },
                                {
                                    text:'Multan',
                                    id:'Multan'
                                },
                                {
                                    text:'Sialkot',
                                    id:'Sialkot'
                                },
                                {
                                    text:'Lahore',
                                    id:'Lahore'
                                },
                            ]
                    },
                    placeholder:function(){
                        return "Select "+this.label
                    },
                },
                {
                    label:Language.address,
                    field:"address",
                    class:"form-control address",
                    grid:"col-md-12 col-12",
                    type:"map",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.type,
                    field:"type",
                    class:"vue-select1",
                    grid:"col-md-6 col-12",
                    type:"select",
                    isdynamic:true,
                    searchable:true,
                    options:function(){
                            if(this.isdynamic){
                                return ref.typesOptions;            
                            }
                            return [
                                {
                                    text:'Residential',
                                    id:'Residential'
                                },
                                {
                                    text:'Commercial',
                                    id:'Commercial'
                                }
                            ];
                    },
                    placeholder:function(){
                        return "Select "+this.label
                    },
                    
                    required:true,
                },
                {
                    label:Language.category,
                    field:"category",
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
                                    text:'Buy',
                                    id:'Buy'
                                },
                                {
                                    text:'Rent',
                                    id:'Rent'
                                }
                            ];
                    },
                    placeholder:function(){
                        return "Select "+this.label
                    },
                    
                    required:true,
                },
                {
                    label:Language.gallery,
                    field:"gallery",
                    class:"files",
                    grid:"col-md-12 col-12",
                    type:"file",
                    placeholder:function(){
                        return "Upload"+this.label
                    },
                    multiple:true,
                    model:"App/Models/Employee",
                    required:false,
                    fileType:"image/jpeg, image/png"
                },
                
        ]

        // var autocomplete = new google.maps.places.Autocomplete(
        //     document.getElementById("address"),
        // );
    },

    methods:{
        async store(){
            const {storeProperty,errors} = useProperties();
            const {successAlert,errorAlert} = useService();
            this.loader =true;
            console.log(this.FormData);
            await storeProperty(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.property).replace(':action',Language.saved))
                setTimeout(() => {
                    window.location.href = '/admin/properties';
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
        async getDevelopers(){
            const {developers,getDevelopersPublic} = useDevelopers();
            await getDevelopersPublic();
            this.developerOptions = developers.value;
            //console.log(this.developerOptions);
        },
        async getPropertyTypes(){
            const {propertyTypes,getPropertyTypesPublic} = usePropertyTypes();
            await getPropertyTypesPublic();
            this.typesOptions = propertyTypes.value;
            //console.log(this.developerOptions);
        },
        async getCities(){
            const {data,getCitiesByCountry} = useGenerals();
            await getCitiesByCountry();
            this.citiesOptions = data.value;
        },
        setFormData(field,data){
            this.FormData[field] = data; 
            console.log(this.FormData);
        }

   }
}
</script>