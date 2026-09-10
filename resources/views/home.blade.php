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
                rgba(7, 94, 74, 0.90),
                rgba(8, 127, 91, 0.60),
                rgba(8, 127, 91, 0.10)
            );
        }

    </style>

</head>


<body class="bg-[#FAFAF7] text-[#17211B]">


<!-- ========================================================= -->
<!-- NAVBAR -->
<!-- ========================================================= -->

<nav class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

        <!-- Logo -->
        <a href="/" class="flex items-center gap-3">

            <div class="w-14 h-18 bg-white rounded-xl flex items-center justify-center text-white text-xl font-bold">

                <img
                    src="{{ asset('images/logo.jpeg') }}"
                    alt="Logo KOMINFO"
                    class="w-full h-full object-cover"
                >

            </div>

            <div>

                <h1 class="font-bold text-xl text-[#005C3B]">
                    E-GOVERNMENT
                </h1>

                <p class="text-xs text-slate-500">
                    Dinas Komunikasi, Informatika dan Statistik Kota Pasuruan
                </p>

            </div>

        </a>


        <!-- Menu -->
        <div class="hidden md:flex items-center gap-8 font-medium">

            <a
     href="{{ route('public.agenda') }}"
    class="bg-[#008C45] text-white px-7 py-3.5 rounded-xl font-semibold hover:bg-[#006F38] transition shadow-lg"

            <a
                href="#tentang"
                class="nav-link text-slate-800 hover:text-[#008C45] transition"
            >
                Tentang
            </a>

            <a
                href="#layanan"
                class="nav-link text-slate-800 hover:text-[#008C45] transition"
            >
                Keunggulan
            </a>

            <a
                href="#informasi"
                class="nav-link text-slate-800 hover:text-[#008C45] transition"
            >
                Berita
            </a>

        </div>

    </div>

</nav>



