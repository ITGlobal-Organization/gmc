<template>
    <div class="making-pricing-card">
                        <div class="making-thumb">
                            <ProfileImage :image="idea.innovator.profile_picture"/>
                            <div class="making-thumb-text">
                                <h4>{{ idea.innovator.first_name }}</h4>
                            </div>
                        </div>
                        <div class="making-content w-100">
                            <h3>{{ idea.name }}</h3>
                            <p class="making-first-para">{{ idea.description.substring(0,120).concat('...') }}</p>


                            <div class="making-listing-main">
                                <div class="making-listing">
                                    <!-- <p>Price:<span>0</span></p> -->
                                </div>


                                <div class="making-listing">
                                    <p>{{Language.patent_document}}:<span>{{ Language[idea.patent_exist]}}</span></p>
                                </div>


                                <div class="making-listing lets-talk-button">
                                    <a class="talk-btn"  :href="'/ideas/'+idea.tag"
                                        >{{ Language.view_more }}</a>

                                </div>
                            </div>


                        </div>
                    </div>
</template>
<script>
import ProfileImage from "./ProfileImage";
import { Language } from '../../helpers/lang/lang';
export default {
    props:{
        idea:Object,
    },
    components:{
      ProfileImage,
    },
    data(){
        return {
            Language:Language,

        }
    }
}
</script>
