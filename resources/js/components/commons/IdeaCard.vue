<template>
    <a :href="'/'+user.roles[0].name+'/deals/'+deal.id">
    <div class="making-pricing-card" >
        <div class="making-thumb">
            <ProfileImage :image="deal.profile_picture"/>
            <div class="making-thumb-text">
                <h4>{{  deal.Name }}</h4>
            </div>
        </div>
        <div class="making-content">
            <h3>{{ deal.name}}</h3>
            <p class="making-first-para">{{ deal.description?deal.description.substring(0,101):deal.description }}</p>


            <div class="making-listing-main">
                <div class="making-listing">
                    <p>Price:<span>${{ deal.price}}</span></p>
                </div>


                <div class="making-listing">
                    <p>Patent Document:<span>{{ deal.patent_exist}}</span></p>
                </div>


                <div class="making-listing">
                    <p>Status:<span>{{ deal.status }}</span></p>
                </div>
            </div>


        </div>
    </div>
    </a>
</template>
<script>
import ProfileImage from "./ProfileImage";
export default {
    props:{
        deal:Object,
    },
    components:{
      ProfileImage,
    },
    data(){
        return {
            user:JSON.parse(localStorage.getItem('user')),
        }
    }
}
</script>
