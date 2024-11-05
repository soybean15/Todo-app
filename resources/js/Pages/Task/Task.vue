<template>
    <nav-bar>

        <div v-if="success.message">
        <div class="toast toast-center">

            <div class="flex alert alert-success flex-between">
                <span v-if="success.message">{{ success.message }}</span>
                <div class="" v-if="success.action == 'delete'" @click="restoreTask(success._object)">Undo</div>
            </div>
        </div>
    </div>
        <div class="max-w-[700px] bg-base-200 p-5 rounded-md">
            <h1 class="text-2xl font-bold ">{{ task.title }}</h1>
            <p>{{ task.description }}</p>



        <form @submit.prevent="submitForm">

            <Input label="Title" placeholder="Add Title" type="text" v-model="form.title" />
            <div class="text-red-400" v-if="form.errors.title">{{ form.errors.title }}</div>
            <Input label="Description" placeholder="Add Description" type="text" v-model="form.description" />
            <div class="text-sm text-red-400" v-if="form.errors.description">{{ form.errors.description }}</div>

            <Input label="Start Date" placeholder="Add Description" type="date" v-model="form.start_date" />
            <div class="text-sm text-red-400" v-if="form.errors.start_date">{{ form.errors.start_date }}</div>


            <Input label="End Date" placeholder="Add Description" type="date" v-model="form.due_date" />
            <div class="text-sm text-red-400" v-if="form.errors.due_date">{{ form.errors.due_date }}</div>



            <div class="flex justify-end space-x-2">

                <button class="btn btn-accent" type="submit">Update</button>

            </div>
        </form>
    </div>
    </nav-bar>

</template>

<script setup>
import NavBar from '../../Components/NavBar.vue';
import Input from '../../Components/Input.vue';
import { useForm } from '@inertiajs/vue3'
import {ref} from 'vue';


const props =defineProps({ task: Object })//how to get the value here


console.log(props.task)
const success = ref({
    action: null,
    message: null,
    _object: null
});
const form = useForm({
    id:props.task.id,
    title:props.task.title,
    description:props.task.description,
    start_date:props.task.start_date,
    due_date:props.task.due_date,
});


const submitForm = () => {
    form.post('/task/update',
        {
            preserveScroll: true,
            onSuccess: () => {


                success.value.message = 'Item Updated!'

                setTimeout(() => {
                    success.value.message = null; // or ''
                }, 5000); // 5000ms = 5 seconds
            },
            onError: (e) => console.log(e)
        })

}
</script>

<style></style>
