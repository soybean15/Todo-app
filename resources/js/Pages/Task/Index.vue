<template>
    <nav-bar>
        <h1 class="text-3xl font-bold">{{ filter }}</h1>
        <p>Your main content goes here.</p>
        <create-task />

        <div class=" max-w-[700px]">
            <TaskList :items="tasks" />

        </div>





    </nav-bar>
</template>

<script setup>
import CreateTask from '../../Components/CreateTask.vue';
import NavBar from '../../Components/NavBar.vue';
import TaskList from '../../Components/TaskList.vue';

defineProps({ filter: String ,tasks:Array})



</script>

<style></style>
