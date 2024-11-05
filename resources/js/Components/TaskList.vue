<template>
    <div v-if="success.message">
        <div class="toast toast-center">

            <div class="flex alert alert-success flex-between">
                <span v-if="success.message">{{ success.message }}</span>
                <div class="" v-if="success.action == 'delete'" @click="restoreTask(success._object)">Undo</div>
            </div>
        </div>
    </div>
    <div class="my-3" v-for="item in items" :key="item.id">

        <div class="p-5 rounded-lg bg-accent" :class="{ 'opacity-50': item.completed_at }">
            <div class="flex items-start justify-between">
                <div class="text-lg font-bold">
                    {{ item.title }}
                    <div class="text-xs font-normal"> {{ formatDate(item.created_at) }}</div>
                </div>
                <div class="dropdown dropdown-bottom dropdown-end">
                    <div tabindex="0" role="button" class="m-1 btn btn-ghost btn-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <circle cx="5" cy="12" r="2" />
                            <circle cx="12" cy="12" r="2" />
                            <circle cx="19" cy="12" r="2" />
                        </svg>

                    </div>
                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li>

                            <Link :href="`/task/show/${item.id}`">Edit</Link>


                        </li>
                        <li><a @click="confirmDelete(item)">Delete</a></li>
                    </ul>
                </div>

            </div>
            <div class="flex items-center justify-between">
                <div class="text-sm text-neutral">{{ item.description }}</div>

                <input type="checkbox" :checked="item.completed_at" class="mx-2 bg-white checkbox"
                    @click="completeTask(item)" />

            </div>
        </div>




    </div>
</template>

<script setup>

import { defineProps, ref } from 'vue';
import moment from 'moment';
import { useForm } from '@inertiajs/vue3'

import { Link } from '@inertiajs/vue3';


const success = ref({
    action: null,
    message: null,
    _object: null
});
const closeDropdown = () => {
    const elem = document.activeElement;
    if (elem) {
        elem?.blur();
    }
};
const completeTask = (task) => {
    const form = useForm({
        task_id: task.id,
    })

    form.post('/task/toggle-task',
        {
            preserveScroll: true,
            onSuccess: () => closeDropdown(),
            onError: (e) => console.log(e)
    })

}

const confirmDelete = (item) => {
    const confirmed = confirm('Are you sure you want to delete this item?');
    if (confirmed) {
        deleteTask(item); // Call your delete function if confirmed
    }
};

const deleteTask = (task) => {
    const form = useForm({
        task_id: task.id,
    })
    form.post('/task/destroy',
        {
            preserveScroll: true,
            onSuccess: () => {
                success.value.action = 'delete'
                success.value._object = task
                success.value.message = 'Successfuly Deleted!'
                closeDropdown()
                setTimeout(() => {
                    success.value.message = null; // or ''
                }, 5000); // 5000ms = 5 seconds
            },
            onError: (e) => console.log(e)
        })
}

const restoreTask = (task) => {
    const form = useForm({
        task_id: task.id,
    })
    form.post('/task/restore',
        {
            preserveScroll: true,
            onSuccess: () => {
                success.value.action = 'restore'
                success.value._object = task
                success.value.message = 'Item Restored!'
                closeDropdown()
                setTimeout(() => {
                    success.value.message = null; // or ''
                }, 5000); // 5000ms = 5 seconds
            },
            onError: (e) => console.log(e)
        })
}



const props = defineProps({
    items: {
        type: Array,
        required: true
    }
});

const formatDate = (dateString) => {

    return moment(dateString).fromNow();
};



const handleOpenModal = (item) => {
    console.log('Modal opened'); // This function will be called when the modal opens
    return
    // Additional logic to handle when the modal is opened
};
</script>

<style></style>
