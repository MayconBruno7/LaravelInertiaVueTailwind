<script setup>
import { switchTheme } from "../theme";
import NavLink from "../Components/NavLink.vue";
import { Link, usePage } from "@inertiajs/vue3";
import { computed, ref } from "vue";

const page = usePage();
const user = computed(() => page.props.auth.user);

const show = ref(false);
</script>

<template>
    <div v-show="show" @click="show = false" class="fixed inset-0 z-40"></div>

    <header class="bg-slate-800 text-white">
        <nav
            class="p-6 mx-auto max-w-screen-lg flex items-center justify-between"
        >
            <NavLink routeName="home" componentName="Home">Home</NavLink>

            <div class="flex items-center space-x-6">
                <div v-if="user" class="relative">
                    <div
                        @click="show = !show"
                        class="flex items-center gap-2 px-3 py-1 rounded-lg hover:bg-slate-700 cursor-pointer"
                        :class="{ 'bg-slate-700': show }"
                    >
                        <p>{{ user.name }}</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>

                    <div
                        v-show="show"
                        @click="show = false"
                        class="absolute z-50 top-16 right-0 bg-slate-800 text-white rounded-lg border-slate-300 border overflow-hidden w-40"
                    >
                        <Link
                            class="block w-full px-6 py-3 hover:bg-slate-700 text-left"
                            >Dashboard</Link
                        >

                        <Link
                            :href="route('logout')"
                            method="post"
                            as="button"
                            class="block w-full px-6 py-3 hover:bg-slate-700 text-left"
                            >Logout</Link
                        >
                    </div>
                </div>

                <!-- Final v-if -->

                <div class="relative">
                    <div
                        @click="show = !show"
                        class="flex items-center gap-2 px-3 py-1 rounded-lg hover:bg-slate-700 cursor-pointer"
                        :class="{ 'bg-slate-700': show }"
                    >
                        <p>Estudos</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>

                    <div
                        v-show="show"
                        @click="show = false"
                        class="absolute z-50 top-16 right-0 bg-slate-800 text-white rounded-lg border-slate-300 border overflow-hidden w-40"
                    >
                        <Link
                            :href="route('exampleRef')"
                            method="get"
                            as="button"
                            class="block w-full px-6 py-3 hover:bg-slate-700 text-left"
                            >Exemplo de ref</Link
                        >

                        <Link
                            :href="route('exampleWatch')"
                            method="get"
                            as="button"
                            class="block w-full px-6 py-3 hover:bg-slate-700 text-left"
                            >Exemplo de Watch</Link
                        >

                        <Link 
                            :href="route('exampleComputed')"
                            method="get"
                            as="button"
                            class="block w-full px-6 py-3 hover:bg-slate-700 text-left"
                            >Exemplo de Computed</Link>

                        <Link 
                            :href="route('exampleProps')"
                            method="get"
                            as="button"
                            class="block w-full px-6 py-3 hover:bg-slate-700 text-left"
                            >Exemplo de Props</Link>

                        <Link 
                            :href="route('exampleVModel')"
                            method="get"
                            as="button"
                            class="block w-full px-6 py-3 hover:bg-slate-700 text-left"
                            >Exemplo de V-Model</Link>

                        <Link 
                            :href="route('exampleVFor')"
                            method="get"
                            as="button"
                            class="block w-full px-6 py-3 hover:bg-slate-700 text-left"
                            >Exemplo de V-For</Link>

                        <Link 
                            :href="route('exampleVIf')"
                            method="get"
                            as="button"
                            class="block w-full px-6 py-3 hover:bg-slate-700 text-left"
                            >Exemplo de V-IF</Link>  
                            
                        <Link 
                            :href="route('exampleEmit')"
                            method="get"
                            as="button"
                            class="block w-full px-6 py-3 hover:bg-slate-700 text-left"
                            >Exemplo de Emit</Link>    
                    </div>
                </div>

                <div class="space-x-6">
                    <NavLink routeName="login" componentName="Auth/Login"
                        >Login</NavLink
                    >
                    <NavLink routeName="register" componentName="Auth/Register"
                        >Register</NavLink
                    >
                </div>

                <button
                    @click="switchTheme"
                    class="hover:bg-slate-700 w-6 h-6 grid place-items-center rounded-full hover:outline outline-1 outline-white"
                >
                    <i class="fa-solid fa-circle-half-stroke"></i>
                </button>
            </div>
        </nav>
    </header>

    <main class="p-6 mx-auto max-w-screen-lg">
        <slot />
    </main>
</template>