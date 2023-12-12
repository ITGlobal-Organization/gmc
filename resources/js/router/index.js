import {
    createRouter,
    createWebHistory
} from "vue-router";

import Dashboard from '../components/admin/Dashboard.vue';

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
// Directories
import Directory from '../components/admin/directories/Directory.vue';
import CreateDirectory from '../components/admin/directories/CreateDirectory.vue';
import EditDirectory from '../components/admin/directories/EditDirectory.vue';
// PlatinumPartner
import PlatinumPartner from '../components/admin/platinumpartners/PlatinumPartners.vue';
import CreatePlatinumPartner from '../components/admin/platinumpartners/CreatePlatinumPartners.vue';
import EditPlatinumPartner from '../components/admin/platinumpartners/EditPlatinumPartners.vue';
// SpaceFinders
import SpaceFinder from '../components/admin/spacefinders/SpaceFinder.vue';
import CreateSpaceFinder from '../components/admin/spacefinders/CreateSpaceFinder.vue';
import EditSpaceFinder from '../components/admin/spacefinders/EditSpaceFinder.vue';
// EventCalender
import EventCalender from '../components/admin/eventcalenders/EventCalender.vue';
import CreateEventCalender from '../components/admin/eventcalenders/CreateEventCalender.vue';
import EditEventCalender from '../components/admin/eventcalenders/EditEventCalender.vue';
// Users
import UserIndex from '../components/admin/users/Index.vue';
import UserCreate from '../components/admin/users/Create.vue';
import UserEdit from '../components/admin/users/Edit.vue';

// Offers
import OfferIndex from '../components/admin/offers/Index.vue';
import OfferCreate from '../components/admin/offers/Create.vue';
import OfferEdit from '../components/admin/offers/Edit.vue';

// Directory Category
import CategoryIndex from '../components/admin/categories/Index.vue';


const routes = [

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
    // Directories
    {
        path: "/admin/directory",
        name: "admin.directory",
        component: Directory,
        props: true,
    },
       // Directory Category
    {
        path: "/admin/directory/categories",
        name: "admin.directory.category",
        component: CategoryIndex,
        props: true,
    },
    {
        path: "/admin/directory/create",
        name: "admin.directory.create",
        component: CreateDirectory,
        props: true,
    },
    {
        path: "/admin/directory/edit/:id",
        name: "admin.directory.edit",
        component: EditDirectory,
        props: true,
    },
    // PlatinumPartner
    {
        path: "/admin/platinumpartners",
        name: "admin.platinumpartners",
        component: PlatinumPartner,
        props: true,
    },
    {
        path: "/admin/platinumpartners/create",
        name: "admin.platinumpartners.create",
        component: CreatePlatinumPartner,
        props: true,
    },
    {
        path: "/admin/platinumpartners/edit/:id",
        name: "admin.platinumpartners.edit",
        component: EditPlatinumPartner,
        props: true,
    },
    // SpaceFinder
    {
        path: "/admin/spacefinder",
        name: "admin.spacefinder",
        component: SpaceFinder,
        props: true,
    },
    {
        path: "/admin/spacefinder/create",
        name: "admin.spacefinder.create",
        component: CreateSpaceFinder,
        props: true,
    },
    {
        path: "/admin/spacefinder/edit/:id",
        name: "admin.spacefinder.edit",
        component: EditSpaceFinder,
        props: true,
    },
    // EventCalender
    {
        path: "/admin/eventcalender",
        name: "admin.eventcalender",
        component: EventCalender,
        props: true,
    },
    {
        path: "/admin/eventcalender/create",
        name: "admin.eventcalender.create",
        component: CreateEventCalender,
        props: true,
    },
    {
        path: "/admin/eventcalender/edit/:id",
        name: "admin.eventcalender.edit",
        component: EditEventCalender,
        props: true,
    },
    // Users
    {
        path: "/admin/users",
        name: "admin.users",
        component: UserIndex,
        props: true,
    },
    {
        path: "/admin/users/create",
        name: "admin.users.create",
        component: UserCreate,
        props: true,
    },
    {
        path: "/admin/users/edit/:id",
        name: "admin.users.edit",
        component: UserEdit,
        props: true,
    },

     // Offers
     {
        path: "/admin/offers",
        name: "admin.offers",
        component: OfferIndex,
        props: true,
    },
    {
        path: "/admin/offers/create",
        name: "admin.offers.create",
        component: OfferCreate,
        props: true,
    },
    {
        path: "/admin/offers/edit/:id",
        name: "admin.offers.edit",
        component: OfferEdit,
        props: true,
    },
 







];

export default createRouter({
    history: createWebHistory(),
    routes,
})
