<template>
    <div>
      <h1>Manage Foods</h1>
      <button @click="showAddForm = !showAddForm">Add New Food</button>
  
      <!-- Daftar Makanan -->
      <table v-if="foods.length > 0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="food in foods" :key="food.id">
            <td>{{ food.name }}</td>
            <td>{{ food.description }}</td>
            <td>{{ food.price }}</td>
            <td><img :src="'/storage/' + food.image" alt="Food Image" width="100"></td>
            <td>
              <button @click="deleteFood(food.id)">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
      
      <!-- Form Menambah Makanan -->
      <FormMenu v-if="showAddForm" @foodAdded="getFoods"/>
    </div>
  </template>
  
  <script>
  import FormMenu from './FormMenu.vue';
  
  export default {
    components: {
      FormMenu,
    },
    data() {
      return {
        foods: [],
        showAddForm: false,
      };
    },
    mounted() {
      this.getFoods();
    },
    methods: {
      getFoods() {
        fetch('/foods')
          .then(response => response.json())
          .then(data => {
            this.foods = data;
          })
          .catch(error => console.error("Error fetching foods:", error));
      },
      deleteFood(id) {
        fetch(`/foods/${id}`, {
          method: 'DELETE',
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          },
        })
        .then(() => {
          this.getFoods();
        })
        .catch(error => console.error("Error deleting food:", error));
      },
    },
  };
  </script>
  
  <style scoped>
  /* Styling */
  </style>
  