<template>

    <div class="user-chat-image">
        <ProfileImage :image="messageObj.ipp?messageObj.ipp:messageObj.cpp"/>
        <div :class="messageObj.is_login?'green-dot':'gray-dot'"></div>
    </div>
    <div class="user-chat-content">
        <div class="user-content-top">
            <h4>{{ messageObj.name }}</h4>
            <span class="just-now">{{ messageObj.msg_time }}
            <!-- /*<i class="fa fa-star-o" aria-hidden="true"></i>*/ -->
            </span>
        </div>
        <div class="user-content-bottom">
            <p>{{ messageObj.message.substring(0,51) }}</p>
        </div>
    </div>

</template>
<script>
import ProfileImage from './ProfileImage.vue';
export default {
    props:{
        messageObj:Object,
        idea:String,
    },
    components:{
        ProfileImage
    },
}
</script>
