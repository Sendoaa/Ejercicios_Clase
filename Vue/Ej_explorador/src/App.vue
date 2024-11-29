<template>
  <h1> Album </h1>

  <div> <!--Lista -->
    <ul>
      <li v-for="album in albums" :key="album.id">

        <h2 style="cursor:pointer" @click="mostrarFotos(album.id)">{{ album.title }}</h2>
      </li>
    </ul>

  </div>

  <div id="alerta">

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
  const photos = ref([])
  try {
    console.log('Album ID:', albumId);
    const responsef = await axios.get(`https://jsonplaceholder.typicode.com/albums/${albumId}/photos?_limit=10`);
    console.log(responsef.data);

   

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

    const formElement = document.createElement('form');
    formElement.id = 'photoForm';

    const inputElement = document.createElement('input');
    inputElement.type = 'text';
    inputElement.placeholder = 'Introduce un URL';
    inputElement.id = 'fototoUrlInput';

    const submitButton = document.createElement('button');
    submitButton.type = 'submit';
    submitButton.textContent = 'Guardar';

    formElement.appendChild(inputElement);
    formElement.appendChild(submitButton);

    formElement.onsubmit = (event) => {
      event.preventDefault();
      guardarFoto();
    };

    insercionDiv.appendChild(formElement);

  } catch (error) {
    console.error('Error fetching album photos:', error);
  }

  const guardarFoto = () => {
     
     const urlNFoto = document.getElementById('fototoUrlInput').value;
      console.log('hola')
      photos.value.push({ url: urlNFoto });
      const imgElement = document.createElement('img');
      imgElement.src = urlNFoto;
      imgElement.alt = 'Nueva Foto';
      imgElement.style.width = '100px';
      imgElement.style.height = '100px';
      document.getElementById('insercion').appendChild(imgElement);
 
    };
 
  
};



</script>
