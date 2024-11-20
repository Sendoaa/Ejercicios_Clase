<style>
.rojo {
  color: red;
}

.verde {
  color: green;
}
</style>

<template>
  <h1>Reactividad</h1>

  <p :class="contador < 0 ? 'rojo' : 'verde'">Contador: {{ contador }}</p>
  <button @click="incrementar">+</button>
  <button @click="decrementar">-</button>
  <button @click="resetear">Reset</button>
  <br>
  <input type="text" v-model="contador"/>

</template>

<script setup>
import { ref } from 'vue';
const contador = ref(0);

const incrementar = () => {
  contador.value++;
}

const decrementar = () => {
  contador.value--;
}

const resetear = () => {
  contador.value = 0;
}

</script>