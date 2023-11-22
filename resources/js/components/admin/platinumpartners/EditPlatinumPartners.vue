<template>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.edit_msg.replace(':attribute',Lang.platinumpartner) }}</h1>
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
            <Form :fields="FormFields" :data="form" :action="update" :name="name" :errors="errors"/>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </section>
</template>
<script>
import {Language} from '../../../helpers/lang/lang';
import Form from '../../commons/Form.vue';
import usePlatinumPartner from '../../../composables/platinumpartners';
import useService  from '../../../services/index';
import useUsers from '../../../composables/users';


export default {
components:{
    Form,
},
props:['id'],
data(){
    return {
        Lang:Language,
        loader:false,
        errors:{},
        FormFields:[],
        users:[],
        form:{
                title:'',
                web_url:'',
                description:'',
                is_approved:'',
                is_active:0,

                media:[],
                gallery:[]
        },
        name:"Update Platinum Partner",
    }
},
mounted(){
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
                    label:Language.image,
                    field:"gallery",
                    class:"files",
                    grid:"col-md-12 col-12",
                    type:"file",
                    placeholder:function(){
                        return "Upload"+this.label
                    },
                    multiple:false,
                    model:`App\\Models\\PlatinumPartner`,
                    required:false,
                    fileType:"image/jpeg, image/png",
                    maxFiles:1
                },

        ]
        ref.edit();
},
methods:{
    async update(){
        const {update,errors} = usePlatinumPartner();
        const {successAlert,errorAlert} = useService();
        this.loader =true;
        let ref = this;
        await update(this.id,this.form).then(async (response) => {
            successAlert(Language.success_msg.replace(':attribute',Language.platinumpartner).replace(':action',Language.updated))
            setTimeout(() => {
                ref.$router.push('/admin/platinumpartners')
            }, 3000);
        }).catch((e) => {
            if(e.response.status === 422){
                this.errors = e.response.data.errors
            }else if(e.response.status == 500){
                errorAlert(e.message)
            }else{
                errorAlert(e.response.data.message)
            }
        });;
        this.loader =false;


    },
    async edit(){
            const {record,get} = usePlatinumPartner();

            await get(this.id);
            console.log(record.value);
            this.form.title = record.value.title;
            this.form.description = record.value.description?record.value.description:"";
            this.form.is_approved = record.value.is_approved;
            this.form.web_url = record.value.web_url;
            this.form.gallery = record.value.media;
            let data = []
            let ref = this;
            data = this.form.gallery.map(gall => {
                return gall.image_url;
            })
            console.log(data);
            this.form.gallery = data;
            record.value.media.filter(gallery => {
                ref.form.media.push(gallery.id);
            })
    },

    async getAllUsers(){
            const {records,getAllPublic} = useUsers();
            await getAllPublic();
            this.users = records.value;

    }


}
}
</script>
