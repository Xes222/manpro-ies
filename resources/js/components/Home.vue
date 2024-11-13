<template>
  <section class="relative w-screen h-screen overflow-hidden"> <!-- Menggunakan relative untuk memastikan posisi konten di atas gambar -->
    <img src="@/assets/images/makanan_bg.jpg" alt="Healthy food display" class="hero-image w-screen h-screen object-cover" />
    
    <main class="absolute inset-0 flex flex-col items-center justify-center text-center bg-red-200 bg-opacity-60"> <!-- Menggunakan inset-0 untuk memenuhi layar penuh -->
      <section class="flex flex-col items-center justify-center p-5">
        <h1 class="text-4xl font-semibold text-black mt-5">About Us</h1>
        <p class="text-black-600 mt-3 text-base max-w-3xl mx-auto leading-relaxed">
          Selamat Datang di Healthy Food by Mama Mika. Di sini kami menyediakan menu-menu real food yang dapat membantu anda dalam program diet, menjaga kesehatan tubuh dengan mengkonsumsi sayur-sayuran dan buah.
        </p>
        <router-link to="/menu">
          <button class="mt-5 px-6 py-3 text-base font-medium text-black border border-black hover:bg-black hover:text-white transition">
            Lihat Menu
          </button>
        </router-link>
      </section>
    </main>
  </section>
</template>

<script>
export default {
  name: 'AboutUs'
}
</script>

<style scoped>
.hero-image {
  min-height: 100vh; /* Pastikan gambar mengisi tinggi layar penuh */
  object-position: center; /* Mengatur posisi objek ke tengah */
}
</style>
