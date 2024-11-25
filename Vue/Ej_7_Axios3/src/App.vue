<template>
  <div>
    <h1>Axios GET POST</h1>
    <h2>Gestor de tareas</h2>
    <select v-model="genero">
      <option value="male">Hombre</option>
      <option value="female">Mujer</option>
    </select>
    <hr>
    <h2>Usuarios</h2>
    <div style="display: flex; flex-wrap: wrap;">
      <div v-for="user in users" :key="user.login.uuid" style="margin: 10px;">
        <img :src="user.picture.thumbnail" alt="Foto de usuario">
      </div>
    </div>

    <h2>Usuarios filtrados</h2>
    <div style="display: flex; flex-wrap: wrap;">
      <div v-for="user in filteredUsers" :key="user.login.uuid" style="margin: 10px;">
        <img :src="user.picture.thumbnail" alt="Foto de usuario">
      </div>
    </div>
  </div>
</template>

<script setup>
import axios from 'axios'
import { ref, onMounted, computed } from 'vue'

const users = ref([])
const genero = ref('male')

onMounted(() => {
  cargarUsuarios()
})

const cargarUsuarios = async () => {
  try {
    const response = await axios.get('https://randomuser.me/api/?results=20')
    users.value = response.data.results
  } catch (error) {
    console.error("Error al traer los usuarios: ", error)
  }
}

const filteredUsers = computed(() => {
  return users.value.filter(user => user.gender === genero.value)
})
</script>