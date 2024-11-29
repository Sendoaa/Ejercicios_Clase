<template>
  <h1> Album </h1>

  <div> <!--Lista -->
    <ul>
      <li v-for="album in albums" :key="album.id">

        <h2 style="cursor:pointer" @click="mostrarFotos(album.id)">{{ album.title }}</h2>
      </li>
    </ul>

  </div>

  <div id="insercion"> <!--Fotos -->
   
  </div>

</template>

<style>
a {
  text-decoration: none;
  color: black;
}
</style>

<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue';

const albums = ref([]);

onMounted(async () => {
  try {
    const response = await axios.get('https://jsonplaceholder.typicode.com/albums?_limit=6'); //_limit=6 para que solo muestre 6
    albums.value = response.data;
    console.log(albums.value);
  } catch (error) {
    console.error('Error fetching albums:', error);
  }
});

const mostrarFotos = async (albumId) => {
  try {
    console.log('Album ID:', albumId);
    const responsef = await axios.get(`https://jsonplaceholder.typicode.com/albums/${albumId}/photos?_limit=10`);
    console.log(responsef.data);

    const photos = ref([])

    photos.value = responsef.data;
    console.log(photos.value);

    const insercionDiv = document.getElementById('insercion');
    insercionDiv.innerHTML = '';

    photos.value.forEach(photo => {
      const imgElement = document.createElement('img');
     
      imgElement.src = photo.url;

      imgElement.alt = `Foto album ${albumId}`;

      imgElement.style.width = '100px';
      imgElement.style.height = '100px';
      insercionDiv.appendChild(imgElement);
    });


  } catch (error) {
    console.error('Error fetching album photos:', error);
  }
};

const añadirFotos = async (albumId) => {
try {
  
} catch (error) {
  console.error('Ha ocurrido un error añadiendo la imagen:', error);
}
};
</script>
