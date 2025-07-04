<script setup>
const pessoa = {
  nome: 'João',
  idade: 30,
  profissao: 'Desenvolvedor'
}
</script>

<template>
    <p>É de fato o for do VueJS</p>
    <br>
  <ul>
    <li v-for="(valor, chave) in pessoa" :key="chave">
      {{ chave }}: {{ valor }}
    </li>
  </ul>
</template>
