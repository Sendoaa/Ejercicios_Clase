<template>
  <div>
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" v-model="nombre" />
    <br><br>
    <label for="apellidos">Apellido: </label>
    <input type="text" id="apellidos" v-model="apellidos" />
    <br><br>
    <label for="fechaNac">Fecha de Nacimiento:  </label>
    <input type="date" id="fechaNac" v-model="fechaNac" @change="calcularEdad" />
    <br><br>
    <br><br>
    <p>{{ nombre }} {{ apellidos }} tiene {{ edad }} años</p>
  </div>
</template>

<script setup>
import { ref } from 'vue';

let nombre = ref('');
let apellidos = ref('');
let fechaNac = ref('');
let edad = ref(0);

function calcularEdad() {
  if (fechaNac.value) {
    
    let nacimiento = new Date(fechaNac.value);

    let hoy = new Date();

    let edadCalculada = hoy.getFullYear() - nacimiento.getFullYear();

    let diferenciaDeMes = hoy.getMonth() - nacimiento.getMonth();

    if (diferenciaDeMes < 0 || (diferenciaDeMes === 0 && hoy.getDate() < nacimiento.getDate())) {
      edadCalculada--;
    }

    edad.value = edadCalculada;
  }
}
</script>