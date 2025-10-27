<?php include __DIR__ . '/_header.php'; ?>

<?php
// Dummy articles (bisa diganti dari DB nanti)
$articles = [
  [
    "title" => "Belajar Dasar PHP untuk Pemula",
    "date" => "2025-10-20",
    "excerpt" => "Panduan lengkap untuk memulai belajar bahasa pemrograman PHP dari dasar. Cocok untuk peserta pelatihan web programming.",
    "image" => "https://images.unsplash.com/photo-1607706189992-eae578626c86?auto=format&fit=crop&q=80&w=1170",
  ],
  [
    "title" => "Apa Itu Tailwind CSS?",
    "date" => "2025-10-18",
    "excerpt" => "Tailwind CSS adalah utility-first framework yang membuat proses styling lebih cepat dan efisien.",
    "image" => "https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1170",
  ],
  [
    "title" => "Menghubungkan PHP dengan Database MySQL",
    "date" => "2025-10-15",
    "excerpt" => "Tutorial langkah demi langkah cara koneksi PHP ke MySQL menggunakan mysqli dan PDO.",
    "image" => "https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&q=80&w=1170",
  ],
];
$recent = array_slice($articles, 0, 3);
?>

<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 mb-16 rounded-2xl">
  <img src="https://cloud.jpnn.com/photo/jatim/news/normal/2022/06/28/universitas-pembangunan-nasional-upn-veteran-yogyakarta-foto-tuvl.jpg"
       alt="UPN Veteran Yogyakarta"
       class="absolute inset-0 -z-10 size-full object-cover object-center brightness-50" />

  <!-- Blur dekorasi -->
  <div aria-hidden="true" class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl">
    <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
         class="aspect-1097/845 w-274.25 bg-gradient-to-tr from-indigo-500 to-yellow-400 opacity-20"></div>
  </div>

  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    
    <!-- Hero Text -->
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-5xl font-extrabold tracking-tight text-white sm:text-7xl">
        UPN "Veteran" Yogyakarta
      </h2>
      <p class="mt-8 text-lg font-medium text-gray-300 sm:text-xl">
        Kampus Bela Negara yang mencetak generasi unggul, inovatif, dan berkarakter.
        Berkontribusi bagi bangsa melalui pendidikan, penelitian, dan pengabdian masyarakat.
      </p>

      <div class="mt-10 flex gap-4">
        <a href="register.php"
           class="px-6 py-3 rounded-md text-white font-semibold bg-indigo-600 hover:bg-indigo-500 transition">
          Buat Akun
        </a>
        <a href="about.php"
           class="px-6 py-3 rounded-md font-semibold bg-white/10 backdrop-blur-sm text-white hover:bg-white/20 transition">
          Tentang Kampus
        </a>
      </div>
    </div>
    
    <!-- Link Navigasi -->
    <div class="mx-auto mt-12 max-w-2xl lg:mx-0 lg:max-w-none">
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold text-white sm:grid-cols-2 md:flex lg:gap-x-10">
        <a href="mailto:info@upnyk.ac.id" class="transition duration-200 hover:opacity-70">
        Email <span aria-hidden="true"></span>
        </a>
        <a href="https://www.instagram.com/upnvykofficial/" target="_blank" rel="noopener noreferrer"
        class="transition duration-200 hover:opacity-70">
        Instagram <span aria-hidden="true"></span>
        </a>
        <a href="https://www.facebook.com/upnveteranyogyakarta/" target="_blank" rel="noopener noreferrer"
           class="transition duration-200 hover:opacity-70">
        Facebook <span aria-hidden="true"></span>
        </a>
        <a href="https://x.com/upnvykofficial" target="_blank" rel="noopener noreferrer"
           class="transition duration-200 hover:opacity-70">
        X <span aria-hidden="true"></span>
        </a>
    </div>
    </div>


      <!-- Statistik -->
      <dl class="mt-16 grid grid-cols-1 gap-4 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base text-gray-300">Fakultas</dt>
          <dd class="text-4xl font-bold text-white">7</dd>
        </div>

        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base text-gray-300">Program Studi</dt>
          <dd class="text-4xl font-bold text-white">30+</dd>
        </div>

        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base text-gray-300">Mahasiswa Aktif</dt>
          <dd class="text-4xl font-bold text-white">20.000+</dd>
        </div>

        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base text-gray-300">Jaringan Alumni</dt>
          <dd class="text-4xl font-bold text-white">50.000+</dd>
        </div>
      </dl>
    </div>
  </div>
</div>





