<template>
  <div
    :class="['fixed top-0 right-0 h-full w-64 bg-white shadow-lg transition-transform transform', isOpen ? 'translate-x-0' : 'translate-x-full']"
    @click.self="closeMenu"
  >
    <div class="p-4">
      <button @click="closeMenu" class="text-gray-700 hover:text-gray-900">
        Close
      </button>
      <div class="mt-4">
        <!-- Add your fly-out menu content here -->
        <p class="text-lg font-semibold">Fly-out Menu Content</p>
        <!-- Example items -->
        <ul>
          <li><a href="#" class="block mt-2 text-gray-600">Item 1</a></li>
          <li><a href="#" class="block mt-2 text-gray-600">Item 2</a></li>
          <li><a href="#" class="block mt-2 text-gray-600">Item 3</a></li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const isOpen = ref(false);

function openMenu() {
  isOpen.value = true;
}

function closeMenu() {
  isOpen.value = false;
}
</script>
