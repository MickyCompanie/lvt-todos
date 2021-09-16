<template>
    <div>
        <button @click="deleteTask" class="bg-red-100 text-red-400 rounded shadow p-2 mx-2">delete</button>
        <button @click="doneTask" class="bg-green-100 text-green-400 rounded shadow p-2 mx-2">done</button>
    </div>
</template>

<script>
export default {
    name : 'Clickable',
    methods: {
        deleteTask(){
            console.log('coucou delete');
        },

        doneTask(){
            console.log('coucou done');
        }
    }
}
</script>

<style>

</style>