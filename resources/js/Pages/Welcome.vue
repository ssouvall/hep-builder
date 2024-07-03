<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-white text-black/50 dark:bg-black dark:text-white/50">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex items-center">
                        <img src="/img/hep_builder_logo.svg" alt="Logo">
                    </div>
                    <nav v-if="canLogin" class="lg:col-span-2 lg:col-start-3 flex justify-end">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-full mr-4 mb-4 md:mb-0"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="border border-blue-500 hover:bg-blue-500 hover:text-white text-blue-500 font-bold py-3 px-6 rounded-full mb-4 md:mb-0"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 ml-3 rounded-full mr-4 mb-4 md:mb-0"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </header>

                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8 lg:h-screen">
                        <div class="flex flex-col items-start gap-6 overflow-hidden p-6 ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div class="container py-5">
                                <div class="text-center md:text-left">
                                    <h1 class="text-4xl md:text-5xl font-bold text-blue-500 mb-4">
                                        Easy Home Exercise Prescription to Empower your Patients
                                    </h1>
                                    <h2 class="text-4xl md:text-3xl font-bold text-black mb-8">
                                        Digital Exercise Programs for Busy Patients and Providers
                                    </h2>
                                    <div class="flex flex-wrap">
                                        <Link
                                            v-if="canRegister"
                                            :href="route('register')"
                                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 ml-3 rounded-full mr-4 mb-4 md:mb-0"
                                        >
                                            Register
                                        </Link>
                                         <Link
                                            class="border border-blue-500 hover:bg-blue-500 hover:text-white text-blue-500 font-bold py-3 px-6 rounded-full mb-4 md:mb-0"
                                        >
                                            Learn More
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <img src="/img/hep_builder_landing.png" alt="Image" class="object-cover object-center w-full h-full">
                    </div>
                </main>


                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
                </footer>
            </div>
        </div>
    </div>
</template>
