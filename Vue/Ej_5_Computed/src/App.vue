<template>
  <h1>Añade Tus Datos</h1>
  <form @submit.prevent>
    <input type="text" v-model="nombre" placeholder="Nombre"><br>
    <input type="text" v-model="apellidos" placeholder="Apellidos"><br>
    <input type="number" v-model="fechaNacimiento" placeholder="Año de Nacimiento"><br>
  </form>

  <p>Usted: {{ nombre }} {{ apellidos }} tiene: {{ edad }} años</p>
</template>

<script setup>
import { ref , computed } from 'vue';

const nombre = ref('');
const apellidos = ref('');
const fechaNacimiento = ref('1900');

const edad = computed(() => {
  const añoActual = new Date().getFullYear();
  const fechaNac = fechaNacimiento.value;
  return añoActual - fechaNac;
});
</script>