<!-- ========================================================= -->
<!-- HERO -->
<!-- ========================================================= -->

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

            <div
                class="inline-flex items-center gap-2
                       bg-white/10
                       border border-white/20
                       px-4 py-2
                       rounded-full
                       mb-7
                       backdrop-blur"
            >

                <span class="w-2 h-2 bg-green-400 rounded-full"></span>

                <span class="text-sm">
                    Pelayanan Pemerintahan Digital
                </span>

            </div>


            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">

                Selamat Datang di

                <span class="text-[#F4C430]">
                    E-Government
                </span>

            </h1>


            <p class="text-lg md:text-xl text-green-50 leading-relaxed max-w-2xl mb-9">

                Mewujudkan pelayanan pemerintahan yang lebih modern,
                transparan, cepat, dan mudah diakses oleh seluruh masyarakat.

            </p>


            <div class="flex flex-wrap gap-4">

                <!-- Agenda -->

                <a
                    href="{{ route('public.agenda') }}"
                    class="bg-[#008C45]
                           text-white
                           px-7 py-3.5
                           rounded-xl
                           font-semibold
                           hover:bg-[#006F38]
                           transition
                           shadow-lg"
                >
                    Agenda E-Government →
                </a>


                <!-- Manajemen Kegiatan -->

                <a
                    href="{{ route('kegiatan.index') }}"
                    class="bg-[#C9A227]
                           text-white
                           px-7 py-3.5
                           rounded-xl
                           font-semibold
                           hover:bg-[#A8841F]
                           transition
                           shadow-lg"
                >
                    Manajemen Kegiatan DISKOMINFOTIK →
                </a>

            </div>

        </div>

    </div>

</section>



<!-- ========================================================= -->
<!-- TENTANG -->
<!-- ========================================================= -->

<section
    id="tentang"
    class="py-24
           bg-gradient-to-br
           from-[#E8F3EC]
           via-[#F8F6EA]
           to-[#EDE2B8]"
>

    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">


        <!-- Gambar -->

        <div class="relative">

            <img
                src="{{ asset('images/kominfo.png') }}"
                alt="Pelayanan E-Government"
                class="rounded-3xl shadow-2xl w-full h-[420px] object-cover"
            >

        </div>


        <!-- Deskripsi -->

        <div>

            <p class="text-[#005C3B] font-bold tracking-wider text-sm mb-3">
                TENTANG E-GOVERNMENT
            </p>


            <h2
                class="text-3xl md:text-4xl
                       font-bold
                       text-[#008C45]
                       leading-tight
                       mb-6"
            >
                Pemerintahan Modern untuk
                Masyarakat yang Lebih Baik
            </h2>


            <div class="space-y-5">

                <p class="text-slate-600 leading-relaxed">

                    E-Government merupakan bagian dari
                    Dinas Komunikasi, Informatika dan Statistik (Diskominfotik)
                    Kota Pasuruan yang berperan dalam mendukung penyelenggaraan
                    pemerintahan berbasis digital. Melalui pemanfaatan teknologi
                    informasi dan penerapan SPBE, E-Government membantu menghadirkan
                    layanan pemerintahan yang lebih mudah, cepat, efisien, transparan,
                    dan terintegrasi, sehingga masyarakat dapat memperoleh informasi
                    serta mengakses berbagai layanan publik secara lebih praktis.

                </p>

            </div>

        </div>

    </div>

</section>



<!-- ========================================================= -->
<!-- WHY E-GOVERNMENT / KEUNGGULAN -->
<!-- ========================================================= -->

<section
    id="layanan"
    class="py-24
           bg-gradient-to-br
           from-[#C5E2D1]
           via-[#E7F0E5]
           to-[#F7F0D2]"
>


    <!-- Heading -->

    <div class="text-center max-w-3xl mx-auto mb-14 px-6">

        <h2 class="text-3xl md:text-3xl font-bold text-[#005C3B]">

            Mengapa Memilih Layanan E-Government?

        </h2>


        <p class="text-slate-600 mt-4 leading-relaxed">

            Layanan kami hadir untuk mendukung penyelenggaraan pemerintahan
            digital yang terencana, terarah, terintegrasi, dan berkelanjutan
            di lingkungan Pemerintah Kota Pasuruan

        </p>

    </div>



    <!-- SLIDER -->

    <div class="max-w-6xl mx-auto px-6">

        <div class="relative">


            <!-- Slider Window -->

            <div class="overflow-hidden rounded-[2rem] shadow-xl">

                <div
                    id="keunggulanSlider"
                    class="flex transition-transform duration-700 ease-in-out"
                >


                    <!-- ================= SLIDE 01 ================= -->

                    <div class="min-w-full">

                        <div
                            class="grid md:grid-cols-2
                                   min-h-[430px]
                                   overflow-hidden
                                   bg-gradient-to-br
                                   from-[#075E4A]
                                   via-[#087F5B]
                                   to-[#C9A227]"
                        >


                            <!-- TEXT -->

                            <div
                                class="relative
                                       p-10 md:p-14
                                       flex flex-col
                                       justify-center
                                       text-white"
                            >

                                <span
                                    class="absolute top-6 left-8
                                           text-8xl
                                           font-black
                                           text-white/10"
                                >
                                    01
                                </span>


                                <div class="relative">

                                    <span
                                        class="inline-block
                                               text-sm
                                               font-semibold
                                               tracking-widest
                                               text-[#F4C430]
                                               mb-4"
                                    >
                                        KEUNGGULAN 01
                                    </span>


                                    <h3 class="text-3xl md:text-4xl font-bold mb-5">

                                        Perencanaan Pemerintahan Digital

                                    </h3>


                                    <p class="text-white/85 leading-relaxed max-w-lg">

                                        Mendukung perencanaan sistem dan aplikasi digital
                                        sesuai dengan kebutuhan pemerintahan dan pelayanan masyarakat.

                                    </p>


                                    <div class="mt-8 flex items-center gap-3">

                                        <span class="w-12 h-1 bg-[#F4C430] rounded-full"></span>

                                        <span class="text-sm text-white/70">

                                            E-Government Kota Pasuruan

                                        </span>

                                    </div>

                                </div>

                            </div>


                            <!-- IMAGE -->

                            <div class="relative min-h-[300px] md:min-h-0">

                                <img
                                    src="{{ asset('images/keunggulan 01.jpg') }}"
                                    alt="Layanan 1 - Akses layanan E-Government lebih mudah"
                                    class="absolute inset-0 w-full h-full object-cover"
                                >


                                <div
                                    class="absolute inset-0
                                           bg-gradient-to-r
                                           from-[#075E4A]/80
                                           via-transparent
                                           to-[#C9A227]/20"
                                ></div>

                            </div>

                        </div>

                    </div>



                    <!-- ================= SLIDE 02 ================= -->

                    <div class="min-w-full">

                        <div
                            class="grid md:grid-cols-2
                                   min-h-[430px]
                                   overflow-hidden
                                   bg-gradient-to-br
                                   from-[#006F38]
                                   via-[#087F5B]
                                   to-[#E7B92E]"
                        >


                            <!-- TEXT -->

                            <div
                                class="relative
                                       p-10 md:p-14
                                       flex flex-col
                                       justify-center
                                       text-white"
                            >

                                <span
                                    class="absolute top-6 left-8
                                           text-8xl
                                           font-black
                                           text-white/10"
                                >
                                    02
                                </span>


                                <div class="relative">

                                    <span
                                        class="inline-block
                                               text-sm
                                               font-semibold
                                               tracking-widest
                                               text-[#F4C430]
                                               mb-4"
                                    >
                                        KEUNGGULAN 02
                                    </span>


                                    <h3 class="text-3xl md:text-4xl font-bold mb-5">

                                        Kebijakan Teknis yang Terarah

                                    </h3>


                                    <p class="text-white/85 leading-relaxed max-w-lg">

                                        Menjamin pengembangan dan penggunaan sistem digital
                                        antar-OPD berjalan sesuai pedoman dan kebijakan yang telah ditetapkan.

                                    </p>


                                    <div class="mt-8 flex items-center gap-3">

                                        <span class="w-12 h-1 bg-[#F4C430] rounded-full"></span>

                                        <span class="text-sm text-white/70">

                                            E-Government Kota Pasuruan

                                        </span>

                                    </div>

                                </div>

                            </div>


                            <!-- IMAGE -->

                            <div class="relative min-h-[300px] md:min-h-0">

                                <img
                                    src="{{ asset('images/keunggulan 02.jpg') }}"
                                    alt="Layanan 2 - Pelayanan E-Government cepat dan efisien"
                                    class="absolute inset-0 w-full h-full object-cover"
                                >


                                <div
                                    class="absolute inset-0
                                           bg-gradient-to-r
                                           from-[#006F38]/80
                                           via-transparent
                                           to-[#E7B92E]/20"
                                ></div>

                            </div>

                        </div>

                    </div>



                    <!-- ================= SLIDE 03 ================= -->

                    <div class="min-w-full">

                        <div
                            class="grid md:grid-cols-2
                                   min-h-[430px]
                                   overflow-hidden
                                   bg-gradient-to-br
                                   from-[#075E4A]
                                   via-[#008C45]
                                   to-[#D4AA25]"
                        >


                            <!-- TEXT -->

                            <div
                                class="relative
                                       p-10 md:p-14
                                       flex flex-col
                                       justify-center
                                       text-white"
                            >

                                <span
                                    class="absolute top-6 left-8
                                           text-8xl
                                           font-black
                                           text-white/10"
                                >
                                    03
                                </span>


                                <div class="relative">

                                    <span
                                        class="inline-block
                                               text-sm
                                               font-semibold
                                               tracking-widest
                                               text-[#F4C430]
                                               mb-4"
                                    >
                                        KEUNGGULAN 03
                                    </span>


                                    <h3 class="text-3xl md:text-4xl font-bold mb-5">

                                        Implementasi E-Government

                                    </h3>


                                    <p class="text-white/85 leading-relaxed max-w-lg">

                                        Mendorong penerapan teknologi dalam penyelenggaraan pemerintahan
                                        agar proses kerja menjadi lebih efektif dan terintegrasi.

                                    </p>


                                    <div class="mt-8 flex items-center gap-3">

                                        <span class="w-12 h-1 bg-[#F4C430] rounded-full"></span>

                                        <span class="text-sm text-white/70">

                                            E-Government Kota Pasuruan

                                        </span>

                                    </div>

                                </div>

                            </div>


                            <!-- IMAGE -->

                            <div class="relative min-h-[300px] md:min-h-0">

                                <img
                                    src="{{ asset('images/layanan 3.jpg') }}"
                                    alt="Layanan 3 - Pelayanan E-Government transparan"
                                    class="absolute inset-0 w-full h-full object-cover"
                                >


                                <div
                                    class="absolute inset-0
                                           bg-gradient-to-r
                                           from-[#075E4A]/80
                                           via-transparent
                                           to-[#D4AA25]/20"
                                ></div>

                            </div>

                        </div>

                    </div>



                    <!-- ================= SLIDE 04 ================= -->

                    <div class="min-w-full">

                        <div
                            class="grid md:grid-cols-2
                                   min-h-[430px]
                                   overflow-hidden
                                   bg-gradient-to-br
                                   from-[#006F38]
                                   via-[#087F5B]
                                   to-[#E7B92E]"
                        >


                            <!-- TEXT -->

                            <div
                                class="relative
                                       p-10 md:p-14
                                       flex flex-col
                                       justify-center
                                       text-white"
                            >

                                <span
                                    class="absolute top-6 left-8
                                           text-8xl
                                           font-black
                                           text-white/10"
                                >
                                    04
                                </span>


                                <div class="relative">

                                    <span
                                        class="inline-block
                                               text-sm
                                               font-semibold
                                               tracking-widest
                                               text-[#F4C430]
                                               mb-4"
                                    >
                                        KEUNGGULAN 04
                                    </span>


                                    <h3 class="text-3xl md:text-4xl font-bold mb-5">

                                        Koordinasi Antar-OPD

                                    </h3>


                                    <p class="text-white/85 leading-relaxed max-w-lg">

                                        Mendukung penggunaan aplikasi dan sistem informasi yang selaras
                                        dengan penerapan SPBE di lingkungan Pemerintah Kota Pasuruan.

                                    </p>


                                    <div class="mt-8 flex items-center gap-3">

                                        <span class="w-12 h-1 bg-[#F4C430] rounded-full"></span>

                                        <span class="text-sm text-white/70">

                                            E-Government Kota Pasuruan

                                        </span>

                                    </div>

                                </div>

                            </div>


                            <!-- IMAGE -->

                            <div class="relative min-h-[300px] md:min-h-0">

                                <img
                                    src="{{ asset('images/keunggulan 04.jpg') }}"
                                    alt="Layanan 4 - Pelayanan E-Government untuk masyarakat"
                                    class="absolute inset-0 w-full h-full object-cover"
                                >


                                <div
                                    class="absolute inset-0
                                           bg-gradient-to-r
                                           from-[#006F38]/80
                                           via-transparent
                                           to-[#E7B92E]/20"
                                ></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- SLIDER CONTROL -->

            <div class="flex items-center justify-between mt-7">


                <!-- PREVIOUS -->

                <button
                    onclick="prevKeunggulan()"
                    aria-label="Slide sebelumnya"
                    class="w-12 h-12 rounded-full
                           bg-white
                           border border-[#008C45]
                           text-[#006F38]
                           flex items-center justify-center
                           shadow-sm
                           hover:bg-[#008C45]
                           hover:text-white
                           transition duration-300"
                >

                    <span class="text-xl">
                        ←
                    </span>

                </button>



                <!-- INDICATOR -->

                <div class="flex items-center gap-2">

                    <button
                        onclick="goToKeunggulan(0)"
                        class="slider-dot
                               w-8 h-2
                               rounded-full
                               bg-[#008C45]
                               transition-all duration-300"
                    ></button>


                    <button
                        onclick="goToKeunggulan(1)"
                        class="slider-dot
                               w-2 h-2
                               rounded-full
                               bg-slate-300
                               transition-all duration-300"
                    ></button>


                    <button
                        onclick="goToKeunggulan(2)"
                        class="slider-dot
                               w-2 h-2
                               rounded-full
                               bg-slate-300
                               transition-all duration-300"
                    ></button>


                    <button
                        onclick="goToKeunggulan(3)"
                        class="slider-dot
                               w-2 h-2
                               rounded-full
                               bg-slate-300
                               transition-all duration-300"
                    ></button>

                </div>



                <!-- NEXT -->

                <button
                    onclick="nextKeunggulan()"
                    aria-label="Slide berikutnya"
                    class="w-12 h-12 rounded-full
                           bg-white
                           border border-[#008C45]
                           text-[#006F38]
                           flex items-center justify-center
                           shadow-sm
                           hover:bg-[#008C45]
                           hover:text-white
                           transition duration-300"
                >

                    <span class="text-xl">
                        →
                    </span>

                </button>

            </div>

        </div>

    </div>

</section>



<!-- ========================================================= -->
<!-- INFORMASI / BERITA -->
<!-- ========================================================= -->

<section
    id="informasi"
    class="py-24 bg-slate-50"
>

    <div class="max-w-7xl mx-auto px-6">


        <!-- Heading -->

        <div
            class="flex flex-col
                   md:flex-row
                   md:items-end
                   justify-between
                   gap-6
                   mb-14"
        >

            <div>

                <p
                    class="text-[#005C3B]
                           font-bold
                           text-sm
                           tracking-widest
                           mb-3"
                >
                    BERITA KOTA PASURUAN
                </p>


                <h2
                    class="text-3xl
                           md:text-4xl
                           font-bold
                           text-[#008C45]"
                >
                    Berita Kota Pasuruan Terkini
                </h2>


                <p
                    class="text-slate-600
                           mt-4
                           max-w-2xl
                           leading-relaxed"
                >
                    Ikuti berbagai informasi dan perkembangan terbaru seputar
                    kegiatan pemerintahan, pelayanan publik, pembangunan,
                    serta berbagai aktivitas masyarakat di Kota Pasuruan.
                </p>

            </div>

        </div>



        <!-- ================================================= -->
        <!-- DAFTAR INFORMASI -->
        <!-- ================================================= -->

        <div class="grid md:grid-cols-3 gap-8">


            @forelse ($informasi as $item)


                <!-- ================================================= -->
                <!-- CARD BERITA -->
                <!-- Seluruh card termasuk gambar dapat diklik -->
                <!-- ================================================= -->

                <a
                    href="{{ route('informasi.show', $item->id) }}"
                    class="group block"
                >

                    <article
                        class="h-full
                               bg-white
                               border border-slate-200
                               rounded-2xl
                               overflow-hidden
                               shadow-sm
                               hover:border-[#008C45]
                               hover:shadow-2xl
                               hover:-translate-y-2
                               transition-all duration-300"
                    >


                        <!-- ========================================= -->
                        <!-- GAMBAR BERITA -->
                        <!-- ========================================= -->

                        <div
                            class="w-full
                                   h-52
                                   bg-slate-100
                                   overflow-hidden"
                        >

                            @if($item->gambar)

                                <img
                                    src="{{ asset('storage/' . $item->gambar) }}"
                                    alt="{{ $item->judul }}"
                                    class="w-full
                                           h-full
                                           object-cover
                                           group-hover:scale-105
                                           transition-transform
                                           duration-500"
                                >

                            @else

                                <!-- Placeholder jika berita tidak memiliki gambar -->

                                <div
                                    class="w-full
                                           h-full
                                           flex
                                           items-center
                                           justify-center
                                           text-slate-400"
                                >

                                    <div class="text-center">


                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-10 h-10 mx-auto mb-2"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M4 6h16a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z"
                                            />

                                        </svg>


                                        <span class="text-sm">
                                            Tidak ada gambar
                                        </span>

                                    </div>

                                </div>

                            @endif

                        </div>



                        <!-- ========================================= -->
                        <!-- ISI BERITA -->
                        <!-- ========================================= -->

                        <div class="p-7">


                            <!-- Kategori -->

                            <span
                                class="inline-flex
                                       items-center
                                       bg-[#008C45]
                                       text-white
                                       text-xs
                                       font-semibold
                                       px-3 py-1.5
                                       rounded-full
                                       mb-5
                                       group-hover:bg-[#006F38]
                                       transition-colors
                                       duration-300"
                            >
                                {{ $item->kategori }}
                            </span>



                            <!-- Tanggal -->

                            <p class="text-sm text-slate-500 mb-4">

                                <span class="mr-1">
                                    📅
                                </span>

                                {{ $item->tanggal->format('d F Y') }}

                            </p>



                            <!-- Judul -->

                            <h3
                                class="text-xl
                                       font-bold
                                       text-slate-800
                                       mb-4
                                       leading-snug
                                       group-hover:text-[#008C45]
                                       transition-colors
                                       duration-300"
                            >
                                {{ $item->judul }}
                            </h3>



                            <!-- Ringkasan -->

                            <p
                                class="text-slate-600
                                       leading-relaxed
                                       line-clamp-3"
                            >
                                {{ $item->ringkasan }}
                            </p>



                            <!-- Baca Selengkapnya -->

                            <div
                                class="mt-6
                                       pt-5
                                       border-t
                                       border-slate-100
                                       flex
                                       items-center
                                       justify-between
                                       text-[#008C45]
                                       font-semibold
                                       text-sm"
                            >

                                <span>
                                    Baca Selengkapnya
                                </span>


                                <span
                                    class="w-9
                                           h-9
                                           rounded-full
                                           bg-[#E8F3EC]
                                           text-[#008C45]
                                           flex
                                           items-center
                                           justify-center
                                           group-hover:bg-[#008C45]
                                           group-hover:text-white
                                           group-hover:translate-x-1
                                           transition-all
                                           duration-300"
                                >
                                    →
                                </span>

                            </div>

                        </div>

                    </article>

                </a>


            @empty


                <!-- ================================================= -->
                <!-- JIKA BELUM ADA BERITA -->
                <!-- ================================================= -->

                <div
                    class="md:col-span-3
                           text-center
                           py-16"
                >

                    <div class="text-6xl mb-5">
                        📢
                    </div>


                    <h3
                        class="text-xl
                               font-bold
                               text-slate-700"
                    >
                        Belum Ada Berita
                    </h3>


                    <p class="text-slate-500 mt-2">
                        Berita terbaru Kota Pasuruan akan segera tersedia.
                    </p>

                </div>


            @endforelse


        </div>



        <!-- ================================================= -->
        <!-- BUTTON LIHAT SEMUA BERITA -->
        <!-- ================================================= -->

        <div class="text-center mt-14">

            <a
                href="{{ route('informasi.index') }}"
                class="inline-flex
                       items-center
                       justify-center
                       gap-3
                       bg-[#008C45]
                       hover:bg-[#006F38]
                       text-white
                       px-8 py-4
                       rounded-xl
                       font-semibold
                       shadow-lg
                       hover:shadow-xl
                       hover:-translate-y-1
                       transition-all
                       duration-300"
            >

                Lihat Semua Berita

                <span class="text-xl">
                    →
                </span>

            </a>

        </div>

    </div>

</section>



<!-- ========================================================= -->
<!-- FOOTER -->
<!-- ========================================================= -->

<footer
    class="bg-gradient-to-br
           from-[#075E4A]
           to-[#087F5B]
           text-white"
>


    <!-- Footer Content -->

    <div
        class="max-w-7xl
               mx-auto
               px-6
               py-16
               grid
               md:grid-cols-4
               gap-10"
    >


        <!-- Brand -->

        <div>

            <div
                class="flex
                       items-center
                       gap-3
                       mb-5"
            >

                <div
                    class="w-16
                           h-18
                           rounded-xl
                           overflow-hidden
                           flex
                           items-center
                           justify-center"
                >

                    <img
                        src="{{ asset('images/logo.jpeg') }}"
                        alt="Logo E-Government"
                        class="w-full h-full object-cover"
                    >

                </div>


                <h2 class="text-2xl font-bold text-white">
                    E-GOVERNMENT
                </h2>

            </div>


            <p
                class="leading-relaxed
                       text-white/80
                       text-sm"
            >
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


            <ul class="space-y-3 text-white/80 text-sm">

                <li>

                    <a
                        href="/"
                        class="hover:text-[#E7B92E] transition"
                    >
                        Beranda
                    </a>

                </li>


                <li>

                    <a
                        href="#tentang"
                        class="hover:text-[#E7B92E] transition"
                    >
                        Tentang
                    </a>

                </li>


                <li>

                    <a
                        href="#layanan"
                        class="hover:text-[#E7B92E] transition"
                    >
                        Layanan
                    </a>

                </li>


                <li>

                    <a
                        href="#informasi"
                        class="hover:text-[#E7B92E] transition"
                    >
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


            <div class="space-y-4 text-white/80 text-sm">


                <!-- Alamat -->

                <div class="flex items-start gap-3">

                    <span class="text-[#E7B92E]">
                        📍
                    </span>


                    <p>
                        Jl. Pahlawan No.28, Pekuncen,<br>
                        Kec. Panggungrejo, Kota Pasuruan,<br>
                        Jawa Timur 67126
                    </p>

                </div>



                <!-- Email -->

                <div class="flex items-center gap-3">

                    <span class="text-[#E7B92E]">
                        📧
                    </span>


                    <a
                        href="mailto:kominfo@pasuruankota.go.id"
                        class="hover:text-[#E7B92E] transition"
                    >
                        kominfo@pasuruankota.go.id
                    </a>

                </div>



                <!-- Telepon -->

                <div class="flex items-center gap-3">

                    <span class="text-[#E7B92E]">
                        📞
                    </span>


                    <a
                        href="tel:+62343561668"
                        class="hover:text-[#E7B92E] transition"
                    >
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
                class="block
                       rounded-xl
                       overflow-hidden
                       border
                       border-slate-700
                       hover:border-[#E7B92E]
                       transition"
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



    <!-- Copyright -->

    <div class="border-t border-white/10">

        <div
            class="max-w-7xl
                   mx-auto
                   px-6
                   py-6
                   text-center
                   text-sm
                   text-white"
        >

            <p>

                © {{ date('Y') }}
                E-GOVERNMENT — Diskominfotik Kota Pasuruan.
                Seluruh Hak Cipta Dilindungi.

            </p>


            <div
                class="flex
                       justify-center
                       items-center
                       gap-4
                       mt-3"
            >

                <a
                    href="javascript:void(0)"
                    class="text-white
                           hover:text-[#E7B92E]
                           transition"
                >
                    Kebijakan Privasi
                </a>


                <span class="text-white">
                    |
                </span>


                <a
                    href="javascript:void(0)"
                    class="text-white
                           hover:text-[#E7B92E]
                           transition"
                >
                    Syarat & Ketentuan
                </a>

            </div>

        </div>

    </div>

</footer>



<!-- ========================================================= -->
<!-- JAVASCRIPT NAVBAR -->
<!-- ========================================================= -->

<script>

    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {

        link.addEventListener('click', function () {

            navLinks.forEach(item => {

                item.classList.remove('text-[#008C45]');

                item.classList.add('text-slate-800');

            });


            this.classList.remove('text-slate-800');

            this.classList.add('text-[#008C45]');

        });

    });

</script>



<!-- ========================================================= -->
<!-- JAVASCRIPT SLIDER -->
<!-- ========================================================= -->

<script>

    let currentKeunggulan = 0;


    const sliderKeunggulan =
        document.getElementById('keunggulanSlider');


    const dotsKeunggulan =
        document.querySelectorAll('.slider-dot');



    function updateKeunggulan() {

        sliderKeunggulan.style.transform =
            `translateX(-${currentKeunggulan * 100}%)`;


        dotsKeunggulan.forEach((dot, index) => {

            if (index === currentKeunggulan) {

                dot.classList.remove(
                    'w-2',
                    'bg-slate-300'
                );


                dot.classList.add(
                    'w-8',
                    'bg-[#008C45]'
                );

            } else {

                dot.classList.remove(
                    'w-8',
                    'bg-[#008C45]'
                );


                dot.classList.add(
                    'w-2',
                    'bg-slate-300'
                );

            }

        });

    }



    function nextKeunggulan() {

        currentKeunggulan++;


        if (currentKeunggulan >= 4) {

            currentKeunggulan = 0;

        }


        updateKeunggulan();

    }



    function prevKeunggulan() {

        currentKeunggulan--;


        if (currentKeunggulan < 0) {

            currentKeunggulan = 3;

        }


        updateKeunggulan();

    }



    function goToKeunggulan(index) {

        currentKeunggulan = index;

        updateKeunggulan();

    }

</script>


</body>

</html>