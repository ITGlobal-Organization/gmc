<template>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.edit_msg.replace(':attribute',Lang.property) }}</h1>
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
import useProperties from '../../../composables/properties';
import useService  from '../../../services/index';
import useGenerals from '../../../composables/general';
import useDevelopers from '../../../composables/developers';
import usePropertyTypes from '../../../composables/propertytypes';

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
            gallery:[],
        },
        name:"Update Property",
    }
},
mounted(){
    let ref = this;
    ref.getDevelopers();
    ref.getPropertyTypes();
    ref.getCities();
    ref.edit();
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
                            ];
                    },
                    placeholder:function(){
                        return "Select "+this.label
                    },
                },
                {
                    label:Language.address,
                    field:"address",
                    class:"form-control",
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
                    server:{
                        process : (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                            if(ref.id == 0){
                                const formData = new FormData();
                                formData.append(fieldName, file, file.name);
                                
                                const request = new XMLHttpRequest();
                                request.open('POST', '/admin/properties/media/store');

                                request.upload.onprogress = (e) => {
                                    progress(e.lengthComputable, e.loaded, e.total);
                                };

                    
                                let data = [];
                                request.onload = function () {
                                    if (request.status >= 200 && request.status < 300) {
                                        // the load method accepts either a string (id) or an object
                                        load(request.responseText);
                                        
                                        //data.push(request.response);
                                        ref.form.media.push(request.response);
                                        
                                    } else {
                                        // Can call the error method if something is wrong, should exit after
                                        error('oh no');
                                    }
                                };

                                request.send(formData);

                                // Should expose an abort method so the request can be cancelled
                                return {
                                    abort: () => {
                                        // This function is entered if the user has tapped the cancel button
                                        request.abort();

                                        // Let FilePond know the request has been cancelled
                                        abort();
                                    },
                                };
                            }else{
                                load(Date.now());
                            }
                            
                            
                        },
                        revert: (uniqueFileId, load, error) => {
                            const formData = new FormData();
                            
                            //formData.append(fieldName, file, file.name);
                            console.log(uniqueFileId)
                            const request = new XMLHttpRequest();
                            request.open('DELETE', '/admin/properties/media/delete/'+uniqueFileId);

                            request.onload = function () {
                                if (request.status >= 200 && request.status < 300) {
                                    // the load method accepts either a string (id) or an object
                                    load(request.responseText);
                                    ref.FormData.media.splice(uniqueFileId,1);
                                } else {
                                    // Can call the error method if something is wrong, should exit after
                                    error('oh no');
                                }
                            };

                            request.send(formData);
                            load();
                        },
                        //store:"/admin/properties/media/store",
                    },
                    required:false,
                    fileType:"image/jpeg, image/png"
                },
                
        ]
},
methods:{
    async update(){
        const {update,errors} = useProperties();
        const {successAlert,errorAlert} = useService();
        this.loader =true;
        
        await update(this.id,this.form).then(async (response) => {
            successAlert(Language.success_msg.replace(':attribute',Language.property).replace(':action',Language.updated))
            setTimeout(() => {
                window.location.href = '/admin/properties';
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
            const {property,getProperty} = useProperties();
            
            await getProperty(this.id);
            
            this.form.name = property.value.name;
            this.form.slug = property.value.slug;
            this.form.developer = property.value.developer;
            this.form.address = property.value.address;
            this.form.price = property.value.price;
            this.form.description = property.value.description?property.value.description:"";
            this.form.address = property.value.address;      
            this.form.area = property.value.area;
            this.form.city = property.value.city;      
            this.form.category = property.value.category; 
            this.form.type = property.value.type;
            this.form.gallery = property.value.media;
            let data = []
            let ref = this;
            data = this.form.gallery.map(gall => {
                return gall.image_url;
            }) 
            console.log(data);
            this.form.gallery = data;
            property.value.media.filter(gallery => {
                ref.form.media.push(gallery.id);
            }) 
    },
    async getData(){
            const {data,get} = useGenerals();
            await get(`/admin/layouts/select`);
            this.options = data.value;   
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
            console.log(this.citiesOptions);
    },

}
}
</script>