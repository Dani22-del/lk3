<?php
// pages/bimtek.php
$page = 'bimtek';
$title = 'BIMTEK & Workshop - Eleska Global Centratama';
?>
<!DOCTYPE html>
<html lang="id">
<?php include __DIR__ . '/../partials/head.php'; ?>
<body class="bg-slate-50">
<?php include __DIR__ . '/../partials/header.php'; ?>

<!-- HERO BIMTEK -->
<header
  class="gradient-navy py-24 px-4 flex items-center text-white overflow-hidden relative"
>
  <div class="max-w-7xl mx-auto text-center relative z-10 reveal">
    <h1
      class="text-4xl md:text-6xl font-extrabold leading-tight mb-6 uppercase"
    >
      Program Bimbingan Teknis <br />
      & <span class="text-blue-400">Workshop Profesional</span>
    </h1>
    <p class="max-w-2xl mx-auto text-blue-100 text-lg font-light mb-10">
      Tingkatkan kompetensi teknis SDM Anda melalui pelatihan praktis yang
      disusun sesuai kebutuhan industri terkini.
    </p>
  </div>
  <!-- Decorative Circle -->
  <div
    class="absolute top-0 right-0 w-80 h-80 bg-blue-500/20 rounded-full blur-3xl -mr-40 -mt-40"
  ></div>
</header>

<!-- FILTER & CATEGORY -->
<section
  class="py-12 bg-white border-b border-slate-100 sticky top-20 z-40"
>
  <div class="max-w-7xl mx-auto px-4 flex flex-wrap justify-center gap-3">
    <button
      class="px-6 py-2.5 bg-blue-600 text-white rounded-xl text-xs font-bold uppercase tracking-widest shadow-lg shadow-blue-200"
    >
      Semua
    </button>
    <button
      class="px-6 py-2.5 bg-slate-100 text-slate-600 hover:bg-blue-50 rounded-xl text-xs font-bold uppercase tracking-widest transition"
    >
      HSE / K3
    </button>
    <button
      class="px-6 py-2.5 bg-slate-100 text-slate-600 hover:bg-blue-50 rounded-xl text-xs font-bold uppercase tracking-widest transition"
    >
      Teknik Listrik
    </button>
    <button
      class="px-6 py-2.5 bg-slate-100 text-slate-600 hover:bg-blue-50 rounded-xl text-xs font-bold uppercase tracking-widest transition"
    >
      Manajemen
    </button>
    <button
      class="px-6 py-2.5 bg-slate-100 text-slate-600 hover:bg-blue-50 rounded-xl text-xs font-bold uppercase tracking-widest transition"
    >
      Konstruksi
    </button>
  </div>
</section>

