<template>
  <section class="container w-full">
  <div class="about-us-container ">
    <main class="content w-full h-[1280px] text-center py-10 bg-red-50">
      <h1 class="title text-4xl font-semibold text-black mt-5">About Us</h1>
      <p class="description text-gray-600 mt-3 text-base max-w-3xl mx-auto leading-relaxed">
        Selamat Datang di Healthy Food by Mama Mika. Di sini kami menyediakan menu-menu real food yang dapat membantu anda dalam program diet, menjaga kesehatan tubuh dengan mengkonsumsi sayu-sayuran dan buah.
      </p>
      <router-link to="/menu"> 
      <button class="view-menu-btn inline-block mt-5 px-6 py-3 text-base font-medium text-black border border-black hover:bg-black hover:text-white transition">
        Lihat Menu
      </button>
    </router-link>
    </main>
  </div>
</section>
</template>

<script>
export default {
  name: 'AboutUs'
}
</script>

<style scoped>
.hero-image {
  /* Jika Anda ingin menambahkan gaya tambahan */
}
</style>
