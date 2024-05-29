<template>

    <div :class="isShowModal?'modal fade show ':'modal fade'" :style="isShowModal?'display:block':''" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
         <transition name="modal" v-on:before-enter="beforeEnter"
                v-on:enter="enter">
             <div v-if="isShowModal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ Language.gallery }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="setShowModal(false)">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div> 
                        <div class="modal-body company-body">

                            <div class="row">
                                <!-- <div class="close-button">
                                    <button class="close-btn"><img src="/images/cross-modal.png" alt=""
                                            class="img-fluid" @click="setShowModal(false)"></button>
                                </div> -->
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="gallery">
                                        <div v-for="galleryImage in images" :key="galleryImage.id" class="gallery-item">
                                            <img
                                            :src="galleryImage.image_url ? galleryImage.image_url : '/media/image-not-found.png'"
                                            :alt="`Image ${galleryImage.image_name}`"
                                            :data-id="galleryImage.id"
                                            :class="{'highlighted': seletedImage.id === galleryImage.id}"
                                            @click="selectImage(galleryImage.id,galleryImage.image_url)"
                                            class="gallery-img"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </transition>


    </div>

</template>
<script>
import { error } from 'jquery';
import { Language } from '../../helpers/lang/lang'
export default {
    props:{
        setShowModal:Function,
        isShowModal:Boolean,
        images:Array,
        getImage:Function

    },
    data(){
        return {
            Language:Language,
            seletedImage:{},
            src:''
        }
    },
    mounted(){

    },
    methods:{
        selectImage(id,url){
            this.seletedImage = id;
            this.getImage(id,url);
        },
        error(){
            this.src = '/media/image-not-found.png';
        },
        setSrc(src){
            this.src = src
        }
    }
}
</script>
<style scoped>
/* .modal { */
    /* display: none;
    position: fixed;
    z-index: 100000;
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
    width: 100%;
    max-width: 700px;
    background-color: #fefefe;
    padding: 20px;
    border-radius: 8px;
    overflow-y: auto; 
    max-height: 80%; 
} */


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