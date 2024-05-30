<template>
    <form @submit.prevent="store()">

        <div class="row">
            <div v-for="(field,index) in fields" :key="index" :class="field.grid+' mb-3'">
                <div class="form-group" v-if="field.type == 'checkbox'">

                    <input :type="field.type" :class="field.class" :name="field.field" v-model="data[field.field]" :required="field.required" :checked="data[field.field]?true:false">
                    <label class="pl-3">{{ field.label }}</label>
                    <div v-if="errors[field.field]">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[field.field]" :key="index">{{ error }}</li>
                      </ul>
                    </div>
                </div>

                <div class="form-group" v-else-if="field.type == 'textarea'">
                    <label class="form-label">{{ field.label }}</label>
                    <ckeditor :editor="editor"   :placeholder="field.placeholder()"  v-model="data[field.field]" :config="editorConfig" placeholder="Enter Honor Code"></ckeditor>
                    <div v-if="errors[field.field]">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[field.field]" :key="index">{{ error }}</li>
                      </ul>
                    </div>
                </div>

                <div class="form-group" v-else-if="field.type == 'select'">
                    <label class="form-label">{{ field.label }}</label>
                    <Select2  :class="class"
                        :options="field.options()" v-model="data[field.field]" :placeholder="field.placeholder()">
                    </Select2>

                    <div v-if="errors[field.field]">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[field.field]" :key="index">{{ error }}</li>
                      </ul>
                    </div>
                </div>
                <div class="form-group" v-else-if="field.type == 'file'">
                    <label class="form-label">{{ field.label }}</label>
                    <file-pond v-if="field.render"
                        :name=field.label
                      
                        ref="pond"
                        class-name="my-pond"
                        label-idle="Drop files here..."
                        :allow-multiple=field.multiple
                        :accepted-file-types=field.fileType
                        :max-files="field.maxFiles"
                        :server=fileServer(field.model,field.imageType)

                        v-bind:files="data[field.field]"

                    />
                    <a href="#" class="gallery-link"  @click="showField(field)">Select from gallery:</a>

                    <div v-if="errors[field.field]">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[field.field]" :key="index">{{ error }}</li>
                      </ul>
                    </div>
                </div>
                <div class="form-group" v-else-if="field.type == 'map'">
                    <label class="form-label">{{ field.label }}</label>
                    <vue-google-autocomplete :id="field.field" :placeholder="field.placeholder()" :classname="field.class" ref="address" v-model="data[field.field]"  :country="['pk']"  v-on:placechanged="getLognitudeLatitude">
                    </vue-google-autocomplete>
                    <div v-if="errors[field.field]">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[field.field]" :key="index">{{ error }}</li>
                      </ul>
                    </div>
                </div>
                <div class="form-group" v-else-if="field.type == 'date'">

                    <label class="form-label">{{ field.label}}</label>
                                <Datepicker v-model="data[field.field]" :class="errors[field.field]?'is-invalid ':''" autoApply :enableTimePicker="false" menuClassName="dp-custom-date" :placeholder="field.placeholder()" />
                                <!-- <input type="text" id="order_date"  :placeholder="Lang.placholder_msg(Lang.order_date)" class="form-control" name="order_date"  v-model="FormData.order_date" required="true" > -->
                                <div v-if="errors[field.field]">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[field.field]" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                </div>
                 <div class="form-group" v-else-if="field.type == 'multi_select'">
                            <label class="form-label">{{ field.label}}</label>
                            <div :class="'box-container ' + field.class">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" v-model="selectAll" id="flexCheckDefault" @click="selectAllMultiSelect(field.field,field.options())">
                                    <label class="form-check-label font-weight-bold" for="flexCheckDefault">
                                        {{ Language.select_all }}
                                    </label>
                                    </div>
                                <div class="form-check " v-for="(option,keyOption) in field.options()" :key="option.id">
                                <input class="form-check-input" type="checkbox" v-model="data[field.field]" :id="option.id" :value="option.id" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ option.text }}
                                </label>
                            </div>
                            </div>


                </div>
                <div class="form-group" v-else>
                    <label class="form-label">{{ field.label }}</label>
                    <input :type="field.type" :id="index"  :placeholder="field.placeholder()" :class="field.class" :name="field.field"  v-model="data[field.field]" :required="field.required" >
                    <div v-if="errors[field.field]">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[field.field]" :key="index">{{ error }}</li>
                      </ul>
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
      
                <ModalV2 :isShowModal="showModal" :images="galleryImages" :getImage="selectImage" :setShowModal="setShowModal"/>
