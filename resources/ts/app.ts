import { createApp } from 'vue';
import App from './App.vue';
import '../scss/app.scss';

createApp(App)
    .mixin({ methods: { route: window.route } })
    .mount('#app');
