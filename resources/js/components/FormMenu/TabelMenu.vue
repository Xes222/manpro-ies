<!-- resources/js/components/FormMenu/TabelMenu.vue -->
<template>
    <div v-if="foods.length" class="mt-8">
      <h2 class="text-xl font-bold text-center mb-4">Submitted Foods</h2>
      <table class="min-w-full bg-white">
        <thead>
          <tr>
            <th class="py-2 px-4 border">Food Name</th>
            <th class="py-2 px-4 border">Description</th>
            <th class="py-2 px-4 border">Price</th>
            <th class="py-2 px-4 border">Image Preview</th>
            <th class="py-2 px-4 border">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(food, index) in foods" :key="food.id">
            <td class="py-2 px-4 border">{{ food.name }}</td>
            <td class="py-2 px-4 border">{{ food.description }}</td>
            <td class="py-2 px-4 border">{{ food.price }}</td>
            <td class="py-2 px-4 border">
              <img :src="'/storage/' + food.image" alt="Food Image" class="w-16 h-16 object-cover rounded" />
            </td>
            <td class="py-2 px-4 border">
              <button @click="$emit('edit', food)" class="mr-2 px-4 py-2 bg-yellow-500 text-white rounded-md">Edit</button>
              <button @click="$emit('delete', food)" class="px-4 py-2 bg-red-500 text-white rounded-md">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';
  
  const props = defineProps({
    foods: {
      type: Array,
      required: true,
    },
  });
  </script>
  