<script setup>
import { ref } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import ExerciseCard from '@/Components/Exercise/ExerciseCard.vue';
import ExerciseSearch from '@/Components/Exercise/ExerciseSearch.vue';
import RightAside from '@/Components/RightAside.vue';

const props = defineProps({
  exercises: Array
});
const imageSrc = "/img/hep_builder_landing.png";

// State for selected exercises
const selectedExercises = ref([]);
const searchedExercises = ref([]);

// Method to add an exercise to the selectedExercises array
const addExercise = (exercise) => {
  if (!selectedExercises.value.some(e => e.id === exercise.id)) {
    selectedExercises.value.push(exercise);
  }
};

const searchExercises = (searchString) => {
    console.log(selectedExercises)
    const matchingExercises = selectedExercises.value.filter(e => e.title.includes(searchString));
    searchedExercises.value = matchingExercises;
}

searchedExercises.value = props.exercises;
</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">HEP Builder</h2>
    </template>

    <div class="p-12 bg-gray-100">
      <ExerciseSearch :search="searchExercises" />

      <div class="container mx-auto flex">
        <div class="flex-1 mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
          <ExerciseCard
            v-for="exercise in searchedExercises"
            :key="exercise.id"
            :exercise="exercise"
            :imageSrc="imageSrc"
            :exerciseName="exercise.title"
            @add-exercise="addExercise"
          />
        </div>
      </div>
    </div>
    <RightAside :selectedExercises="selectedExercises" />
  </AuthenticatedLayout>
</template>
