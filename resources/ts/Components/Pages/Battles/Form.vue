<template>
    <DefaultLayout>
        <form @submit="submit" ref="form">
            <h1>New battle</h1>

            <Errors/>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button class="btn btn-primary">Create</button>
            <RouterLink class="btn btn-secondary ms-2" :to="{ name: 'battles.index' }">Back</RouterLink>
        </form>
    </DefaultLayout>
</template>

<script lang="ts" setup async>
import DefaultLayout from "../../Layout/DefaultLayout.vue";
import {ref} from "vue";
import {API} from "../../../Classes/API";
import type {BattleInterface} from "../../../Classes/API/Battle";
import Errors from "../../Form/Errors.vue";
import {useRouter} from "vue-router";

const form = ref<HTMLFormElement>();
const router = useRouter();

async function submit(e: Event) {
    e.preventDefault();

    let data = Object.fromEntries(new FormData(form.value)) as unknown as BattleInterface;
    let response = await API.Battle.create(data);

    if (!response) {
        return;
    }

    await router.push({
        name: 'battles.index'
    });
}
</script>


<style lang="scss" scoped>

</style>
