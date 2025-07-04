<script setup>
import { ref, watch } from 'vue';

// Exemplo 1 - Monitorando o nome
const nome = ref('');
const exibeNome = ref('');

watch(nome, (novoValor) => {
    console.log('Nome digitado:', novoValor);
    exibeNome.value = novoValor;
});

// Exemplo 2 - Contador reativo
const contador = ref(0);

watch(contador, (novoValor, valorAntigo) => {
    console.log(`Valor mudou de ${valorAntigo} para ${novoValor}`);
});

const teste = ref('');

watch(teste, (novoTeste, testeAntigo) => {
    console.log(novoTeste);
})


</script>

<template>
    
    <!-- Exemplo 1 -->
    <p>O valor digitado no campo abaixo é monitorado em tempo real usando <strong>watch</strong>, e aparece aqui:</p>
    
    <p>Nome digitado: {{ exibeNome }}</p>
    <p>O <strong>v-model</strong> liga diretamente o <strong>HTML</strong> ao ref</p>

    <input v-model="nome" placeholder="Digite seu nome" />

    <input v-model="teste" placeholder="Entendendo o v-model">

    <br><br><br>

    <!-- Exemplo 2 -->
    <div>
        <p>Esse contador usa <strong>ref</strong> para armazenar o valor e <strong>watch</strong> para detectar mudanças, mostrando no console o valor antigo e o novo sempre que for incrementado.</p>

        <p>Valor atual: {{ contador }}</p>
        <button @click="contador++">Incrementar</button>
    </div>
</template>
