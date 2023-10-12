<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg(Lang.product) }}</h1>
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
                <form @submit.prevent="store()">
                    <div class="row">
                        <div class="col-12 col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.name }}</label>
                                <input type="text" id="name"  :placeholder="Lang.placholder_msg(Lang.name)" class="form-control" name="name"  v-model="FormData.name" required="true" >
                                <div v-if="errors['name']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['name']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.slug }}</label>
                                <input type="text" id="slug"  :placeholder="Lang.placholder_msg(Lang.slug)" class="form-control" name="slug"  v-model="FormData.slug" required="true" >
                                <div v-if="errors['slug']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['slug']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.type }}</label>
                                <Select2  class="vue-select1"
                                    :options="types" v-model="FormData['type']" :placeholder="Lang.placholder_msg(Lang.type)">
                                </Select2>
                                <div v-if="errors['type']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['type']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.description }}</label>
                                <ckeditor :editor="editor"   :placeholder="Lang.placholder_msg(Lang.slug)"   v-model="FormData.description" :config="editorConfig"></ckeditor>
                                <div v-if="errors['description']">
                                <ul>
                                    <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['description']" :key="index">{{ error }}</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.category }}</label>
                                <Select2  class="vue-select1"
                                    :options="categories" v-model="FormData['category_id']" :placeholder="Lang.placholder_msg(Lang.category)">
                                </Select2>

                                <div v-if="errors['category_id']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['category_id']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.status }}</label>
                                <Select2  class="vue-select1"
                                    :options="Statuses" v-model="FormData['is_active']" :placeholder="Lang.placholder_msg(Lang.status)">
                                </Select2>

                                <div v-if="errors['is_active']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['is_active']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3 d-flex border" v-for="(size,keyIndex) in FormData.sizes" :key="keyIndex">

                            <div class="col-3 col-md-3 pl-0">
                                <div class="form-group">
                                    <label class="form-label">{{ Lang.size }}</label>
                                    <Select2  class="vue-select1"
                                        :options="sizes" v-model="size['size_id']" :placeholder="Lang.placholder_msg(Lang.size)">
                                    </Select2>
                                    <div v-if="errors['sizes.'+keyIndex+'.size_id']">
                                        <ul>
                                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['sizes.'+keyIndex+'.size_id']" :key="index">{{ error }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3 col-md-3 pl-0">
                                <div class="form-group">
                                    <label class="form-label">{{ Lang.price }}</label>
                                    <input type="text" id="slug"  :placeholder="Lang.placholder_msg(Lang.price)" class="form-control" name="slug"  v-model="size['price']" :required="true" >
                                    <div v-if="errors['sizes.'+keyIndex+'.price']">
                                        <ul>
                                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['sizes.'+keyIndex+'.price']" :key="index">{{ error }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 col-md-3 pl-0">
                                <div class="form-group">
                                    <label class="form-label">{{ Lang.discounted_price }}</label>
                                    <input type="text" id="discounted_price"  :placeholder="Lang.placholder_msg(Lang.discounted_price)" class="form-control" name="discounted_price"  v-model="size['discounted_price']" :required="false" >
                                    <div v-if="errors['sizes.'+keyIndex+'.discounted_price']">
                                        <ul>
                                            <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['sizes.'+keyIndex+'.dicounted_price']" :key="index">{{ error }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 col-md-3" v-if="keyIndex > 0" style="margin-top: 32px;">
                                 <button class="btn btn-danger" @click="deleteSizeRow(keyIndex)">{{ Lang.delete }}</button>
                            </div>


                        </div>
                        <div class="col-12 col-md-12 mb-3 d-flex justify-content-end">
                                 <button type="button" class="btn btn-secondary" @click="addMoreSizes()">{{ Lang.add_more }}</button>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <file-pond
                                :name=Lang.gallery
                                ref="pond"
                                class-name="my-pond"
                                label-idle="Drop images here..."
                                :allow-multiple=true
                                accepted-file-types="image/jpeg, image/png"
                                :max-files="10"
                                :server=fileServer()

                                v-bind:files="FormData.gallery"

                            />
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
import useProducts from '../../../composables/products';
import useCategories from '../../../composables/categories';
import useSizes from '../../../composables/sizes';
import useService  from '../../../services/index';
import useGenerals from '../../../composables/general';
import CKEditor from '@ckeditor/ckeditor5-vue';

import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import Select2 from 'vue3-select2-component';
import vueFilePond from 'vue-filepond';
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";
const FilePond = vueFilePond(FilePondPluginFileValidateType, FilePondPluginImagePreview);
import { axiosWrapper } from '../../../helpers';
import { watch } from 'vue';

export default {
    components:{
        ckeditor: CKEditor.component,
        Select2,
        FilePond
    },
    data(){
        return {
            Lang:Language,
            loader:false,
            id:0,
            errors:{},
            FormFields:[],
            editor: ClassicEditor,
            editorConfig:[],
            categories:[],
            sizes:[],
            types:[
                {
                    id:1,
                    text:Language.custom_products
                },
                {
                    id:2,
                    text:Language.custom_patches
                }
            ],
            FormData:{
                name:'',
                slug:'',
                is_active:1,
                description:'',
                type:0,
                sizes:[
                        {
                            size_id:0,
                            price:0,
                            discounted_price:0
                        }
                    ],
                category_id:0,
                product_type_id:1, // Has to change after working on that feature
                media:[],
                gallery:[]
            },
            Statuses:[
                {
                    id:1,
                    text:Language.active
                },
                {
                    id:0,
                    text:Language.inactive
                }
            ],
            name:"Create Product",
            fileServer:function(){}
        }
    },
    mounted(){
        let ref = this;
        ref.getCategories();
        ref.getSizes();
        this.fileServer = function(){
            return {
                            process : async (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                const { uploadMedia } = useGenerals();
                                const formData = new FormData();
                                formData.append(fieldName, file, file.name);
                                formData.append('model', `App\\Models\\Product`);
                                formData.append('id',ref.id)

                                await uploadMedia(formData,{
                                    onUploadProgress : (e) => {
                                        progress(e.lengthComputable, e.loaded, e.total);
                                    }
                                }).then((response) =>{

                                    load(response.data);
                                    ref.FormData.media.push(response.data);
                                }).catch((e) => {
                                    console.log(e)
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
                                    ref.data.media.splice(uniqueFileId,1);
                                }).catch((e) => {
                                    error(e.message);
                                })



                                load();
                            },


                        }

        }
    },

    methods:{
        async store(){
            const {store,errors} = useProducts();
            const {successAlert,errorAlert} = useService();

            this.loader =true;
            let ref = this;
            await store(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.product).replace(':action',Language.saved))
                setTimeout(() => {
                    ref.$router.push('/admin/products')
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

        setFormData(field,data){
            this.FormData[field] = data;
            console.log(this.FormData);
        },
        async getCategories(){
            const {records,getAllPublic} = useCategories();
            await getAllPublic();
            this.categories = records.value;
        },
        async getSizes(){
            const {records,getAllPublic} = useSizes();
            await getAllPublic();
            this.sizes = records.value;
        },
        addMoreSizes(){
            let ref = this;
            ref.FormData.sizes.push({
                size_id:0,
                price:0,

            })
        },

        deleteSizeRow(i){
            let ref = this;
            ref.FormData.sizes.splice(i,1);
        }


   },
   watch:{
        'FormData.name':function(){
            this.FormData.slug = this.FormData.name.replace(' ','-').toLowerCase();
        }
   }
}
</script>
