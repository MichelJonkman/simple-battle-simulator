<template>
    <div class="container">
        <Navbar/>
        <slot/>
    </div>
</template>

<script lang="ts" setup async>
import Navbar from "./Components/Navbar.vue";
</script>


<style lang="scss" scoped>

</style>
