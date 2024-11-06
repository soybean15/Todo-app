<template>
    <nav-bar>
        <div class="max-w-[700px] bg-base-200 p-5 rounded-md">
        <div>

            <h1 class="text-2xl font-bold ">{{ filter }}</h1>
            <p>{{ `Task ${filter} ${completedTasks}/${totalTask} ` }}</p>
        </div>

        <div class="flex items-center justify-between ">
            <create-task >
                <template v-slot="{ openModal }">
                    <button class="btn" :class="filter=='Today'?'btn-accent':filter=='Upcoming'?'btn-secondary':'btn-error'" @click="openModal()">Create Task</button>
      <!-- You can also include other elements here that need to call openModal -->
                </template>


            </create-task>
            <div >
                <radial-progress :value="progress" :color="color"/>

            </div>

        </div>



        <div class="">
            <TaskList :items="tasks"  :color="color" />
        </div>


    </div>


    </nav-bar>
</template>

<script setup>
import CreateTask from '../../Components/CreateTask.vue';
import NavBar from '../../Components/NavBar.vue';
import TaskList from '../../Components/TaskList.vue';
import RadialProgress from '../../Components/RadialProgress.vue';
import { computed } from 'vue';

const props = defineProps({
    filter: String,
    tasks: Array,
    progress: Number,
    totalTask:Number,
    completedTasks:Number})

const color = computed(() => {
  if (props.filter === 'Today') return 'accent';
  if (props.filter === 'Upcoming') return 'secondary';
  return 'error';
});

</script>

<style></style>
