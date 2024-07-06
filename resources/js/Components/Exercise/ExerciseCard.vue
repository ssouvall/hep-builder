<template>
  <div class="max-w-sm w-full bg-white p-3 rounded-lg overflow-hidden shadow-lg h-[250px]">
    <img :src="imageSrc" alt="Exercise Image" class="w-full h-5/8 object-cover border-b-2">
    <div class="px-2 py-4">
      <div class="font-bold text-app-blue text-md mb-2 text-center">{{ truncateString(exerciseName, 15) }}</div>
    </div>
    <button
      class="btn overflow-hidden relative w-full bg-app-blue text-white py-1 px-1 rounded-lg font-bold uppercase -- before:block before:absolute before:h-full before:w-full before:bg-blue-900 before:left-0 before:top-0 before:-translate-y-full hover:before:translate-y-0 before:transition-transform"
      @click="$emit('add-exercise', exercise)"
    >
      <span class="relative">Add +</span>
    </button>
  </div>
</template>

<script setup>
import { truncateString } from '@/utils/stringUtils.js'

const props = defineProps({
  imageSrc: {
    type: String,
    required: true
  },
  exerciseName: {
    type: String,
    required: true
  },
  exercise: {
    type: Object,
    required: true
  }
});
</script>

<style scoped>
</style>
