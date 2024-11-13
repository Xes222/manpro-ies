<template>
    <div class="min-h-screen bg-red-50 py-16">
      <div class="max-w-md mx-auto bg-red-100 shadow-md rounded p-6 mt-24">
        <h2 class="text-2xl font-semibold mb-4">Form Pemesanan</h2>
        <form @submit.prevent="submitOrder">
          <!-- Nama -->
          <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input
              type="text"
              id="name"
              v-model="order.name"
              required
              placeholder="Masukkan nama"
              class="mt-1 block w-full p-2 border border-gray-300 rounded"
            />
          </div>
    
          <!-- Alamat -->
          <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
            <input
              type="text"
              id="address"
              v-model="order.address"
              required
              placeholder="Masukkan alamat"
              class="mt-1 block w-full p-2 border border-gray-300 rounded"
            />
          </div>
    
          <!-- Menu -->
          <div class="mb-4">
            <label for="menu" class="block text-sm font-medium text-gray-700">Menu</label>
            <select
              id="menu"
              v-model="order.menu"
              required
              class="mt-1 block w-full p-2 border border-gray-300 rounded"
            >
              <option value="" disabled>Pilih menu</option>
              <option value="wanpaku">Wanpaku</option>
              <option value="salad">Salad</option>
              <option value="fruit-sando">Fruit Sando</option>
            </select>
          </div>
    
          <!-- Pembayaran -->
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Metode Pembayaran</label>
            <div class="flex items-center mt-1">
              <input
                type="radio"
                id="cod"
                value="COD"
                v-model="order.paymentMethod"
                required
                class="mr-2"
              />
              <label for="cod" class="mr-4">COD</label>
              <input
                type="radio"
                id="qris"
                value="QRIS"
                v-model="order.paymentMethod"
                required
                class="mr-2"
              />
              <label for="qris">QRIS</label>
            </div>
          </div>
    
          <!-- Submit Button -->
          <button
            type="submit"
            class="w-full bg-red-300 text-black py-2 rounded hover:bg-red-300"
          >
            Pesan Sekarang
          </button>
        </form>
      </div>
    </div>
  </template>
    
  <script>
  export default {
    data() {
      return {
        order: {
          name: "",
          address: "",
          menu: "",
          paymentMethod: "",
        },
      };
    },
    methods: {
      submitOrder() {
        console.log("Order data:", this.order);
        alert("Pesanan Anda berhasil dikirim!");
      },
    },
  };
  </script>
  