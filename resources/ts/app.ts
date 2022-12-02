import { createApp } from 'vue';
import App from './App.vue';
import {createRouter, createWebHashHistory} from 'vue-router';
import {route} from "./helpers";
import {routes} from "./routes";
import '../scss/app.scss';
import 'bootstrap';
import DataPlugin from "./Plugins/DataPlugin";

const router = createRouter({
    history: createWebHashHistory(),
    routes,
})

createApp(App)
    .mixin({ methods: { $route: route } })
    .use(DataPlugin)
    .use(router)
    .mount('#app');
