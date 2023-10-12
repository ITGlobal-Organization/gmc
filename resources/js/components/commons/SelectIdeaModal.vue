<template>
    <div :class="showModal?'modal content-modal-1  chat-modal-main fade show ov-hidden':'modal content-modal-1 ov-hidden  chat-modal-main fade'" id="selectmodal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel-1" aria-hidden="true" :style="showModal?'display:block':'display:none'">
            <transition name="modal" v-on:before-enter="beforeEnter"
                v-on:enter="enter">
             <div v-if="showModal">
                <div class="modal-dialog chat-idea-modal-1" role="document">
                    <div class="modal-content company-content">
                        <div class="modal-body idea-body">

                            <div class="row" v-if="!idea">
                                 <div class="close-button">
                                    <button class="close-btn"><img src="/images/cross-modal.png" alt=""
                                            class="img-fluid" @click="setShowModal(false)"></button>
                                </div>
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="select-head">
                                        <h3>Select Idea</h3>
                                    </div>

                                    <div class="modal-search">
                                        <div class="idea-icon">
                                            <img src="/images/select-search.png" alt=""
                                                class="img-fluid">
                                        </div>
                                        <input type="text" placeholder="Search" v-model="search">
                                    </div>
                                    <div v-if="!loader">
                                        <div v-if="ideas.length > 0" class="scroll-ideas">
                                            <button v-for="(idea,index) in ideas" :key="index" class="w-100" @click="setIdea(idea)">
                                                <div class="idea-box">
                                                    <div class="idea-modal-thumb">
                                                        <profile-image :image="idea.innovator.profile_picture"/>
                                                    </div>
                                                    <div class="idea-modal-content">

                                                        <p>{{ idea.name }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="row justify-content-center" v-else>

                                        </div>

                                    </div>
                                    <div class="row justify-content-center" v-else>
                                        <div class="spinner-border text-light form-loader" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="row" v-else>
                                <div class="close-button">
                                    <button class="close-btn"><img src="http://127.0.0.1:8000/images/cross-modal.png"
                                            alt="" class="img-fluid"></button>
                                </div>
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="select-head">
                                        <h3>Create an offer</h3>
                                    </div>
                                    <div class="idea-box">
                                        <div class="idea-modal-thumb">
                                            <profile-image :image="idea.innovator.profile_picture"/>
                                        </div>
                                        <div class="idea-modal-content">
                                            <p>{{ idea.name}}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="idea-box-text-area">
                                        <textarea name="" v-model="form.description" id="" cols="50" rows="4" placeholder="Describe your offer"></textarea>
                                        <div v-if="errors.description">
                                            <ul>
                                                <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors.description" :key="index">{{ error }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="delivery-fields">

                                        <div class="delivery-select">
                                            <label for="">Delivery</label>
                                            <select name="" v-model="form.expires_day">
                                                <option value="1">1 Day</option>
                                                <option value="2">2 Day</option>
                                                <option value="3">3 Day</option>
                                            </select>
                                        </div>

                                            <div v-if="errors.expires_day">
                                                <ul>
                                                    <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors.expires_day" :key="index">{{ error }}</li>
                                                </ul>
                                            </div>
                                    </div>


                                        <div class="delivery-select price-select">
                                             <label for="">Price</label>
                                            <input type="number" placeholder="Price" min="1" v-model="form.price">
                                            <div v-if="errors.price">
                                                <ul>
                                                    <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors.price" :key="index">{{ error }}</li>
                                                </ul>
                                            </div>
                                        </div>




                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="back-modal-button">
                                                <button class="back-mod-btn" @click="setIdea(null)">Back</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="next-modal-button">

                                                <button class="next-mod-btn" @click="storeOffer();">
                                                    <div class="spinner-border text-light form-loader" role="status" v-if="loader">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                    Send offer</button>
                                            </div>
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
import useIdeas from '../../composables/ideas';
import ProfileImage from '../commons/ProfileImage.vue';
import useDeals from '../../composables/deals';
import useService from '../../services/';
import { Language } from '../../helpers/lang/lang';
export default {
    components:{
        ProfileImage,
    },
    props:{
        showModal:Boolean,
        setShowModal:{
            type:Function,
        },
    },
    data(){
        return {
            search:'',
            ideas:[],
            loader:false,
            Language:Language,
            idea:null,
            errors:{},
            form:{
                price:0,
                description:'',
                expires_day:1,
                company_id:'',
                idea_id:0,
                innovator_id:JSON.parse(localStorage.getItem('user')).type.id,
            }
        }
    },
    methods:{
        async getIdeas(){
            this.loader = true;
            const {getIdeasForOffer,ideas} = useIdeas();

            await getIdeasForOffer(this.search);

            this.ideas = ideas;
            this.loader = false;
        },
        setIdea(idea){
            this.loader = false;
            this.idea = idea;

        },
        async storeOffer(){
            const {storeOffers} = useDeals();
            const {successAlert,errorAlert} = useService();

            this.form.idea_id = this.idea.id;

            this.form.company_id = this.$route.query.user;
            let ref = this
            if(!ref.loader){
                 ref.loader = true;
                await storeOffers(this.form).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.offer).replace(':action',Language.send));
                ref.setShowModal(false);
                setTimeout(function(){
                    location.reload();
                },3000)

            }).catch(async (e) => {
                console.log(e);
                if (e.response.status === 422) {
                    this.errors = e.response.data.errors
                } else if (e.response.status == 500) {
                    errorAlert(e.message)
                } else {

                    errorAlert(e.response.data.message)
                }
            });

            }

            this.loader = false;

        }
    },
    watch:{
        search:function(){
            if(this.search != ''){
                this.getIdeas();
            }else{
                this.ideas = [];
            }

        }
    }
}
</script>
