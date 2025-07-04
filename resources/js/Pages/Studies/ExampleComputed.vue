<script setup>
import { ref, computed } from 'vue';

const nome = ref('');
const nomeMaiusculo = computed(() => {
    return nome.value.toUpperCase();
});

</script>

<template>
    <p>O computed cria um valor derivado do campo desejado que se atualiza automaticante.</p>
    <p>Enquanto o watch é utilizado para quando um valor mudar chamar uma função ou algo do tipo.</p>
    <input v-model="nome" placeholder="Digite seu nome" />
    <p>Nome em maiúsculas: {{ nomeMaiusculo }}</p>
</template>
