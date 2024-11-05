<template>
    <div class="">
        <button @click="toggleSidebar" type="button"
            class="inline-flex items-center p-2 mt-2 text-sm text-gray-500 rounded-lg ms-3 sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z" />
            </svg>
        </button>

        <aside id="cta-button-sidebar" :class="[
            'fixed top-0 left-0 z-40 w-64 h-screen transition-transform',
            sidebarOpen ? 'translate-x-0' : '-translate-x-full',
            'lg:translate-x-0 lg:block'
        ]" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                <button @click="toggleSidebar" type="button" class="absolute text-gray-500 t
  components: { FloatingButton },
  components: { FloatinButton },
  components: { FloatinButton },op-4 right-4 sm:hidden">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 9.293l4.646-4.647a1 1 0 011.415 1.414L11.414 10l4.647 4.646a1 1 0 01-1.414 1.415L10 11.414l-4.646 4.646a1 1 0 01-1.415-1.415L8.586 10 3.939 5.354a1 1 0 011.415-1.414L10 9.293z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                            <span class="text-lg font-bold ms-3">Todo App</span>
                        </a>
                    </li>

                    <li v-for="(item, index) in menu" :key="index">
                        <Link :href="item.route"
                        :class="{'bg-gray-300 dark:bg-gray-700': isActive(item.route)}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <span class="flex-1 ms-3 whitespace-nowrap">{{ item.label }}</span>

                        </Link>
                    </li>

                </ul>
            </div>
        </aside>

        <main class="flex-1 p-4 lg:ml-64"> <!-- Added lg:ml-64 for main content -->
            <slot></slot>



        </main>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { Link,usePage } from '@inertiajs/vue3';



const sidebarOpen = ref(false);

const menu =
[
    {label:'Upcoming',route:'/task/upcoming'},
    {label:'Today',route:'/task/today'},
    {label:'Overdue',route:'/task/overdue'},


];


const { url } = usePage();

const isActive = (route) => {
  return url.includes(route);
};
const toggleSidebar = () => {
    sidebarOpen.value = !sidebarOpen.value;
};
</script>

<style scoped>
/* Add custom styles here if needed */
</style>
