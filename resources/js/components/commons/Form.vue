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
                    <file-pond
                        :name=field.label
                        ref="pond"
                        class-name="my-pond"
                        label-idle="Drop files here..."
                        :allow-multiple=field.multiple
                        :accepted-file-types=field.fileType
                        :max-files="field.maxFiles"
                        :server=fileServer(field.model)

                        v-bind:files="galleryImages"

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
    <div v-if="showModal" id="myModal" class="modal-overlay">
                    <div class="modal-contents">
                        <span class="modal-close" @click="showModal = false">&times;</span>
                        <button class="add-image-btn" @click="this.filesever">Add Image</button>
                        <div class="gallery">
                            <div v-for="galleryImage in galleryImages" :key="galleryImage.id" class="gallery-item">
                                <img
                                :src="galleryImage.image_url ? galleryImage.image_url : '/media/image-not-found.png'"
                                :alt="`Image ${galleryImage.id}`"
                                :data-id="galleryImage.id"
                                :class="{'highlighted': selectedImage.id === galleryImage.id}"
                                @click="selectImage(galleryImage.id,galleryImage.image_url)"
                                class="gallery-img"
                                />
                            </div>
                        </div>
                    </div>
                </div>
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
        Datepicker
        // VueGoogleAutocomplete

    },
    data(){
        return {
            showModal: false,
            galleryImages: [],
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
        }
    },
    mounted(){
        let ref = this;
        this.fetchGalleryImages();
        this.fileServer = function(model){
            return {
                            process : async (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                const { uploadMedia } = useGenerals();
                                const formData = new FormData();
                                formData.append('files', file, file.name);
                                formData.append('model', model);
                                formData.append('id',ref.id)

                                await uploadMedia(formData,{
                                    onUploadProgress : (e) => {
                                        progress(e.lengthComputable, e.loaded, e.total);
                                    }
                                }).then((response) =>{
                                    load(response.data);
                                    ref.data.media.push(response.data);
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
        },
        async fetchGalleryImages(){
            const {records,getAllImages} = useUsers();
            await getAllImages();
            this.galleryImages = records.value;
        },
        selectImage(imageId,imgSrc) {
            this.selectedImage ={
                id:imageId,
                src:imgSrc,
            }
            console.log("src",imgSrc)
            this.galleryImages.push(imgSrc);
            this.showModal=false;
            console.log("abc",this.data)
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
<style scoped>
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9);
}

.modal-contents {
    position: fixed;
    top: 50% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;
    width: 80%;
    max-width: 700px;
    background-color: #fefefe;
    padding: 20px;
    border-radius: 8px;
    overflow-y: auto; /* Enable vertical scrollbar */
    max-height: 80%; /* Adjust maximum height */
}


/* Image gallery styles */
.gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px; /* Adjust top margin to separate from close button */
}

.gallery-item {
    margin: 10px;
    cursor: pointer;
    flex: 0 0 calc(33.33% - 20px); /* Three items per row with margins */
    max-width: calc(33.33% - 20px); /* Three items per row with margins */
}

.gallery-item img {
    width: 100%;
    height: auto;
}

.gallery-item.active {
    border: 2px solid red; /* Change border color to red */
}

.add-image-btn {
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 1; /* Ensure it's above the modal contents */
    padding: 8px 16px;
    background-color: #4CAF50; /* Green */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.add-image-btn:hover {
    background-color: #45a049; /* Darker green */
}
.modal-close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    color: #888;
    cursor: pointer;
    font-family: Arial, sans-serif; /* Specify a common font */
}


/* .uploader-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
} */

/* Input field for selecting images */
.file-input {
    display: block;
    margin-bottom: 10px;
}

/* Style for the upload button */
.upload-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.upload-button:hover {
    background-color: #0056b3;
}

/* Preview area for the selected images */
.image-preview {
    /* margin-top: 20px; */
}

.image-preview-item {
    display: inline-block;
    position: relative;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

.image-preview-item img {
    width: 150px;
    height: 150px;
    border-radius: 5px;
}
.close-thumbnail{
    position: absolute;
}
/*
.close-button {
    position: absolute;
    top: 5px;
    right: 5px;
    background-color: rgba(255, 255, 255, 0.5);
    border: none;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    cursor: pointer;
} */
.gallery-img.highlighted {
  border: 2px solid blue;
}

</style>
