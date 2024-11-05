<template>
<label class="w-full form-control">
  <div class="label">
    <span class="label-text">{{ label }}</span>

  </div>


  <input :type="type" v-model="model" :placeholder="placeholder" class="w-full input input-bordered" />
  <div class="label">
    <span class="label-text-alt">{{ hint }}</span>

  </div>
</label>
</template>

<script setup>
import { defineProps } from 'vue';
const model = defineModel()
const props = defineProps({
  type: String,
  placeholder: String,
  hint: String,
  label: String,

});
</script>

<style>

</style>
