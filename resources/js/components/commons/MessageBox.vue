<template>
    <div v-if="chats.length > 0">
        <div class="mobile-listing">
            <ul>
                <li class="border-bottom"><span><i class="fa fa-envelope"
                            aria-hidden="true"></i></span>Inbox<a :href="'/'+auth.roles[0].name+'/messages'" class="pull-right">View
                        All</a></li>
            </ul>
        </div>
        <div class="scroll-main">
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div v-for="(user,index) in chats" :key="index">
                        <a :href="'/'+auth.roles[0].name+'/messages?user='+user.username+'&idea='+user.tag">
                            <div :class="'user-chats-main'" >
                                <message-card  :messageObj="user"/>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div v-else>
        <div class="mobile-listing">
            <ul>
                <li class="border-bottom"><span>
                    <i class="fa fa-envelope" aria-hidden="true"></i></span>Inbox
                    <!-- <a href="#" class="pull-right">View All</a> -->
                </li>
            </ul>
        </div>
        <div class="scroll-main">
            No Chats Found
        </div>
    </div>
</template>
<script>
import { Language } from '../../helpers/lang/lang'
import MessageCard from '../commons/MessageCard.vue';
export default {
    props:{
        id:Number,
        chats:Array
    },
    components:{
        MessageCard
    },
    data(){
        return {
            auth:JSON.parse(localStorage.getItem('user')),
        }
    }
}
</script>
