<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import ExerciseCard from '../Components/Exercise/ExerciseCard.vue';
const props = defineProps({
    exercises: Array
});
const imageSrc = "/img/hep_builder_landing.png";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">HEP Builder</h2>
        </template>

        <div class="py-12 bg-gray-200">
            <div class="container mx-auto p-4 flex">

                <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    <ExerciseCard
                        class="my-5"
                        v-for="exercise in exercises"
                        :key="exercise.id"
                        :imageSrc=imageSrc
                        :exerciseName="exercise.title"
                    />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>