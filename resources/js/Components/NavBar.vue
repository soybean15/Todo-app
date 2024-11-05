<template>
    <div class="">
      <button
        @click="toggleSidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 text-sm text-gray-500 rounded-lg ms-3 sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
          <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z" />
        </svg>
      </button>

      <aside
        id="cta-button-sidebar"
        :class="[
          'fixed top-0 left-0 z-40 w-64 h-screen transition-transform',
          sidebarOpen ? 'translate-x-0' : '-translate-x-full',
          'lg:translate-x-0 lg:block'
        ]"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
          <button
            @click="toggleSidebar"
            type="button"
            class="absolute text-gray-500 t
  components: { FloatingButton },
  components: { FloatinButton },
  components: { FloatinButton },op-4 right-4 sm:hidden">
            <span class="sr-only">Close sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 9.293l4.646-4.647a1 1 0 011.415 1.414L11.414 10l4.647 4.646a1 1 0 01-1.414 1.415L10 11.414l-4.646 4.646a1 1 0 01-1.415-1.415L8.586 10 3.939 5.354a1 1 0 011.415-1.414L10 9.293z" clip-rule="evenodd" />
            </svg>
          </button>
          <ul class="space-y-2 font-medium">
            <li>
              <a  class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                </svg>
                <span class="ms-3">Todo App</span>
              </a>
            </li>
            <li>
              <Link href="/task/upcoming" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Upcoming</span>
                <span class="inline-flex items-center justify-center px-2 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ms-3 dark:bg-gray-700 dark:text-gray-300">Pro</span>
              </Link>
            </li>
            <li>
              <Link href="/task/today" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 1a9 9 0 0 0-8.482 5.12A7.992 7.992 0 0 0 10 20a7.992 7.992 0 0 0 8.482-5.88A9 9 0 0 0 10 1Zm1 10h-2v2h2v-2Zm0-4h-2v2h2V7Z" />
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Today</span>
              </Link>
            </li>
          </ul>
        </div>
      </aside>

      <main class="flex-1 p-4 lg:ml-64"> <!-- Added lg:ml-64 for main content -->
        <slot></slot>


        <floating-button/>

      </main>
    </div>
  </template>

  <script setup>
  import { ref } from 'vue';
import FloatingButton from './FloatingButton.vue';
import { Link } from '@inertiajs/vue3';


  // Sidebar state
  const sidebarOpen = ref(false);

  // Function to toggle sidebar visibility
  const toggleSidebar = () => {
    sidebarOpen.value = !sidebarOpen.value;
  };
  </script>

  <style scoped>
  /* Add custom styles here if needed */
  </style>
