<template>
    <DefaultLayout>
        <form>
            <h1>New battle</h1>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button class="btn btn-primary">Create</button>
            <RouterLink class="btn btn-secondary" :to="{ name: 'battles.index' }">Back</RouterLink>
        </form>
    </DefaultLayout>
</template>

<script lang="ts" setup async>

import DefaultLayout from "../../Layout/DefaultLayout.vue";
</script>


<style lang="scss" scoped>

</style>
