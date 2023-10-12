<template>
    <div v-if="Messages.length > 0">
        <div v-for="(message,index) in Messages" :key="index" :id="'messages'+index">

            <div v-if="message.sender_id != user.id" class="full-chat-flex">
                <div class="user-chat-image full-chat-thumb">
                    <profile-image :image="message.ipp?message.ipp:message.cpp"/>
                    <div :class="message.is_login?'green-dot':'gray-dot'"></div>
                </div>

                <div class="full-chat-content">
                    <h5>{{ message.name }} <span>{{ message.created_at }}</span></h5>
                    <p v-html="message.message">
                    </p>
                    <div v-if="message.files.length > 0">
                        <div class="row">
                            <div class="col-4 p-2" v-for="file,index in message.files" :key="index">
                                <img :src="'/'+file.file" class="img-fluid" v-if="FileTypes.includes(file.type)"/>
                                <a :href="'/'+file.file" download="attachment" v-else>Download attatchment</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div v-else class="full-chat-flex">
                <div class="user-chat-image full-chat-thumb">
                    <profile-image :image="user.type.profile_picture"/>
                    <div :class="user.is_login?'green-dot':'gray-dot'"></div>
                </div>

                <div class="full-chat-content">
                    <h5>{{ 'Me' }} <span>{{ message.created_at }}</span></h5>
                    <p v-html="message.message">
                    </p>
                    <div v-if="message.files.length > 0">
                        <div class="row">
                            <div class="col-4 p-2" v-for="file,index in message.files" :key="index">
                                <img :src="'/'+file.file" class="img-fluid" v-if="FileTypes.includes(file.type)"/>
                                <a :href="'/'+file.file" download="attachment" v-else>Download attatchment</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
import ProfileImage from './ProfileImage.vue';
export default {
    props:{
        Messages:Array,
        user:Object
    },
    components:{
        ProfileImage
    },
    data(){
        return {
            FileTypes:['png','jpg','jpeg','gif'],
        }
    },
    mounted(){
    }
}
</script>
