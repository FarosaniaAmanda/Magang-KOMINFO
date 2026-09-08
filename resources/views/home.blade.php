<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>E-GOV | Pelayanan Digital Pemerintah</title>

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<style>
    html {
        scroll-behavior: smooth;
    }

    .hero-overlay {
        background: linear-gradient(
            90deg,
            rgba(15, 23, 42, 0.92),
            rgba(30, 64, 175, 0.70),
            rgba(30, 64, 175, 0.20)
        );
    }
</style>


</head>

<body class="bg-slate-50 text-slate-800">

<!-- ================= NAVBAR ================= -->

<nav class="bg-white backdrop-blur-md shadow-sm sticky top-0 z-50">


<div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

    <!-- Logo -->
    <a href="/" class="flex items-center gap-3">

        <div class="w-12 h-14 bg-white-700 rounded-xl flex items-center justify-center text-white text-xl font-bold">
            <img src="{{ asset('images/logo.jpeg') }}" alt="Logo KOMINFO" class="w-full h-full object-cover">
        </div>

        <div>
            <h1 class="font-bold text-xl text-slate-800">
                E-GOVERNMENT
            </h1>

            <p class="text-xs text-slate-500">
                Dinas Komunikasi, Informatika dan Statistik Kota Pasuruan
            </p>
        </div>

    </a>


    <!-- Menu -->
    <div class="hidden md:flex items-center gap-8 font-medium">

        <a href="/" class="hover:text-blue-700 transition">
            Beranda
        </a>

        <a href="#tentang" class="hover:text-blue-700 transition">
            Tentang
        </a>

        <a href="#layanan" class="hover:text-blue-700 transition">
            Keunggulan
        </a>

        <a href="#informasi" class="hover:text-blue-700 transition">
            Informasi
        </a>

    </div>

</div>


</nav>

<!-- ================= HERO ================= -->

<section class="relative min-h-[600px] flex items-center">


<!-- Background Image -->
<div
    class="absolute inset-0 bg-cover bg-center"
    style="background-image: url('{{ asset('images/hero-egov (1).png') }}');"
></div>

<!-- Overlay -->
<div class="absolute inset-0 hero-overlay"></div>


<!-- Content -->
<div class="relative max-w-7xl mx-auto px-6 w-full">

    <div class="max-w-3xl text-white">

        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 px-4 py-2 rounded-full mb-7 backdrop-blur">

            <span class="w-2 h-2 bg-green-400 rounded-full"></span>

            <span class="text-sm">
                Dinas Komunikasi, Informatika dan Statistik Kota Pasuruan
            </span>

        </div>


        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">

            Selamat Datang di
            <span class="text-blue-300">
                E-Government
            </span>

        </h1>


        <p class="text-lg md:text-xl text-blue-100 leading-relaxed max-w-2xl mb-9">

            Mewujudkan pelayanan pemerintahan yang lebih modern,
            transparan, cepat, dan mudah diakses oleh seluruh masyarakat.

        </p>


        <div class="flex flex-wrap gap-4">

            <a
                href="#layanan"
                class="bg-white text-blue-700 px-7 py-3.5 rounded-xl font-semibold hover:bg-blue-50 transition shadow-lg"
            >
                Jelajahi Layanan →
            </a>


            <a
                href="#informasi"
                class="border border-white/50 text-white px-7 py-3.5 rounded-xl font-semibold hover:bg-white/10 transition"
            >
                Informasi Terbaru
            </a>

        </div>

    </div>

</div>


</section>

<!-- ================= TENTANG ================= -->
<section id="tentang" class="py-24 bg-white">

    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">

        <!-- Gambar -->
        <div class="relative">

            <img
                src="{{ asset('images/layanan.jpg') }}"
                alt="Pelayanan E-Government"
                class="rounded-3xl shadow-2xl w-full h-[420px] object-cover"
            >

        </div>


        <!-- Deskripsi -->
        <div>

            <p class="text-blue-700 font-bold tracking-wider text-sm mb-3">
                TENTANG E-GOV
            </p>

            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 leading-tight mb-6">
                Pemerintahan Modern untuk
                Masyarakat yang Lebih Baik
            </h2>

            <div class="space-y-5">

                <p class="text-slate-600 leading-relaxed">
                                E-Government merupakan bagian dari
                                Dinas Komunikasi, Informatika dan Statistik (Diskominfotik) Kota Pasuruan 
                                 yang berperan dalam mendukung penyelenggaraan pemerintahan berbasis digital. Melalui 
                                 pemanfaatan teknologi informasi dan penerapan SPBE, E-Government membantu menghadirkan 
                                 layanan pemerintahan yang lebih mudah, cepat, efisien, transparan, dan terintegrasi,
                                  sehingga masyarakat dapat memperoleh informasi serta mengakses berbagai layanan publik secara lebih praktis.


            </div>

        </div>

    </div>

