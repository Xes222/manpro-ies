<template>
  <section class="flex items-center justify-center min-h-screen bg-red-100">
    <div class="flex gap-10 max-md:flex-col max-w-3xl w-full p-10 rounded-2xl bg-pink-50 shadow-lg">
      <!-- Form Section -->
      <div class="flex flex-col w-1/2 max-md:w-full">
        <form @submit.prevent="login" class="flex flex-col gap-4 text-sm font-medium text-gray-700">
          <!-- Email -->
          <label for="email" class="ml-2">Email</label>
          <input v-model="email" id="email" type="email" required class="h-10 px-4 rounded-full bg-gray-200 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500" />

          <!-- Password -->
          <label for="password" class="ml-2">Password</label>
          <input v-model="password" id="password" type="password" required class="h-10 px-4 rounded-full bg-gray-200 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500" />

          <!-- Remember Me Checkbox -->
          <div class="flex items-center ml-2 gap-2">
            <input type="checkbox" id="rememberMe" v-model="rememberMe" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 rounded" />
            <label for="rememberMe" class="text-indigo-500 cursor-pointer">Remember Me</label>
          </div>

          <!-- Error Message -->
          <p v-if="error" class="text-red-500 text-sm ml-2">{{ error }}</p>

          <!-- Login Button -->
          <button type="submit" class="self-center mt-4 px-8 py-2 text-base font-semibold text-gray-800 bg-white border border-black rounded-full hover:bg-gray-100">
            Login
          </button>
        </form>

        <!-- SignUp Link (Opsional) -->
        <!--
        <div class="flex justify-center mt-4">
          <p class="text-sm text-gray-700">
            Don't have an account? 
            <router-link to="/signup" class="text-indigo-500 font-semibold">SignUp</router-link>
          </p>
        </div>
        -->
      </div>

      <!-- Logo Section -->
      <div class="flex flex-col items-center justify-center w-1/2 max-md:w-full">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/610718cba5c5b29922f1b6392f6c6f884fc4dc1f9de64aed75f077b9c1ef492b?placeholderIfAbsent=true&apiKey=1fc2cba2a354443c981134b714aabe8a" alt="Login illustration" class="w-32 h-32 rounded-full object-cover" />
        <p class="mt-4 text-gray-800 font-semibold">By Mama Mika</p>
      </div>
    </div>
  </section>
</template>

<script>
import { ref } from 'vue';
import { useUserStore } from '@/stores/user'; // Pastikan import ini benar
import axios from 'axios';
import { useRouter } from 'vue-router';

export default {
  name: 'LoginComponent',
  setup() {
    const email = ref('');
    const password = ref('');
    const rememberMe = ref(false);
    const error = ref(null);
    const router = useRouter();
    const userStore = useUserStore(); // Inisialisasi store di sini

    const login = async () => {
      error.value = null;
      try {
        const response = await axios.post('/api/login', {
          email: email.value,
          password: password.value,
        });

        // Simpan token ke localStorage atau store
        localStorage.setItem('token', response.data.access_token);
        axios.defaults.headers.common['Authorization'] = `Bearer ${response.data.access_token}`;

        // Set role di store
        userStore.setRole('admin');

        // Redirect ke halaman admin
        router.push('/admin/dashboard');
      } catch (err) {
        if (err.response && err.response.status === 401) {
          error.value = 'Email atau password salah.';
        } else {
          error.value = 'Terjadi kesalahan. Silakan coba lagi.';
        }
      }
    };

    return {
      email,
      password,
      rememberMe,
      error,
      login,
    };
  },
};
</script>

