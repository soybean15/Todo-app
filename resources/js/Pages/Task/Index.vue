<template>
    <nav-bar>
        <h1 class="text-3xl font-bold">{{ filter }}</h1>
        <p>Your main content goes here.</p>

        

        <create-task />

    </nav-bar>
</template>

<script setup>
import CreateTask from '../../Components/CreateTask.vue';
import NavBar from '../../Components/NavBar.vue';

defineProps({ filter: String })
</script>

<style></style>
