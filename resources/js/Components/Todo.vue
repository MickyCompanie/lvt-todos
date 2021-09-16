<template>
<div>
    <div class="flex items-center content-center justify-between">
        <h1 class="ml-5 text-2xl text-gray-700 text-center mb-4 font-bold">
            Titre de la tâche
        </h1>

        <Clickable/>

    </div>

    <div class="ml-5">
        <nav class="flex items-center content-center">
            <p class="mr-2">tag 1</p>
            <p class="mr-2">tag 2</p>
            <p class="mr-2">tag 3</p>
            <p class="mr-2">tag 4</p>
        </nav>
    </div>

    <div class="mt-3 py-2">
        <p class=" ml-5">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam voluptatibus harum temporibus dignissimos autem. Voluptatibus eum doloremque nostrum illum, labore voluptas magnam cum provident nobis commodi, saepe assumenda aut? Minima.
        </p>
    </div>

    <div>
        <p class="font-extralight text-right mr-5">created by you 2 days ago</p>
    </div>
</div>
    
</template>

<script>
import Clickable from './clickable/Clickable.vue'

export default {
    name: 'Todo',
    components:{
        Clickable
    },
    methods: {
    }
}
</script>

<style>

</style>