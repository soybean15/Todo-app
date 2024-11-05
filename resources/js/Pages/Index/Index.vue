
<template>

    <nav-bar>


        <router-link/>

    </nav-bar>




</template>

<script setup>
import NavBar from '../../Components/NavBar.vue';



  import {ref} from 'vue'
  const counter = ref(0)
  setInterval(() => counter.value++, 1000)
</script>
