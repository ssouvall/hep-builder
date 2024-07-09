<template>
    <div class="max-w-sm w-full bg-white p-3 rounded-lg overflow-hidden shadow-lg h-[250px] flex items-center justify-center">
      <button @click="onClickNewExerciseButton" class="p-2 flex items-center justify-center w-full h-full">
        <img src="/img/NewExerciseButton.png" alt="New Exercise Button" class="h-[200px]">
      </button>
    </div>
</template>
  

<script setup>


const props = defineProps({
onClickNewExerciseButton: Function,
});
</script>