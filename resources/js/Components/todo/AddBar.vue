<template>
  
    <div class="h-30 flex flex-wrap justify-center content-center py-4">
        <router-link to="add">
            <button @click="plus" class="rounded-full shadow-md text-6xl text-gray-600 my-3"> + </button>
        </router-link>
    </div>

</template>

<script>
export default {
    name: 'AddBar',
    methods: {
        plus(){
            console.log('PLUS!');
        }
    }
}
</script>

<style>

</style>