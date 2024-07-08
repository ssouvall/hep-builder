<template>
    <div class="fixed inset-0 overflow-y-auto flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
      <div class="bg-white p-6 max-w-3xl h-[95vh] mx-auto rounded-lg overflow-y-auto">
        <button @click="closeModal" class="mt-2 text-gray-600 hover:text-gray-800 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <h2 class="text-center text-2xl font-bold mb-4">{{ exercise.title }}</h2>
        <img :src="exercise.image" alt="Exercise image" />

        <div class="mt-12">
            <label for="description" class="my-8 font-bold text-lg"><u>Description</u></label>
            <p>{{ exercise.description }}</p>
        </div>

        <div class="mt-12">
            <label for="instructions" class="my-8 font-bold text-lg"><u>Instructions</u></label>
            <p>{{ exercise.instructions  }}</p>
        </div>

        <button @click="closeModal" class="mt-4 bg-gray-200 hover:bg-gray-300 py-2 px-4 rounded-md text-gray-800">Close</button>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, defineProps } from 'vue';
  
  const props = defineProps({
    exercise: Object,
    isOpen: Boolean,
    onClose: Function,
  });
  
  const closeModal = () => {
    props.onClose();
  };
  </script>
  
  <style scoped>
  </style>
  