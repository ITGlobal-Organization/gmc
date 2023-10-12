<template>

    <div :class="isShowModal?'modal fade show ':'modal fade'" :style="isShowModal?'display:block':''" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
         <transition name="modal" v-on:before-enter="beforeEnter"
                v-on:enter="enter">
             <div v-if="isShowModal">
                <div class="modal-dialog company-modal" role="document">
                    <div class="modal-content company-content">
                        <div class="modal-body company-body">

                            <div class="row">
                                <div class="close-button">
                                    <button class="close-btn"><img src="/images/cross-modal.png" alt=""
                                            class="img-fluid" @click="setShowModal(false)"></button>
                                </div>
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="sign-head">
                                        <h3>{{ Language.sign_nda}}</h3>
                                        <p v-if="nda" v-html="nda.value.replace('<strong>Company Name</strong>','<strong>'+user.name+'</strong>')">
                                        </p>

                                        <div class="digital-button" v-if="idea.innovator">
                                            <a :href="'/'+user.roles[0].name+'/messages?user='+idea.innovator.user.username+'&idea='+idea.tag" class="dig-btn">{{ Language.digitally_signed_nda}}</a>
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
import { Language } from '../../helpers/lang/lang'
export default {
    props:{
        nda:Object,
        user:Object,
        setShowModal:Function,
        isShowModal:Boolean,
        idea:Object,
    },
    data(){
        return {
            Language:Language
        }
    },
    mounted(){

    },
    methods:{

    }
}
</script>
