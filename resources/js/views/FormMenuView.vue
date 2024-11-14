<!-- resources/js/views/FormMenuView.vue -->
<template>
  <div>
    <FormMenu @foodSubmitted="addFood" />
    <TableMenu :foods="submittedData" @edit="openEditModal" @delete="deleteFood" />

    <!-- Edit Modal -->
    <EditModal
      v-if="isEditModalOpen"
      :isOpen="isEditModalOpen"
      :food="currentFood"
      @close="isEditModalOpen = false"
      @save="updateFood"
    />
  </div>
</template>

<script setup>
import { ref } from 'vue';
import FormMenu from '@/components/FormMenu/FormMenu.vue';
import TableMenu from '@/components/FormMenu/TabelMenu.vue';
import EditModal from '@/components/FormMenu/EditModal.vue';

const submittedData = ref([]);
const isEditModalOpen = ref(false);
const currentFood = ref(null);

function addFood(food) {
  submittedData.value.push(food); // Tambahkan data yang diterima dari form
}

function openEditModal(food) {
  currentFood.value = { ...food };
  isEditModalOpen.value = true;
}

function updateFood(updatedFood) {
  const index = submittedData.value.findIndex(item => item.id === currentFood.value.id);
  if (index !== -1) {
    submittedData.value[index] = updatedFood;
  }
  isEditModalOpen.value = false;
}

function deleteFood(food) {
  submittedData.value = submittedData.value.filter(item => item.id !== food.id);
}
</script>
