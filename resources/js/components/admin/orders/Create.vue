<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg(Lang.order) }}</h1>
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
                <form @submit.prevent="store()">
                    <div class="row">
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.order }}</label>
                                <Select2 class="vue-select1"
                                    :options="products"  v-model="FormData['product_id']" :placeholder="Lang.placholder_msg(Lang.product)" @select="getProductSizes($event)">
                                </Select2>
                                <div v-if="errors['product_id']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['product_id']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.size }}</label>
                                <Select2  class="vue-select1"
                                    :options="sizes" v-model="FormData['size']" :placeholder="Lang.placholder_msg(Lang.size)" >
                                </Select2>
                                <div v-if="errors['size']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['size']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.quantity }}</label>
                                <input type="text" id="quantity"  :placeholder="Lang.placholder_msg(Lang.quantity)" class="form-control" name="quantity"  v-model="FormData.quantity" required="true" >
                                <div v-if="errors['quantity']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['quantity']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.total_price }}</label>
                                <input type="text" id="total_price"  :placeholder="Lang.placholder_msg(Lang.total_price)" class="form-control" name="total_price"  v-model="FormData.total_price" required="true" readonly>
                                <div v-if="errors['total_price']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['total_price']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.quoted_price }}</label>
                                <input type="text" id="quoted_price"  :placeholder="Lang.placholder_msg(Lang.quoted_price)" class="form-control" name="quoted_price"  v-model="FormData.quoted_price" required="true" >
                                <div v-if="errors['quoted_price']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['quoted_price']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.customer }}</label>
                                <Select2  class="vue-select1"
                                    :options="customers" v-model="FormData['customer_id']" :placeholder="Lang.placholder_msg(Lang.customer)">
                                </Select2>
                                <div v-if="errors['customer_id']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['customer_id']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.order_date }}</label>
                                <Datepicker v-model="FormData.order_date" :class="errors.order_date?'is-invalid ':''" autoApply :enableTimePicker="false" menuClassName="dp-custom-date" :placeholder="Lang.placholder_msg(Lang.order_date)" textInput/>
                                <!-- <input type="text" id="order_date"  :placeholder="Lang.placholder_msg(Lang.order_date)" class="form-control" name="order_date"  v-model="FormData.order_date" required="true" > -->
                                <div v-if="errors['order_date']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['order_date']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.order_code }}</label>
                                <input type="text" id="order_code"  :placeholder="Lang.placholder_msg(Lang.order_code)" class="form-control" name="order_code"  v-model="FormData.order_code" required="true" >
                                <div v-if="errors['order_code']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['order_code']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.shipment_address }}</label>
                                <input type="text" id="shipment_address"  :placeholder="Lang.placholder_msg(Lang.shipment_address)" class="form-control" name="shipment_address"  v-model="FormData.shipment_address" required="true" >
                                <div v-if="errors['shipment_address']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['shipment_address']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.addon }}</label>
                                <Select2  class="vue-select1"
                                    :options="addons" v-model="FormData['addon_id']" :placeholder="Lang.placholder_msg(Lang.addon)">
                                </Select2>
                                <div v-if="errors['addon_id']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['addon_id']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.backing }}</label>
                                <Select2  class="vue-select1"
                                    :options="backings" v-model="FormData['backing_id']" :placeholder="Lang.placholder_msg(Lang.backing)">
                                </Select2>
                                <div v-if="errors['backing_id']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['backing_id']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.border }}</label>
                                <Select2  class="vue-select1"
                                    :options="borders" v-model="FormData['border_id']" :placeholder="Lang.placholder_msg(Lang.border)">
                                </Select2>
                                <div v-if="errors['border_id']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['border_id']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">{{ Lang.order_platform }}</label>
                                <input type="text" id="order_platform"  :placeholder="Lang.placholder_msg(Lang.order_platform)" class="form-control" name="order_platform"  v-model="FormData.order_platform" required="true" >
                                <div v-if="errors['order_platform']">
                                    <ul>
                                        <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors['order_platform']" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="price" id="price" v-model="FormData.price">

                    </div>
                    <div class="row mb-1 ">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-secondary ">
                                                {{ name.toUpperCase() }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        </section>
</template>
<script>
import {Language} from '../../../helpers/lang/lang';
import useProducts from '../../../composables/products';
import useCustomers from '../../../composables/customers';
import useOrders from '../../../composables/orders';
import useBorders from '../../../composables/borders';
import useAddons from '../../../composables/addons';
import useBackings from '../../../composables/backings';
import useCategories from '../../../composables/categories';
import useSizes from '../../../composables/sizes';
import useService  from '../../../services/index';
import useGenerals from '../../../composables/general';
import Select2 from 'vue3-select2-component';
import Datepicker from '@vuepic/vue-datepicker';
import { axiosWrapper } from '../../../helpers';
import { watch } from 'vue';

export default {
    components:{
        Select2,
        Datepicker
    },
    data(){
        return {
            Lang:Language,
            loader:false,
            id:0,
            errors:{},
            FormFields:[],
            categories:[],
            products:[],
            sizes:[],
            product_id:'',
            quantity:'',
            total_price:'',
            price:'',
            FormData:{
                is_active:1,
                total_price:'',
                price:'',
                quantity:'',
                border_id:'',
                addon_id:'',
                backing_id:'',
                size:0,
                product_id:'',
                order_date:null
            },

            Statuses:[
                {
                    id:1,
                    text:Language.active
                },
                {
                    id:0,
                    text:Language.inactive
                }
            ],
            name:"Create Order",
        }
    },

    mounted(){
        let ref = this;
        ref.getCategories();
        ref.getProducts();
        ref.getCustomers();
        ref.getBorders();
        ref.getAddons();
        ref.getBackings();
        ref.getSizes();
        // ref.getProductSizes(this.id);
        // ref.getPrice(this.id);
    },

    methods:{
        async getProductSizes(event) {
           const {records,getSizeRecords} = useProducts();
            await getSizeRecords(event.id);
            this.sizes = records.value;
            this.product_id = event.id;
        },
        async getPrice() {
           const {records,getTotalPrice} = useProducts();
           await getTotalPrice(this.FormData.size,this.FormData.product_id,this.FormData.quantity);
            this.FormData.price = records.value.price?records.value.price:0;
            let quantity =parseFloat(this.FormData.quantity);
            this.FormData.total_price = (this.FormData.price) * quantity;
        },
        async store(){
            const {store,errors} = useOrders();
            const {successAlert,errorAlert} = useService();

            this.loader =true;
            let ref = this;
            await store(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.product).replace(':action',Language.saved))
                setTimeout(() => {
                    ref.$router.push('/admin/orders')
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

        setFormData(field,data){
            this.FormData[field] = data;
        },
        async getCategories(){
            const {records,getAllPublic} = useCategories();
            await getAllPublic();
            this.categories = records.value;
        },
         async getCustomers(){
            const {records,getAllPublic} = useCustomers();
            await getAllPublic();
            this.customers = records.value;
        },
         async getBorders(){
            const {records,getAllPublic} = useBorders();
            await getAllPublic();
            this.borders = records.value;
        },
        async getAddons(){
            const {records,getAllPublic} = useAddons();
            await getAllPublic();
            this.addons = records.value;
        },
        async getBackings(){
            const {records,getAllPublic} = useBackings();
            await getAllPublic();
            this.backings = records.value;
        },
        async getProducts(){
            const {records,getAllPublic} = useProducts();
            await getAllPublic();
            this.products = records.value;
        },
        async getSizes(){
            const {records,getAllPublic} = useSizes();
            await getAllPublic();
            this.sizes = records.value;
        },
   },
   watch:{
        'FormData.quantity': {
        handler(newValue, oldValue) {
            if(newValue > 0){
                this.getPrice();
            }
        },
        deep: true
        }
   }

}
</script>
