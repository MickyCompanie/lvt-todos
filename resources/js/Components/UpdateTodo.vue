<template>
<div>
    <h1 class="text-2xl text-gray-700 text-center mb-4 font-bold">
        Add a Task
    </h1>

    <div class="ml-4">
        
        <div class="">
            <label for="" class="font-medium">Title</label>
            <br/>
            <input class="rounded-lg shadow-inner m-4 bg-gray-50" type="text" id="" placeholder=" Enter the title">
        </div>

        <div>
            <label for="" class="font-medium">Content</label>
            <br/>
            <input class="rounded-lg shadow-inner m-4 bg-gray-50" type="text" id="" placeholder=" Enter the content">
        </div>

        <div>
            <label for="" class="font-medium">Other</label>
            <br/>
            <input class="rounded-lg shadow-inner m-4 bg-gray-50" type="text" id="" placeholder=" Other">
        </div>

    </div>

        <div class="h-30 flex flex-wrap justify-center content-center py-4">
            <button class="bg-green-100 rounded shadow p-2 mx-2" @click="addTask">Add the task</button>
        </div>
</div>
            

</template>

<script>
export default {
    name: 'Add',
    methods: {
        addTask(){
            console.log('AddTask');
        }
    }
}
</script>

<style>

</style>