<template>
    <div class="container">
        <Toasts/>
        <Navbar/>
        <slot/>
    </div>
</template>

<script lang="ts" setup async>
import Navbar from "./Components/Navbar.vue";
import Toasts from "../General/Toasts.vue";
</script>


<style lang="scss" scoped>

</style>
