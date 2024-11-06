<template>
    <!-- You can open the modal using ID.showModal() method -->

    <slot :open-modal="openModal"></slot>

    <dialog id="my_modal_3" class="modal">
        <div class="modal-box">
            <!-- <button @click="onClose" class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">Close</button> -->

            <form method="dialog">
                <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
            </form>

            <h3 class="text-lg font-bold">Add Todo</h3>




            <form @submit.prevent="submitForm">




                <Input  label="Title" placeholder="Add Title"  type="text" v-model="form.title" />
                <div class="text-red-400" v-if="form.errors.title">{{ form.errors.title }}</div>
                <Input label="Description" placeholder="Add Description" type="text" v-model="form.description" />
                <div class="text-sm text-red-400" v-if="form.errors.description">{{ form.errors.description }}</div>

                <Input label="Start Date" placeholder="Add Description" type="date" v-model="form.start_date" />
                <div class="text-sm text-red-400" v-if="form.errors.start_date">{{ form.errors.start_date }}</div>


                <Input label="End Date" placeholder="Add Description" type="date" v-model="form.due_date" />
                <div class="text-sm text-red-400" v-if="form.errors.due_date">{{ form.errors.due_date }}</div>



                <div class="flex justify-end">
                    <button class="btn btn-accent" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </dialog>
</template>

<script setup>
import Input from './Input.vue';
import {  useForm } from '@inertiajs/vue3'
import {ref} from 'vue';




  const form = useForm({
    title: '',
    description: '',
    start_date:  '',
    due_date:  ''
});



const submitForm = () => {
    form.post('/task/store',
        {
            preserveScroll: true,
            onSuccess: () => onClose(),
            onError:(e)=> console.log(e)
        })

}



const onClose = () => {
    document.getElementById('my_modal_3').close();
    form.reset()
}
const openModal=()=>{
    document.getElementById('my_modal_3').showModal()

}


</script>

<style></style>
