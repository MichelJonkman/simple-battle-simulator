<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="d-flex w-100 justify-content-end">
            <RouterLink class="navbar-brand" :to="{name: 'battle.index'}">{{ $app.game.name }}</RouterLink>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header justify-content-end">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-grow-1 pe-3">
                        <NavItem :href="$route('auth.deactivate')">
                            Deactivate
                        </NavItem>
                        <NavItem :href="$route('auth.deactivate')">
                            Deactivate
                        </NavItem>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

<script lang="ts" setup async>
import NavItem from "./Navbar/NavItem.vue";
</script>


<style lang="scss" scoped>

</style>
