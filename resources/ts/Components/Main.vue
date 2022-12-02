<template>
    <div>
        <a :href="route('auth.deactivate')">Deactivate</a>
        <h1>Simple Battle Simulator</h1>
    </div>
</template>

<script lang="ts" setup async>
import {API} from "../Classes/API";

console.log(await API.Battle.test())

</script>


<style lang="scss" scoped>

</style>
