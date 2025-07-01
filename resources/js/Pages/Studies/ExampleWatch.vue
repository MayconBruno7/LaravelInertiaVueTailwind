<template>
    
    <!-- exemplo 1 -->
    <p>O valor digitado no campo abaixo é monitorado em tempo real usando <strong>watch</strong>, e aparece aqui:</p>
    
    <p>Nome digitado: {{ exibeNome }}</p>
    <input v-model="nome" placeholder="Digite seu nome" />

    <br><br><br>

    <!-- exemplo 2 -->
    <div>
        <p>Esse contador usa <strong>ref</strong> para armazenar o valor e <strong>watch</strong> para detectar mudanças, mostrando no console o valor antigo e o novo sempre que for incrementado.</p>

        <p>Valor atual: {{ contador }}</p>
        <button @click="contador++">Incrementar</button>
    </div>
</template>
