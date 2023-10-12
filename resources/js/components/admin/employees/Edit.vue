<template>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.edit_msg.replace(':attribute',Lang.employee) }}</h1>
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
import useEmployees from '../../../composables/employees';
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
            first_name:'',
                last_name:'',
                email:'',
                password:'',
                password_confirmation:'',
                address:'',
                emp_code:'',
                designation:'',
                media:[],
                gallery:[]
        },
        name:"Update Employee",
    }
},
mounted(){
    let ref = this;

    ref.edit();
    ref.FormFields = [
    {
                    label:Language.first_name,
                    field:"first_name",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },
                {
                    label:Language.last_name,
                    field:"last_name",
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
                    grid:"col-md-12 col-12",
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
                    grid:"col-md-6 col-12",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:false,
                },
                {
                    label:Language.confirm_password,
                    field:"password_confirmation",
                    class:"form-control",
                    type:"password",
                    grid:"col-md-6 col-12",
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
                    label:Language.employee_code,
                    field:"emp_code",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },


                {
                    label:Language.designation,
                    field:"designation",
                    class:"form-control designation",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return Language.placholder_msg(this.label)
                    },
                    required:true,
                },

                {
                    label:Language.profile_picture,
                    field:"gallery",
                    class:"files",
                    grid:"col-md-6 col-12",
                    type:"file",
                    placeholder:function(){
                        return "Upload"+this.label
                    },
                    multiple:true,
                    model:"App\\Models\\Employee",
                    required:false,
                    fileType:"image/jpeg, image/png",
                    maxFiles:1
                },

        ]
},
methods:{
    async update(){
        const {update,errors} = useEmployees();
        const {successAlert,errorAlert} = useService();
        this.loader =true;
        if(this.password != '' && this.form.password != this.form.password_confirmation){
                errorAlert(this.Lang.password_mismatch)
                return
        }
        let ref = this;
        await update(this.id,this.form).then(async (response) => {
            successAlert(Language.success_msg.replace(':attribute',Language.employee).replace(':action',Language.updated))
            setTimeout(() => {
                let route = localStorage.getItem('route');
                
                
                let user = localStorage.getItem('user');
                user = JSON.parse(JSON.parse(user));
                if(user.employee != undefined){
                    ref.$router.push(route+'/employee')
                    
                }else{
                    ref.$router.push(route+'/employees')
                    
                }
            }, 3000);
        }).catch((e) => {
            if(e.response.status === 422){
                this.errors = e.response.data.errors
            }else if(e.response.status == 500){
                errorAlert(e.message)
            }else{

                errorAlert(e.response.data.message)
            }
        });
        this.loader =false;

    },
    async edit(){
            const {record,get} = useEmployees();

            await get(this.id);

            this.form.first_name = record.value.first_name;
            this.form.last_name = record.value.last_name;
            this.form.email = record.value.email;
            this.form.address = record.value.address;
            this.form.emp_code = record.value.emp_code;
            this.form.designation = record.value.designation;
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
