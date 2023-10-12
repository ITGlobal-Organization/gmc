import {
    createRouter,
    createWebHistory
} from "vue-router";

import Dashboard from '../components/admin/Dashboard.vue';
import EmployeeDashboard from '../components/employee/EmployeeDashboard.vue';
// Pages
import Pages from '../components/admin/pages/Pages.vue';
import CreatePages from '../components/admin/pages/CreatePages.vue';
import EditPage from '../components/admin/pages/EditPage.vue';
// Login
import Login from '../components/auth/Login.vue';
// Headers
import Headers from '../components/admin/headers/Headers.vue';
import CreateHeader from '../components/admin/headers/CreateHeader.vue';
import EditHeader from '../components/admin/headers/EditHeader.vue';
// Footers
import Footers from '../components/admin/footers/Footers.vue';
import CreateFooter from '../components/admin/footers/CreateFooter.vue';
import EditFooter from '../components/admin/footers/EditFooter.vue';
// Blogs
import Blogs from '../components/admin/blogs/Blogs.vue';
import CreateBlog from '../components/admin/blogs/CreateBlog.vue';
import EditBlog from '../components/admin/blogs/EditBlog.vue';

// Admin Employees
import Index from '../components/admin/employees/Index.vue';
import Create from '../components/admin/employees/Create.vue';
import Edit from '../components/admin/employees/Edit.vue';
//Employees

import EmpEdit from '../components/employee/Edit.vue';
//Customers
import CustomerIndex from '../components/admin/customers/Index.vue';
import CustomerCreate from '../components/admin/customers/Create.vue';
import CustomerEdit from '../components/admin/customers/Edit.vue';
//Orders
import OrderIndex from '../components/admin/orders/Index.vue';
import OrderCreate from '../components/admin/orders/Create.vue';
import OrderEdit from '../components/admin/orders/Edit.vue';
// Addons
import IndexAddons from '../components/admin/addons/Index.vue';
// Sizes
import IndexSizes from '../components/admin/sizes/Index.vue';
// Categories
import IndexCategories from '../components/admin/categories/Index.vue';
// Borders
import IndexBorders from '../components/admin/borders/Index.vue';

// Products
import ProductIndex from '../components/admin/products/Index.vue';
import ProductCreate from '../components/admin/products/Create.vue';
import ProductEdit from '../components/admin/products/Edit.vue';

const routes = [
        //Employees
        {
            path: "/employee",
            name: "employee.dashboard",
            component: EmployeeDashboard,
            props: true,
        },
        {
            path: "/employee/profile",
            name: "employees.edit",
            component: EmpEdit,
            props: true,
        },
    {
        path: "/admin",
        name: "admin.dashboard",
        component: Dashboard,
        props: true,
    },
    {
        path:'/admin/login',
        name: "admin.login",
        component: Login,
        props: true,
    },
    {
        path: "/admin/pages",
        name: "admin.pages",
        component: Pages,
        props: true,
    },
    {
        path: "/admin/pages/create",
        name: "admin.pages/create",
        component: CreatePages,
        props: true,
    },
    {
        path: "/admin/pages/edit/:id",
        name: "admin.pages.edit",
        component: EditPage,
        props: true,
    },
    // Headers
    {
        path: "/admin/headers",
        name: "admin.headers",
        component: Headers,
        props: true,
    },
    {
        path: "/admin/headers/create",
        name: "admin.headers.create",
        component: CreateHeader,
        props: true,
    },
    {
        path: "/admin/headers/edit/:id",
        name: "admin.headers.edit",
        component: EditHeader,
        props: true,
    },
    // Footer
    {
        path: "/admin/footers",
        name: "admin.footers",
        component: Footers,
        props: true,
    },
    {
        path: "/admin/footers/create",
        name: "admin.footers.create",
        component: CreateFooter,
        props: true,
    },
    {
        path: "/admin/footers/edit/:id",
        name: "admin.footers.edit",
        component: EditFooter,
        props: true,
    },
    // Blogs
    {
        path: "/admin/blogs",
        name: "admin.blogs",
        component: Blogs,
        props: true,
    },
    {
        path: "/admin/blogs/create",
        name: "admin.blogs.create",
        component: CreateBlog,
        props: true,
    },
    {
        path: "/admin/blogs/edit/:id",
        name: "admin.blogs.edit",
        component: EditBlog,
        props: true,
    },
    // Employees

     {
        path: "/admin/employees",
        name: "admin.employees",
        component: Index,
        props: true,
    },
    {
        path: "/admin/employees/create",
        name: "admin.employees.create",
        component: Create,
        props: true,
    },
    {
        path: "/admin/employees/edit/:id",
        name: "admin.employees.edit",
        component: Edit,
        props: true,
    },
        // Customers

        {
            path: "/admin/customers",
            name: "admin.customers",
            component: CustomerIndex,
            props: true,
        },
        {
            path: "/admin/customers/create",
            name: "admin.customers.create",
            component: CustomerCreate,
            props: true,
        },
        {
            path: "/admin/customers/edit/:id",
            name: "admin.customers.edit",
            component: CustomerEdit,
            props: true,
        },
                // Orders

                {
                    path: "/admin/orders",
                    name: "admin.orders",
                    component: OrderIndex,
                    props: true,
                },
                {
                    path: "/admin/orders/create",
                    name: "admin.orders.create",
                    component: OrderCreate,
                    props: true,
                },
                {
                    path: "/admin/orders/edit/:id",
                    name: "admin.orders.edit",
                    component: OrderEdit,
                    props: true,
                },
    // Addons
    {
        path: "/admin/addons",
        name: "admin.addons",
        component: IndexAddons,
        props: true,
    },

    // Categories
    {
        path: "/admin/categories",
        name: "admin.categories",
        component: IndexCategories,
        props: true,
    },

    // Sizes
    {
        path: "/admin/sizes",
        name: "admin.sizes",
        component: IndexSizes,
        props: true,
    },
    // Borders
    {
        path: "/admin/borders",
        name: "admin.borders",
        component: IndexBorders,
        props: true,
    },

    // Prdoucts
    {
        path: "/admin/products",
        name: "admin.products",
        component: ProductIndex,
        props: true,
    },
    {
        path: "/admin/products/create",
        name: "admin.products.create",
        component: ProductCreate,
        props: true,
    },
    {
        path: "/admin/products/edit/:id",
        name: "admin.products.edit",
        component: ProductEdit,
        props: true,
    },






];

export default createRouter({
    history: createWebHistory(),
    routes,
})
