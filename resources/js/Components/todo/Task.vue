<template>
  
    <div class="h-30 flex items-center content-center justify-between py-4">

        <input class="ml-3" type="checkbox" name="" id="">

        <div class="text-center">
           <a @click="clickTodo">A thing to do</a>
        </div>

        <Clickable/>

    </div>

</template>

<script>
import Clickable from '../clickable/Clickable.vue'

export default {
    name: 'Task',
    components: {
        Clickable
    },
    methods:{
        clickTodo(){
            console.log('coucou todo');
        },

        deleteTask(){
            console.log('coucou delete');
        },

        doneTask(){
            console.log('coucou done');
        }
    }
}
</script>

<style scoped>
    a{
        cursor: pointer;
    }
</style>