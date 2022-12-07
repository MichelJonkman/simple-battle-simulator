<template>
    <div class="toast-container">
        <Toast v-for="toast in toasts.toasts" :toast="toast"/>
    </div>
</template>

<script lang="ts" setup async>
import Toast from "./Toasts/Toast.vue";
import {toasts} from "../../Classes/Toasts";
</script>


<style lang="scss" scoped>
.toast-container {
    position: fixed;
    bottom: 1rem;
    right: 1rem;
}
</style>
