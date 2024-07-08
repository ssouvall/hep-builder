<template>
    <div class="max-w-sm w-full bg-white p-3 rounded-lg overflow-hidden shadow-lg h-[250px]">
        <button @click="onClickNewExerciseButton" class="p-2">
            <img src="/img/NewExerciseButton.png" alt="New Exercise Button" class="w-full object-cover">
        </button>
    </div>
</template>

<script setup>


const props = defineProps({
onClickNewExerciseButton: Function,
});
</script>