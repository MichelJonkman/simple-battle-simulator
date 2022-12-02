import { createApp } from 'vue';
import App from './App.vue';
import '../scss/app.scss';
import {route} from "./helpers";
import 'bootstrap';

createApp(App)
    .mixin({ methods: { route: route } })
    .mount('#app');
