<template>
    <div class="side-bar-main">
        <div class="user-image">
            <ProfileImage :image="user.type.profile_picture"/>
                <div class="user-text">
                    <h4>{{ user.name }}</h4>
                </div>
        </div>
        <div class="location-member-listing">
            <ul>
                <li class="border-bottom"><i class="fa fa-map-marker map-marker" aria-hidden="true"></i>
                    {{Language.from}} <span class="pull-right">{{ user.type.city?user.type.city.substring(0,10):'--'}}, {{ user.type.state?user.type.state.substring(0,10):'--'}}</span></li>
                <li><i class="fa fa-user map-marker" aria-hidden="true"></i>{{ Language.member_since}} <span class="pull-right">{{ user.member_since}}</span></li>
            </ul>
        </div>
        <div class="description-main">
            <div class="description-content">
                <h6>{{ Language.description }}
                    <span class="pull-right"></span>
                    <!-- <a href="#">Edit</a></span> -->
                </h6>
                <p>{{ user.type.about?user.type.about:Language.null}}</p>
            </div>

        </div>
        <div class="deals-listing">

            <ul >
                <li class="border-bottom"><a :href="'/'+user.roles[0].name+'/deals'"><span><i class="fa fa-handshake-o"
                    aria-hidden="true"></i></span>{{ Language.deals }}</a></li>
                <li class="border-bottom"><a :href="'/'+user.roles[0].name+'/profile'"><span class="pr-7"><i
                        class="fa fa-cog" aria-hidden="true"></i></span>{{ Language.profile_setting }}</a></li>
                <li class="border-bottom" v-if="user.roles[0].id == 2"><a :href="'/'+user.roles[0].name+'/revenue'"><span class="pr-8"><i
                     class="fa fa-usd" aria-hidden="true"></i></span>{{ Language.revenue }}</a></li>
                <li class="border-bottom" v-if="user.roles[0].id == 3">
                    <a :href="'/'+user.roles[0].name+'/transactions'"><span class="pr-8"><i
                     class="fa fa-usd" aria-hidden="true"></i></span>{{ Language.transactions }}
                    </a>
                </li>
                <li class="border-bottom">
                    <a :href="'/'+user.roles[0].name+'/subscriptions'">
                        <span class="pr-5"><i class="fa fa-star" aria-hidden="true"></i></span>{{ Language.subscriptions }}
                    </a>
                </li>
            </ul>
        </div>
        <message-box :chats="UserList"/>

    </div>
</template>
<script>
import {Language} from '../../helpers/lang/lang';
import MessageBox from '../commons/MessageBox.vue';
import ProfileImage from "./ProfileImage";
import useMessages from '../../composables/messages';
export default {
    props:{
        user:Object,

    },
    components:{
        MessageBox,
        ProfileImage
    },
    data(){
        return {
            Language:Language,
            image:'',
            UserList:[],
        }
    },
    async mounted() {
        await Promise.all([this.getuserList()]);

    },
    methods:{
        async getuserList(){
            const {getUserList,list} = useMessages();

            await getUserList(`/${this.user.roles[0].name}/messages/chat/list`);
            this.UserList = list;


        },
    }
}
</script>
