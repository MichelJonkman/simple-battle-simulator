<template>
    <DefaultLayout>
        <RouterLink class="btn btn-primary" :to="{ name: 'battles.new' }">New battle</RouterLink>
    </DefaultLayout>
</template>

<script lang="ts" setup async>
import DefaultLayout from "../../Layout/DefaultLayout.vue";
import {inject} from "vue";
</script>


<style lang="scss" scoped>

</style>
