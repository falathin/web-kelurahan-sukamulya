{{-- resources/views/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Kelurahan Winduherang')

@section('content')
    <!-- Hero Slider Section -->
    <section x-data="{
        slides: [
            'https://picsum.photos/1200/600?random=1',
            'https://picsum.photos/1200/600?random=2',
            'https://picsum.photos/1200/600?random=3'
        ],
        current: 0,
        init() { this.auto = setInterval(this.next, 5000) },
        next() { this.current = (this.current + 1) % this.slides.length },
        prev() { this.current = (this.current - 1 + this.slides.length) % this.slides.length },
        go(i) { this.current = i }
    }" x-init="init()" class="relative h-screen overflow-hidden font-sans">
        <!-- Slides -->
        <template x-for="(src, i) in slides" :key="i">
            <div x-show="current === i" class="absolute inset-0 bg-cover bg-center transition-opacity duration-700"
                :style="`background-image:url(${src});`"></div>
        </template>

        <!-- Overlay -->
        <div
            class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-center text-white px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 drop-shadow-lg">
                Wilujeng Sumping di <span class="text-green-400">Kelurahan Winduherang</span>
            </h1>
            <p class="text-lg md:text-2xl mb-6 italic">Ngawilujengkeun kadatangan anjeun ka lembur nu rahayu</p>

            <!-- Navigation Buttons -->
            <div class="flex items-center space-x-4">
                <button @click="prev()"
                    class="p-3 bg-green-600 rounded-full hover:bg-green-500 transform hover:scale-110 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button @click="next()"
                    class="p-3 bg-green-600 rounded-full hover:bg-green-500 transform hover:scale-110 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Pagination Dots -->
            <div class="flex space-x-2 mt-8">
                <template x-for="(_, i) in slides" :key="i">
                    <button class="w-3 h-3 rounded-full transition"
                        :class="i === current ? 'bg-white scale-110' : 'bg-white bg-opacity-50 hover:scale-110'"
                        @click="go(i)"></button>
                </template>
            </div>
        </div>
    </section>


    <!-- Biografi / Sambutan Lurah -->
    <section class="py-16 bg-green-50 relative overflow-hidden">

        <!-- Ornamen SVG Latar -->
        <svg class="absolute top-0 left-0 opacity-10 w-96 h-96 text-green-100 -z-10" fill="none" viewBox="0 0 500 500">
            <path fill="currentColor"
                d="M437.5,123.1c33.3,48.1,45.4,118.8,6.1,173.1s-130.4,87.1-210.4,79.1s-153.6-53.8-187.5-108.2S2.7,123.5,68.8,67.5S404.2,75,437.5,123.1z" />
        </svg>

        <!-- Garis-garis dekoratif -->
        <div class="absolute top-0 left-0 w-1 h-full bg-green-100"></div>
        <div class="absolute top-0 right-0 w-1 h-full bg-green-100"></div>
        <div class="absolute top-10 left-10 w-24 h-1 bg-gradient-to-r from-green-600 to-green-300 rounded-full"></div>
        <div class="absolute top-20 left-10 w-16 h-1 bg-green-600 rounded-full"></div>
        <div class="absolute bottom-10 right-10 w-24 h-1 bg-gradient-to-l from-green-600 to-green-300 rounded-full"></div>
        <div class="absolute bottom-20 right-10 w-16 h-1 bg-green-600 rounded-full"></div>
        <div class="absolute top-1/2 left-5 transform -translate-y-1/2 h-40 border-l-4 border-green-400 rounded-full"></div>

        <div class="max-w-6xl mx-auto px-4 flex flex-col lg:flex-row items-start gap-10 relative z-10">

            <!-- Foto Lurah -->
            <div class="lg:w-1/3 w-full flex justify-center">
                <img src="{{ asset('images/pejabat.png') }}" alt="Foto Lurah"
                    class="rounded-xl shadow-xl object-cover w-full max-w-xs border-4 border-green-200 animate-fade-in">
            </div>

            <!-- Sambutan Teks -->
            <div class="lg:w-2/3 w-full space-y-6 animate-fade-in">
                <div class="flex items-center gap-2">
                    <h2 class="text-3xl font-bold text-green-800 border-b-4 border-green-600 pb-2 inline-block relative">
                        Sambutan Lurah Sukamulya
                        <span class="absolute -bottom-1 left-0 w-12 h-1 bg-green-300"></span>
                    </h2>
                    <span
                        class="ml-2 inline-block bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded-full shadow-sm">#PelayananPrima</span>
                </div>

                <div class="space-y-4 text-gray-800 leading-relaxed">
                    <p><strong>Assalamu’alaikum warahmatullahi wabarakatuh</strong></p>
                    <p>Selamat Datang di “Website Kelurahan Sukamulya“. Salam sejahtera bagi kita semua.</p>
                    <p>
                        Kepada masyarakat Kelurahan Sukamulya sekalian yang saya banggakan. Pada kesempatan yang berbahagia
                        ini, kiranya tiada kata-kata yang patut untuk kita ucapkan terlebih dahulu melainkan puji syukur
                        yang sedalam-dalamnya, atas rahmat dan karunia Allah SWT sehingga pembuatan website Kelurahan
                        Sukamulya dapat terlaksana dengan baik.
                    </p>

                    <!-- Konten tersembunyi -->
                    <div id="sambutanHidden" class="hidden space-y-4">
                        <p>
                            Website ini kami hadirkan secara mandiri untuk mengikuti perkembangan dunia Teknologi Informasi
                            (IT) yang kian pesat. Lahir dari sebuah ide kreatif dan inovatif, serta merupakan sebuah
                            terobosan atas hasil kolaborasi kami dengan mahasiswa Poltekesos untuk lebih mendekatkan diri
                            kepada masyarakat luas.
                        </p>
                        <p>
                            Melalui website ini kami berupaya agar informasi tentang Kelurahan Sukamulya menjadi lebih
                            terbuka dan interaktif. Profil, kegiatan dan program kelurahan serta jenis dan prosedur
                            pelayanan dapat diakses oleh masyarakat secara langsung dan cepat.
                        </p>
                        <p>
                            Sebagai Lurah Kelurahan Sukamulya, kami mengajak kepada masyarakat Kelurahan Sukamulya untuk
                            ikut pula berpartisipasi menyumbangkan ide, kreasi dan informasinya agar website ini menarik
                            minat pembaca dan menunjang kami untuk memperkenalkan potensi-potensi yang ada di Kelurahan
                            Sukamulya kepada daerah lain.
                        </p>
                        <p>
                            Kami sampaikan terima kasih kepada semua pihak yang telah banyak memberikan bantuan, dukungan
                            dan kontribusi, baik berupa tenaga, pemikiran dan dorongan semangat, hingga Website ini dapat
                            terealisasi.
                        </p>
                        <p>
                            Semoga dengan adanya Website Kelurahan Sukamulya ini dapat bermanfaat dan menjadi salah satu
                            upaya peningkatan pelayanan desa. Namun disadari bahwa upaya kami ini masih jauh dari
                            kesempurnaan. Untuk itu kritik, saran, dan masukan yang konstruktif, kreatif dan inovatif sangat
                            kami nantikan demi penyempurnaan website ini.
                        </p>
                        <p><strong>Wassalamu’alaikum warahmatullahi wabarakatuh</strong></p>
                        <p class="font-semibold text-green-800">Lurah Kelurahan Sukamulya<br>Kusnadi, S.IP</p>
                    </div>

                    <!-- Tombol -->
                    <button onclick="toggleSambutan()" id="toggleButton"
                        class="text-green-700 font-semibold mt-2 inline-flex items-center hover:text-green-900 transition duration-200">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 3a1 1 0 01.894.553l5 10a1 1 0 01-.894 1.447H5a1 1 0 01-.894-1.447l5-10A1 1 0 0110 3z" />
                        </svg>
                        <span>Baca Selengkapnya</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Script Toggle -->
        <script>
            function toggleSambutan() {
                const hidden = document.getElementById("sambutanHidden");
                const button = document.getElementById("toggleButton");

                hidden.classList.toggle("hidden");
                button.querySelector("span").innerText = hidden.classList.contains("hidden") ? "Baca Selengkapnya" : "Tutup";
            }
        </script>
    </section>


    <!-- Berita Desa Section -->
    <section class="bg-gray-50 py-20 relative">
        <div class="max-w-7xl mx-auto px-4">
            <h3 class="text-4xl font-bold text-center text-green-800 mb-16 relative inline-block">
                Berita Desa
                <span class="block w-20 h-1 bg-green-300 mt-2 mx-auto rounded-full"></span>
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach (['Jumat Bersih', 'Pemeliharaan Area Gazebo Komunitas', 'Gotong Royong'] as $i => $title)
                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group relative">
                        <!-- Gambar Thumbnail -->
                        <div class="relative">
                            <img src="https://picsum.photos/seed/{{ $i }}/600/400" alt="{{ $title }}"
                                class="w-full h-52 object-cover transition-transform duration-300 group-hover:scale-105">
                            <div
                                class="absolute bottom-2 left-2 bg-green-700 text-white text-xs px-3 py-1 rounded-full shadow">
                                10 Apr 2025</div>
                        </div>

                        <!-- Konten Berita -->
                        <div class="p-6 space-y-3">
                            <span
                                class="inline-block text-xs font-medium uppercase tracking-wide text-green-700 bg-green-100 px-2 py-1 rounded-full">
                                @if ($i === 0)
                                    Kegiatan Warga
                                @elseif($i === 1)
                                    Infrastruktur
                                @else
                                    Lingkungan
                                @endif
                            </span>
                            <h4 class="text-lg font-semibold text-gray-800 group-hover:text-green-700 transition-colors">
                                {{ $title }}
                            </h4>
                            <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                                @if ($i === 0)
                                    Warga Kelurahan Winduherang berkumpul di jalan lingkungan untuk menjalankan program
                                    kebersihan bersama.
                                @elseif($i === 1)
                                    Sebuah gazebo komunitas sedang dibersihkan dan dirawat, menjadi pusat kegiatan warga.
                                @else
                                    Warga bergotong royong membersihkan saluran air dan jalan untuk mencegah banjir.
                                @endif
                            </p>

                            <!-- Tombol Popup -->
                            <div class="mt-4">
                                <button onclick="openModal({{ $i }})"
                                    class="text-green-700 font-medium inline-flex items-center hover:underline transition">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- MODAL -->
        <div id="modalBerita" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50">
            <div
                class="bg-white max-w-2xl w-full mx-4 md:mx-auto rounded-xl shadow-xl overflow-hidden animate__animated animate__fadeIn">

                <!-- Gambar Header -->
                <img id="modalImage" src="https://via.placeholder.com/800x400" alt="Gambar Berita"
                    class="w-full h-52 md:h-64 object-cover">

                <div class="p-6 space-y-4">
                    <!-- Header & Tombol Close -->
                    <div class="flex justify-between items-start border-b pb-3">
                        <div>
                            <span id="modalCategory"
                                class="inline-block text-xs font-semibold bg-green-100 text-green-700 px-3 py-1 rounded-full mb-1">Kategori</span>
                            <h4 id="modalTitle" class="text-2xl font-bold text-green-800">Judul Berita</h4>
                            <p id="modalDate" class="text-sm text-gray-500">Tanggal</p>
                        </div>
                        <button onclick="closeModal()"
                            class="text-gray-400 hover:text-red-600 text-2xl leading-none">&times;</button>
                    </div>

                    <!-- Konten -->
                    <div id="modalContent"
                        class="text-gray-700 text-sm leading-relaxed space-y-4 max-h-[60vh] overflow-y-auto">
                        <p>Konten berita akan muncul di sini...</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- SCRIPT MODAL -->
    <script>
        const beritaDetails = [{
                title: 'Jumat Bersih',
                content: `
        <p>Warga Kelurahan Winduherang berkumpul di lingkungan masing-masing untuk menjalankan kegiatan Jumat Bersih.</p>
        <p>Kegiatan ini tidak hanya bertujuan menjaga kebersihan, namun juga mempererat silaturahmi antarwarga dari berbagai latar belakang budaya dan agama.</p>
        <p>Koordinasi dilakukan bersama Ketua RT, RW, dan perangkat kelurahan setempat untuk memastikan area bersih dan bebas sampah.</p>
      `
            },
            {
                title: 'Pemeliharaan Area Gazebo Komunitas',
                content: `
        <p>Gazebo atau pendopo komunitas yang terletak di pusat desa sedang dilakukan pembersihan dan perawatan.</p>
        <p>Gazebo ini merupakan tempat bersejarah tempat warga sering berkumpul, berdiskusi, bahkan menggelar pelatihan keterampilan lokal.</p>
        <p>Diharapkan dengan perawatan berkala ini, area tetap nyaman digunakan sebagai pusat kegiatan masyarakat.</p>
      `
            },
            {
                title: 'Gotong Royong',
                content: `
        <p>Warga secara sukarela bergotong royong membersihkan saluran air dan jalan desa, terutama di area berbukit.</p>
        <p>Kegiatan ini rutin dilakukan agar tidak terjadi penyumbatan air dan demi menciptakan lingkungan sehat dan asri.</p>
        <p>Kebersamaan dan semangat gotong royong ini merupakan nilai budaya yang terus dijaga di Kelurahan Sukamulya.</p>
      `
            }
        ];

        function openModal(index) {
            const modal = document.getElementById('modalBerita');
            const title = document.getElementById('modalTitle');
            const content = document.getElementById('modalContent');

            title.innerText = beritaDetails[index].title;
            content.innerHTML = beritaDetails[index].content;

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('modalBerita');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }
    </script>


    <!-- Galeri Alam Section - Minimalis Estetik Upgrade -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-3xl md:text-4xl font-semibold text-center text-green-700 mb-14 tracking-tight"
                data-aos="fade-up">
                Galeri Kegiatan Alam Desa
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach (range(1, 8) as $id)
                    <div class="group relative overflow-hidden rounded-2xl border border-green-200 bg-white shadow transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg hover:border-green-400 cursor-pointer"
                        data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 100 }}"
                        @click="Swal.fire({ 
                title: '🌳 Kegiatan Alam RW {{ $id }}',
                html: `
                  <div class='text-left leading-relaxed'>
                    <p><strong>📌 Jenis:</strong> Penanaman Pohon</p>
                    <p><strong>📅 Tanggal:</strong> 2024-04-{{ 10 + $id }}</p>
                    <p><strong>📝 Deskripsi:</strong> Penanaman pohon bersama warga RW {{ $id }} di tepi sungai untuk menjaga ekosistem.</p>
                  </div>`,
                imageUrl: 'https://picsum.photos/id/{{ 100 + $id }}/800/500',
                imageWidth: '100%',
                imageAlt: 'Kegiatan RW {{ $id }}',
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonColor: '#34D399',
                confirmButtonText: 'Tutup'
              })">
                        <img src="https://picsum.photos/id/{{ 100 + $id }}/400/300"
                            alt="Kegiatan Alam RW {{ $id }}"
                            class="w-full h-44 object-cover transition-transform duration-300 ease-in-out group-hover:scale-110">
                        <div
                            class="absolute bottom-0 w-full bg-green-50 bg-opacity-90 px-3 py-2 text-center text-green-800 text-sm font-semibold backdrop-blur-md">
                            🌿 RW {{ $id }} — Penanaman Pohon
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

