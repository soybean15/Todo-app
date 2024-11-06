<template>
    <div v-if="success.message">
        <div class="toast toast-center">

            <div class="flex alert alert-success flex-between">
                <span v-if="success.message">{{ success.message }}</span>
                <div class="" v-if="success.action == 'delete'" @click="onUndo(success._object)">Undo</div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  success: Object,
  onUndo:Function

});

</script>

<style>

</style>