<!-- HERO: Carousel -->
<section class="mb-12">
  <div class="relative max-w-6xl mx-auto">
    <div id="carousel" class="relative overflow-hidden rounded-2xl shadow-lg">
      
      <!-- Slides -->
      <div class="carousel-slides relative h-[420px] md:h-[520px]">

        <!-- Slide 1 -->
        <div class="carousel-item absolute inset-0 transition-opacity duration-700 ease-in-out opacity-100" data-index="0" aria-hidden="false">
          <img src="https://awsimages.detik.net.id/community/media/visual/2023/01/13/kampus-upn-veteran-jogja-jumat-1312023_169.jpeg?w=650&q=80" alt="Gedung UPN Veteran Yogyakarta" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-b from-black/40 to-black/30"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-start md:items-center text-left md:text-center px-6 md:px-12 text-white">
            <h2 class="text-3xl md:text-5xl font-extrabold drop-shadow-lg leading-tight">
              Selamat Datang di Blog Resmi UPN “Veteran” Yogyakarta
            </h2>
            <p class="mt-4 text-sm md:text-lg text-white/90 max-w-3xl">
              Wadah berbagi informasi, artikel, dan kisah inspiratif seputar kampus Bela Negara — tempat mahasiswa, dosen, dan alumni bertumbuh bersama.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3">
              <a href="articles.php" class="inline-block bg-indigo-600 text-white px-5 py-3 rounded-lg shadow hover:bg-indigo-700 transition">
                Baca Artikel
              </a>
              <a href="about.php" class="inline-block border border-white text-white px-5 py-3 rounded-lg hover:bg-white hover:text-indigo-600 transition">
                Tentang Kampus
              </a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0" data-index="1" aria-hidden="true">
          <img src="https://akk.upnvj.ac.id/wp-content/uploads/2025/02/Screenshot-2025-02-25-091034.png" alt="Mahasiswa UPN Veteran Yogyakarta" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-b from-black/40 to-black/30"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-start md:items-center text-left md:text-center px-6 md:px-12 text-white">
            <h2 class="text-3xl md:text-5xl font-extrabold drop-shadow-lg leading-tight">
              Prestasi & Inovasi Mahasiswa
            </h2>
            <p class="mt-4 text-sm md:text-lg text-white/90 max-w-3xl">
              Jelajahi berbagai karya, penelitian, dan inovasi mahasiswa UPNVYK yang membawa semangat Bela Negara di kancah nasional dan internasional.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3">
              <a href="prestasi.php" class="inline-block bg-indigo-600 text-white px-5 py-3 rounded-lg shadow hover:bg-indigo-700 transition">
                Lihat Prestasi
              </a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0" data-index="2" aria-hidden="true">
          <img src="https://upnyk.ac.id/public/assets/berita/image-94618532081370425769.png" alt="Kegiatan dan Pengabdian Masyarakat UPN" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-b from-black/40 to-black/30"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-start md:items-center text-left md:text-center px-6 md:px-12 text-white">
            <h2 class="text-3xl md:text-5xl font-extrabold drop-shadow-lg leading-tight">
              Pendidikan, Penelitian & Pengabdian
            </h2>
            <p class="mt-4 text-sm md:text-lg text-white/90 max-w-3xl">
              UPN “Veteran” Yogyakarta berkomitmen untuk mengembangkan pendidikan berkualitas serta kontribusi nyata bagi masyarakat dan bangsa.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3">
              <a href="contact.php" class="inline-block bg-indigo-600 text-white px-5 py-3 rounded-lg shadow hover:bg-indigo-700 transition">
                Hubungi Kami
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <button id="prevBtn" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 rounded-full p-2 shadow focus:outline-none" aria-label="Previous slide">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
      </button>
      <button id="nextBtn" class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 rounded-full p-2 shadow focus:outline-none" aria-label="Next slide">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
      </button>

      <!-- Indicators -->
      <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
        <button class="carousel-dot w-3 h-3 rounded-full bg-white/70" data-to="0" aria-label="Slide 1"></button>
        <button class="carousel-dot w-3 h-3 rounded-full bg-white/50" data-to="1" aria-label="Slide 2"></button>
        <button class="carousel-dot w-3 h-3 rounded-full bg-white/50" data-to="2" aria-label="Slide 3"></button>
      </div>
    </div>
  </div>
</section>


<!-- RECENT POSTS (sama seperti sebelumnya) -->
<section class="mb-12">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-semibold text-gray-800">Artikel Terbaru</h2>
    <a href="articles.php" class="text-indigo-600 hover:underline text-sm">Lihat Semua Artikel →</a>
  </div>

  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <?php foreach ($recent as $a): ?>
      <article class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
        <a href="#" class="block h-48">
          <img src="<?= htmlspecialchars($a['image']) ?>" alt="<?= htmlspecialchars($a['title']) ?>" class="w-full h-full object-cover">
        </a>
        <div class="p-5">
          <h3 class="text-lg font-semibold text-gray-800 hover:text-indigo-600">
            <a href="#"><?= htmlspecialchars($a['title']) ?></a>
          </h3>
          <p class="text-xs text-gray-500 mt-1"><?= date('d M Y', strtotime($a['date'])) ?></p>
          <p class="text-sm text-gray-600 mt-3 line-clamp-3"><?= htmlspecialchars($a['excerpt']) ?></p>
          <div class="mt-4 flex items-center justify-between">
            <a href="#" class="text-indigo-600 font-medium text-sm hover:underline">Baca Selengkapnya →</a>
            <span class="text-xs text-gray-400">• 3 min read</span>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- ABOUT -->
