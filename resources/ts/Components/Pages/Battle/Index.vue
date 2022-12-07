<template>
    <DefaultLayout>
        <RouterLink class="btn btn-primary" :to="{ name: 'battle.new' }">New battle</RouterLink>

        <button @click="toasts.addToast({name: 'test', content: 'testje', ttl: 2000})">test</button>
    </DefaultLayout>
</template>

<script lang="ts" setup async>
import DefaultLayout from "../../Layout/DefaultLayout.vue";
import {inject} from "vue";
import {API} from "../../../Classes/API";
import {toasts} from "../../../Classes/Toasts";

const battles = await API.Battle.index();

console.log(battles);
</script>


<style lang="scss" scoped>

</style>
