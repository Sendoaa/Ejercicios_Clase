<template>

<h1>Listado de albumes</h1>

<ul>
  <li v-for="album in albumes" :key="album.id">
    <h2 style="cursor: pointer;">{{ album.title }}</h2>
  </li>
</ul>

</template>

<script setup>

import axios from 'axios';
import { ref, onMounted } from 'vue';

const albumes = ref([])

onMounted(() => {
  cargarAlbumes()
})

const cargarAlbumes = async () => {
  try {
    const response = await axios.get('https://jsonplaceholder.typicode.com/todos?_limit=5');
    albumes.value = response.data
  } catch (error) {
    console.error('Error al cargar los albumes', error)
  }
}

const cargarfotos = async () => {
  try {
    
  } catch (error) {
    console.error('Error al cargar los albumes', error)
  }
}

</script>