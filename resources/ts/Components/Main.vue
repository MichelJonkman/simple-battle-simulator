<template>
    <div class="container">
        <Navbar/>
        <h1>Simple Battle Simulator</h1>
    </div>
</template>

<script lang="ts" setup async>
import {API} from "../Classes/API";
import Navbar from "./Layout/Navbar.vue";

console.log(await API.Battle.test())

</script>


<style lang="scss" scoped>

</style>
