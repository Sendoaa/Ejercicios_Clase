<template>
  <div>
    <form @submit.prevent="guardarNota" id="formulario">
      <label for="titulo">Titulo: </label>
      <input type="text" id="titulo" v-model="titulo" />
      <br><br>

      <label for="descripción">Descripción: </label>
      <input type="text" id="descripción" v-model="descripción" />
      <br><br>

      <input type="submit" value="Guardar">
    </form>
    <br><br>
    <br><br>

    <div style="background-color:grey; width: 500px; padding: 5px; border-radius: 5px;">
      <h2>{{ titulo }} </h2>
      <h3>{{ descripción }}</h3>
    </div>

    <br><br>
    <h1> Notas guardadas</h1>
    <hr>

    <div id="notas">
      <div v-for="(nota, index) in notas" :key="index"
        style="background-color:lightgrey; width: 500px; padding: 5px; border-radius: 5px; margin-bottom: 10px;">
        <h2>{{ nota.titulo }}</h2>
        <h3>{{ nota.descripción }}</h3>

        <input type="button" value="Borrar" @click="borrarNota(index)">
        <input type="button" value="Modificar" @click="modificarNota(index)">

      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

let titulo = ref('');
let descripción = ref('');
let notas = ref([]);

const guardarNota = () => {
  console.log("Titulo:", titulo.value);
  console.log("Descripción:", descripción.value);

  notas.value.push({
    titulo: titulo.value,
    descripción: descripción.value
  });

  // Limpiar los valores del formulario
  titulo.value = '';
  descripción.value = '';

  console.log(notas.value);
};

const borrarNota = (index) => {
  notas.value.splice(index, 1);
};

const modificarNota = (index) => {
  titulo.value = notas.value[index].titulo;
  descripción.value = notas.value[index].descripción;
  notas.value.splice(index, 1);
};
</script>