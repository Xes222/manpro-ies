<template>
  <div class="max-w-4xl mx-auto mt-5 p-5 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center mb-6">Add Food</h2>
    <form @submit.prevent="submit" enctype="multipart/form-data">
      <div class="mb-4">
        <label for="name" class="block text-sm font-semibold">Food Name</label>
        <input
          type="text"
          id="name"
          v-model="form.name"
          class="mt-2 block w-full p-2 border border-gray-300 rounded-md"
          required
        />
      </div>

      <div class="mb-4">
        <label for="description" class="block text-sm font-semibold">Description</label>
        <textarea
          id="description"
          v-model="form.description"
          class="mt-2 block w-full p-2 border border-gray-300 rounded-md"
          required
        ></textarea>
      </div>

      <div class="mb-4">
        <label for="price" class="block text-sm font-semibold">Price</label>
        <input
          type="number"
          id="price"
          v-model="form.price"
          class="mt-2 block w-full p-2 border border-gray-300 rounded-md"
          required
        />
      </div>

      <div class="mb-4">
        <label for="image" class="block text-sm font-semibold">Image</label>
        <input
          type="file"
          id="image"
          @change="handleImageChange"
          class="mt-2 block w-full p-2 border border-gray-300 rounded-md"
          required
        />
      </div>

      <button
        type="submit"
        class="mt-4 w-full py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600"
      >
        Save Food
      </button>
    </form>
  </div>
</template>

<script setup>
import { useForm, router } from '@inertiajs/vue3';
import { ref } from 'vue';

const form = useForm({
  name: null,
  description: null,
  price: null,
  image: null,
});

const imagePreview = ref(null);

function handleImageChange(event) {
  const file = event.target.files[0];
  form.image = file;

  // Preview the selected image
  if (file) {
    const reader = new FileReader();
    reader.onload = () => {
      imagePreview.value = reader.result;
    };
    reader.readAsDataURL(file);
  } else {
    imagePreview.value = null;
  }
}

function submit() {
  form.post('/foods', {
    forceFormData: true, // Ensures file uploads are sent as multipart/form-data
    onSuccess: () => {
      clearForm();
      router.get(route('foods.index')); // Redirect after successful form submission
    },
  });
}
</script>

<style scoped>
/* Styling with Tailwind CSS is already applied, no need for additional custom styles */
</style>
