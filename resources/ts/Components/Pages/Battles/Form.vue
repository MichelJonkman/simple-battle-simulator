<template>
    <DefaultLayout>
        <form @submit="submit" ref="form">
            <h1>New battle</h1>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button class="btn btn-primary">Create</button>
            <RouterLink class="btn btn-secondary" :to="{ name: 'battles.index' }">Back</RouterLink>
        </form>
    </DefaultLayout>
</template>

<script lang="ts" setup async>
import DefaultLayout from "../../Layout/DefaultLayout.vue";
import {ref} from "vue";
import {API} from "../../../Classes/API";
import type {BattleInterface} from "../../../Classes/API/Battle";

const form = ref<HTMLFormElement>()

async function submit(e: Event) {
    e.preventDefault();

    let data = Object.fromEntries(new FormData(form.value)) as unknown as BattleInterface;
    console.log(await API.Battle.create(data));
}
</script>


<style lang="scss" scoped>

</style>
