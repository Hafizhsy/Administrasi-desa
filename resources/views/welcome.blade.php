<!DOCTYPE html>

<html class="light" lang="id">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Sistem Informasi Pelayanan Administrasi Desa Kopandakan I</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;900&amp;family=Work+Sans:wght@500;600&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "primary-fixed-dim": "#a3d0be",
            "on-primary-container": "#79a694",
            "error-container": "#ffdad6",
            "primary": "#00241a",
            "secondary-container": "#e0e3e5",
            "inverse-on-surface": "#eaf1ff",
            "on-error-container": "#93000a",
            "tertiary-fixed-dim": "#e9c349",
            "outline-variant": "#c0c8c3",
            "surface-tint": "#3c6658",
            "on-background": "#0b1c30",
            "on-secondary-fixed": "#191c1e",
            "inverse-surface": "#213145",
            "on-primary-fixed": "#002117",
            "inverse-primary": "#a3d0be",
            "error": "#ba1a1a",
            "on-tertiary": "#ffffff",
            "outline": "#717974",
            "surface-dim": "#cbdbf5",
            "on-secondary-fixed-variant": "#444749",
            "secondary-fixed": "#e0e3e5",
            "surface-container-high": "#dce9ff",
            "surface-container-low": "#eff4ff",
            "on-tertiary-fixed-variant": "#574500",
            "on-surface": "#0b1c30",
            "on-tertiary-fixed": "#241a00",
            "surface-variant": "#d3e4fe",
            "surface-bright": "#f8f9ff",
            "tertiary-fixed": "#ffe088",
            "primary-fixed": "#beedd9",
            "surface": "#f8f9ff",
            "on-surface-variant": "#414845",
            "tertiary-container": "#cba72f",
            "secondary": "#5c5f61",
            "background": "#f8f9ff",
            "on-secondary-container": "#626567",
            "surface-container": "#e5eeff",
            "on-tertiary-container": "#4e3d00",
            "on-primary-fixed-variant": "#234e40",
            "surface-container-highest": "#d3e4fe",
            "primary-container": "#0d3b2e",
            "on-primary": "#ffffff",
            "on-error": "#ffffff",
            "surface-container-lowest": "#ffffff",
            "on-secondary": "#ffffff",
            "tertiary": "#735c00",
            "secondary-fixed-dim": "#c4c7c9"
          },
          "borderRadius": {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          "spacing": {
            "stack-lg": "48px",
            "stack-sm": "12px",
            "margin-mobile": "16px",
            "container-max": "1280px",
            "gutter": "24px",
            "margin-desktop": "48px",
            "stack-md": "24px",
            "base": "8px"
          },
          "fontFamily": {
            "body-md": ["Public Sans"],
            "button": ["Work Sans"],
            "body-lg": ["Public Sans"],
            "h2": ["Public Sans"],
            "h3": ["Public Sans"],
            "h1": ["Public Sans"],
            "label-sm": ["Work Sans"]
          }
        },
      },
    }
  </script>
  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }
  </style>
  <style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>

