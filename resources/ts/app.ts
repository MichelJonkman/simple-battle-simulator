import { createApp } from 'vue';
import App from './App.vue';
import '../scss/app.scss';
import {route} from "./helpers";

createApp(App)
    .mixin({ methods: { route: route } })
    .mount('#app');
