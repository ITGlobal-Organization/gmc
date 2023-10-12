<template>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.edit_msg.replace(':attribute',Lang.customer) }}</h1>
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
            <Form :fields="FormFields" :data="form" :action="update" :name="name" :errors="errors" :id="id"/>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </section>
</template>
<script>
import {Language} from '../../../helpers/lang/lang';
import Form from '../../commons/Form.vue';
import useCustomers from '../../../composables/customers';
import useService  from '../../../services/index';


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
        developerOptions:[],
        typesOptions:[],
        citiesOptions:[],
        form:{
            name:'',
            company:'',
            email:'',
            address:'',
            join_at:'',
            password:'',
            total_amount:'',
            total_orders:''
        },
        name:"Update Customer",
    }
},
mounted(){
    let ref = this;

    ref.edit();
    ref.FormFields = [
    {
                    label:Language.name,
                    field:"name",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.company,
                    field:"company",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.email,
                    field:"email",
                    class:"form-control",
                    type:"text",
                    grid:"col-md-6 col-6",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.password,
                    field:"password",
                    class:"form-control",
                    type:"password",
                    grid:"col-md-6 col-6",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:false,
                },
                {
                    label:Language.address,
                    field:"address",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.total_orders,
                    field:"total_orders",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                 {
                    label:Language.total_amount,
                    field:"total_amount",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },

        ]
},
methods:{
    async update(){
        const {update,errors} = useCustomers();
        const {successAlert,errorAlert} = useService();
        this.loader =true;
        let ref = this
        await update(this.id,this.form).then(async (response) => {
            let ref = this
            successAlert(Language.success_msg.replace(':attribute',Language.customer).replace(':action',Language.updated))
            setTimeout(() => {
                ref.$router.push(
                    '/admin/customers'
                    )
                
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
            const {record,get} = useCustomers();

            await get(this.id);

            this.form.name = record.value.name;
            this.form.company = record.value.company;
            this.form.email = record.value.email;
            this.form.address = record.value.address;
            this.form.total_amount = record.value.total_amount;
            this.form.total_orders = record.value.total_orders;
            this.form.join_at = record.value.join_at;
            this.form.gallery = record.value.media;

            let data = []
            let ref = this;
            if(ref.form.gallery.length > 0) {
                data = this.form.gallery.map(gall => {
                    return gall.image_url;
                })

                this.form.gallery = data;
                record.value.media.filter(gallery => {
                    ref.form.media.push(gallery.id);
                })
            }
    },


}
}
</script>
