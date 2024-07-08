<template>
  <div class="max-w-sm w-full bg-white p-3 rounded-lg overflow-hidden shadow-lg h-[250px]">
    <img :src="imageSrc" alt="Exercise Image" class="w-full h-1/2 object-cover border-b-2">
    <div class="px-2 py-4">
      <div class="font-bold text-app-blue text-md mb-2 text-center">{{ truncateString(exerciseName, 15) }}</div>
    </div>
    <button
      class="btn overflow-hidden relative w-full bg-white lg:bg-app-blue text-app-blue lg:text-white border-2 border-app-blue lg:border-0 py-1 px-1 rounded-lg font-bold uppercase -- before:block before:absolute before:h-full before:w-full before:bg-blue-900 before:left-0 before:top-0 before:-translate-y-full xl:hover:bg-blue-900 active:bg-app-blue active:text-white xl:active:bg-white xl:active:text-app-blue xl:active:border-2 xl:active:border-app-blue before:transition-transform"
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
