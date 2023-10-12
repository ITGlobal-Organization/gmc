require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;
window.swal = require("sweetalert2");

Alpine.start();

import { createApp } from "vue";
import router from "./router";
import Dashboard from "./components/admin/Dashboard.vue";
import Login from "./components/auth/Login.vue";
import { Language } from "./helpers/lang/lang";

window.Language = Language;

const app = createApp({
    components: {
        Dashboard,
        Login
    },
})
    .use(router)
    .mount("#app");
