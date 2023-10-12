<template>
    <div class="accordion-sec chat-accordion-main">
       <div id="accordion" class="myaccordion">
           <div class="card">
               <div class="card-header" id="headingOne">
                   <h2 class="mb-0">
                    <button
                        :class="requestUser==''?'d-flex align-items-center justify-content-between btn btn-link collapsed':'d-flex align-items-center justify-content-between btn btn-link'"
                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                        aria-controls="collapseOne">
                        {{ Language.all_conversation}}
                        <span class="fa-stack fa-sm">
                            <i class="fa fa-angle-down fa fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </button>
                   </h2>
               </div>
               <div id="collapseOne" :class="requestUser==''?'collapse show':'collapse show'" aria-labelledby="headingOne"
                   data-parent="#accordion">
                   <div class="card-body">
                        <div class="scrollbar sc-bar-6" id="style-6">
                            <div class="force-overflow">
                                <div v-for="(user,index) in Users" :key="index">
                                     <a :href="'/'+auth.roles[0].name+'/messages?user='+user.username+'&idea='+user.tag">
                                        <div :class="requestUser == user.username?'user-chats-main selected-chat':'user-chats-main'" >
                                            <message-card  :messageObj="user"/>
                                        </div>
                                     </a>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</template>
<script>
import { Language } from '../../helpers/lang/lang'
import MessageCard from '../commons/MessageCard.vue';
export default {
    components:{
        MessageCard
    },
    props:{
        Users:Array,

    },
    data(){
        return {
            Language:Language,
            requestUser:'',
            idea:'',
            auth:JSON.parse(localStorage.getItem('user')),
        }
    },
    mounted(){
        if(this.$route && this.$route.query.user){
                this.requestUser = this.$route.query.user;
        }
        if(this.$route && this.$route.query.idea){
            this.idea = this.$route.query.idea;
        }


    }
}
</script>
