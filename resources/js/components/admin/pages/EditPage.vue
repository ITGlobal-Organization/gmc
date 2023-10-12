<template>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.edit_msg.replace(':attribute',Lang.page) }}</h1>
                </div>
            
            </div>
        </div>
    </section>
    <!-- Main content -->
    <div class="loading" v-if="loader">Loading</div>
    <section class="content" v-else>

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
import usePages from '../../../composables/pages';
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
        form:{
            name:'',
            slug:'',
            view:'',
            layout:'',
            description:'',
            display_to_menu:0,
            is_home_page:0
        },
        name:"Update Page",
    }
},
mounted(){
    let ref = this;
    ref.edit();
    ref.getData();
        ref.FormFields = [
                {
                    label:Language.name,
                    field:"name",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.slug,
                    field:"slug",
                    class:"form-control",
                    grid:"col-md-12 col-12",
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
                    label:Language.view,
                    field:"view",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.home_page,
                    field:"is_home_page",
                    class:"form-check-input",
                    grid:"col-md-12 col-12",
                    type:"checkbox",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:false,
                },
                {
                    label:Language.layout,
                    field:"layout",
                    class:"vue-select1",
                    grid:"col-md-12 col-12",
                    type:"select",
                    isdynamic:true,
                    searchable:true,
                    options:function(){
                            if(this.isdynamic){
                                return ref.options;            
                            }
                            return [];
                    },
                    placeholder:function(){
                        return "Select "+this.label
                    },
                    
                    required:true,
                },
                {
                    label:Language.display_on_menu,
                    field:"display_to_menu",
                    class:"form-check-input",
                    grid:"col-md-12 col-12",
                    type:"checkbox",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:false,
                },
                
            ]
},
methods:{
    async update(){
        const {update,errors} = usePages();
        const {successAlert,errorAlert} = useService();
        this.loader =true;
        
        await update(this.id,this.form).then(async (response) => {
            successAlert(Language.success_msg.replace(':attribute',Language.page).replace(':action',Language.updated))
            setTimeout(() => {
                window.location.href = '/admin/pages';
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
        this.errors = errors.value;
        

    },
    async edit(){
            const {page,getPage} = usePages();
            
            await getPage(this.id);
            console.log(page.value);
            this.form.name = page.value.name;
            this.form.slug = page.value.slug;
            this.form.view = page.value.view;
            this.form.layout = page.value.layout;
            this.form.display_to_menu = page.value.display_to_menu;
            this.form.description = page.value.description?page.value.description:"";
            this.form.is_home_page = page.value.is_home_page;            
    },
    async getData(){
            const {data,get} = useGenerals();
            await get(`/admin/layouts/select`);
            this.options = data.value;   
    }

}
}
</script>