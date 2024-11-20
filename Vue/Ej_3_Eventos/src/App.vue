<template>
  <h1>Eventos</h1>
  <!--
  <button v-on:click=mensajeConsola>Pulsame</button>
  <button @click=mensajeConsola>Pulsame</button>
  <hr>

   <form @submit.prevent="submitPulsado">
    <input type="text" @keydown="teclaPulsada">
    <button type="submit" @keydown.enter="submitPulsado">Enviar</button>
  </form> -->

  <button @click="mensajeConsola2('Este mensaje va como parametro')">Btn mensaje</button>
  <button @click.middle="mensajeConsola2('Click central')">Pulsa el boton central</button>
  <button @click.right.prevent="mensajeConsola2('Click derecho')">Pulsa el boton derecho</button>


</template>

<script setup>
const mensajeConsola = () => {
  alert('Has dado click en el boton');
}

const mensajeConsola2 = (texto) => {
  alert(texto);
}

//2 Formas de hacer la misma funcion teclaPulsada
function teclaPulsada(event){
  console.log(event.key);
}

// function teclaPulsada = (event) => {
//   console.log(event.key);
// }

const submitPulsado = () => {
  alert('Has pulsado el boton de submit');
}
</script>