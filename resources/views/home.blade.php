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

        body {
            overflow-x: hidden;
        }

        /* ========================================================= */
        /* HERO OVERLAY */
        /* ========================================================= */

        .hero-overlay {
            background: linear-gradient(
                90deg,
                rgba(7, 94, 74, 0.92),
                rgba(8, 127, 91, 0.68),
                rgba(8, 127, 91, 0.15)
            );
        }

        /* ========================================================= */
        /* FLOATING SURVEY BUTTON */
        /* ========================================================= */

        @keyframes surveyWiggle {

            0%,
            80%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            83% {
                transform: translateY(-5px) rotate(-6deg);
            }

            86% {
                transform: translateY(0) rotate(6deg);
            }

            89% {
                transform: translateY(-3px) rotate(-4deg);
            }

            92% {
                transform: translateY(0) rotate(3deg);
            }

        }

        .survey-floating {
            animation: surveyWiggle 4s ease-in-out infinite;
        }

        .survey-floating:hover {
            animation: none;
            transform: scale(1.08);
        }

        @keyframes surveyPulse {

            0% {
                transform: scale(1);
                opacity: 0.35;
            }

            70% {
                transform: scale(1.5);
                opacity: 0;
            }

            100% {
                transform: scale(1.5);
                opacity: 0;
            }

        }

        .survey-pulse {
            animation: surveyPulse 2s ease-out infinite;
        }

        /* ========================================================= */
        /* TOOLTIP SURVEY */
        /* ========================================================= */

        .survey-tooltip {
            opacity: 0;
            transform: translateX(10px);
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .survey-wrapper:hover .survey-tooltip {
            opacity: 1;
            transform: translateX(0);
        }

        /* ========================================================= */
        /* MOBILE MENU */
        /* ========================================================= */

        .mobile-menu {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, opacity 0.25s ease;
        }

        .mobile-menu.active {
            max-height: 500px;
            opacity: 1;
        }

    </style>

</head>


<body class="bg-[#FAFAF7] text-[#17211B]">


<!-- ========================================================= -->
<!-- NAVBAR -->
<!-- ========================================================= -->

<nav class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50">

    <div
        class="max-w-7xl
               mx-auto
               px-4 sm:px-6
               min-h-[72px] md:h-20
               flex items-center justify-between"
    >

        <!-- ===================================================== -->
        <!-- LOGO -->
        <!-- ===================================================== -->

        <a
            href="/"
            class="flex items-center gap-2 sm:gap-3 min-w-0"
        >

            <div
                class="w-11 h-11 sm:w-14 sm:h-14
                    bg-white
                    rounded-xl
                    flex
                    items-center
                    justify-center
                    overflow-hidden
                    flex-shrink-0
                    p-1"
            >

                <img
                    src="{{ asset('images/logo.jpeg') }}"
                    alt="Logo KOMINFO"
                    class="w-full h-full object-contain"
                >

            </div>

            <div class="min-w-0">

                <h1
                    class="font-bold
                        text-base sm:text-xl
                        text-[#005C3B]
                        truncate"
                >
                    E-GOVERNMENT
                </h1>

                <p
                    class="text-[9px] sm:text-xs
                        text-slate-500
                        leading-tight
                        max-w-[190px] sm:max-w-none"
                >
                    Dinas Komunikasi, Informatika dan Statistik Kota Pasuruan
                </p>

            </div>

        </a>


        <!-- ===================================================== -->
        <!-- MENU DESKTOP -->
        <!-- ===================================================== -->

        <div class="hidden md:flex items-center gap-6 lg:gap-8 font-medium">

            <!-- Beranda -->

            <a
                href="/"
                class="nav-link text-[#008C45] hover:text-[#008C45] transition"
            >
                Beranda
            </a>


            <!-- Tentang -->

            <a
                href="#tentang"
                class="nav-link text-slate-800 hover:text-[#008C45] transition"
            >
                Tentang
            </a>


            <!-- E-Gov -->

            <a
                href="#layanan"
                class="nav-link text-slate-800 hover:text-[#008C45] transition"
            >
                E-Gov
            </a>


            <!-- Berita -->

            <a
                href="#informasi"
                class="nav-link text-slate-800 hover:text-[#008C45] transition"
            >
                Berita
            </a>


            <!-- ================================================= -->
            <!-- PROFIL -->
            <!-- ================================================= -->

            <div class="relative">

                <button
                    type="button"
                    id="profilButton"
                    class="flex items-center gap-2
                           text-slate-800
                           hover:text-[#008C45]
                           transition
                           focus:outline-none"
                >

                    <span>
                        Profil
                    </span>

                    <span
                        id="profilArrow"
                        class="text-xs transition-transform duration-200"
                    >
                        ▼
                    </span>

                </button>


                <!-- DROPDOWN PROFIL -->

                <div
                    id="profilDropdown"
                    class="hidden
                           absolute
                           right-0
                           top-full
                           mt-3
                           w-60
                           bg-white
                           rounded-xl
                           shadow-xl
                           border border-slate-100
                           overflow-hidden
                           z-[60]"
                >

                    <!-- Kepala Dinas -->

                    <a
                        href="{{ route('profil.kepala') }}"
                        class="flex items-center gap-3
                               px-5 py-4
                               text-sm
                               text-slate-700
                               hover:bg-[#E8F3EC]
                               hover:text-[#008C45]
                               transition"
                    >

                        <span
                            class="flex items-center justify-center
                                   w-9 h-9
                                   rounded-lg
                                   bg-[#E8F3EC]
                                   text-[#008C45]"
                        >
                            👤
                        </span>

                        <div>

                            <p class="font-semibold">
                                Profil Kepala Dinas
                            </p>

                            <p class="text-xs text-slate-400 mt-0.5">
                                Informasi Kepala Dinas
                            </p>

                        </div>

                    </a>


                    <div class="border-t border-slate-100"></div>


                    <!-- Karyawan -->

                    <a
                        href="{{ route('profil.karyawan') }}"
                        class="flex items-center gap-3
                               px-5 py-4
                               text-sm
                               text-slate-700
                               hover:bg-[#E8F3EC]
                               hover:text-[#008C45]
                               transition"
                    >

                        <span
                            class="flex items-center justify-center
                                   w-9 h-9
                                   rounded-lg
                                   bg-[#E8F3EC]
                                   text-[#008C45]"
                        >
                            👥
                        </span>

                        <div>

                            <p class="font-semibold">
                                Profil Karyawan
                            </p>

                            <p class="text-xs text-slate-400 mt-0.5">
                                Informasi Karyawan
                            </p>

                        </div>

                    </a>

                </div>

            </div>

        </div>


        <!-- ===================================================== -->
        <!-- HAMBURGER MOBILE -->
        <!-- ===================================================== -->

        <button
            type="button"
            id="mobileMenuButton"
            class="md:hidden
                   w-11 h-11
                   rounded-xl
                   bg-[#E8F3EC]
                   text-[#005C3B]
                   flex
                   items-center
                   justify-center
                   flex-shrink-0
                   hover:bg-[#008C45]
                   hover:text-white
                   transition"
            aria-label="Buka menu"
        >

            <span
                id="menuIcon"
                class="text-2xl leading-none"
            >
                ☰
            </span>

        </button>

    </div>


    <!-- ========================================================= -->
    <!-- MOBILE MENU -->
    <!-- ========================================================= -->

    <div
        id="mobileMenu"
        class="mobile-menu md:hidden border-t border-slate-100 bg-white"
    >

        <div class="px-4 py-4 space-y-1">

            <a
                href="/"
                class="mobile-nav-link block
                       px-4 py-3
                       rounded-xl
                       text-[#008C45]
                       font-semibold
                       hover:bg-[#E8F3EC]
                       transition"
            >
                Beranda
            </a>


            <a
                href="#tentang"
                class="mobile-nav-link block
                       px-4 py-3
                       rounded-xl
                       text-slate-700
                       hover:bg-[#E8F3EC]
                       hover:text-[#008C45]
                       transition"
            >
                Tentang
            </a>


            <a
                href="#layanan"
                class="mobile-nav-link block
                       px-4 py-3
                       rounded-xl
                       text-slate-700
                       hover:bg-[#E8F3EC]
                       hover:text-[#008C45]
                       transition"
            >
                E-Gov
            </a>


            <a
                href="#informasi"
                class="mobile-nav-link block
                       px-4 py-3
                       rounded-xl
                       text-slate-700
                       hover:bg-[#E8F3EC]
                       hover:text-[#008C45]
                       transition"
            >
                Berita
            </a>


            <!-- Profil Mobile -->

            <div class="pt-2">

                <p
                    class="px-4
                           py-2
                           text-xs
                           font-bold
                           uppercase
                           tracking-wider
                           text-slate-400"
                >
                    Profil
                </p>


                <a
                    href="{{ route('profil.kepala') }}"
                    class="mobile-nav-link flex items-center gap-3
                           px-4 py-3
                           rounded-xl
                           text-slate-700
                           hover:bg-[#E8F3EC]
                           hover:text-[#008C45]
                           transition"
                >

                    <span
                        class="w-9 h-9
                               rounded-lg
                               bg-[#E8F3EC]
                               flex items-center justify-center"
                    >
                        👤
                    </span>

                    <span>
                        Profil Kepala Dinas
                    </span>

                </a>


                <a
                    href="{{ route('profil.karyawan') }}"
                    class="mobile-nav-link flex items-center gap-3
                           px-4 py-3
                           rounded-xl
                           text-slate-700
                           hover:bg-[#E8F3EC]
                           hover:text-[#008C45]
                           transition"
                >

                    <span
                        class="w-9 h-9
                               rounded-lg
                               bg-[#E8F3EC]
                               flex items-center justify-center"
                    >
                        👥
                    </span>

                    <span>
                        Profil Karyawan
                    </span>

                </a>

            </div>

        </div>

    </div>

</nav>



<!-- ========================================================= -->
<!-- HERO -->
<!-- ========================================================= -->

<section
    class="relative
           min-h-[560px]
           md:min-h-[600px]
           flex
           items-center"
>

    <!-- Background -->

    <div
        class="absolute inset-0
               bg-cover
               bg-center"
        style="background-image: url('{{ asset('images/hero-egov (1).png') }}');"
    ></div>


    <!-- Overlay -->

    <div class="absolute inset-0 hero-overlay"></div>


    <!-- Content -->

    <div
        class="relative
               max-w-7xl
               mx-auto
               px-5 sm:px-6
               py-16 sm:py-20
               w-full"
    >

        <div class="max-w-3xl text-white">

            <!-- Label -->

            <div
                class="inline-flex
                       items-center
                       gap-2
                       bg-white/10
                       border border-white/20
                       px-3 sm:px-4
                       py-2
                       rounded-full
                       mb-5 sm:mb-7
                       backdrop-blur"
            >

                <span class="w-2 h-2 bg-green-400 rounded-full"></span>

                <span class="text-xs sm:text-sm">
                    INFORMASI E-GOVERNMENT
                </span>

            </div>


            <!-- Heading -->

            <h1
                class="text-3xl
                       sm:text-4xl
                       md:text-6xl
                       font-bold
                       leading-tight
                       mb-5 md:mb-6"
            >

                Informasi E-Government

                <span class="text-[#F4C430]">
                    Kota Pasuruan
                </span>

            </h1>


            <!-- Description -->

            <p
                class="text-base
                       sm:text-lg
                       md:text-xl
                       text-green-50
                       leading-relaxed
                       max-w-2xl
                       mb-7 md:mb-9"
            >

                Portal informasi mengenai penyelenggaraan, kebijakan, kegiatan,
                dan perkembangan E-Government di lingkungan Pemerintah Kota Pasuruan.

            </p>


            <!-- BUTTON -->

            <div
                class="flex
                       flex-col
                       sm:flex-row
                       gap-3 sm:gap-4
                       w-full sm:w-auto"
            >

                <!-- Agenda -->

                <a
                    href="{{ route('public.agenda') }}"
                    class="w-full
                           sm:w-auto
                           bg-[#008C45]
                           text-white
                           px-6 sm:px-7
                           py-3 sm:py-3.5
                           rounded-xl
                           font-semibold
                           text-center
                           text-sm sm:text-base
                           hover:bg-[#006F38]
                           transition
                           shadow-lg"
                >
                    Agenda E-Government →
                </a>


                <!-- Kegiatan -->

                <a
                    href="{{ route('kegiatan.index') }}"
                    class="w-full
                           sm:w-auto
                           bg-[#C9A227]
                           text-white
                           px-6 sm:px-7
                           py-3 sm:py-3.5
                           rounded-xl
                           font-semibold
                           text-center
                           text-sm sm:text-base
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
    class="py-16
           sm:py-20
           md:py-24
           bg-gradient-to-br
           from-[#E8F3EC]
           via-[#F8F6EA]
           to-[#EDE2B8]"
>

    <div
        class="max-w-6xl
               mx-auto
               px-5 sm:px-6
               grid
               grid-cols-1
               md:grid-cols-2
               gap-10
               md:gap-16
               items-start"
    >

        <!-- Gambar -->

        <div class="relative">

            <img
                src="{{ asset('images/kominfo.png') }}"
                alt="Pelayanan E-Government"
                class="rounded-2xl
                       md:rounded-3xl
                       shadow-2xl
                       w-full
                       h-[280px]
                       sm:h-[360px]
                       md:h-[420px]
                       object-cover"
            >

        </div>


        <!-- Deskripsi -->

        <div class="max-w-2xl">

            <!-- Label -->

            <p
                class="text-[#005C3B]
                       font-bold
                       tracking-[0.15em] sm:tracking-[0.2em]
                       text-xs sm:text-sm
                       mb-3"
            >
                TENTANG E-GOVERNMENT
            </p>


            <!-- Judul -->

            <h2
                class="text-2xl
                       sm:text-3xl
                       md:text-4xl
                       font-bold
                       text-[#008C45]
                       leading-tight
                       mb-6 md:mb-7"
            >
                Informasi mengenai arah, kebijakan, kegiatan,
                dan perkembangan pemerintahan berbasis digital.
            </h2>


            <!-- Isi -->

            <div
                class="space-y-4 sm:space-y-5
                       text-slate-600
                       text-sm sm:text-base
                       leading-relaxed"
            >

                <p>

                    <span class="font-semibold text-[#005C3B]">
                        E-Government
                    </span>

                    merupakan bagian dari Dinas Komunikasi, Informatika dan Statistik
                    (Diskominfotik) Kota Pasuruan yang mendukung penyelenggaraan
                    pemerintahan berbasis digital melalui pemanfaatan teknologi informasi
                    dan penerapan Sistem Pemerintahan Berbasis Elektronik (SPBE).

                </p>


                <p>

                    Penerapan E-Government menjadi salah satu upaya dalam mendorong
                    penyelenggaraan pemerintahan yang efektif, efisien, transparan,
                    terintegrasi, dan adaptif terhadap perkembangan teknologi.
                    Pemanfaatan teknologi informasi juga mendukung berbagai proses
                    dan kegiatan pemerintahan agar dapat dikelola secara lebih terarah
                    dan terintegrasi.

                </p>


                <p>

                    Website ini hadir sebagai

                    <span class="font-semibold text-[#005C3B]">
                        Media informasi E-Government Kota Pasuruan
                    </span>

                    yang menyajikan informasi mengenai arah dan komitmen E-Government,
                    kebijakan, agenda, berita, serta berbagai kegiatan yang berkaitan
                    dengan penyelenggaraan pemerintahan berbasis digital.

                </p>

            </div>

        </div>

    </div>

</section>



<!-- ========================================================= -->
<!-- E-GOVERNMENT -->
<!-- ========================================================= -->

<section
    id="layanan"
    class="py-16
           sm:py-20
           md:py-24
           bg-gradient-to-br
           from-[#C5E2D1]
           via-[#E7F0E5]
           to-[#F7F0D2]"
>

    <!-- Heading -->

    <div
        class="text-center
               max-w-3xl
               mx-auto
               mb-10
               sm:mb-14
               px-5 sm:px-6"
    >

        <span
            class="inline-block
                   text-xs sm:text-sm
                   font-semibold
                   tracking-[0.18em] sm:tracking-[0.25em]
                   text-[#008C45]
                   mb-3"
        >
            E-GOVERNMENT KOTA PASURUAN
        </span>


        <h2
            class="text-2xl
                   sm:text-3xl
                   md:text-4xl
                   font-bold
                   text-[#005C3B]"
        >
            Mengenal E-Government Kota Pasuruan
        </h2>


        <p
            class="text-slate-600
                   text-sm sm:text-base
                   mt-4
                   leading-relaxed"
        >
            Mengenal arah, visi, misi, komitmen, dan kebijakan
            dalam mendukung penyelenggaraan E-Government di Kota Pasuruan.
        </p>

    </div>


    <!-- ===================================================== -->
    <!-- SLIDER -->
    <!-- ===================================================== -->

    <div class="max-w-6xl mx-auto px-4 sm:px-6">

        <div class="relative">

            <!-- Slider Window -->

            <div
                class="overflow-hidden
                       rounded-2xl
                       sm:rounded-[2rem]
                       shadow-xl"
            >

                <div
                    id="keunggulanSlider"
                    class="flex transition-transform duration-700 ease-in-out"
                >


                    <!-- ================================================= -->
                    <!-- SLIDE 01 - VISI -->
                    <!-- ================================================= -->

                    <div class="min-w-full">

                        <div
                            class="grid
                                   grid-cols-1
                                   md:grid-cols-2
                                   min-h-[650px]
                                   sm:min-h-[600px]
                                   md:min-h-[430px]
                                   overflow-hidden
                                   bg-gradient-to-br
                                   from-[#075E4A]
                                   via-[#087F5B]
                                   to-[#C9A227]"
                        >

                            <!-- TEXT -->

                            <div
                                class="relative
                                       p-6
                                       sm:p-8
                                       md:p-12
                                       flex
                                       flex-col
                                       justify-center
                                       text-white"
                            >

                                <span
                                    class="absolute
                                           top-3
                                           left-4 sm:left-6
                                           text-[6rem]
                                           sm:text-[8rem]
                                           md:text-[9rem]
                                           leading-none
                                           font-black
                                           text-white/10"
                                >
                                    01
                                </span>


                                <div class="relative z-10">

                                    <div
                                        class="flex
                                               items-center
                                               gap-3 sm:gap-4
                                               mb-4 sm:mb-5"
                                    >

                                        <span
                                            class="w-8 sm:w-12
                                                   h-1
                                                   bg-[#F4C430]
                                                   rounded-full"
                                        ></span>


                                        <span
                                            class="text-3xl
                                                   sm:text-4xl
                                                   md:text-5xl
                                                   font-black
                                                   tracking-wide
                                                   text-[#F4C430]"
                                        >
                                            VISI
                                        </span>

                                    </div>


                                    <h3
                                        class="text-xl
                                               sm:text-2xl
                                               md:text-3xl
                                               font-bold
                                               mb-4 sm:mb-5
                                               leading-tight"
                                    >
                                        Pemerintahan Digital yang Terintegrasi
                                    </h3>


                                    <p
                                        class="text-white/85
                                               leading-relaxed
                                               text-sm
                                               sm:text-[15px]
                                               md:text-base
                                               max-w-xl"
                                    >
                                        Mendorong terwujudnya penyelenggaraan
                                        pemerintahan berbasis teknologi informasi
                                        yang efektif, efisien, transparan, dan
                                        terintegrasi. E-Government diarahkan untuk
                                        mendukung proses pemerintahan yang lebih
                                        adaptif terhadap perkembangan teknologi
                                        serta memberikan informasi yang lebih
                                        mudah diakses oleh masyarakat.
                                    </p>


                                    <div
                                        class="mt-6 sm:mt-7
                                               flex
                                               items-center
                                               gap-3"
                                    >

                                        <span
                                            class="w-8 sm:w-10
                                                   h-1
                                                   bg-[#F4C430]
                                                   rounded-full"
                                        ></span>

                                        <span class="text-xs text-white/65">
                                            E-Government Kota Pasuruan
                                        </span>

                                    </div>

                                </div>

                            </div>


                            <!-- IMAGE -->

                            <div
                                class="relative
                                       min-h-[260px]
                                       sm:min-h-[300px]
                                       md:min-h-0
                                       order-first
                                       md:order-none"
                            >

                                <img
                                    src="{{ asset('images/keunggulan 01.jpg') }}"
                                    alt="Visi E-Government Kota Pasuruan"
                                    class="absolute inset-0
                                           w-full h-full
                                           object-cover"
                                >

                                <div
                                    class="absolute inset-0
                                           bg-gradient-to-b
                                           md:bg-gradient-to-r
                                           from-[#075E4A]/70
                                           via-transparent
                                           to-[#C9A227]/20"
                                ></div>

                            </div>

                        </div>

                    </div>



                    <!-- ================================================= -->
                    <!-- SLIDE 02 - MISI -->
                    <!-- ================================================= -->

                    <div class="min-w-full">

                        <div
                            class="grid
                                   grid-cols-1
                                   md:grid-cols-2
                                   min-h-[760px]
                                   sm:min-h-[690px]
                                   md:min-h-[430px]
                                   overflow-hidden
                                   bg-gradient-to-br
                                   from-[#006F38]
                                   via-[#087F5B]
                                   to-[#E7B92E]"
                        >

                            <!-- IMAGE -->

                            <div
                                class="relative
                                       min-h-[260px]
                                       sm:min-h-[300px]
                                       md:min-h-0
                                       order-first
                                       md:order-none"
                            >

                                <img
                                    src="{{ asset('images/keunggulan 02.jpg') }}"
                                    alt="Misi E-Government Kota Pasuruan"
                                    class="absolute inset-0
                                           w-full h-full
                                           object-cover"
                                >

                                <div
                                    class="absolute inset-0
                                           bg-gradient-to-b
                                           md:bg-gradient-to-r
                                           from-[#006F38]/70
                                           via-transparent
                                           to-[#E7B92E]/20"
                                ></div>

                            </div>


                            <!-- TEXT -->

                            <div
                                class="relative
                                       p-6
                                       sm:p-8
                                       md:p-12
                                       flex
                                       flex-col
                                       justify-center
                                       text-white"
                            >

                                <span
                                    class="absolute
                                           top-3
                                           left-4 sm:left-6
                                           text-[6rem]
                                           sm:text-[8rem]
                                           md:text-[9rem]
                                           leading-none
                                           font-black
                                           text-white/10"
                                >
                                    02
                                </span>


                                <div class="relative z-10">

                                    <div
                                        class="flex
                                               items-center
                                               gap-3 sm:gap-4
                                               mb-3"
                                    >

                                        <span
                                            class="w-8 sm:w-12
                                                   h-1
                                                   bg-[#F4C430]
                                                   rounded-full"
                                        ></span>


                                        <span
                                            class="text-3xl
                                                   sm:text-4xl
                                                   md:text-5xl
                                                   font-black
                                                   tracking-wide
                                                   text-[#F4C430]"
                                        >
                                            MISI
                                        </span>

                                    </div>


                                    <h3
                                        class="text-xl
                                               sm:text-2xl
                                               md:text-3xl
                                               font-bold
                                               mb-4
                                               leading-tight"
                                    >
                                        Mendorong Transformasi Digital Pemerintahan
                                    </h3>


                                    <!-- LIST MISI -->

                                    <ul
                                        class="space-y-3
                                               sm:space-y-4
                                               text-white/90"
                                    >

                                        <!-- 1 -->

                                        <li class="flex gap-3">

                                            <span
                                                class="mt-2
                                                       w-2 h-2
                                                       flex-shrink-0
                                                       rounded-full
                                                       bg-[#F4C430]"
                                            ></span>

                                            <div>

                                                <h4 class="font-bold text-sm sm:text-[15px]">
                                                    Inovasi Teknologi
                                                </h4>

                                                <p
                                                    class="text-xs
                                                           sm:text-sm
                                                           text-white/75
                                                           leading-snug"
                                                >
                                                    Mengembangkan pemanfaatan
                                                    teknologi informasi sesuai
                                                    kebutuhan penyelenggaraan
                                                    pemerintahan.
                                                </p>

                                            </div>

                                        </li>


                                        <!-- 2 -->

                                        <li class="flex gap-3">

                                            <span
                                                class="mt-2
                                                       w-2 h-2
                                                       flex-shrink-0
                                                       rounded-full
                                                       bg-[#F4C430]"
                                            ></span>

                                            <div>

                                                <h4 class="font-bold text-sm sm:text-[15px]">
                                                    Integrasi Sistem
                                                </h4>

                                                <p
                                                    class="text-xs
                                                           sm:text-sm
                                                           text-white/75
                                                           leading-snug"
                                                >
                                                    Mendorong keterhubungan
                                                    sistem informasi antar
                                                    perangkat daerah agar data
                                                    dan informasi lebih terintegrasi.
                                                </p>

                                            </div>

                                        </li>


                                        <!-- 3 -->

                                        <li class="flex gap-3">

                                            <span
                                                class="mt-2
                                                       w-2 h-2
                                                       flex-shrink-0
                                                       rounded-full
                                                       bg-[#F4C430]"
                                            ></span>

                                            <div>

                                                <h4 class="font-bold text-sm sm:text-[15px]">
                                                    Pelayanan Digital
                                                </h4>

                                                <p
                                                    class="text-xs
                                                           sm:text-sm
                                                           text-white/75
                                                           leading-snug"
                                                >
                                                    Mendukung pemanfaatan
                                                    teknologi digital untuk
                                                    meningkatkan kualitas
                                                    pelayanan pemerintahan.
                                                </p>

                                            </div>

                                        </li>

                                    </ul>


                                    <div
                                        class="mt-5
                                               flex
                                               items-center
                                               gap-3"
                                    >

                                        <span
                                            class="w-8 sm:w-10
                                                   h-1
                                                   bg-[#F4C430]
                                                   rounded-full"
                                        ></span>

                                        <span class="text-xs text-white/65">
                                            E-Government Kota Pasuruan
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-- ================================================= -->
                    <!-- SLIDE 03 - KOMITMEN -->
                    <!-- ================================================= -->

                    <div class="min-w-full">

                        <div
                            class="grid
                                   grid-cols-1
                                   md:grid-cols-2
                                   min-h-[760px]
                                   sm:min-h-[690px]
                                   md:min-h-[430px]
                                   overflow-hidden
                                   bg-gradient-to-br
                                   from-[#075E4A]
                                   via-[#008C45]
                                   to-[#D4AA25]"
                        >

                            <!-- IMAGE -->

                            <div
                                class="relative
                                       min-h-[260px]
                                       sm:min-h-[300px]
                                       md:min-h-0
                                       order-first
                                       md:order-none"
                            >

                                <img
                                    src="{{ asset('images/layanan 3.jpg') }}"
                                    alt="Komitmen E-Government Kota Pasuruan"
                                    class="absolute inset-0
                                           w-full h-full
                                           object-cover"
                                >

                                <div
                                    class="absolute inset-0
                                           bg-gradient-to-b
                                           md:bg-gradient-to-r
                                           from-[#075E4A]/70
                                           via-transparent
                                           to-[#D4AA25]/20"
                                ></div>

                            </div>


                            <!-- TEXT -->

                            <div
                                class="relative
                                       p-6
                                       sm:p-8
                                       md:p-12
                                       flex
                                       flex-col
                                       justify-center
                                       text-white"
                            >

                                <span
                                    class="absolute
                                           top-3
                                           left-4 sm:left-6
                                           text-[6rem]
                                           sm:text-[8rem]
                                           md:text-[9rem]
                                           leading-none
                                           font-black
                                           text-white/10"
                                >
                                    03
                                </span>


                                <div class="relative z-10">

                                    <div
                                        class="flex
                                               items-center
                                               gap-3 sm:gap-4
                                               mb-3"
                                    >

                                        <span
                                            class="w-8 sm:w-12
                                                   h-1
                                                   bg-[#F4C430]
                                                   rounded-full"
                                        ></span>


                                        <span
                                            class="text-3xl
                                                   sm:text-4xl
                                                   md:text-5xl
                                                   font-black
                                                   tracking-wide
                                                   text-[#F4C430]"
                                        >
                                            KOMITMEN
                                        </span>

                                    </div>


                                    <h3
                                        class="text-xl
                                               sm:text-2xl
                                               md:text-3xl
                                               font-bold
                                               mb-4
                                               leading-tight"
                                    >
                                        Komitmen terhadap Pemerintahan Digital
                                    </h3>


                                    <!-- LIST KOMITMEN -->

                                    <ul
                                        class="space-y-3
                                               sm:space-y-4
                                               text-white/90"
                                    >

                                        <!-- 1 -->

                                        <li class="flex gap-3">

                                            <span
                                                class="mt-2
                                                       w-2 h-2
                                                       flex-shrink-0
                                                       rounded-full
                                                       bg-[#F4C430]"
                                            ></span>

                                            <div>

                                                <h4 class="font-bold text-sm sm:text-[15px]">
                                                    Transformasi Digital
                                                </h4>

                                                <p
                                                    class="text-xs
                                                           sm:text-sm
                                                           text-white/75
                                                           leading-snug"
                                                >
                                                    Mendukung penerapan teknologi
                                                    informasi secara berkelanjutan
                                                    dalam penyelenggaraan pemerintahan.
                                                </p>

                                            </div>

                                        </li>


                                        <!-- 2 -->

                                        <li class="flex gap-3">

                                            <span
                                                class="mt-2
                                                       w-2 h-2
                                                       flex-shrink-0
                                                       rounded-full
                                                       bg-[#F4C430]"
                                            ></span>

                                            <div>

                                                <h4 class="font-bold text-sm sm:text-[15px]">
                                                    Kolaborasi
                                                </h4>

                                                <p
                                                    class="text-xs
                                                           sm:text-sm
                                                           text-white/75
                                                           leading-snug"
                                                >
                                                    Mendorong koordinasi antar
                                                    perangkat daerah dalam
                                                    pengembangan teknologi digital.
                                                </p>

                                            </div>

                                        </li>


                                        <!-- 3 -->

                                        <li class="flex gap-3">

                                            <span
                                                class="mt-2
                                                       w-2 h-2
                                                       flex-shrink-0
                                                       rounded-full
                                                       bg-[#F4C430]"
                                            ></span>

                                            <div>

                                                <h4 class="font-bold text-sm sm:text-[15px]">
                                                    Keamanan Informasi
                                                </h4>

                                                <p
                                                    class="text-xs
                                                           sm:text-sm
                                                           text-white/75
                                                           leading-snug"
                                                >
                                                    Memperhatikan keamanan dan
                                                    perlindungan informasi dalam
                                                    pemanfaatan sistem digital.
                                                </p>

                                            </div>

                                        </li>

                                    </ul>


                                    <div
                                        class="mt-5
                                               flex
                                               items-center
                                               gap-3"
                                    >

                                        <span
                                            class="w-8 sm:w-10
                                                   h-1
                                                   bg-[#F4C430]
                                                   rounded-full"
                                        ></span>

                                        <span class="text-xs text-white/65">
                                            E-Government Kota Pasuruan
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-- ================================================= -->
                    <!-- SLIDE 04 - KEBIJAKAN -->
                    <!-- ================================================= -->

                    <div class="min-w-full">

                        <div
                            class="grid
                                   grid-cols-1
                                   md:grid-cols-2
                                   min-h-[720px]
                                   sm:min-h-[650px]
                                   md:min-h-[430px]
                                   overflow-hidden
                                   bg-gradient-to-br
                                   from-[#006F38]
                                   via-[#087F5B]
                                   to-[#E7B92E]"
                        >

                            <!-- IMAGE -->

                            <div
                                class="relative
                                       min-h-[260px]
                                       sm:min-h-[300px]
                                       md:min-h-0
                                       order-first
                                       md:order-none"
                            >

                                <img
                                    src="{{ asset('images/keunggulan 04.jpg') }}"
                                    alt="Kebijakan E-Government Kota Pasuruan"
                                    class="absolute inset-0
                                           w-full h-full
                                           object-cover"
                                >

                                <div
                                    class="absolute inset-0
                                           bg-gradient-to-b
                                           md:bg-gradient-to-r
                                           from-[#006F38]/70
                                           via-transparent
                                           to-[#E7B92E]/20"
                                ></div>

                            </div>


                            <!-- TEXT -->

                            <div
                                class="relative
                                       p-6
                                       sm:p-8
                                       md:p-12
                                       flex
                                       flex-col
                                       justify-center
                                       text-white"
                            >

                                <span
                                    class="absolute
                                           top-3
                                           left-4 sm:left-6
                                           text-[6rem]
                                           sm:text-[8rem]
                                           md:text-[9rem]
                                           leading-none
                                           font-black
                                           text-white/10"
                                >
                                    04
                                </span>


                                <div class="relative z-10">

                                    <div
                                        class="flex
                                               items-center
                                               gap-3 sm:gap-4
                                               mb-3"
                                    >

                                        <span
                                            class="w-8 sm:w-12
                                                   h-1
                                                   bg-[#F4C430]
                                                   rounded-full"
                                        ></span>


                                        <span
                                            class="text-3xl
                                                   sm:text-4xl
                                                   md:text-5xl
                                                   font-black
                                                   tracking-wide
                                                   text-[#F4C430]"
                                        >
                                            KEBIJAKAN
                                        </span>

                                    </div>


                                    <h3
                                        class="text-xl
                                               sm:text-2xl
                                               md:text-3xl
                                               font-bold
                                               mb-4
                                               leading-tight"
                                    >
                                        Arah Kebijakan E-Government
                                    </h3>


                                    <p
                                        class="text-white/85
                                               text-xs
                                               sm:text-sm
                                               md:text-[15px]
                                               leading-relaxed
                                               mb-5"
                                    >
                                        Pengembangan E-Government diarahkan
                                        pada penerapan sistem pemerintahan
                                        berbasis elektronik yang terencana,
                                        terintegrasi, dan sesuai dengan kebutuhan
                                        Pemerintah Kota Pasuruan.
                                    </p>


                                    <!-- KEBIJAKAN -->

                                    <div class="grid gap-3">

                                        <div
                                            class="rounded-xl
                                                   bg-white/10
                                                   border border-white/10
                                                   p-3"
                                        >

                                            <h4
                                                class="font-bold
                                                       text-[#F4C430]
                                                       text-sm
                                                       mb-1"
                                            >
                                                Integrasi Sistem
                                            </h4>

                                            <p
                                                class="text-xs
                                                       text-white/75
                                                       leading-relaxed"
                                            >
                                                Mendorong keterhubungan sistem
                                                dan data antar perangkat daerah.
                                            </p>

                                        </div>


                                        <div
                                            class="rounded-xl
                                                   bg-white/10
                                                   border border-white/10
                                                   p-3"
                                        >

                                            <h4
                                                class="font-bold
                                                       text-[#F4C430]
                                                       text-sm
                                                       mb-1"
                                            >
                                                Pengelolaan Informasi
                                            </h4>

                                            <p
                                                class="text-xs
                                                       text-white/75
                                                       leading-relaxed"
                                            >
                                                Mendukung pengelolaan data dan
                                                informasi pemerintahan yang akurat
                                                dan terstruktur.
                                            </p>

                                        </div>

                                    </div>


                                    <div
                                        class="mt-5
                                               flex
                                               items-center
                                               gap-3"
                                    >

                                        <span
                                            class="w-8 sm:w-10
                                                   h-1
                                                   bg-[#F4C430]
                                                   rounded-full"
                                        ></span>

                                        <span class="text-xs text-white/65">
                                            E-Government Kota Pasuruan
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>


            <!-- ===================================================== -->
            <!-- SLIDER CONTROL -->
            <!-- ===================================================== -->

            <!-- PREVIOUS -->

            <button
                onclick="prevKeunggulan()"
                aria-label="Slide sebelumnya"
                class="absolute
                       left-1
                       sm:left-2
                       md:-left-6
                       top-1/2
                       -translate-y-1/2
                       z-20
                       w-9 h-9
                       sm:w-11 sm:h-11
                       md:w-12 md:h-12
                       rounded-full
                       bg-white
                       border border-[#008C45]
                       text-[#006F38]
                       flex items-center justify-center
                       shadow-lg
                       hover:bg-[#008C45]
                       hover:text-white
                       transition duration-300"
            >

                <span class="text-lg sm:text-xl md:text-2xl">
                    ←
                </span>

            </button>


            <!-- NEXT -->

            <button
                onclick="nextKeunggulan()"
                aria-label="Slide berikutnya"
                class="absolute
                       right-1
                       sm:right-2
                       md:-right-6
                       top-1/2
                       -translate-y-1/2
                       z-20
                       w-9 h-9
                       sm:w-11 sm:h-11
                       md:w-12 md:h-12
                       rounded-full
                       bg-white
                       border border-[#008C45]
                       text-[#006F38]
                       flex items-center justify-center
                       shadow-lg
                       hover:bg-[#008C45]
                       hover:text-white
                       transition duration-300"
            >

                <span class="text-lg sm:text-xl md:text-2xl">
                    →
                </span>

            </button>


            <!-- INDIKATOR -->

            <div
                class="absolute
                       left-1/2
                       -translate-x-1/2
                       bottom-4
                       sm:bottom-5
                       z-20
                       flex
                       items-center
                       gap-2
                       px-3 sm:px-4
                       py-2
                       rounded-full
                       bg-black/25
                       backdrop-blur-sm"
            >

                <button
                    onclick="goToKeunggulan(0)"
                    class="slider-dot
                           w-7 sm:w-8
                           h-2
                           rounded-full
                           bg-[#F4C430]
                           transition-all duration-300"
                ></button>


                <button
                    onclick="goToKeunggulan(1)"
                    class="slider-dot
                           w-2 h-2
                           rounded-full
                           bg-white/60
                           transition-all duration-300"
                ></button>


                <button
                    onclick="goToKeunggulan(2)"
                    class="slider-dot
                           w-2 h-2
                           rounded-full
                           bg-white/60
                           transition-all duration-300"
                ></button>


                <button
                    onclick="goToKeunggulan(3)"
                    class="slider-dot
                           w-2 h-2
                           rounded-full
                           bg-white/60
                           transition-all duration-300"
                ></button>

            </div>

        </div>

    </div>

</section>



<!-- ========================================================= -->
<!-- INFORMASI / BERITA -->
<!-- ========================================================= -->

<section
    id="informasi"
    class="py-16
           sm:py-20
           md:py-24
           bg-slate-50"
>

    <div class="max-w-7xl mx-auto px-5 sm:px-6">

        <!-- Heading -->

        <div
            class="flex
                   flex-col
                   md:flex-row
                   md:items-end
                   justify-between
                   gap-6
                   mb-10
                   md:mb-14"
        >

            <div>

                <p
                    class="text-[#005C3B]
                           font-bold
                           text-xs sm:text-sm
                           tracking-widest
                           mb-3"
                >
                    BERITA KOTA PASURUAN
                </p>


                <h2
                    class="text-2xl
                           sm:text-3xl
                           md:text-4xl
                           font-bold
                           text-[#008C45]"
                >
                    Berita Kota Pasuruan Terkini
                </h2>


                <p
                    class="text-slate-600
                           text-sm sm:text-base
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

        <div
            class="grid
                   grid-cols-1
                   sm:grid-cols-2
                   md:grid-cols-3
                   gap-6
                   md:gap-8"
        >

            @forelse ($informasi as $item)

                <!-- CARD -->

                <a
                    href="{{ route('informasi.show', $item->id) }}"
                    class="group block h-full"
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

                        <!-- GAMBAR -->

                        <div
                            class="w-full
                                   h-48
                                   sm:h-52
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


                        <!-- ISI BERITA -->

                        <div class="p-5 sm:p-7">

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
                                       mb-4 sm:mb-5
                                       group-hover:bg-[#006F38]
                                       transition-colors
                                       duration-300"
                            >
                                {{ $item->kategori }}
                            </span>


                            <!-- Tanggal -->

                            <p
                                class="text-xs sm:text-sm
                                       text-slate-500
                                       mb-3 sm:mb-4"
                            >

                                <span class="mr-1">
                                    📅
                                </span>

                                {{ $item->tanggal->format('d F Y') }}

                            </p>


                            <!-- Judul -->

                            <h3
                                class="text-lg
                                       sm:text-xl
                                       font-bold
                                       text-slate-800
                                       mb-3 sm:mb-4
                                       leading-snug
                                       group-hover:text-[#008C45]
                                       transition-colors
                                       duration-300"
                            >
                                {{ $item->judul }}
                            </h3>


                            <!-- Ringkasan -->

                            <p
                                class="text-sm sm:text-base
                                       text-slate-600
                                       leading-relaxed
                                       line-clamp-3"
                            >
                                {{ $item->ringkasan }}
                            </p>


                            <!-- Baca -->

                            <div
                                class="mt-5 sm:mt-6
                                       pt-4 sm:pt-5
                                       border-t
                                       border-slate-100
                                       flex
                                       items-center
                                       justify-between
                                       text-[#008C45]
                                       font-semibold
                                       text-xs sm:text-sm"
                            >

                                <span>
                                    Baca Selengkapnya
                                </span>


                                <span
                                    class="w-8 h-8
                                           sm:w-9 sm:h-9
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

                <!-- BELUM ADA BERITA -->

                <div
                    class="sm:col-span-2
                           md:col-span-3
                           text-center
                           py-12
                           sm:py-16"
                >

                    <div class="text-5xl sm:text-6xl mb-5">
                        📢
                    </div>


                    <h3
                        class="text-lg sm:text-xl
                               font-bold
                               text-slate-700"
                    >
                        Belum Ada Berita
                    </h3>


                    <p
                        class="text-sm sm:text-base
                               text-slate-500
                               mt-2"
                    >
                        Berita terbaru Kota Pasuruan akan segera tersedia.
                    </p>

                </div>

            @endforelse

        </div>


        <!-- ================================================= -->
        <!-- BUTTON LIHAT SEMUA -->
        <!-- ================================================= -->

        <div class="text-center mt-10 sm:mt-14">

            <a
                href="{{ route('informasi.index') }}"
                class="inline-flex
                       items-center
                       justify-center
                       gap-3
                       bg-[#008C45]
                       hover:bg-[#006F38]
                       text-white
                       px-6 sm:px-8
                       py-3.5 sm:py-4
                       rounded-xl
                       font-semibold
                       text-sm sm:text-base
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
               px-5 sm:px-6
               py-12
               sm:py-16
               grid
               grid-cols-1
               sm:grid-cols-2
               md:grid-cols-4
               gap-8
               md:gap-10"
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
                        class="w-12 h-12
                            sm:w-16 sm:h-16
                            bg-white
                            rounded-xl
                            overflow-hidden
                            flex
                            items-center
                            justify-center
                            flex-shrink-0
                            p-1"
                    >

                        <img
                            src="{{ asset('images/logo.jpeg') }}"
                            alt="Logo E-Government"
                            class="w-full h-full object-contain"
                        >

                    </div>


                    <h2
                        class="text-xl
                            sm:text-2xl
                            font-bold
                            text-white"
                    >
                        E-GOVERNMENT
                    </h2>

                </div>


                <p
                    class="leading-relaxed
                        text-white/80
                        text-sm"
                >
                    Menyajikan informasi seputar
                    E-Government, kebijakan, kegiatan, dan perkembangan transformasi digital
                    Pemerintah Kota Pasuruan.
                </p>

            </div>


        <!-- Navigasi -->

        <div>

            <h3
                class="text-white
                       font-bold
                       text-lg
                       mb-5"
            >
                Navigasi
            </h3>


            <ul
                class="space-y-3
                       text-white/80
                       text-sm"
            >

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
                        E-Gov
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

            <h3
                class="text-white
                       font-bold
                       text-lg
                       mb-5"
            >
                Hubungi Kami
            </h3>


            <div
                class="space-y-4
                       text-white/80
                       text-sm"
            >

                <!-- Alamat -->

                <div class="flex items-start gap-3">

                    <span class="text-[#E7B92E] flex-shrink-0">
                        📍
                    </span>


                    <p>
                        Jl. Pahlawan No.28, Pekuncen,<br>
                        Kec. Panggungrejo, Kota Pasuruan,<br>
                        Jawa Timur 67126
                    </p>

                </div>


                <!-- Email -->

                <div class="flex items-start gap-3">

                    <span class="text-[#E7B92E] flex-shrink-0">
                        📧
                    </span>


                    <a
                        href="mailto:kominfo@pasuruankota.go.id"
                        class="hover:text-[#E7B92E] transition break-all"
                    >
                        kominfo@pasuruankota.go.id
                    </a>

                </div>


                <!-- Telepon -->

                <div class="flex items-center gap-3">

                    <span class="text-[#E7B92E] flex-shrink-0">
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


        <!-- Peta -->

        <div>

            <h3
                class="text-white
                       font-bold
                       text-lg
                       mb-5"
            >
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
                       border-white/10
                       hover:border-[#E7B92E]
                       transition"
            >

                <iframe
                    src="https://maps.google.com/maps?q=Diskominfotik%20Kota%20Pasuruan%20Jl.%20Pahlawan%20No.28%20Pekuncen%20Panggungrejo&z=17&output=embed"
                    class="w-full h-44 pointer-events-none"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>

            </a>

        </div>

    </div>


    <!-- ========================================================= -->
    <!-- COPYRIGHT -->
    <!-- ========================================================= -->

    <div class="border-t border-white/10">

        <div
            class="max-w-7xl
                   mx-auto
                   px-5 sm:px-6
                   py-5 sm:py-6
                   text-center
                   text-xs sm:text-sm
                   text-white"
        >

            <p>

                © {{ date('Y') }}
                E-GOVERNMENT — Diskominfotik Kota Pasuruan.
                Seluruh Hak Cipta Dilindungi.

            </p>


            <div
                class="flex
                       flex-wrap
                       justify-center
                       items-center
                       gap-3 sm:gap-4
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
<!-- JAVASCRIPT NAVBAR + DROPDOWN PROFIL -->
<!-- ========================================================= -->

<script>

    /* =========================================================
       NAVBAR DESKTOP
    ========================================================= */

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


    /* =========================================================
       DROPDOWN PROFIL DESKTOP
    ========================================================= */

    const profilButton = document.getElementById('profilButton');
    const profilDropdown = document.getElementById('profilDropdown');
    const profilArrow = document.getElementById('profilArrow');


    if (profilButton && profilDropdown && profilArrow) {

        profilButton.addEventListener('click', function (event) {

            event.stopPropagation();

            profilDropdown.classList.toggle('hidden');

            profilArrow.classList.toggle('rotate-180');

        });


        document.addEventListener('click', function (event) {

            if (
                !profilButton.contains(event.target) &&
                !profilDropdown.contains(event.target)
            ) {

                profilDropdown.classList.add('hidden');

                profilArrow.classList.remove('rotate-180');

            }

        });

    }


    /* =========================================================
       MOBILE MENU
    ========================================================= */

    const mobileMenuButton =
        document.getElementById('mobileMenuButton');

    const mobileMenu =
        document.getElementById('mobileMenu');

    const menuIcon =
        document.getElementById('menuIcon');


    if (mobileMenuButton && mobileMenu) {

        mobileMenuButton.addEventListener('click', function () {

            mobileMenu.classList.toggle('active');


            if (mobileMenu.classList.contains('active')) {

                menuIcon.textContent = '✕';

            } else {

                menuIcon.textContent = '☰';

            }

        });


        /* Tutup menu setelah klik link */

        const mobileLinks =
            document.querySelectorAll('.mobile-nav-link');

        mobileLinks.forEach(link => {

            link.addEventListener('click', function () {

                mobileMenu.classList.remove('active');

                menuIcon.textContent = '☰';

            });

        });

    }

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

        if (!sliderKeunggulan) {
            return;
        }


        sliderKeunggulan.style.transform =
            `translateX(-${currentKeunggulan * 100}%)`;


        dotsKeunggulan.forEach((dot, index) => {

            if (index === currentKeunggulan) {

                dot.classList.remove(
                    'w-2',
                    'bg-slate-300',
                    'bg-white/60'
                );


                dot.classList.add(
                    'w-8',
                    'bg-[#F4C430]'
                );

            } else {

                dot.classList.remove(
                    'w-8',
                    'bg-[#F4C430]'
                );


                dot.classList.add(
                    'w-2',
                    'bg-white/60'
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


    /* Jalankan saat halaman pertama kali dibuka */

    updateKeunggulan();

</script>



<!-- ========================================================= -->
<!-- FLOATING SURVEY KEPUASAN PELAYANAN -->
<!-- ========================================================= -->

<div
    class="survey-wrapper
           fixed
           bottom-4
           right-4
           md:bottom-6
           md:right-6
           z-[9999]"
>


    <!-- TOOLTIP -->

    <div
        class="survey-tooltip
               absolute
               right-[64px]
               sm:right-[78px]
               bottom-0
               w-52
               sm:w-64
               bg-white
               border
               border-[#E8F3EC]
               rounded-2xl
               shadow-2xl
               px-4
               sm:px-5
               py-3
               sm:py-4"
    >

        <p
            class="font-bold
                   text-[#005C3B]
                   text-xs sm:text-sm"
        >
            Survei Kepuasan Pelayanan
        </p>


        <p
            class="text-[11px]
                   sm:text-xs
                   text-slate-500
                   mt-1
                   leading-relaxed"
        >
            Bagaimana pengalaman Anda menggunakan pelayanan kami?
        </p>

    </div>


    <!-- PULSE -->

    <span
        class="survey-pulse
               absolute
               inset-0
               rounded-full
               bg-[#008C45]"
    ></span>


    <!-- BUTTON -->

    <a
        href="{{ route('survey.index')}}"
        aria-label="Survei Kepuasan Pelayanan"
        class="survey-floating
               relative
               w-14 h-14
               md:w-16 md:h-16
               rounded-full
               bg-gradient-to-br
               from-[#008C45]
               to-[#005C3B]
               border-4
               border-white
               shadow-2xl
               flex
               items-center
               justify-center
               transition-all
               duration-300"
    >

        <!-- ICON -->

        <span
            class="text-2xl
                   md:text-3xl
                   select-none"
        >
            😊
        </span>


        <!-- NOTIFICATION -->

        <span
            class="absolute
                   top-0
                   right-0
                   w-3.5 h-3.5
                   md:w-4 md:h-4
                   bg-[#F4C430]
                   border-2
                   border-white
                   rounded-full"
        ></span>

    </a>

</div>


</body>

</html>