<template>
  <div class="flex w-full rounded-lg bg-white relative">
    <input
      v-model="searchString"
      class="w-full border-none bg-transparent px-4 py-4 text-gray-400 outline-none focus:outline-none"
      name="search"
      placeholder="Search Exercises..."
    />
    <button
      v-if="searchString"
      @click="clearSearch"
      class="absolute right-12 top-3 p-1"
      type="button"
    >
      <svg
        class="fill-current h-5 w-5 text-app-blue mr-3"
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
    </button>
    <button
      @click="handleSearch"
      class="p-2 rounded-r-lg bg-app-blue px-4 py-2 text-white"
      type="button"
    >
      <svg
        class="fill-current h-6 w-6"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        version="1.1"
        id="Capa_1"
        x="0px"
        y="0px"
        viewBox="0 0 56.966 56.966"
        style="enable-background:new 0 0 56.966 56.966;"
        xml:space="preserve"
        width="512px"
        height="512px"
      >
        <path
          d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"
        />
      </svg>
    </button>
  </div>
</template>

<script setup>
import { ref, watch } from 'vue';

const props = defineProps({
  search: {
    type: Function,
    required: true
  }
});

const searchString = ref('');

watch(searchString, (newVal) => {
  props.search(newVal);
});

const handleSearch = () => {
  props.search(searchString.value);
};

const clearSearch = () => {
  searchString.value = '';
  handleSearch();
};
</script>

<style scoped>
</style>