<!-- JADWAL BIMTEK (CARDS) -->
<section id="jadwal" class="py-24 px-4 max-w-7xl mx-auto">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Card 1 -->
    <div
      class="bg-white rounded-[2.5rem] overflow-hidden border border-slate-100 card-shadow transition-all duration-300 reveal"
    >
      <div class="relative h-52 overflow-hidden">
        <img
          src="https://images.unsplash.com/photo-1544377193-33dcf4d68fb5?auto=format&fit=crop&w=600&q=80"
          class="w-full h-full object-cover"
        />
        <div
          class="absolute top-4 left-4 bg-emerald-500 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase italic"
        >
          Open Registration
        </div>
      </div>
      <div class="p-8">
        <div
          class="flex items-center gap-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-4"
        >
          <span
            ><i class="far fa-calendar-alt text-blue-500 mr-1"></i> 15 - 17
            Jan 2026</span
          >
          <span
            ><i class="fas fa-map-marker-alt text-red-500 mr-1"></i>
            Makassar</span
          >
        </div>
        <h3
          class="text-xl font-extrabold text-slate-900 mb-4 leading-tight"
        >
          Bimtek Implementasi SMK3 PP No. 50 Tahun 2012
        </h3>
        <p class="text-xs text-slate-500 mb-8 leading-relaxed">
          Pelatihan teknis penyusunan dokumen dan audit internal SMK3 untuk
          perusahaan.
        </p>
        <div
          class="flex items-center justify-between pt-6 border-t border-slate-50"
        >
          <div class="text-blue-900 font-black text-lg">
            Rp 3.500.000
            <span class="text-[10px] text-slate-400 font-normal"
              >/Peserta</span
            >
          </div>
          <a
            href="detailbimtek.html"
            class="bg-blue-600 text-white p-3 rounded-xl hover:bg-blue-700 transition"
            ><i class="fas fa-arrow-right"></i
          ></a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div
      class="bg-white rounded-[2.5rem] overflow-hidden border border-slate-100 card-shadow transition-all duration-300 reveal"
    >
      <div class="relative h-52 overflow-hidden">
        <img
          src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&w=600&q=80"
          class="w-full h-full object-cover"
        />
        <div
          class="absolute top-4 left-4 bg-amber-500 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase italic"
        >
          Limited Seats
        </div>
      </div>
      <div class="p-8">
        <div
          class="flex items-center gap-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-4"
        >
          <span
            ><i class="far fa-calendar-alt text-blue-500 mr-1"></i> 22 - 24
            Jan 2026</span
          >
          <span
            ><i class="fas fa-video text-blue-500 mr-1"></i> Online
            Zoom</span
          >
        </div>
        <h3
          class="text-xl font-extrabold text-slate-900 mb-4 leading-tight"
        >
          Workshop Penyusunan HIRADC & JSA Profesional
        </h3>
        <p class="text-xs text-slate-500 mb-8 leading-relaxed">
          Teknik identifikasi bahaya dan penilaian risiko kerja secara
          komprehensif.
        </p>
        <div
          class="flex items-center justify-between pt-6 border-t border-slate-50"
        >
          <div class="text-blue-900 font-black text-lg">
            Rp 1.500.000
            <span class="text-[10px] text-slate-400 font-normal"
              >/Peserta</span
            >
          </div>
          <a
            href="#"
            class="bg-blue-600 text-white p-3 rounded-xl hover:bg-blue-700 transition"
            ><i class="fas fa-arrow-right"></i
          ></a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div
      class="bg-white rounded-[2.5rem] overflow-hidden border border-slate-100 card-shadow transition-all duration-300 reveal"
    >
      <div class="relative h-52 overflow-hidden">
        <img
          src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?auto=format&fit=crop&w=600&q=80"
          class="w-full h-full object-cover"
        />
        <div
          class="absolute top-4 left-4 bg-emerald-500 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase italic"
        >
          Open Registration
        </div>
      </div>
      <div class="p-8">
        <div
          class="flex items-center gap-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-4"
        >
          <span
            ><i class="far fa-calendar-alt text-blue-500 mr-1"></i> 05 - 07
            Feb 2026</span
          >
          <span
            ><i class="fas fa-map-marker-alt text-red-500 mr-1"></i>
            Jakarta</span
          >
        </div>
        <h3
          class="text-xl font-extrabold text-slate-900 mb-4 leading-tight"
        >
          Bimtek K3 Listrik & Sertifikasi SKTTK ESDM
        </h3>
        <p class="text-xs text-slate-500 mb-8 leading-relaxed">
          Pelatihan khusus teknik ketenagalistrikan sesuai standar DJK ESDM.
        </p>
        <div
          class="flex items-center justify-between pt-6 border-t border-slate-50"
        >
          <div class="text-blue-900 font-black text-lg">
            Rp 4.250.000
            <span class="text-[10px] text-slate-400 font-normal"
              >/Peserta</span
            >
          </div>
          <a
            href="#"
            class="bg-blue-600 text-white p-3 rounded-xl hover:bg-blue-700 transition"
            ><i class="fas fa-arrow-right"></i
          ></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>

<!-- Page-specific script -->
<script src="/po-content/themes/lk3-new/js/bimtek.js"></script>
</body>
</html>
