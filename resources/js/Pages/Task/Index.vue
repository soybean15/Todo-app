<template>
    <nav-bar>
        <div class="max-w-[700px] bg-base-200 p-5 rounded-md">
        <div>
            <h1 class="text-2xl font-bold ">{{ filter }}</h1>
            <p>Your main content goes here.</p>
        </div>

        <div class="flex items-center justify-between ">
            <create-task >
                <template v-slot="{ openModal }">
                    <button class="btn btn-accent" @click="openModal()">Create Task</button>
      <!-- You can also include other elements here that need to call openModal -->
                </template>


            </create-task>
            <div >
                <radial-progress :value="progress" />

            </div>

        </div>



        <div class="">
            <TaskList :items="tasks" />

        </div>


    </div>


    </nav-bar>
</template>

<script setup>
import CreateTask from '../../Components/CreateTask.vue';
import NavBar from '../../Components/NavBar.vue';
import TaskList from '../../Components/TaskList.vue';
import RadialProgress from '../../Components/RadialProgress.vue';


defineProps({ filter: String, tasks: Array, progress: Number })



</script>

<style></style>
