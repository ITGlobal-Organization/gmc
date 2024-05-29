<template>
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ Lang.create_msg(Lang.spacefinder) }}</h1>
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
        <Form :fields="FormFields" :data="FormData" :action="store" :name="name" :errors="errors"/>
        <!-- Select from gallery link -->

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- Modal -->

    <!-- /.modal -->
  </section>
</template>

<script>
import {Language} from '../../../helpers/lang/lang';
import Form from '../../commons/Form.vue';
import useSpaceFinder from '../../../composables/spacefinders';
import useUsers from '../../../composables/users';
import useService  from '../../../services/index';
import { axiosWrapper } from '../../../helpers';

export default {
    components:{
        Form,
    },
    data(){
        return {

            // galleryImages: [],
            // selectedImageId:null,
            Lang:Language,
            loader:false,
            users:[],
            images:[],
            errors:{},
            FormFields:[],
            developerOptions:[],
            typesOptions:[],
            citiesOptions:[],
            FormData:{
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
                is_approved:'',
                categories:'',
                // author:'',
                media:[],
                gallery:[],
                thumbnail:[],
                thumbnailGallery:[],
            },
            name:"Create Space Finder",
        }
    },
    mounted(){
        // this.fetchGalleryImages();
        let ref = this;
        ref.getAllUsers();
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
                    label:Language.categories,
                    field:"categories",
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
                    grid:"col-md-4 col-12",
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
                    grid:"col-md-2 col-12",
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
                    multiple:true,
                    model:`App\\Models\\SpaceFinder`,
                    required:false,
                    fileType:"image/jpeg, image/png",
                    imageType:'main',
                    maxFiles:10
                },
                {
                    label:Language.thumbnail,
                    field:"thumbnailGallery",
                    class:"files",
                    grid:"col-md-12 col-12",
                    type:"file",
                    placeholder:function(){
                        return "Upload"+this.label
                    },
                    multiple:true,
                    model:`App\\Models\\SpaceFinder`,
                    required:false,
                    fileType:"image/jpeg, image/png",
                    imageType:'thumbnail',
                    maxFiles:10
                },

        ]

        // var autocomplete = new google.maps.places.Autocomplete(
        //     document.getElementById("address"),
        // );
    },

    methods:{
        // async fetchGalleryImages() {
        //     this.loader = true;
        //     try {
        //         const response = await axios.get('https://api.example.com/gallery-images');
        //         this.galleryImages = response.data;
        //     } catch (error) {
        //         console.error('Error fetching gallery images:', error);
        //     } finally {
        //         this.loader = false;
        //     }

        // },


        async store(){
            const {store,errors} = useSpaceFinder();
            const {successAlert,errorAlert} = useService();
            this.loader =true;
            let ref = this
            console.log(this.FormData);
            await store(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.spacefinder).replace(':action',Language.saved))
                setTimeout(() => {
                    ref.$router.push('/admin/spacefinder')
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
        setFormData(field,data){
            this.FormData[field] = data;
            console.log(this.FormData);
        },
        async getAllUsers(){
            const {records,getAllPublic} = useUsers();
            await getAllPublic();
            this.users = records.value;

        },



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