</section>


<!-- WHY E-GOVERNMENT -->
<section id="layanan" class="py-20 bg-slate-50">

    <!-- Heading -->
    <div class="text-center max-w-3xl mx-auto mb-14">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-800">
            Mengapa Memilih Layanan E-Government?
        </h2>

        <p class="text-slate-600 mt-4 leading-relaxed">
            Hadir untuk mendukung penyelenggaraan pemerintahan digital yang terencana, 
            terarah, terintegrasi, dan berkelanjutan di lingkungan Pemerintah Kota Pasuruan
        </p>

    </div>


    <!-- 4 ALASAN -->
    <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">


        <!-- ALASAN 01 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-sm
                    hover:shadow-xl transition duration-300 group">

            <!-- Gambar Layanan 1 -->
            <div class="h-56 overflow-hidden bg-blue-100">

                <img
                    src="{{ asset('images/layanan 1.jpg') }}"
                    alt="Layanan 1 - Akses layanan E-Government lebih mudah"
                    class="w-full h-full object-cover
                           group-hover:scale-105 transition duration-500"
                >

            </div>

            <div class="p-8">

                <div class="flex items-start gap-5">

                    <!-- Nomor -->
                    <div class="flex-shrink-0">
                        <span class="text-4xl font-extrabold text-blue-600">
                            01
                        </span>
                    </div>

                    <div>

                        <h3 class="text-xl font-bold text-slate-800 mb-3">
                            Perencanaan Pemerintahan Digital
                        </h3>

                        <p class="text-slate-600 leading-relaxed">
                            Mendukung perencanaan sistem dan aplikasi digital
                            sesuai dengan kebutuhan pemerintahan dan pelayanan masyarakat. 
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- ALASAN 02 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-sm
                    hover:shadow-xl transition duration-300 group">

            <!-- Gambar Layanan 2 -->
            <div class="h-56 overflow-hidden bg-green-100">

                <img
                    src="{{ asset('images/layanan 2.jpg') }}"
                    alt="Layanan 2 - Pelayanan E-Government cepat dan efisien"
                    class="w-full h-full object-cover
                           group-hover:scale-105 transition duration-500"
                >

            </div>

            <div class="p-8">

                <div class="flex items-start gap-5">

                    <!-- Nomor -->
                    <div class="flex-shrink-0">
                        <span class="text-4xl font-extrabold text-green-600">
                            02
                        </span>
                    </div>

                    <div>

                        <h3 class="text-xl font-bold text-slate-800 mb-3">
                            Kebijakan Teknis yang Terarah
                        </h3>

                        <p class="text-slate-600 leading-relaxed">
                            Menjamin pengembangan dan penggunaan sistem digital 
                            antar-OPD berjalan sesuai pedoman dan kebijakan yang telah ditetapkan.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- ALASAN 03 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-sm
                    hover:shadow-xl transition duration-300 group">

            <!-- Gambar Layanan 3 -->
            <div class="h-56 overflow-hidden bg-purple-100">

                <img
                    src="{{ asset('images/layanan 3.jpg') }}"
                    alt="Layanan 3 - Pelayanan E-Government transparan"
                    class="w-full h-full object-cover
                           group-hover:scale-105 transition duration-500"
                >

            </div>

            <div class="p-8">

                <div class="flex items-start gap-5">

                    <!-- Nomor -->
                    <div class="flex-shrink-0">
                        <span class="text-4xl font-extrabold text-purple-600">
                            03
                        </span>
                    </div>

                    <div>

                        <h3 class="text-xl font-bold text-slate-800 mb-3">
                            Implementasi E-Government
                        </h3>

                        <p class="text-slate-600 leading-relaxed">
                            Mendorong penerapan teknologi dalam penyelenggaraan pemerintahan 
                            agar proses kerja menjadi lebih efektif dan terintegrasi.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- ALASAN 04 -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-sm
                    hover:shadow-xl transition duration-300 group">

            <!-- Gambar Layanan 4 -->
            <div class="h-56 overflow-hidden bg-orange-100">

                <img
                    src="{{ asset('images/layanan 4.jpg') }}"
                    alt="Layanan 4 - Pelayanan E-Government untuk masyarakat"
                    class="w-full h-full object-cover
                           group-hover:scale-105 transition duration-500"
                >

            </div>

            <div class="p-8">

                <div class="flex items-start gap-5">

                    <!-- Nomor -->
                    <div class="flex-shrink-0">
                        <span class="text-4xl font-extrabold text-orange-500">
                            04
                        </span>
                    </div>

                    <div>

                        <h3 class="text-xl font-bold text-slate-800 mb-3">
                            Koordinasi Antar-OPD
                        </h3>

                        <p class="text-slate-600 leading-relaxed">
                            Mendukung penggunaan aplikasi dan sistem informasi yang selaras 
                            dengan penerapan SPBE di lingkungan Pemerintah Kota Pasuruan.
                        </p>

                    </div>

                </div>

            </div>

        </div>


    </div>

