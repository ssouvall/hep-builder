<template>
  <div class="relative text-center max-h-screen w-full p-4 bg-white">
    <div class="max-h-full overflow-y-scroll pb-32">
      <h1 class="text-xl mb-6">Home Exercise Program Builder</h1>
      <input 
        v-model="name" 
        type="text" 
        placeholder="Enter Program Name..." 
        class="mb-4 p-2 border border-gray-300 rounded w-full"
      />

      <div v-for="item in selectedItems" :key="item.id" class="w-full flex items-center bg-white shadow p-4 mb-4 rounded-lg h-40">
        <!-- Image -->
        <div class="w-1/8 h-24 flex-shrink-0">
          <img src="/img/hep_builder_landing.png" alt="Item Image" class="h-full w-full object-cover rounded-l-lg" />
        </div>

        <!-- Item Details -->
        <div class="w-6/8 px-4">
          <div class="text-center font-semibold mb-2">{{ item.title }}</div>
          <div class="grid grid-cols-2 gap-2">
            <div class="flex items-center">
                <label :for="'weekly-' + item.id" class="text-sm font-medium text-gray-700 mr-2">x Weekly:</label>
                <input :id="'weekly-' + item.id" type="number" class="p-1 border border-gray-300 rounded w-16" />
            </div>
            <div class="flex items-center">
                <label :for="'daily-' + item.id" class="text-sm font-medium text-gray-700 mr-2">x Daily:</label>
                <input :id="'daily-' + item.id" type="number" class="p-1 border border-gray-300 rounded w-16" />
            </div>
            <div class="flex items-center">
                <label :for="'sets-' + item.id" class="text-sm font-medium text-gray-700 mr-2">Sets:</label>
                <input :id="'sets-' + item.id" type="number" class="p-1 border border-gray-300 rounded w-16" />
            </div>
            <div class="flex items-center">
                <label :for="'reps-' + item.id" class="text-sm font-medium text-gray-700 mr-2">Reps:</label>
                <input :id="'reps-' + item.id" type="number" class="p-1 border border-gray-300 rounded w-16" />
            </div>
            <div class="flex items-center">
                <label :for="'hold-' + item.id" class="text-sm font-medium text-gray-700 mr-2">Hold:</label>
                <input :id="'hold-' + item.id" type="number" class="p-1 border border-gray-300 rounded w-16" />
            </div>
          </div>
        </div>

        <!-- Remove Button -->
        <div class="w-1/8 flex-shrink-0 flex justify-center items-center">
          <button @click="removeItem(item.id)" class="text-red-500 hover:text-red-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div class="sticky bottom-0 left-0 right-0 bg-white p-4">
      <button 
        class="btn overflow-hidden relative w-1/2 bg-white text-app-blue py-1 px-1 border-app-blue border-2 rounded-l-lg font-bold uppercase -- before:block before:absolute before:h-full before:w-full before:bg-blue-900 before:left-0 before:top-0 before:-translate-y-full"
      >
        Export as PDF
      </button>
      <button 
        class="btn overflow-hidden relative w-1/2 bg-app-blue text-white py-1 px-1 border-app-blue border-2 rounded-r-lg font-bold uppercase -- before:block before:absolute before:h-full before:w-full before:bg-blue-900 before:left-0 before:top-0 before:-translate-y-full before:transition-transform"
      >
        Save
      </button>
    </div>

  </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
  selectedItems: Array
});

const name = ref('');

const removeItem = (id) => {
  const index = props.selectedItems.findIndex(item => item.id === id);
  if (index !== -1) {
    props.selectedItems.splice(index, 1);
  }
};
</script>
