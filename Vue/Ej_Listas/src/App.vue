<template>
  <h1>Renderizado</h1>
  <ul>
    <li v-for="dia in laborables">{{ dia }}</li>
  </ul>

<h2>Array de objetos</h2>
<ul>
  <li v-for="tarea in tareas">{{ index }} - {{ tarea.nombre }} - <small>{{ tarea.prioridad }}</small></li>
</ul>

<h2>Renderizar objeto</h2>
<ul>
  <li v-for="(value, key, index) in objetAttr"> {{ index }} - {{ key }} {{ value }}</li>
</ul>

</template>

<script setup>
const laborables=['Lunes','Martes','Miercoles','Jueves','Viernes'];

const tareas =[
  { nombre: 'estudiar vue', prioridad: 'baja' },
  { nombre: 'estudiar laravel', prioridad: 'alta' },
  { nombre: 'hacer la cama', prioridad: 'media' }
];

const objetAttr={
  id:'contenedor' ,
  class:'rojo',
  style:'background-color:gray'
}
</script>