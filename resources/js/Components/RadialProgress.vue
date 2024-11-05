<template>


    <div class="radial-progress text-primary" :style="{ '--value': value  }" role="progressbar">
      {{ value.toFixed(2) }}%
    </div>
  </template>

  <script setup>
  import { defineProps } from 'vue';

  const props = defineProps({
    value: {
      type: Number,
      required: true,
    },
  });
  </script>

  <style>
</style>
