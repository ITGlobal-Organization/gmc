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

                        v-bind:files="data[field.field]"

                    />

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
                <div class="form-group" v-else>
                    <label class="form-label">{{ field.label }}</label>
                    <input :type="field.type" id="field.field"  :placeholder="field.placeholder()" :class="field.class" :name="field.field"  v-model="data[field.field]" :required="field.required" >
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
        // VueGoogleAutocomplete

    },
    data(){
        return {
            Language:Language,
            editor: ClassicEditor,
            editorConfig:[],
            files:[],
            fileTag:null,
            autocomplet:null,
            fileServer:{}
        }
    },
    mounted(){
        let ref = this
        this.fileServer = function(model){
            return {
                            process : async (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                const { uploadMedia } = useGenerals();
                                const formData = new FormData();
                                formData.append(fieldName, file, file.name);
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
        store(){
            this.action();
        },
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
