<template>
    
<div>
    <h1 class="text-2xl text-gray-700 text-center mb-4">
        <Statistic/>
    </h1>
    <div class="text-center">
        <!-- comment ca vas ma poule ? :) -->
        <Task/>
        <Task/>
        <Task/>
        <Task/>
    </div>
    <AddBar/>
</div>

</template>

<script>
import Statistic from './todo/Statistic.vue'
import Task from './todo/Task.vue'
import AddBar from './todo/AddBar.vue'

export default {
    name: 'Main',
    components: {
        Statistic,
        Task,
        AddBar
    }
}
</script>

<style>

</style>