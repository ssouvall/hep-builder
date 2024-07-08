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
    const matchingExercises = props.exercises.filter(e => e.title?.toLowerCase().includes(searchString?.toLowerCase()));
    console.log(props.exercises)
    searchedExercises.value = matchingExercises;
}

searchedExercises.value = props.exercises;

const isRightAsideOpen = ref(false);

const toggleRightAside = () => {
  isRightAsideOpen.value = !isRightAsideOpen.value;
};

const closeRightAside = () => {
  isRightAsideOpen.value = false;
};

</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">HEP Builder</h2>
    </template>

    <div class="p-12 pb-24 bg-gray-100 h-[90vh] overflow-y-scroll">
      <ExerciseSearch :search="searchExercises" />

      <div class="container mx-auto flex">
        <div class="flex-1 mt-12 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
          <ExerciseCard
            v-for="exercise in searchedExercises"
            :key="exercise.id"
            :exercise="exercise"
            :imageSrc="exercise.image"
            :exerciseName="exercise.title"
            @add-exercise="addExercise"
          />
        </div>
      </div>
    </div>
    <div @click="toggleRightAside" class="flex lg:hidden justify-between h-[6vh] px-12 py-4 bg-app-blue absolute bottom-0 w-full rounded-t-lg text-white text-lg font-bold">
      <div>{{`${selectedExercises?.length} exercises added`}}</div>
      <div>
        <svg 
          xmlns="http://www.w3.org/2000/svg" 
          viewBox="0 0 24 24" 
          fill="none" 
          stroke="currentColor" 
          stroke-width="2" 
          stroke-linecap="round" 
          stroke-linejoin="round" 
          class="h-6 w-6"
        >
          <path 
            d="M6 9l6 6 6-6" 
          />
        </svg>

      </div>
    </div>
    <RightAside :selectedExercises="selectedExercises" :open="isRightAsideOpen" :close="closeRightAside" />
  </AuthenticatedLayout>
</template>


