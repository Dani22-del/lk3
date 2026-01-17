<?php
// BASE_URL sudah disediakan PopojiCMS
?>
<!-- TOPBAR -->
<div class="bg-blue-900 text-white text-xs py-2 hidden md:block">
  <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
    <div class="flex gap-4">
      <span>
        <i class="fas fa-envelope mr-1 text-blue-300"></i>
        info@eleskaglobalcentratama.com
      </span>
      <span>
        <i class="fas fa-phone mr-1 text-blue-300"></i> 0321 2905656
      </span>
    </div>
    <div class="flex gap-4">
      <a href="#" class="hover:text-blue-300"><i class="fab fa-facebook"></i></a>
      <a href="#" class="hover:text-blue-300"><i class="fab fa-instagram"></i></a>
      <a href="#" class="hover:text-blue-300"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</div>

<!-- NAVBAR -->
<nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between h-20 items-center">

      <!-- LOGO -->
      <a href="<?= BASE_URL; ?>" class="flex items-center">
        <div class="bg-blue-800 text-white p-2 rounded-lg font-bold text-xl mr-2 italic">
          Logo
        </div>
        <span class="font-extrabold text-blue-900 text-lg hidden lg:block uppercase tracking-tighter">
          LK3 Training Center<br>
          <span class="text-blue-600 text-xs">Sertifikasi</span>
        </span>
      </a>

      <!-- MAIN MENU -->
      <div class="hidden lg:flex space-x-1 font-semibold text-gray-700 text-sm">

        <!-- BERANDA -->
        <a
          href="<?= BASE_URL; ?>"
          class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-blue-700 transition"
        >
          Beranda
        </a>

        <!-- EVENT -->
        <div class="relative group">
          <button
            class="px-4 py-2 rounded-lg group-hover:bg-blue-50 group-hover:text-blue-700 flex items-center transition"
          >
            Event <i class="fas fa-chevron-down ml-1 text-[10px]"></i>
          </button>

          <div
            class="absolute left-0 mt-2 w-52 bg-white border border-gray-100 shadow-xl rounded-xl
                   opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all"
          >
            <!-- BIMTEK LISTING -->
            <a
              href="<?= BASE_URL; ?>/category/bimtek"
              class="block px-4 py-3 hover:bg-blue-50 text-gray-700"
            >
              Bimtek
            </a>

            <a
              href="<?= BASE_URL; ?>/category/in-house-training"
              class="block px-4 py-3 hover:bg-blue-50 text-gray-700 border-t"
            >
              In House Training
            </a>

            <a
              href="<?= BASE_URL; ?>/category/seminar"
              class="block px-4 py-3 hover:bg-blue-50 text-gray-700 border-t"
            >
              Seminar
            </a>

            <a
              href="<?= BASE_URL; ?>/category/workshop"
              class="block px-4 py-3 hover:bg-blue-50 text-gray-700 border-t"
            >
              Workshop
            </a>
          </div>
        </div>

        <!-- LISENSI -->
        <div class="relative group">
          <button
            class="px-4 py-2 rounded-lg group-hover:bg-blue-50 group-hover:text-blue-700 flex items-center transition"
          >
            Lisensi <i class="fas fa-chevron-down ml-1 text-[10px]"></i>
          </button>

          <div
            class="absolute left-0 mt-2 w-52 bg-white border border-gray-100 shadow-xl rounded-xl
                   opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all"
          >
            <a
              href="<?= BASE_URL; ?>/category/lisensi-esdm"
              class="block px-4 py-3 hover:bg-blue-50 text-gray-700"
            >
              Lisensi ESDM
            </a>

            <a
              href="<?= BASE_URL; ?>/category/lisensi-kemnaker"
              class="block px-4 py-3 hover:bg-blue-50 text-gray-700 border-t"
            >
              Lisensi Kemenaker
            </a>

            <a
              href="<?= BASE_URL; ?>/category/lisensi-bnsp"
              class="block px-4 py-3 hover:bg-blue-50 text-gray-700 border-t"
            >
              Lisensi BNSP
            </a>
          </div>
        </div>

        <!-- GALERI -->
        <a
          href="<?= BASE_URL; ?>/gallery"
          class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-blue-700 transition"
        >
          Galeri
        </a>

        <!-- KONTAK -->
        <a
          href="<?= BASE_URL; ?>/contact"
          class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-blue-700 transition"
        >
          Kontak
        </a>
      </div>

      <!-- CTA -->
      <div>
        <a
          href="https://wa.me/6281248829810"
          target="_blank"
          class="bg-blue-600 text-white px-6 py-2.5 rounded-full font-bold
                 hover:bg-blue-700 transition shadow-lg shadow-blue-200 text-sm"
        >
          Konsultasi
        </a>
      </div>

    </div>
  </div>
</nav>
