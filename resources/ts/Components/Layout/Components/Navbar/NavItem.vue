<template>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" :href="href"><slot/></a>
    </li>
</template>

<script lang="ts" setup async>
import {defineProps} from "vue";

defineProps<{
    href: string,
}>()
</script>


<style lang="scss" scoped>
.nav-item {
    @include media-breakpoint-up('lg') {
        margin: .25rem;
    }

    .nav-link {
        padding-left: .75rem;
        padding-right: .75rem;

        border-radius: 0;
        color: $body-color;
        background: rgba($body-bg, 0.25);

        @include media-breakpoint-up('lg') {
            border-radius: $border-radius;

            background: darken($body-bg, 2%);
        }

        &:hover {
            background: $primary;
        }
    }
}
</style>
