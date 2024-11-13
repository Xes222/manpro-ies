<template>
  <div class="flex justify-center bg-red-50 pb-16 pt-16">
    <section class="flex flex-col items-center text-center rounded-none max-w-[591px] mb-6">
      <h2 class="text-lg font-bold tracking-tight leading-none text-black">
        Menu
      </h2>
      <p class="mt-1.5 text-s tracking-normal leading-4 text-neutral-500">
        Healthy Food Mama Mika menawarkan pilihan menu sehat dan lezat yang terbuat dari bahan-bahan segar. Dari salad hingga sandwich buah, setiap hidangan dirancang untuk mendukung gaya hidup sehat Anda dengan rasa yang nikmat.
      </p>
    </section>
  </div>

  <div class="flex justify-center bg-red-50 pb-16">
    <section class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-4xl">
      <!-- Item 1 -->
      <article class="flex flex-col items-center bg-white rounded-lg shadow-md p-4">
        <img loading="lazy" src="@/assets/images/wanpakulagi.jpg" alt="Wanpaku Sandwich" class="object-cover w-full rounded-md h-40" />
        <h2 class="mt-4 text-sm font-semibold text-black text-center">Wanpaku Sandwich</h2>
        <p class="mt-2 text-xs text-neutral-400 text-center">
          Wanpaku Sandwich ini berisi beef slice gurih, telur setengah matang, tomat segar, dan selada renyah di antara roti gandum tebal.
        </p>
        <p class="mt-3 text-sm font-semibold text-black">Rp 12.000,00</p>
        <router-link to="/formpsn">
        <button class="mt-3 px-6 py-2 text-xs font-medium text-white bg-black rounded">Pesan</button>
      </router-link>
      </article>

      <!-- Item 2 -->
      <article class="flex flex-col items-center bg-white rounded-lg shadow-md p-4">
        <img loading="lazy" src="@/assets/images/saladd.jpg" alt="Salad Sayur" class="object-cover w-full rounded-md h-40" />
        <h2 class="mt-4 text-sm font-semibold text-black text-center">Salad Sayur</h2>
        <p class="mt-2 text-xs text-neutral-400 text-center">
          Salad segar ini berisi campuran selada, jagung, wortel, dan timun, dilengkapi dengan potongan ayam panggang.
        </p>
        <p class="mt-3 text-sm font-semibold text-black">Rp 17.000,00</p>
        <router-link to="/formpsn">
        <button class="mt-3 px-6 py-2 text-xs font-medium text-white bg-black rounded">Pesan</button>
      </router-link>
      </article>

      <!-- Item 3 -->
      <article class="flex flex-col items-center bg-white rounded-lg shadow-md p-4">
        <img loading="lazy" src="@/assets/images/sando.jpg" alt="Fruit Sando" class="object-cover w-full rounded-md h-40" />
        <h2 class="mt-4 text-sm font-semibold text-black text-center">Fruit Sando</h2>
        <p class="mt-2 text-xs text-neutral-400 text-center">
          Fruit Sando ini berisi potongan buah-buahan, diselipkan dalam roti lembut dengan krim kocok yang ringan dan manis.
        </p>
        <p class="mt-3 text-sm font-semibold text-black">Rp 10.000,00</p>
      <router-link to="/formpsn">
        <button class="mt-3 px-6 py-2 text-xs font-medium text-white bg-black rounded">Pesan</button>
      </router-link>
      </article>
    </section>
  </div>
</template>

<script>
export default {
  name: 'MenuComponent'
}
</script>

<style scoped>
.container {
  max-width: 100%;
}
</style>
