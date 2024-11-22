<template>

  <h1>Gestor de notas</h1>
  <form @submit.prevent="addnota">
    <input type="text" v-model="newNota" @keydown.enter="addnota">
    <button type="submit">Agregar nota</button>
  </form>
  <hr>
  <h2>Listado de las notas creadas</h2>
  <ul>
    <li v-for="(nota, index) in notas" :key="index">
      <input type="text" v-model="nota.text">
      <button @click="deleteNota(index)">Eliminar</button>
    </li>
  </ul>

</template>

<script setup>

import { ref } from 'vue'
const notas = ref([])
const newNota = ref('')

const addnota = () => {
  notas.value.push({ text: newNota.value })
  newNota.value = ''
}

const deleteNota = (index) => {
  notas.value.splice(index)
}

</script>