<template>
    <DefaultLayout>

        <div class="battles mb-3">
            <RouterLink v-for="battle in battles" class="battle btn btn-dark mb-1" :to="{name: 'battle.view', params: {id: battle.id}}">
                {{ battle.name }}
            </RouterLink>
        </div>

        <RouterLink class="btn btn-primary" :to="{ name: 'battle.new' }">New battle</RouterLink>
    </DefaultLayout>
</template>

<script lang="ts" setup async>
import DefaultLayout from "../../Layout/DefaultLayout.vue";
import {API} from "@/Classes/API.js";

const battles = await API.Battle.index();
</script>


<style lang="scss" scoped>
.battles {
    .battle {
        display: block;
        padding: 1rem;
    }
}
</style>