</template>
<script>
import {Language} from '../../helpers/lang/lang';
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
import useGenerals from '../../composables/general';
import { axiosWrapper } from '../../helpers';
import Datepicker from '@vuepic/vue-datepicker';
import useUsers from '../../composables/users';
import ModalV2 from './ModalV2.vue';
export default {
    props:{
        fields:Array,
        data:Object,
        action:Function,
        name:String,
        class:String,
        errors:Object,
        id:Number,
    },
    components:{
        ckeditor: CKEditor.component,
        Select2,
        FilePond,
        Datepicker,
        ModalV2
        // VueGoogleAutocomplete

    },
    data(){
        return {
            showModal: false,
            galleryImages: [],
            testImages:[],
            selectedImage:{},
            Language:Language,
            editor: ClassicEditor,
            editorConfig:[],
            files:[],
            fileTag:null,
            autocomplet:null,
            fileServer:{},
            selectAll:false,
            selectedImagefor:null,
            render:true,
            pondInstance: null // Hold the FilePond instance here
        }
    },
    mounted(){
        let ref = this;
        this.fetchGalleryImages();
        this.fileServer = function(model,type="main"){
            return {
                            process : async (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                const { uploadMedia } = useGenerals();
                                const formData = new FormData();
                                formData.append('files', file, file.name);
                                formData.append('model', model);
                                formData.append('id',ref.id)
                                formData.append('img_type',type)
                                formData.append('image_id',ref.selectedImage.id?ref.selectedImage.id:0)

                                await uploadMedia(formData,{
                                    onUploadProgress : (e) => {
                                        progress(e.lengthComputable, e.loaded, e.total);
                                    }
                                }).then((response) =>{
                                    load(response.data);
                                    console.log(response)
                                    ref.data.media.push(response.data);
                                }).catch((e) => {
                                    error(e.message);
                                })

                                ref.selectedImage = {};
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
        async showField(field){
            this.showModal = true,
            this.selectedImagefor = field
            this.selectedImagefor.render = false
        },
        async fetchGalleryImages(){
            const {records,getAllImages} = useUsers();
            await getAllImages();
            this.galleryImages = records.value;
        },
        async selectImage(imageId,imgSrc) {
        
            this.selectedImage ={
                id:imageId,
                src:imgSrc,
            }
            // console.log("src",this.$refs.pond)
            await this.data[this.selectedImagefor.field].push(imgSrc);
            // const filePond = this.$refs.pond.$el._pond;
            // this.fileServer(this.data[this.selectedImagefor.model])
            // this.updatePondFiles(imgSrc);
            
            //filePond.setFiles(imgSrc);
            this.showModal=false
            this.selectedImagefor.render = true
            // console.log("abc",this.data)
            
        },
        store(){
            this.action();
        },
       
       
        selectAllMultiSelect(field,options){
            console.log(this.selectAll);
            if(!this.selectAll){
                console.log(field,options);
                let ref = this;
                options.map(op => {
                    ref.data[field].push(op.id)
               })
            }
            else
                this.data[field] = []

        },
        setShowModal(modal){
            this.showModal = modal;
            // alert(modal)
            if(this.showModal ==false){
                this.render = true
            }
        }
        // getLognitudeLatitude(addressData, placeResultData, id){
        //     if('lognitude' in this.data && 'latitude' in this.data){
        //         this.data.lognitude = placeResultData.geometry.location.lng();
        //         this.data.latitude = placeResultData.geometry.location.lat();

        //         this.data.address = placeResultData.formatted_address
        //     }

        // }


    }

}
</script>

