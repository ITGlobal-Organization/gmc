<template>
    <div class="col-md-12">
        <div class="row p-3">
            <div class="col-md-5 col-sm-5 col-12">
            <select class="records-cls custom-select" v-model="pageSize">
                <option :value="10">10</option>
                <option :value="25">25</option>
                <option :value="50">50</option>
            </select>
            </div>
            <div class="form-group col-md-7 col-sm-7 d-inline-block">
                <div class="row">
                    <div class="col-5">
                        <input type="text" name="search" placeholder="Search" class="form-control" v-model="filter.search" />
                    </div>
                    <div class="col-4">
                        <button class="btn btn-secondary w-100" @click="searchAction()">Search</button>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-light w-100" @click="resetAction()">Reset</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="table-responsive" v-if="rows">
            
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th v-for="(item,index) in columns" :key="index" >
                                <div>
                                    <input type="checkbox" v-if="checkbox"/>
                                    <label v-else style="cursor:pointer;">
                                        <span class="mr-1">{{ item.label}}</span>
                                        <span v-if="item.sorted" @click="setOrder(item.field)">
                                            <i class="fa fa-sort-up" v-if="order =='desc'"></i>
                                            <i class="fa fa-sort-down" v-else></i>
                                         </span>
                                    </label>
                                </div>
                        </th>

                    </tr>
                </thead>
                
                <tbody v-if="rows.length > 0">
                    <tr v-for="(row,index) in rows" :key="index">
                        <td v-for="(column,key) in columns" :key="key">
                            <p v-if="!column.has_html && column.field != 'action'">{{!row[column.field]?'---':row[column.field].length>25?row[column.field].substring(0,20).concat('...'):row[column.field]}}</p>
                            <div v-if="column.has_html && column.field != 'action'" v-html="row[column.field]"></div>
                            <div class="dropdown" v-if="column.field == 'action'">
                                    <a class="dropdown-toggle action-dropdown" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" v-if="row.status_id != 5">
                                        <a class="dropdown-item" href="javascript:void(0);" v-for="(dropdown,dp) in column.dropdown" :key="dp" @click="dropdown.action(row)">
                                            <i :class="dropdown.icon(row)"></i>{{dropdown.name(row)}}
                                        </a>
                                    </div>
                            </div>
                        </td>

                    </tr>
                </tbody>
                <tbody v-else>
                    <tr>
                        <td :colspan="columns.length">
                            {{ Language.no_record_found}}
                        </td>

                    </tr>
                </tbody>

            </table>

        </div>
        <div v-else>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th v-for="(item,index) in columns" :key="index" >
                                <div>
                                    <input type="checkbox" v-if="checkbox"/>
                                    <label v-else style="cursor:pointer;">
                                        <span class="mr-1">{{ item.label}}</span>
                                        <span v-if="item.sorted" @click="setOrder(item.field)">
                                            <i class="fa fa-sort-up" v-if="order =='desc'"></i>
                                            <i class="fa fa-sort-down" v-else></i>
                                         </span>
                                    </label>
                                </div>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td :colspan="columns.length">
                            {{ Language.no_record_found}}
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <div v-if="rows">
            <div class="row p-4" v-if="rows.length >0">
                <div class="col-md-12 col-12 d-flex justify-content-center">
                <v-pagination
                    v-model="pageNo"
                    :pages="pages"
                    :range-size="pageSize"
                    active-color="#DCEDFF"
                    @update:modelValue="updatePageNo"
                />
                </div>
            </div>
        </div>
        
    </div>

</template>
<script>
    import VPagination from "@hennge/vue3-pagination";
    import VueElementLoading from 'vue-element-loading';
    import {Language} from '../../helpers/lang/lang';
    export default {
        props:{
            rows:Array,
            columns:Array,
            checkbox:false,
            pages:0,
            setPageNo:{ type: Function },
            setPageSize:{type:Function},
            setFilter:{type:Function},
            filter:Object,
            updateStatus:{type:Function},
            setOrder:{type:Function},
            pageSize:0,
            pageNo:0,
            order:String,
        },
        components: {
            VPagination,
            VueElementLoading,
        },
        data(){
            return {
                page:1,
                search:false,
                orderBy:'',
                Language:Language,
            }
        },

        methods:{
            updatePageNo(pageNo){

                this.setPageNo(pageNo)
            },
            setOrder(orderBy){

                let ref = this;
                ref.setOrder(orderBy)
            },
            searchAction(){
                let ref = this
                ref.setFilter(ref.filter.search);
                ref.search = true
            },
            resetAction(){
                let ref = this
                ref.filter.search = '';
                ref.setFilter(ref.filter.search);
                ref.search = false

            }
        },
        watch:{
           pageSize:function(){
               let ref = this;
               ref.setPageSize(this.pageSize)
           },



        }


    }
</script>
