<template>

    <div class="h-16 w-screen flex items-center justify-between shadow-lg fixed top-0">
        <h5 class="font-bold text-2xl m-3.5 justify-self-start">
            <router-link to="/">LVTODO</router-link>
        </h5>

        <nav class="m-3.5">
            <router-link to="/" class="mx-2">Home</router-link>
            <!-- <a class="mx-2" href="#">Login</a>
            <a class="mx-2" href="#">Register</a> -->
        </nav>

    </div>

</template>

<script>
export default {
    name: 'Header'
}
</script>

<style>

</style>