<template>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ Language.create_msg(Language.directory) }}</h1>
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
        <form @submit.prevent="update()">
         <div class="row">
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.title }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.title)" :class="'form-control'" name="title"  v-model="form.title" :required="true" >
                    <div v-if="errors['title']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['title']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div>   
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.slug }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.slug)" :class="'form-control'" name="slug"  v-model="form.slug" :required="true" >
                    <div v-if="errors['slug']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['slug']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div> 
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.email }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.email)" :class="'form-control'" name="email"  v-model="form.email" :required="true" >
                    <div v-if="errors['email']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['email']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div> 
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.mobile_no }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.mobile_no)" :class="'form-control'" :name="mobile_no"  v-model="form.mobile_no" :required="true" >
                    <div v-if="errors['mobile_no']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['mobile_no']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div> 
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.phone }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.phone)" :class="'form-control'" name="phone"  v-model="form.phone" :required="true" >
                    <div v-if="errors['phone']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['phone']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div> 
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.address }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.address)" :class="'form-control'" name="address"  v-model="form.address" :required="true" >
                    <div v-if="errors['address']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['address']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div> 
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.web_url }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.web_url)" :class="'form-control'" name="web_url"  v-model="form.web_url" :required="true" >
                    <div v-if="errors['web_url']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['web_url']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div> 
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.facebook_url }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.facebook_url)" :class="'form-control'" name="facebook_url"  v-model="form.facebook_url" :required="true" >
                    <div v-if="errors['facebook_url']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['facebook_url']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div> 
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.youtube_url }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.youtube_url)" :class="'form-control'" name="youtube_url"  v-model="form.youtube_url" :required="true" >
                    <div v-if="errors['youtube_url']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['youtube_url']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.linkedin_url }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.linkedin_url)" :class="'form-control'" name="linkedin_url"  v-model="form.linkedin_url" :required="true" >
                    <div v-if="errors['linkedin_url']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['linkedin_url']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.instagram_url }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.instagram_url)" :class="'form-control'" name="instagram_url"  v-model="form.instagram_url" :required="true" >
                    <div v-if="errors['instagram_url']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['instagram_url']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.venue_url }}</label>
                    <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.venue_url)" :class="'form-control'" name="venue_url"  v-model="form.venue_url" :required="true" >
                    <div v-if="errors['venue_url']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['venue_url']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.user }}</label>
                    <Select2  class=""
                        :options="users" v-model="form.user_id" :placeholder="Language.placholder_msg(Language.user)">
                    </Select2>

                    <div v-if="errors['user_id']">
                    <ul>
                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['user_id']" :key="index">{{ error }}</li>
                    </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-6 col-md-6 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.is_approved  }}</label>
                    <Select2  class="vue-select1"
                        :options="approvedOptions" v-model="form.is_approved" :placeholder="Language.placholder_msg(Language.is_approved)">
                    </Select2>
                    <div v-if="errors['description']">
                        <ul>
                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['description']" :key="index">{{ error }}</li>
                        </ul>
                    </div>
                    </div>
            </div>
            <div class="col-12 col-md-12 col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">{{ Language.description }}</label>
                    <ckeditor :editor="editor"   :placeholder="Language.placholder_msg(Language.description)"  v-model="form.description" :config="editorConfig" placeholder="Enter Honor Code"></ckeditor>

                    <div v-if="errors['description']">
                    <ul>
                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['description']" :key="index">{{ error }}</li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-12 mb-3">
                <div class="form-group">
                        <label class="form-label">{{ Language.categories }}</label>
                        <div :class="'box-container '">
                            <input type="text" :id="index"  :placeholder="Language.placholder_msg(Language.category)" :class="'form-control search_multi'" name="search"  v-model="searchMulti">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" v-model="selectAll" id="flexCheckDefault" @click="selectAllMultiSelect('cateory_ids',categories)">
                                <label class="form-check-label font-weight-bold" for="flexCheckDefault">
                                    {{ Language.select_all }}
                                </label>
                                </div>
                            <div class="form-check " v-for="(option,keyOption) in categories" :key="option.id">
                            <input class="form-check-input" type="checkbox" v-model="form.category_ids" :id="option.id" :value="option.id" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{ option.text }}
                            </label>
                        </div>
                        </div>
                        
                        
            </div>
            <div class="col-12 col-12 mb-3">
                <div class="form-group">
                <label class="form-label">{{ Language.image }}</label>
                <file-pond
                    :name=Language.image
                    ref="pond"
                    class-name="my-pond"
                    label-idle="Drop files here..."
                    :allow-multiple=true
                    accepted-file-types="image/jpeg, image/png"
                    max-files="1"
                    :server=fileServer()
                    :files="form.gallery"

                />

                <div v-if="errors['media']">
                  <ul>
                      <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['media']" :key="index">{{ error }}</li>
                  </ul>
                </div>
            </div>
            </div>
            </div>
         </div>
         <div class="row mb-1 ">
                <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-secondary ">
                                        {{ name.toUpperCase() }}
                    </button>
                </div>
            </div>
        </form>
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
import useCategories from '../../../composables/categories';
import CKEditor from '@ckeditor/ckeditor5-vue';

