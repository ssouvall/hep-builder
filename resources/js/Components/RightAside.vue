<template>
  <div
    :class="['fixed top-0 block right-0 h-full w-full lg:w-[30rem] xl:w-[40rem] bg-white shadow-lg transition-transform transform', isOpen ? 'translate-y-0' : 'translate-y-full lg:translate-y-0']"
    @click.self="closeMenu"
  >
    <div class="pt-4">
      <div @click="closeMenu" class="flex lg:hidden justify-between h-[6vh] px-12 py-6 mt-12 bg-app-blue w-full text-white text-lg font-bold">
        <div>{{`${selectedExercises?.length} exercises added`}}</div>
        <div>
          <svg
            class="fill-current h-5 w-5 text-white mr-3"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M10 8.586l4.95-4.95a1 1 0 011.414 1.414L11.414 10l4.95 4.95a1 1 0 01-1.414 1.414L10 11.414l-4.95 4.95a1 1 0 01-1.414-1.414L8.586 10 3.636 5.05a1 1 0 011.414-1.414L10 8.586z"
              clip-rule="evenodd"
            />
          </svg>
        </div>
      </div>
      <nav class="flex w-full h-full">
        <div class="w-full flex mx-auto py-8">
          <HEPBuilder :selectedItems="selectedExercises" />
        </div>
      </nav>
    </div>
  </div>
</template>

<script setup>
import { ref, watch } from 'vue';
import HEPBuilder from "@/Components/Builder/HEPBuilder.vue"

const props = defineProps({
  selectedExercises: {
    type: Array,
    required: true
  },
  open: {
    type: Boolean,
    required: true
  },
  close: {
    type: Function,
    required: true
  }
});


const emit = defineEmits(['update:open']);

const isOpen = ref(props.open);

watch(() => props.open, (newVal) => {
  isOpen.value = newVal;
});

const closeMenu = () => {
  props.close();
  isOpen.value = false;
};
</script>
