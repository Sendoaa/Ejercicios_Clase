<template>
  <h1>Ejemplos interpolacion texto...</h1>
  <h2>{{ msg }} - {{ n1 }}</h2>
  <h2 v-bind:style="h2color"> {{ msg }}</h2>
  <br>
  <button :disabled="activo">Boton1</button>
  <div v-bind="objetAttr">Prueba</div>
  <h3 v-bind:style="h2color">{{ msg.toLocaleUpperCase() }}</h3>
  <h3>{{ activo ? "h2 activo" : "h2 inactivo" }}</h3>
  
  <h3 v-if="activo">Muestra el h3 positivo</h3>
  <h3 v-else-if="activo ===null">h3 nulo</h3>
  <h3 v-else>Muestra el h3 negativo</h3>

  <h3 v-show="activo">Esto desde vshow</h3>
</template>

<script setup>
const msg = "Hola Mundo";
const n1 = 33;
const h2color="color:blue";
const activo = true;
const objetAttr={
  id:'contenedor' ,
  class:'rojo',
  style:'background-color:gray'
}
</script>