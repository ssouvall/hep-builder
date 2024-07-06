<template>
  <div
    :class="['fixed top-0 block right-0 h-full w-[40rem] bg-white shadow-lg transition-transform transform', isOpen ? 'translate-x-0' : 'translate-x-full']"
    @click.self="closeMenu"
  >
    <div class="pt-4">
      <button @click="closeMenu" class="text-gray-700 hover:text-gray-900">
        Close
      </button>
      <nav class="flex w-full h-full">
        <div class="w-full flex mx-auto py-8">
          <HEPBuilder :selectedItems="selectedExercises" />
        </div>
      </nav>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import HEPBuilder from "@/Components/Builder/HEPBuilder.vue"

const isOpen = ref(true);

function openMenu() {
  isOpen.value = true;
}

function closeMenu() {
  isOpen.value = false;
}

const props = defineProps({
  selectedExercises: {
    type: Array,
    required: true
  }
});
</script>
