import BattleIndex from './Components/Pages/Battle/Index.vue';
import BattleForm from './Components/Pages/Battle/Form.vue';

export const routes = [
    { path: '/', component: BattleIndex, name: 'battle.index' },
    { path: '/new', component: BattleForm, name: 'battle.new' },
    { path: '/battle/:id', component: BattleForm, name: 'battle.view' }
];