<body class="bg-background text-on-surface font-body-md selection:bg-primary-fixed selection:text-primary">
  <!-- TopAppBar -->
  <header
    class="fixed top-0 w-full z-50 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 h-16 flex justify-between items-center px-4 md:px-margin-desktop">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-primary-container rounded-full flex items-center justify-center overflow-hidden">
        <img alt="Village Emblem" class="w-full h-full object-cover"
          data-alt="Official village emblem of Kopandakan I, featuring traditional Indonesian symbolic elements in a gold and green shield."
          src="https://tse2.mm.bing.net/th/id/OIP.e3qAPtdwr3_s22nmrHur3AHaIo?rs=1&pid=ImgDetMain&o=7&rm=3" />
      </div>
      <h1 class="text-xl font-black text-emerald-900 dark:text-emerald-500 font-public-sans">Kopandakan I</h1>
    </div>
    <nav class="hidden md:flex items-center gap-gutter">
      <a class="text-emerald-700 dark:text-emerald-300 font-bold font-public-sans text-lg" href="#">Beranda</a>
      <a class="text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors px-3 py-2 rounded-lg"
        href="#layanan">Layanan</a>
      <a class="text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors px-3 py-2 rounded-lg"
        href="#profil">Profil</a>
      <div class="h-6 w-px bg-slate-200 mx-2"></div>
      <a class="px-5 py-2 font-button text-button bg-primary text-on-primary rounded-xl active:scale-95 duration-150 transition-all"
        href="{{ route('login') }}">Login</a>
    </nav>
    <button class="md:hidden p-2 text-slate-600">
      <span class="material-symbols-outlined" data-icon="menu">menu</span>
    </button>
  </header>
  <main class="pt-16">
    <!-- Hero Section -->
    <section class="relative min-h-[751px] flex items-center overflow-hidden">
      <div class="absolute inset-0 z-0">
        <img alt="Indonesian Village Scenery" class="w-full h-full object-cover"
          data-alt="Stunning aerial view of a vibrant Indonesian village surrounded by lush green rice terraces and tropical trees at sunrise."
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_UIPdfW-NwVXF3XLbRUVGL_H5FOu2TQI2Vmj9aqjFKtBRb3awH1mEt5v4KhZffoR49pAxKcKF4HxoPmQ8941hl1SCTCtLLPAa9jc3WL49xksrWyvWA8aE7zLsLc5T4O_9I_4v2IL67NWF98eAT6ofO6Vea4wDA4d1Ei14jW7qW9yFE3RM3Z77EfZMSyaZyq55Bwq-vGSeAx8xSSTDPga0O2KSZB58yI5KnEYg9wwDqL_wS_qAU9xs2JgikfGWs82LeQKpegK-oVA" />
        <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-transparent"></div>
      </div>
      <div class="relative z-10 w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-stack-lg">
        <div class="max-w-2xl">
          <span
            class="inline-block px-4 py-1.5 bg-primary-fixed text-on-primary-fixed rounded-full font-label-sm text-label-sm mb-stack-sm">
            Resmi &amp; Terpercaya
          </span>
          <h2 class="font-h1 text-h1 text-white mb-stack-md leading-tight">
            Pelayanan Administrasi Desa Kini Lebih Cepat &amp; Mudah
          </h2>
          <p class="font-body-lg text-body-lg text-white/90 mb-stack-lg max-w-xl">
            Sistem Informasi Pelayanan Administrasi Desa Kopandakan Satu hadir untuk memudahkan warga dalam mengurus
            dokumen kependudukan secara online tanpa harus antre lama di kantor desa.
          </p>
          <div class="flex flex-col sm:flex-row gap-4">
            <a class="inline-flex items-center justify-center px-8 py-4 bg-tertiary-container text-on-tertiary-container font-button text-button rounded-xl hover:brightness-110 active:scale-95 transition-all shadow-lg"
              href="{{route('login')}}">
              Ajukan Surat Sekarang
              <span class="material-symbols-outlined ml-2" data-icon="arrow_forward">arrow_forward</span>
            </a>
            <a class="inline-flex items-center justify-center px-8 py-4 glass-card border border-white/30 text-white font-button text-button rounded-xl hover:bg-white/20 active:scale-95 transition-all"
              href="{{route('admin.login')}}">
              Portal Admin
              <span class="material-symbols-outlined ml-2" data-icon="admin_panel_settings">admin_panel_settings</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Stats / Feature Bar -->
    <section class="bg-white border-y border-slate-100 py-base">
      <div
        class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-2 md:grid-cols-4 gap-gutter text-center">
        <div class="py-4">
          <p class="text-h3 font-h3 text-primary">15+</p>
          <p class="text-label-sm font-label-sm text-secondary">Jenis Layanan</p>
        </div>
        <div class="py-4">
          <p class="text-h3 font-h3 text-primary">24h</p>
          <p class="text-label-sm font-label-sm text-secondary">Akses Kapanpun</p>
        </div>
        <div class="py-4">
          <p class="text-h3 font-h3 text-primary">100%</p>
          <p class="text-label-sm font-label-sm text-secondary">Transparan</p>
        </div>
        <div class="py-4">
          <p class="text-h3 font-h3 text-primary">&lt;1 Hari</p>
          <p class="text-label-sm font-label-sm text-secondary">Waktu Proses</p>
        </div>
      </div>
    </section>
    <!-- Services Bento Grid -->
    <section class="py-stack-lg bg-surface-container-low" id="layanan">
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="text-center mb-stack-lg">
          <h2 class="font-h2 text-h2 text-on-surface mb-stack-sm">Layanan Surat Elektronik</h2>
          <p class="font-body-md text-body-md text-secondary max-w-2xl mx-auto">
            Pilih jenis surat yang Anda butuhkan. Proses pengajuan dilakukan secara digital dan dapat dipantau statusnya
            secara real-time.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
          <!-- Service Card 1 -->
          <div
            class="md:col-span-8 bg-white p-stack-md rounded-xl border border-outline-variant hover:shadow-lg transition-all group relative overflow-hidden">
            <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity">
              <span class="material-symbols-outlined text-[120px]"
                data-icon="volunteer_activism">volunteer_activism</span>
            </div>
            <div class="relative z-10 flex flex-col h-full justify-between">
              <div>
                <div class="w-12 h-12 bg-emerald-50 rounded-lg flex items-center justify-center text-primary mb-4">
                  <span class="material-symbols-outlined" data-icon="volunteer_activism">volunteer_activism</span>
                </div>
                <h3 class="font-h3 text-h3 mb-2">Marriage Statement</h3>
                <p class="text-body-md text-on-surface-variant mb-6 max-w-md">Pengurusan surat keterangan nikah dan
                  persyaratan administrasi pernikahan lainnya untuk warga Desa Kopandakan I.</p>
              </div>
              <a href="{{ route('layanan.nikah') }}"
                class="w-fit px-6 py-2 border-2 border-primary text-primary font-button rounded-lg hover:bg-primary hover:text-white transition-colors">
                Pilih Layanan
              </a>
            </div>
          </div>
          <!-- Service Card 2 -->
          <div
            class="md:col-span-4 bg-white p-stack-md rounded-xl border border-outline-variant hover:shadow-lg transition-all flex flex-col group">
            <div class="w-12 h-12 bg-emerald-50 rounded-lg flex items-center justify-center text-primary mb-4">
              <span class="material-symbols-outlined" data-icon="storefront">storefront</span>
            </div>
            <h3 class="font-h3 text-h3 mb-2">Business Certificate</h3>
            <p class="text-body-md text-on-surface-variant mb-6">Surat Keterangan Usaha (SKU) untuk keperluan perizinan
              atau pengajuan bantuan UMKM.</p>
            <div class="mt-auto">
              <a href="{{ route('layanan.usaha') }}"
                class="w-full px-6 py-2 border-2 border-primary text-primary font-button rounded-lg hover:bg-primary hover:text-white transition-colors text-center block">
                Pilih Layanan
              </a>
            </div>
          </div>
          <!-- Service Card 3 -->
          <div
            class="md:col-span-4 bg-white p-stack-md rounded-xl border border-outline-variant hover:shadow-lg transition-all flex flex-col group">
            <div class="w-12 h-12 bg-emerald-50 rounded-lg flex items-center justify-center text-primary mb-4">
              <span class="material-symbols-outlined" data-icon="badge">badge</span>
            </div>
            <h3 class="font-h3 text-h3 mb-2">Certificate of Inability (SKTM)</h3>
            <p class="text-body-md text-on-surface-variant mb-6">Dokumen untuk warga yang memerlukan keringanan biaya
              pendidikan atau kesehatan.</p>
            <div class="mt-auto">
              <a href="{{ route('layanan.sktm') }}"
                class="w-full px-6 py-2 border-2 border-primary text-primary font-button rounded-lg hover:bg-primary hover:text-white transition-colors text-center block">
                Pilih Layanan
              </a>
            </div>
          </div>
          <!-- Service Card 4 -->
          <div
            class="md:col-span-8 bg-white p-stack-md rounded-xl border border-outline-variant hover:shadow-lg transition-all group relative overflow-hidden">
            <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity">
              <span class="material-symbols-outlined text-[120px]" data-icon="home_work">home_work</span>
            </div>
            <div class="relative z-10 flex flex-col h-full justify-between">
              <div>
                <div class="w-12 h-12 bg-emerald-50 rounded-lg flex items-center justify-center text-primary mb-4">
                  <span class="material-symbols-outlined" data-icon="home_work">home_work</span>
                </div>
                <h3 class="font-h3 text-h3 mb-2">Land &amp; Building Tax (PBB)</h3>
                <p class="text-body-md text-on-surface-variant mb-6 max-w-md">Layanan administrasi terkait Pajak Bumi
                  dan Bangunan serta surat pengantar kepemilikan tanah.</p>
              </div>
              <button
                class="w-fit px-6 py-2 border-2 border-primary text-primary font-button rounded-lg hover:bg-primary hover:text-white transition-colors">Pilih
                Layanan</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section -->
    <section class="py-stack-lg bg-white overflow-hidden" id="profil">
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="flex flex-col lg:flex-row items-center gap-24">
          <div class="lg:w-1/2 relative">
            <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl rotate-2">
              <img alt="Village Meeting" class="w-full h-[500px] object-cover"
                data-alt="Traditional Indonesian village elders and youth having a community meeting in a clean, open-air wooden gazebo during a bright afternoon."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQW4PAu6LqgMLNX2XMkrJRUcqPgQNKkqGufTSwkvcaGNDsDJ2RmnWYbkZSpjCL87tT3t6DYHyRQfWcuB51wTX9JkBbLlQy5YR5Jwfx69zFnUiACJaPZgMWwCAyR_m71oM-8j05AQyMmjhrAyr6rRN5h68-KBkuG9TfZAbdqOAsEC8pMzmOsxHcgTnDyu6NHoJqem1rQfehUOtdRd4PToWbM2-rUQYLi1BVS2fXj52iinoOJJDyhnzP1Pz9yLDXJrMRzmc4MWxDE1A" />
            </div>
            <div class="absolute -bottom-8 -left-8 w-48 h-48 bg-tertiary-container/30 rounded-full blur-3xl z-0"></div>
            <div class="absolute -top-8 -right-8 w-64 h-64 bg-primary-fixed/20 rounded-full blur-3xl z-0"></div>
          </div>
          <div class="lg:w-1/2">
            <span class="text-primary font-bold tracking-widest uppercase text-xs mb-4 block">Tentang Kopandakan
              I</span>
            <h2 class="font-h2 text-h2 text-on-surface mb-stack-md">Membangun Masa Depan Desa Melalui Digitalisasi</h2>
            <p class="font-body-md text-body-md text-on-surface-variant mb-stack-sm">
              Desa Kopandakan I berkomitmen untuk memberikan pelayanan publik yang transparan, akuntabel, dan inovatif.
              Melalui sistem SIPAD (Sistem Informasi Pelayanan Administrasi Desa), kami berupaya mendekatkan pelayanan
              kepada masyarakat.
            </p>
            <p class="font-body-md text-body-md text-on-surface-variant mb-stack-md">
              Visi kami adalah mewujudkan masyarakat mandiri yang didukung oleh tata kelola pemerintahan desa yang
              modern dan efisien, menjaga kearifan lokal sembari mengadopsi kemajuan teknologi.
            </p>
            <div class="grid grid-cols-2 gap-gutter border-t border-slate-100 pt-stack-md">
              <div class="flex items-start gap-3">
                <span class="material-symbols-outlined text-primary" data-icon="verified">verified</span>
                <div>
                  <h4 class="font-bold text-on-surface">Legalitas Terjamin</h4>
                  <p class="text-sm text-secondary">Sesuai standar operasional pemdes.</p>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <span class="material-symbols-outlined text-primary" data-icon="lock">lock</span>
                <div>
                  <h4 class="font-bold text-on-surface">Data Aman</h4>
                  <p class="text-sm text-secondary">Privasi warga prioritas utama kami.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CTA Section -->
    <section class="py-stack-lg bg-primary-container text-white">
      <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
        <h2 class="font-h2 text-h2 mb-stack-sm">Ada Kendala dalam Pengajuan?</h2>
        <p class="font-body-lg text-body-lg text-white/80 mb-stack-lg max-w-2xl mx-auto">
          Tim administrasi kami siap membantu Anda setiap hari kerja pukul 08:00 - 15:00. Hubungi kami melalui WhatsApp
          atau kunjungi kantor desa.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a class="px-8 py-4 bg-emerald-500 text-white font-button rounded-xl hover:bg-emerald-600 transition-all flex items-center"
            href="https://wa.me/628123456789">
            <span class="material-symbols-outlined mr-2" data-icon="chat">chat</span>
            WhatsApp Admin
          </a>
          <a class="px-8 py-4 bg-white/10 border border-white/20 text-white font-button rounded-xl hover:bg-white/20 transition-all flex items-center"
            href="https://maps.app.goo.gl/LtfdfQzweUsmArGP8">
            <span class="material-symbols-outlined mr-2" data-icon="map">map</span>
            Lihat Peta Desa
          </a>
        </div>
      </div>
    </section>
  </main>
  <!-- BottomNavBar (Mobile Only) -->
  <nav
    class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-2 pb-safe py-2 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 shadow-lg z-50">
    <a class="flex flex-col items-center justify-center bg-emerald-50 dark:bg-emerald-900/30 text-emerald-900 dark:text-emerald-300 rounded-xl px-4 py-1.5 active:scale-90 transition-transform"
      href="#">
      <span class="material-symbols-outlined" data-icon="home">home</span>
      <span class="font-public-sans text-[11px] font-semibold">Beranda</span>
    </a>
    <a class="flex flex-col items-center justify-center text-slate-500 dark:text-slate-400 px-4 py-1.5 active:scale-90 transition-transform"
      href="#layanan">
      <span class="material-symbols-outlined" data-icon="description">description</span>
      <span class="font-public-sans text-[11px] font-semibold">Layanan</span>
    </a>
    <a class="flex flex-col items-center justify-center text-slate-500 dark:text-slate-400 px-4 py-1.5 active:scale-90 transition-transform"
      href="{{route('login')}}">
      <span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
      <span class="font-public-sans text-[11px] font-semibold">Status</span>
    </a>
  </nav>
  <!-- Footer -->
  <footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 py-8 mb-16 md:mb-0">
    <div class="max-w-container-max mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-4">
      <div class="flex flex-col items-center md:items-start">
        <span class="font-bold text-slate-900 dark:text-white mb-2">Kopandakan I</span>
        <p class="font-public-sans text-xs text-slate-500"> &copy 2026 Pemerintah Desa Kopandakan 1.</p>
      </div>
      <div class="flex gap-6">
        <a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700 transition-colors" href="#">Kontak</a>
        <a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700 transition-colors"
          href="https://maps.app.goo.gl/LtfdfQzweUsmArGP8">Peta
          Desa</a>
        <a class="font-public-sans text-xs text-slate-500 hover:text-emerald-700 transition-colors" href="#">Kebijakan
          Privasi</a>
      </div>
      <div class="flex gap-4">
        <a class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center hover:bg-primary-fixed transition-colors"
          href="#">
          <span class="material-symbols-outlined text-sm" data-icon="share">share</span>
        </a>
        <a class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center hover:bg-primary-fixed transition-colors"
          href="#">
          <span class="material-symbols-outlined text-sm" data-icon="mail">mail</span>
        </a>
      </div>
    </div>
  </footer>
</body>

</html>