import BattlesIndex from './Components/Pages/Battles/Index.vue';
import BattlesForm from './Components/Pages/Battles/Form.vue';

export const routes = [
    { path: '/', component: BattlesIndex, name: 'battles.index' },
    { path: '/new', component: BattlesForm, name: 'battles.new' }
];