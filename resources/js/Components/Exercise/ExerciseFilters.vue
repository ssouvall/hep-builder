<template>
  <div>
    <!-- Sidenav for md and greater breakpoints -->
    
      <aside class="hidden md:flex flex-col w-64 w-0 bg-white h-full md:fixed p-12">
        <h3 class="font-semibold text-lg mb-4">Filters</h3>
        <div>
          <label>
            <input type="checkbox" v-model="filters.category1">
            Category 1
          </label>
        </div>
        <div>
          <label>
            <input type="checkbox" v-model="filters.category2">
            Category 2
          </label>
        </div>
     </aside>

    <!-- Dropdown for sm breakpoint -->
    <div class="md:hidden relative">
      <button @click="toggleDropdown" class="flex items-center px-4 py-2 bg-gray-800 text-white rounded">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 6a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2zm0 6a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2z" />
        </svg>
        Filters
      </button>
      <div v-if="isDropdownOpen" class="absolute right-0 mt-2 w-full bg-white rounded shadow-lg p-4">
        <h3 class="font-semibold text-lg mb-4">Filters</h3>
        <!-- Add your filters here -->
        <div>
          <label>
            <input type="checkbox" v-model="filters.category1">
            Category 1
          </label>
        </div>
        <div>
          <label>
            <input type="checkbox" v-model="filters.category2">
            Category 2
          </label>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const filters = ref({
  category1: false,
  category2: false,
});

const isDropdownOpen = ref(false);

const toggleDropdown = () => {
  isDropdownOpen.value = !isDropdownOpen.value;
};
</script>

<style scoped>
/* Additional styles if needed */
</style>