</section>




    </div>

</div>


</section> 

<!-- ================= INFORMASI ================= -->

<section id="informasi" class="py-24 bg-slate-50">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">

            <div>

                <p class="text-blue-700 font-bold text-sm tracking-widest mb-3">
                    INFORMASI TERBARU
                </p>

                <h2 class="text-3xl md:text-4xl font-bold text-slate-800">
                    Informasi & Pengumuman
                </h2>

                <p class="text-slate-600 mt-4 max-w-2xl leading-relaxed">
                    Dapatkan informasi terbaru mengenai kegiatan, program,
                    pengumuman, dan perkembangan layanan digital Pemerintah Kota Pasuruan.
                </p>

            </div>

        </div>


        <!-- DAFTAR INFORMASI -->
        <div class="grid md:grid-cols-3 gap-8">

            @forelse ($informasi as $item)

                <!-- CARD INFORMASI -->
                <a
                    href="{{ route('informasi.show', $item->id) }}"
                    class="group block"
                >

                    <article
                        class="h-full bg-white border border-slate-200 rounded-2xl
                               overflow-hidden
                               shadow-sm
                               hover:border-blue-400
                               hover:shadow-2xl
                               hover:-translate-y-2
                               transition-all duration-300"
                    >

                        <div class="p-7">

                            <!-- Kategori -->
                            <span
                                class="inline-flex items-center
                                       bg-blue-50 text-blue-700
                                       text-xs font-semibold
                                       px-3 py-1.5
                                       rounded-full
                                       mb-5
                                       group-hover:bg-blue-600
                                       group-hover:text-white
                                       transition-colors duration-300"
                            >
                                {{ $item->kategori }}
                            </span>


                            <!-- Tanggal -->
                            <p class="text-sm text-slate-500 mb-4">
                                <span class="mr-1">📅</span>
                                {{ $item->tanggal->format('d F Y') }}
                            </p>


                            <!-- Judul -->
                            <h3
                                class="text-xl font-bold
                                       text-slate-800
                                       mb-4
                                       leading-snug
                                       group-hover:text-blue-700
                                       transition-colors duration-300"
                            >
                                {{ $item->judul }}
                            </h3>


                            <!-- Ringkasan -->
                            <p class="text-slate-600 leading-relaxed line-clamp-3">
                                {{ $item->ringkasan }}
                            </p>


                            <!-- Baca Selengkapnya -->
                            <div
                                class="mt-6 flex items-center gap-2
                                       text-blue-700
                                       font-semibold text-sm"
                            >
                                <span>
                                    Baca Selengkapnya
                                </span>

                                <span
                                    class="text-lg
                                           group-hover:translate-x-1
                                           transition-transform duration-300"
                                >
                                    →
                                </span>
                            </div>

                        </div>

                    </article>

                </a>

            @empty

                <!-- Jika belum ada informasi -->
                <div class="md:col-span-3 text-center py-16">

                    <div class="text-6xl mb-5">
                        📢
                    </div>

                    <h3 class="text-xl font-bold text-slate-700">
                        Belum Ada Informasi
                    </h3>

                    <p class="text-slate-500 mt-2">
                        Informasi terbaru akan segera tersedia.
                    </p>

                </div>

            @endforelse

        </div>


        <!-- BUTTON LIHAT SEMUA -->
        <div class="text-center mt-14">

            <a
                href="{{ route('informasi.index') }}"
                class="inline-flex items-center justify-center gap-3
                       bg-blue-700
                       hover:bg-blue-800
                       text-white
                       px-8 py-4
                       rounded-xl
                       font-semibold
                       shadow-lg
                       hover:shadow-xl
                       hover:-translate-y-1
                       transition-all duration-300"
            >

                Lihat Semua Informasi

                <span
                    class="text-xl
                           group-hover:translate-x-1"
                >
                    →
                </span>

            </a>

        </div>

    </div>

