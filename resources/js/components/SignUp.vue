<template>
    <section class="flex items-center justify-center min-h-screen bg-red-100">
      <div class="flex gap-5 max-md:flex-col max-w-2xl w-full p-10 rounded-2xl bg-pink-50    shadow-xl">
        <!-- Form Section -->
        <div class="flex flex-col w-1/2 max-md:w-full">
          <form class="flex flex-col gap-4 text-sm font-medium text-gray-700">
            <!-- Email -->
            <label for="email" class="ml-2">Email</label>
            <input id="email" type="email" class="h-10 px-4 rounded-full bg-gray-200 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-label="Email input" />
  
            <!-- Username -->
            <label for="username" class="ml-2">Username</label>
            <input id="username" type="text" class="h-10 px-4 rounded-full bg-gray-200 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-label="Username input" />
  
            <!-- Password -->
            <label for="password" class="ml-2">Password</label>
            <input id="password" type="password" class="h-10 px-4 rounded-full bg-gray-200 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-label="Password input" />
  
            <!-- Sign Up Button -->
            <button type="submit" class="self-center mt-4 px-8 py-2 text-base font-semibold text-gray-800 bg-white border border-black rounded-full hover:bg-gray-100">
              SignUp
            </button>
          </form>
  
          <!-- Already Have Account Link -->
          <div class="flex justify-center mt-4">
            <p class="text-sm text-gray-700">
              Already have an account?
              <router-link to="/login">
              <span class="cursor-pointer text-indigo-500 font-semibold">Login</span>
            </router-link>
            </p>
          </div>
        </div>
  
        <!-- Illustration Section -->
        <div class="flex flex-col items-center justify-center w-1/2 max-md:w-full">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/610718cba5c5b29922f1b6392f6c6f884fc4dc1f9de64aed75f077b9c1ef492b?placeholderIfAbsent=true&apiKey=1fc2cba2a354443c981134b714aabe8a" alt="Sign Up illustration" class="w-32 h-32 rounded-full object-cover" />
        </div>
      </div>
    </section>
  </template>
  
  <script>
import { RouterLink } from 'vue-router';

  export default {
    name: 'SignUpForm',
  }
  </script>
  