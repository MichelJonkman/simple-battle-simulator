<template>
    <DefaultLayout>
        <RouterLink class="btn btn-primary" :to="{ name: 'battle.new' }">New battle</RouterLink>
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
