<!-- resources/js/components/FormMenu/FormMenu.vue -->
<template>
  <div class="max-w-4xl mx-auto mt-5 p-5 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center mb-6">Add Food</h2>
    <form @submit.prevent="submitForm" enctype="multipart/form-data">
      <div class="mb-4">
        <label for="name" class="block text-sm font-semibold">Food Name</label>
        <input type="text" id="name" v-model="form.name" class="mt-2 block w-full p-2 border border-gray-300 rounded-md" required />
      </div>

      <div class="mb-4">
        <label for="description" class="block text-sm font-semibold">Description</label>
        <textarea id="description" v-model="form.description" class="mt-2 block w-full p-2 border border-gray-300 rounded-md" required></textarea>
      </div>

      <div class="mb-4">
        <label for="price" class="block text-sm font-semibold">Price</label>
        <input type="number" id="price" v-model="form.price" class="mt-2 block w-full p-2 border border-gray-300 rounded-md" required />
      </div>

      <div class="mb-4">
        <label for="image" class="block text-sm font-semibold">Image</label>
        <input type="file" id="image" @change="handleImageChange" class="mt-2 block w-full p-2 border border-gray-300 rounded-md" required />
      </div>

      <button type="submit" class="mt-4 w-full py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">
        Save Food
      </button>
    </form>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const form = ref({
  name: '',
  description: '',
  price: '',
  image: null,
});

const emit = defineEmits(['foodSubmitted']);

function handleImageChange(event) {
  const file = event.target.files[0];
  form.value.image = file;
}

async function submitForm() {
  const formData = new FormData();
  formData.append('name', form.value.name);
  formData.append('description', form.value.description);
  formData.append('price', form.value.price);
  formData.append('image', form.value.image);

  try {
    const response = await axios.post('/api/foods', formData, {
  headers: { 'Content-Type': 'multipart/form-data' },
});
    emit('foodSubmitted', response.data); // Emit data yang disimpan ke komponen induk
    clearForm();
  } catch (error) {
    console.error("Error submitting form:", error);
  }
}

function clearForm() {
  form.value.name = '';
  form.value.description = '';
  form.value.price = '';
  form.value.image = null;
}
</script>
