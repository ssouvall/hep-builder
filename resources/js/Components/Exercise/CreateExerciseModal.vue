
<template>
    <div class="fixed inset-0 overflow-y-auto flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
        <div class="fixed inset-0 z-50 flex items-center justify-center px-4 py-6">
            <div class="bg-white h-[95vh] overflow-y-scroll  rounded-lg shadow-xl p-4 w-full max-w-md">
                <button class="p-2 text-gray-500 hover:text-gray-800" @click="closeModal">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M13.414 10l4.293-4.293a1 1 0 0 0-1.414-1.414L12 8.586 7.707 4.293a1 1 0 0 0-1.414 1.414L10.586 10l-4.293 4.293a1 1 0 0 0 1.414 1.414L12 11.414l4.293 4.293a1 1 0 0 0 1.414-1.414L13.414 10z" clip-rule="evenodd" />
                  </svg>
                </button>
                
                <h2 class="text-lg text-center font-semibold mb-4">Create New Exercise</h2>
                
                <form @submit.prevent="createExercise">
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="title" v-model="form.title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-app-blue focus:ring focus:ring-app-blue focus:ring-opacity-50">
                </div>
                
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" v-model="form.description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-app-blue focus:ring focus:ring-app-blue focus:ring-opacity-50"></textarea>
                </div>
                
                <div class="mb-4">
                    <label for="instructions" class="block text-sm font-medium text-gray-700">Instructions</label>
                    <textarea id="instructions" v-model="form.instructions" rows="5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-app-blue focus:ring focus:ring-app-blue focus:ring-opacity-50"></textarea>
                </div>
                
                <div class="mb-4">
                    <img
                      v-if="imagePreviewUrl"
                      :src="imagePreviewUrl"
                      class="max-w-xs max-h-xs mt-4"
                      alt="Image preview"
                    />
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" v-on:change="handleFileChange" class="mt-1 block w-full" />
                </div>                
                <div class="mt-6">
                    <button type="submit" class="w-full bg-app-blue text-white py-2 px-4 rounded-md hover:bg-app-dark-blue">Create Exercise</button>
                </div>
                </form>
            </div>
        </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from "vue";
  import { useForm } from "@inertiajs/vue3";
  import { toast } from "vue3-toastify";

  const form = useForm({
    title: "",
    description: "",
    instructions: "",
    image: ""
  });

  const props = defineProps({
    exercise: Object,
    isOpen: Boolean,
    onClose: Function
  });

  const imagePreviewUrl = ref(null);
  const isLoading = ref(false);

  const handleFileChange = (event) => {
    form.image = event.target.files[0];
    if (form.image) {
      imagePreviewUrl.value = URL.createObjectURL(form.image);
    }
  }
  
  const closeModal = () => {
    props.onClose();
  };

  const createExercise = async () => {
    isLoading.value = true;

    try {
        const response = await form.post('/exercises');
        isLoading.value = false;
        closeModal(); 
        form.reset(); 
        imagePreviewUrl.value = null;

        toast("Exercise Successfully Created!", {
          "theme": "auto",
          "type": "success",
          "position": "top-center"
        })
    } catch (error) {
        isLoading.value = false;
        console.error('Error creating exercise:', error);
        toast("There was a problem creating the exercise", {
          "theme": "auto",
          "type": "error",
          "position": "top-center"
        })
    }
};
  
  </script>
  
  <style scoped>
  </style>
  