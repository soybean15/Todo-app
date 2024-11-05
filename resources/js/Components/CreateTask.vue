<template>
    <!-- You can open the modal using ID.showModal() method -->
    <button class="btn" onclick="my_modal_3.showModal()">Add Task</button>
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box">
            <!-- <button @click="onClose" class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">Close</button> -->

            <form method="dialog">
                <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
            </form>

            <h3 class="text-lg font-bold">Add Task</h3>


            <form @submit.prevent="submitForm">

                <Input label="Title" type="text" v-model="task.title"/>
                <Input label="Description" placeholder="Add Dec" type="text" v-model="task.title"/>


                <button class="btn btn-accent" type="submit">Submit</button>
            </form>
        </div>
    </dialog>
</template>

<script setup>
import Input from './Input.vue';
import { ref } from 'vue';


const task = ref({
    title: null,
    description: null
})

const submitForm=()=>{

    console.log(task.value)

}

const onClose = () => {
    document.getElementById('my_modal_3').close();
}

</script>

<style></style>
