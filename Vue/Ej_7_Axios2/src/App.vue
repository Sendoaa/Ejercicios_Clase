<template>

  <h1>Axios GET POST</h1>

  <h2>Gestor de tareas</h2>

  <form @submit.prevent="agregarTarea">
    <input type="text" v-model="nuevaTarea.title">
    <button type="submit">Añadir tarea</button>
  </form>
  <hr>
  <h2>Listado de tareas</h2>
  <ul>
    <li v-for="tarea in tareas" :key="tarea.id">
      <input type="checkbox" :checked="tarea.completada" disabled>
      {{ tarea.title }}
    </li>
  </ul>
</template>

  <script setup>
import axios from 'axios'
import { ref, onMounted } from 'vue'

const users = ref([])

const tareas = ref([])
const nuevaTarea = ref({ title: "", completado: false })

onMounted(() => {
  cargarTareas()
})

const cargarTareas = async () => {
  try {
    const response = await axios.get('https://jsonplaceholder.typicode.com/todos?_limit=5')
    tareas.value = response.data
  } catch (error) {
    console.error("Error al traer las tareas: ", error)
  }
}

const agregarTarea = async () => {
  try {
    const response = await axios.post('https://jsonplaceholder.typicode.com/todos', nuevaTarea.value)
    console.log(response)
    tareas.value.push(response.data)
    nuevaTarea.value = { title: "", completado: false }
  } catch (error) {
    console.error("Error al agregar la tarea: ", error)
  }
}
</script>