<section class="mb-12 bg-indigo-50 rounded-xl p-8">
  <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-2xl font-semibold text-indigo-700">Tentang Blog Kampus UPN "Veteran" Yogyakarta</h2>
    <p class="mt-3 text-gray-700 leading-relaxed">
      Blog Kampus UPN "Veteran" Yogyakarta merupakan wadah informasi dan inspirasi bagi sivitas akademika. 
      Melalui platform ini, mahasiswa, dosen, dan alumni dapat berbagi pengetahuan, pengalaman, serta berbagai 
      kegiatan akademik maupun non-akademik di lingkungan kampus Bela Negara.  
      <br><br>
      Blog ini juga menjadi sarana publikasi artikel, berita kampus, prestasi mahasiswa, serta pengabdian masyarakat 
      yang mencerminkan nilai <span class="font-semibold text-indigo-700">Bela Negara</span> dan semangat inovasi UPNVYK.
    </p>
  </div>
</section>


<!-- CALL TO ACTION / Social -->
<section class="mb-16">
  <div class="bg-white rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center justify-between gap-4">
    <div>
      <h3 class="text-lg font-semibold text-gray-800">Tetap Terhubung dengan UPN "Veteran" Yogyakarta</h3>
      <p class="text-sm text-gray-600 mt-1">Ikuti kabar terbaru, pengumuman resmi, serta aktivitas kampus melalui media sosial resmi UPNVYK.</p>
    </div>

    <div class="flex items-center gap-3">
      <!-- Instagram -->
      <a href="https://www.instagram.com/upnvykofficial/" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full  from-pink-500 to-yellow-400 shadow hover:scale-110 transition-transform" aria-label="Instagram">
        <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" class="w-5 h-5">
      </a>

      <!-- WhatsApp -->
      <a href="https://wa.me/628112705533" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full  shadow hover:scale-110 transition-transform" aria-label="WhatsApp">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" class="w-5 h-5">
      </a>

      <!-- Twitter -->
      <a href="https://x.com/upnvykofficial" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full shadow hover:scale-110 transition-transform" aria-label="Twitter">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" class="w-5 h-5">
      </a>

      <!-- Facebook -->
      <a href="https://www.facebook.com/upnveteranyogyakarta/" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full shadow hover:scale-110 transition-transform" aria-label="Facebook">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" class="w-5 h-5">
      </a>

      <a href="mailto:info@upnyk.ac.id" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-full shadow hover:scale-110 transition-transform" aria-label="Facebook">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/2560px-Gmail_icon_%282020%29.svg.png" alt="Email" class="w-5 h-5">
      </a>
    </div>
  </div>
</section>

<!-- Carousel script -->
<script>
(function(){
  const slides = Array.from(document.querySelectorAll('#carousel .carousel-item'));
  const dots = Array.from(document.querySelectorAll('#carousel .carousel-dot'));
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  let current = 0;
  let timer = null;
  const delay = 3500;

  function show(idx) {
    slides.forEach((s, i) => {
      if (i === idx) {
        s.style.opacity = '1';
        s.setAttribute('aria-hidden','false');
      } else {
        s.style.opacity = '0';
        s.setAttribute('aria-hidden','true');
      }
    });
    dots.forEach((d, i) => {
      d.classList.toggle('bg-white/90', i === idx);
      d.classList.toggle('bg-white/50', i !== idx);
    });
    current = idx;
  }

  function next() { show((current + 1) % slides.length); }
  function prev() { show((current - 1 + slides.length) % slides.length); }

  // auto play
  function startTimer() { timer = setInterval(next, delay); }
  function stopTimer() { if (timer) clearInterval(timer); }

  // events
  nextBtn.addEventListener('click', () => { stopTimer(); next(); startTimer(); });
  prevBtn.addEventListener('click', () => { stopTimer(); prev(); startTimer(); });
  dots.forEach(d => d.addEventListener('click', () => { stopTimer(); show(parseInt(d.getAttribute('data-to'))); startTimer(); }));

  // pause on hover
  const carouselEl = document.getElementById('carousel');
  carouselEl.addEventListener('mouseenter', stopTimer);
  carouselEl.addEventListener('mouseleave', startTimer);

  // init
  show(0);
  startTimer();
})();
</script>

<?php include __DIR__ . '/_footer.php'; ?>
