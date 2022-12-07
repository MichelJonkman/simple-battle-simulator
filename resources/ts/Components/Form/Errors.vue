<template>
    <div v-if="Object.keys(errors).length > 0" class="alert alert-danger" role="alert">
        <ul class="list-unstyled mb-0" v-for="error of errors">
            <li v-for="line of error">{{ line }}</li>
        </ul>
    </div>
</template>

<script lang="ts" setup async>
import {formErrors} from "../../Classes/FormErrors";
import {ref, watch} from "vue";

const errors = ref({});

watch(formErrors, async () => {
    errors.value = formErrors.getPurge();
});
</script>


<style lang="scss" scoped>

</style>
