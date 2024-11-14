<!-- resources/js/components/EditModal.vue -->
<template>
    <div v-if="isOpen" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center">
      <div class="bg-white p-5 rounded-lg shadow-lg w-96">
        <h2 class="text-xl font-bold mb-4">Edit Food</h2>
        <form @submit.prevent="handleSubmit">
          <div class="mb-4">
            <label for="name" class="block text-sm font-semibold">Food Name</label>
            <input
              type="text"
              id="name"
              v-model="editedFood.name"
              class="mt-2 block w-full p-2 border border-gray-300 rounded-md"
              required
            />
          </div>
  
          <div class="mb-4">
            <label for="description" class="block text-sm font-semibold">Description</label>
            <textarea
              id="description"
              v-model="editedFood.description"
              class="mt-2 block w-full p-2 border border-gray-300 rounded-md"
              required
            ></textarea>
          </div>
  
          <div class="mb-4">
            <label for="price" class="block text-sm font-semibold">Price</label>
            <input
              type="number"
              id="price"
              v-model="editedFood.price"
              class="mt-2 block w-full p-2 border border-gray-300 rounded-md"
              required
            />
          </div>
  
          <div class="flex justify-end">
            <button type="button" @click="close" class="mr-2 px-4 py-2 bg-gray-500 text-white rounded-md">Cancel</button>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Save</button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, defineProps, defineEmits } from 'vue';
  
  const props = defineProps({
    isOpen: Boolean,
    food: Object,
  });
  
  const emit = defineEmits(['close', 'save']);
  
  const editedFood = ref({ ...props.food });
  
  function handleSubmit() {
    emit('save', editedFood.value);
    close();
  }
  
  function close() {
    emit('close');
  }
  </script>
  
  <style scoped>
  /* Modal styling can be refined if needed */
  </style>
  