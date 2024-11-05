
<template>

<span class="text-red-400">Hello {{ counter }}!</span>

</template>

<script setup>
  import {ref} from 'vue'
  const counter = ref(0)
  setInterval(() => counter.value++, 1000)
</script>
