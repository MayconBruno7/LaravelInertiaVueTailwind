<script setup>
import { ref } from 'vue'

const mostrarMensagem = ref(false)
</script>

<template>
  <button @click="mostrarMensagem = !mostrarMensagem">
    Alternar Mensagem
  </button>

  <p v-if="mostrarMensagem">
    Esta mensagem só aparece quando 'mostrarMensagem' é verdadeiro.
  </p>
</template>
