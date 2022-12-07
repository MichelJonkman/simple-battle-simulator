<template>
    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">{{ toast.title }}</strong>
            <button type="button" class="btn-close" aria-label="Close" @click="toasts.removeToast(toast.uuid)"></button>
        </div>
        <div class="toast-body">
            {{ toast.content }}
        </div>
    </div>
</template>

<script lang="ts" setup async>

import {defineProps} from "vue";
import type {ToastInterface} from "@/Classes/Toasts.js";
import {toasts} from "@/Classes/Toasts.js";

defineProps<{
    toast: ToastInterface,
}>();
</script>


<style lang="scss" scoped>

</style>