import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import Select2 from 'vue3-select2-component';
import vueFilePond from 'vue-filepond';
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";
import 'filepond/dist/filepond.min.css';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css';
// import VueGoogleAutocomplete from "vue-google-autocomplete";
const FilePond = vueFilePond(FilePondPluginFileValidateType, FilePondPluginImagePreview);
import useGenerals from '../../../composables/general';

export default {
components:{
    ckeditor: CKEditor.component,
        Select2,
        FilePond,
},
props:['id'],
data(){
    return {
        Language:Language,
        loader:false,
        errors:{},
        FormFields:[],
        users:[],
        editor: ClassicEditor,
            editorConfig:[],
        approvedOptions:[
                {
                    text:Language.yes,
                    id:1
                },
                {
                    text:Language.no,
                    id:0
                }
            ],
        categories:[],
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
                category_ids:0,
                media:[],
                gallery:[]
        },
        name:"Update Directory",
        selectAll:false,
            searchMulti:'',
            fileServer:function(){},
    }
},
mounted(){
    let ref = this;

    ref.getAllUsers();
    ref.getAllCategories();

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
                    label:Language.category,
                    field:"category_ids",
                    class:"vue-select1",
                    grid:"col-md-6 col-12",
                    type:"multi_select",
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
        ref.fileServer = function(){
            return {
                            process : async (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                const { uploadMedia } = useGenerals();
                                const formData = new FormData();
                                formData.append('files', file, file.name);
                                formData.append('model', `App\\Models\\Directory`);
                                formData.append('id',ref.id)

                                await uploadMedia(formData,{
                                    onUploadProgress : (e) => {
                                        progress(e.lengthComputable, e.loaded, e.total);
                                    }
                                }).then((response) =>{
                                    load(response.data);
                                    ref.form.media.push(response.data);
                                }).catch((e) => {
                                    error(e.message);
                                })


                                return {
                                    abort: () => {
                                        abort();
                                    },
                                };

                            },
                            revert: async (uniqueFileId, load, error) => {
                                const { deletMedia } = useGenerals();
                                console.log(uniqueFileId)
                                await deletMedia(uniqueFileId).then((response) =>{
                                    load(response.data);
                                    ref.form.media.splice(uniqueFileId,1);
                                }).catch((e) => {
                                    error(e.message);
                                })



                                load();
                            },


                        }

        }
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
            this.form.categories =record.value.categories;
            this.form.description = record.value.description?record.value.description:"";
            let data = []
            let ref = this;
            // record.value.category_ids.map(cat => {
            //     ref.category_ids.push(cat.id)
            // })
            this.form.category_ids = record.value.category_ids?record.value.category_ids:[];
            this.form.gallery = record.value.media;
        
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
            const {records,getAllPublic} = useCategories();
            await getAllPublic(this.searchMulti);
            this.categories = records.value;

    },
    selectAllMultiSelect(field,options){
            console.log(this.selectAll);
            if(!this.selectAll){
                console.log(field,options);
                let ref = this;
                options.map(op => {
                    ref.FormData[field].push(op.id)
               })
            }     
            else 
            ref.FormData[field] = [] 

        },


},
watch:{
        'searchMulti':function(){
            let ref = this
            setInterval(() =>{
                ref.getAllCategories();
            },2000)
        }
   }
}
</script>
