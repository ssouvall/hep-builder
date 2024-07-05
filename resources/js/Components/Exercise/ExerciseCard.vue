<template>
  <div class="max-w-sm w-full bg-white p-3 rounded overflow-hidden shadow-lg h-72">
    <img :src="imageSrc" alt="Exercise Image" class="w-full h-1/2 object-cover border-b-2">
    <div class="px-6 py-4">
      <div class="font-bold text-app-blue text-xl mb-2 text-center">{{ exerciseName }}</div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ExerciseCard',
  props: {
    imageSrc: {
      type: String,
      required: true
    },
    exerciseName: {
      type: String,
      required: true
    }
  }
}
</script>

<style scoped>
</style>