</section>

<!-- ================= FOOTER ================= -->
<footer class="bg-slate-900 text-slate-300">

    <!-- Footer Content -->
    <div class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-4 gap-10">

        <!-- Brand -->
        <div>

            <div class="flex items-center gap-3 mb-5">
                <div class="w-11 h-11 bg-blue-600 rounded-xl flex items-center justify-center text-white text-xl font-bold">
                    E
                </div>

                <h2 class="text-2xl font-bold text-white">
                    E-GOV
                </h2>
            </div>

            <p class="leading-relaxed text-slate-400 text-sm">
                Platform pelayanan digital pemerintahan Kota Pasuruan
                yang hadir untuk memberikan kemudahan akses informasi
                dan layanan kepada masyarakat.
            </p>

        </div>


        <!-- Navigasi -->
        <div>

            <h3 class="text-white font-bold text-lg mb-5">
                Navigasi
            </h3>

            <ul class="space-y-3 text-slate-400 text-sm">
                <li>
                    <a href="/" class="hover:text-blue-400 transition">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="#tentang" class="hover:text-blue-400 transition">
                        Tentang
                    </a>
                </li>

                <li>
                    <a href="#layanan" class="hover:text-blue-400 transition">
                        Layanan
                    </a>
                </li>

                <li>
                    <a href="#informasi" class="hover:text-blue-400 transition">
                        Informasi
                    </a>
                </li>
            </ul>

        </div>


        <!-- Kontak -->
        <div>

            <h3 class="text-white font-bold text-lg mb-5">
                Hubungi Kami
            </h3>

            <div class="space-y-4 text-slate-400 text-sm">

                <div class="flex items-start gap-3">
                    <span class="text-blue-400">📍</span>

                    <p>
                        Jl. Pahlawan No.28, Pekuncen,<br>
                        Kec. Panggungrejo, Kota Pasuruan,<br>
                        Jawa Timur 67126
                    </p>
                </div>

                <div class="flex items-center gap-3">
                    <span class="text-blue-400">📧</span>

                    <a href="mailto:kominfo@pasuruankota.go.id"
                       class="hover:text-blue-400 transition">
                        kominfo@pasuruankota.go.id
                    </a>
                </div>

                <div class="flex items-center gap-3">
                    <span class="text-blue-400">📞</span>

                    <a href="tel:+62343561668"
                       class="hover:text-blue-400 transition">
                        (0343) 5616668
                    </a>
                </div>

            </div>

        </div>


        <!-- Peta Lokasi -->
        <div>

            <h3 class="text-white font-bold text-lg mb-5">
                Lokasi Kantor
            </h3>

            <a
                href="https://www.google.com/maps/search/?api=1&query=Diskominfotik+Kota+Pasuruan+Jl.+Pahlawan+No.28+Pekuncen+Panggungrejo"
                target="_blank"
                rel="noopener noreferrer"
                class="block rounded-xl overflow-hidden border border-slate-700 hover:border-blue-500 transition"
            >

                <iframe
                    src="https://maps.google.com/maps?q=Diskominfotik%20Kota%20Pasuruan%20Jl.%20Pahlawan%20No.28%20Pekuncen%20Panggungrejo&z=17&output=embed"
                    class="w-full h-40 pointer-events-none"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>

            </a>

        </div>

    </div>
    <!-- END Footer Content -->


    <!-- Copyright -->
    <div class="border-t border-slate-800">

        <div class="max-w-7xl mx-auto px-6 py-6 text-center text-sm text-slate-500">

            <p>
                © {{ date('Y') }} E-GOV — Diskominfotik Kota Pasuruan.
                Seluruh Hak Cipta Dilindungi.
            </p>

            <div class="flex justify-center items-center gap-4 mt-3">

                <a href="#" class="hover:text-blue-400 transition">
                    Kebijakan Privasi
                </a>

                <span>|</span>

                <a href="#" class="hover:text-blue-400 transition">
                    Syarat & Ketentuan
                </a>

            </div>

        </div>

    </div>

</footer>
</body>
</html>
