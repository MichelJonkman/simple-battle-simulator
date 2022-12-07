<template>
    <div>
        toast
    </div>
</template>

<script lang="ts" setup async>

import {defineProps} from "vue";
import type {ToastInterface} from "@/Classes/Toasts";

defineProps<{
    toast: ToastInterface,
}>()

</script>


<style lang="scss" scoped>

</style>
