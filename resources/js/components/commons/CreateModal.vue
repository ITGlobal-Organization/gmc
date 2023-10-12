<template>
    <div :class="showModal?'modal fade bd-example-modal-lg show':'modal fade bd-example-modal-lg'" id="createModal" :style="showModal?'display:block':'display:none'" tabindex="-1" role="dialog" aria-labelledby="createModalTitle" aria-hidden="true">
        <form @submit.prevent="handleSubmit">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ formTitle }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="setShowModal(false)">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body image-modal">
                    <div class="row" v-if="formFields.length>0">
                        <div v-for="(fields,index) in formFields" :key="index">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label class="required" :for="fields.name">{{ fields.label}}</label>
                                    <div v-if="TextTypes.includes(fields.type)">
                                        <input  :type="fields.type" :placeholder="fields.placeholder" :class="errors[fields.name]?'form-control is-invalid':'form-control'" :id="fields.name" :name="fields.name" v-model="form[fields.name]"/>
                                        <div v-if="errors[fields.name]">
                                            <ul>
                                                <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[fields.name]" :key="index">{{ error }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div v-if="fields.type == 'checkbox'">
                                        <input :type="fields.type" :id="fields.name" :name="fields.name" v-model="form[fields.name]" :checked="form[fields.name]" value="1" />
                                    </div>
                                    <div v-if="fields.type == 'file' &&  Array.isArray(form[fields.name])">
                                        <input  :type="fields.type" :data-id="fields.name" :id="fields.name" class="files" multiple/>
                                        <div v-if="errors[fields.name]">
                                            <ul>
                                                <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[fields.name]" :key="index">{{ error }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div v-if="fields.type == 'file' &&  !Array.isArray(form[fields.name])">
                                        <input  :type="fields.type" :data-id="fields.name" :id="fields.name" class="files"  />
                                        <div v-if="errors[fields.name]">
                                            <ul>
                                                <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[fields.name]" :key="index">{{ error }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div v-if="fields.type == 'select'">
                                        <select :id="fields.name" :class="errors[fields.name]?'custom-select is-invalid':'custom-select'">
                                            <option value="">{{ Language.select_msg }}</option>
                                            <option v-for="(option,key) in fields.options" :key="key" :value="option.value">{{ option.label }}</option>
                                        </select>
                                        <div v-if="errors[fields.name]">
                                            <ul>
                                                <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[fields.name]" :key="index">{{ error }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-else>
                        <skeleton-text effect="fade" :size="120" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">
                        <div class="spinner-border text-light form-loader" role="status" v-if="loader">
                            <span class="sr-only">Loading...</span>
                        </div>{{ Language.save }}
                    </button>
                    <button type="button" class="btn btn-light" data-dismiss="modal" @click="setShowModal(false)">{{ Language.close }}</button>

                </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script>
import { Language } from '../../helpers/lang/lang';
import { SkeletonAvatar, SkeletonText } from '@skeleton-elements/vue';
// Import FilePond
import vueFilePond from 'vue-filepond';
import * as FilePond from 'filepond';
import FilePondPluginFileEncode from 'filepond-plugin-file-encode';

    // Import plugins
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";

FilePond.registerPlugin(
  FilePondPluginFileValidateType,
  FilePondPluginFileEncode,
//   FilePondPluginImageExifOrientation,
  FilePondPluginImagePreview,
//   FilePondPluginImageCrop,
//   FilePondPluginImageResize,
//   FilePondPluginImageTransform,
//   FilePondPluginImageEdit
);

    // Create FilePond component
    // const FilePond = vueFilePond(FilePondPluginFileValidateType, FilePondPluginImagePreview);
export default {
    components: {
      SkeletonAvatar,
      SkeletonText,

    },
    props:{
        heading:String,
        formFields:Array,
        form:Object,
        formSubmit:Function,
        showModal:Boolean,
        setShowModal:Function,
        errors:Object,
        loader:Boolean,
        formTitle:String,
    },
    data(){
        return {
            Language:Language,
            TextTypes:['text','email','password','tel'],
            file: [],

        }
    },
    mounted(){
        const file_input = document.getElementsByClassName('files');

        let ref = this;
        // console.log(ref.form, "===form====");
        for(var i=0;i<file_input.length;i++){
             var name = file_input[i].getAttribute('data-id');
            if(ref.form[name] != ''){
                this.file.push(
                    FilePond.create(file_input[i],{
                        files:[
                            {
                                source:'/'+ref.form[name]
                            }
                        ]
                    })
                )
            }else{
                this.file.push(
                    FilePond.create(file_input[i])
                );
            }
        }

    },
    methods:{
        handleSubmit(){
            console.log( this.file[0].getFiles().length)
            if(Array.isArray(this.form['image'])){
            console.log("drthsasf")
                let ref = this
                // console.log(this.file);
                this.file[0].getFiles().map((file) => {
                    ref.form['image'].push(file.getFileEncodeDataURL())
                })

                this.file[1].getFiles().map((file) => {
                    ref.form['logo'].push(file.getFileEncodeDataURL())
                })
            }else{

                if(this.file[0].getFiles().length != 0){
                    this.form['image'] = this.file[0].getFiles()[0].getFileEncodeDataURL();
                }
                if(this.file[0].getFiles().length != 0){
                    this.form['logo'] = this.file[1].getFiles()[0].getFileEncodeDataURL();
                }

            }

            this.formSubmit();
        }

    }
}
</script>
