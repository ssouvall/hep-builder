<template>
    <div class="fixed inset-0 overflow-y-auto flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
      <div class="bg-white max-w-3xl h-[95vh] mx-auto rounded-lg overflow-y-auto">
        <div class="sticky flex justify-between p-6 top-0 bg-white w-full h-12 mt-0">
          <button @click="closeModal" class="text-gray-600 hover:text-gray-800 focus:outline-none">
              <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
          </button>
          <div v-if="canEdit">
            <!---<button 
              @click="closeModal" 
              class="btn overflow-hidden relative w-18 bg-app-blue text-white border-2 border-app-blue py-1 px-1 rounded-lg font-bold before:block before:absolute before:h-full before:w-full before:bg-blue-900 before:left-0 before:top-0 before:-translate-y-full xl:hover:bg-blue-900 xl:hover:border-blue-900 active:bg-app-blue active:text-white xl:active:bg-white xl:active:text-app-blue xl:active:border-2 xl:active:border-app-blue before:transition-transform"
            >
              Edit
            </button>-->
            <button 
              @click="deleteExercise" 
              class="btn ml-3 overflow-hidden relative w-18 bg-red-600 text-white border-2 border-red-600 py-1 px-1 rounded-lg font-bold before:block before:absolute before:h-full before:w-full before:bg-blue-900 before:left-0 before:top-0 before:-translate-y-full xl:hover:bg-blue-900 xl:hover:border-blue-900 active:bg-app-blue active:text-white xl:active:bg-white xl:active:text-app-blue xl:active:border-2 xl:active:border-app-blue before:transition-transform"
            >
              Delete
            </button>
          </div>
        </div>
        <div class="p-6">
          <h2 class="text-center text-2xl font-bold mb-4">{{ exercise.title }}</h2>
          <img :src="exerciseImage" alt="Exercise image" @error="setBackupImage" />
          
          <div class="mt-12">
              <label for="description" class="my-8 font-bold text-lg"><u>Description</u></label>
              <p>{{ exercise.description }}</p>
          </div>

          <div class="mt-12">
              <label for="instructions" class="my-8 font-bold text-lg"><u>Instructions</u></label>
              <p>{{ exercise.instructions  }}</p>
          </div>

          <button @click="closeModal" class="mt-4 bg-gray-200 hover:bg-gray-300 py-2 px-4 rounded-md text-gray-800">Close</button>`
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { useForm } from '@inertiajs/vue3';
  import { toast } from "vue3-toastify";
  
  const props = defineProps({
    exercise: Object,
    isOpen: Boolean,
    canEdit: Boolean,
    onClose: Function,
  });
  
  const exerciseImage = props.exercise?.image || 'img/ImgPlaceholder.png';

  const closeModal = () => {
    props.onClose();
  };

  const editExercise = () => {
    // Handle edit exercise
  };
  
  const form = useForm({});

  const deleteExercise = () => {
    if (confirm('Are you sure you want to delete this exercise?')) {
      form.delete(`/exercises/${props.exercise.id}`, {
        onSuccess: () => {
            closeModal();
            toast("Exercise Successfully Deleted!", {
            "theme": "auto",
            "type": "success",
            "position": "top-center"
          })
        },
      });
    }
  };

  const setBackupImage = (event) => {
    event.target.src = '/img/ImgPlaceholder.png';
  };
  </script>
  
  <style scoped>
  </style>
  