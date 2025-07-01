<script setup>
import { ref } from 'vue';

    const myInput = ref(null);
    const buttonClick = ref(false);
    let countButtonClick = ref(0);
    let count = ref(0);

    function click() {
        myInput.value.focus();
        buttonClick.value = true;
        countButtonClick.value++;
    }

    console.log(countButtonClick);

    function increment(){
        count.value++;
    }

    function decrement(){
        count.value--;
    }
</script>

<template>
    <h1>Exemplo de REF</h1>
    <p class="mb-3">Dentro do vue podemos dizer que o ref funciona como se fosse o ID do DOM mesmo porém ele não substitui o ID do DOM e é somente visto pelo VueJS</p>
    <input ref="myInput" type="text">
    <button @click="click">Testar clique</button>

    <div v-if="buttonClick">
        <p>Você clicou no botão {{ countButtonClick }} vezes!</p>
    </div>
    <div v-else>
        <p>O botão ainda não foi clicado!</p>
    </div>
    
    <p class="mt-3">Nesse caso é criada uma referencia do input e após o clique do botão é chamada a função de clique do botão que coloca o input focado</p>
    <br>
    <br>

    <h5>Incremento e Decremento</h5>


    <p v-if="count"> {{ count }}</p>
    <div class="flex gap-4 justify-start">
        <button @click="increment">Incrementar</button>
        <button @click="decrement">Decrementar</button>
    </div>
</template>