<!-- Maps & Keterangan Section - Desa Winduherang -->
<section class="bg-gradient-to-br from-green-50 to-green-200 py-20 font-sans">
  <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

    <!-- Peta Kantor Desa -->
    <div class="lg:col-span-2">
      <div class="overflow-hidden rounded-2xl shadow-xl border-2 border-green-200 ring-1 ring-green-100 transition-transform hover:scale-[1.01] duration-300">
        <iframe
          src="https://maps.google.com/maps?q=-6.974394,107.753007&z=16&output=embed"
          class="w-full h-80 md:h-[500px] border-0"
          allowfullscreen
          loading="lazy">
        </iframe>
      </div>
    </div>

    <!-- Keterangan Lokasi -->
    <div class="space-y-8">
      <h4 class="text-3xl font-bold text-green-900 mb-4 inline-flex items-center gap-2">
        🗺️ Keterangan Lokasi
        <span class="block w-16 h-1 bg-green-300 rounded-full"></span>
      </h4>

      @foreach ([
        '🏢 Alamat'  => 'Jl. Raya Winduherang No.1, Kecamatan Cigugur, Kabupaten Kuningan',
        '📧 Email'   => 'desawinduherang@kuningan.go.id',
        '📞 Telepon' => '(0232) 8900110'
      ] as $title => $text)
        <div class="border-l-4 border-green-600 bg-white rounded-xl shadow-md p-6 hover:bg-green-50 transition hover:shadow-lg">
          <h5 class="font-semibold text-green-800 text-lg mb-2">{{ $title }}</h5>
          <p class="text-gray-700 text-sm leading-relaxed">{{ $text }}</p>
        </div>
      @endforeach
    </div>

  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        // nothing else needed  here; Alpine init is automatic
    </script>

@endsection