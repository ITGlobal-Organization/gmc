<template>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.edit_msg.replace(':attribute',Lang.blog) }}</h1>
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
import useBlogs from '../../../composables/blogs';
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
            name:'',
                slug:'',
                description:'',
                published_by:'',
                written_by:'',
                published_at:'',    
                media:[],
                gallery:[]
        },
        name:"Update Blog",
    }
},
mounted(){
    let ref = this;
    
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
                    label:Language.written_by,
                    field:"written_by",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.published_at,
                    field:"published_at",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"date",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.thumbnail_image,
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
                                request.open('POST', '/admin/blogs/media/store');

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
                            load();
                        }
                    },
                    required:false,
                    fileType:"image/jpeg, image/png"
                },
                
        ]
},
methods:{
    async update(){
        const {update,errors} = useBlogs();
        const {successAlert,errorAlert} = useService();
        this.loader =true;
        
        await update(this.id,this.form).then(async (response) => {
            successAlert(Language.success_msg.replace(':attribute',Language.blog).replace(':action',Language.updated))
            setTimeout(() => {
                window.location.href = '/admin/blogs';
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
            const {blog,getBlog} = useBlogs();
            
            await getBlog(this.id);
            
            this.form.name = blog.value.name;
            this.form.slug = blog.value.slug;
            this.form.written_by = blog.value.written_by;
            this.form.published_at = blog.value.published_at;
            this.form.published_by = blog.value.published_by;
            this.form.description = blog.value.description?blog.value.description:"";
           
            this.form.gallery = blog.value.media;
            let data = []
            let ref = this;
            data = this.form.gallery.map(gall => {
                return gall.image_url;
            }) 
            console.log(data);
            this.form.gallery = data;
            blog.value.media.filter(gallery => {
                ref.form.media.push(gallery.id);
            }) 
    },


}
}
</script>