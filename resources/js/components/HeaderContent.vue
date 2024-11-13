<script setup lang="ts">
</script>

<template>
  <nav class="px-12 w-full h-[60px] bg-[#f5ebe2] flex items-center justify-between">
    <!-- Mengatur ukuran logo menggunakan :style binding -->
    <img 
      src="@/assets/images/mama_mika.png" 
      alt="makanan_bg" 
      :style="{ height: '150px', maxHeight: '100%' }" 
    />
    <ul class="flex gap-4">
      <li>
        <router-link to="/" class="text-black hover:text-x-yellow transition duration-150 ease-in-out">Home</router-link>
      </li>
      <li>
        <router-link to="/menu" class="text-black hover:text-x-yellow transition duration-150 ease-in-out">Menu</router-link>
      </li>
      <li>
        <router-link to="/contact" class="text-black hover:text-x-yellow transition duration-150 ease-in-out">Contact Us</router-link>
      </li>
    </ul>
    <router-link to="/login" class="bg-red-200 px-4 py-2 rounded-full text-black hover:bg-x-yellow transition duration-150 ease-in-out">Login</router-link>
  </nav>
</template>
