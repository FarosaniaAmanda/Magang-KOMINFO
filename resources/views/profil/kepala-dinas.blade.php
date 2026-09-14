<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Kepala Dinas | Diskominfo Kota Pasuruan</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* =====================================================
           HERO FOTO KOMINFO
        ====================================================== */

        .hero {
            position: relative;
            min-height: 620px;
            background-image:
                linear-gradient(
                    135deg,
                    rgba(0, 77, 50, 0.92),
                    rgba(0, 107, 63, 0.76),
                    rgba(0, 140, 69, 0.60)
                ),
                url('{{ asset('images/kominfo.png') }}');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    to bottom,
                    rgba(0, 50, 32, 0.12),
                    rgba(0, 77, 50, 0.25)
                );
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.10);
            right: -180px;
            bottom: -240px;
        }

        .glass {
            background: rgba(0, 70, 45, 0.36);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .gold-line {
            background: linear-gradient(
                90deg,
                #f4b400,
                #ffd35a,
                #f4b400
            );
        }

        .photo-ring {
            background: linear-gradient(
                135deg,
                #f4b400 0%,
                #ffffff 45%,
                #008c45 100%
            );
        }

        .description-card {
            background:
                radial-gradient(
                    circle at 100% 0%,
                    rgba(0, 140, 69, 0.06),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 0% 100%,
                    rgba(244, 180, 0, 0.06),
                    transparent 25%
                ),
                #ffffff;
        }

        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 768px) {

            .hero {
                min-height: 560px;
                background-position: center center;
            }
        }
    </style>
</head>

<body class="bg-[#F6F9F7] text-slate-800">


    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="hero">

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-6">

            {{-- Kembali --}}
            <a href="{{ url('/') }}"
               class="inline-flex items-center gap-2
                      px-5 py-3
                      rounded-xl
                      glass
                      border border-white/20
                      text-white
                      text-sm
                      font-semibold
                      shadow-lg
                      hover:bg-white
                      hover:text-[#006B3F]
                      transition-all duration-300">

                <span class="text-lg">←</span>

                <span>Kembali ke Beranda</span>

            </a>


            {{-- HERO CONTENT --}}
            <div class="max-w-4xl mx-auto
                        text-center
                        text-white
                        pt-20 md:pt-24
                        pb-32">

                <div class="inline-flex items-center gap-2
                            px-5 py-2.5
                            rounded-full
                            bg-black/20
                            border border-[#F4B400]/50
                            backdrop-blur-md
                            text-[#FFE082]
                            text-xs
                            font-bold
                            uppercase
                            tracking-[0.18em]">

                    <span class="w-2 h-2
                                 rounded-full
                                 bg-[#F4B400]"></span>

                    Profil Pimpinan

                </div>


                <h1 class="mt-7
                           text-4xl
                           md:text-6xl
                           font-bold
                           tracking-tight
                           drop-shadow-lg">

                    Kepala Dinas

                </h1>


                <p class="mt-6
                          max-w-3xl
                          mx-auto
                          text-white/90
                          text-base
                          md:text-xl
                          leading-8
                          drop-shadow-md">

                    Mengenal pimpinan Dinas Komunikasi, Informatika,
                    Statistik dan Persandian Kota Pasuruan.

                </p>


                <div class="w-24 h-1
                            rounded-full
                            gold-line
                            mx-auto
                            mt-8">
                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         CONTENT
    ====================================================== --}}

    <main class="max-w-7xl mx-auto px-6 py-14 md:py-20">

        @if($kepalaDinas)


            {{-- =================================================
                 PROFIL UTAMA
            ================================================== --}}

            <section class="relative -mt-28 z-20">

                <div class="grid lg:grid-cols-[0.9fr_1.1fr]
                            bg-white
                            rounded-[28px]
                            border border-slate-100
                            shadow-[0_25px_70px_rgba(0,77,50,0.13)]
                            overflow-hidden">


                    {{-- =================================================
                         FOTO KEPALA DINAS
                    ================================================== --}}

                    <div class="relative
                                bg-[#F0F7F3]
                                min-h-[520px]
                                flex items-center
                                justify-center
                                px-8 py-12">

                        <div class="absolute top-8 left-8
                                    w-20 h-20
                                    rounded-2xl
                                    border border-[#008C45]/10">
                        </div>

                        <div class="absolute bottom-8 right-8
                                    w-24 h-24
                                    rounded-full
                                    bg-[#F4B400]/10">
                        </div>


                        <div class="relative z-10 text-center">

                            <div class="photo-ring
                                        w-64 h-64
                                        md:w-72 md:h-72
                                        p-[6px]
                                        rounded-[32px]
                                        shadow-[0_18px_45px_rgba(0,77,50,0.18)]
                                        mx-auto">

                                <div class="w-full h-full
                                            bg-white
                                            rounded-[27px]
                                            overflow-hidden
                                            border-4 border-white">

                                    @if($kepalaDinas->foto)

                                        <img
                                            src="{{ asset('storage/' . $kepalaDinas->foto) }}"
                                            alt="{{ $kepalaDinas->nama }}"
                                            class="w-full h-full object-cover"
                                        >

                                    @else

                                        <img
                                            src="{{ asset('images/karyawan/default.jpg') }}"
                                            alt="{{ $kepalaDinas->nama }}"
                                            class="w-full h-full object-cover"
                                        >

                                    @endif

                                </div>

                            </div>


                            <div class="mt-7">

                                <div class="inline-flex
                                            items-center
                                            gap-2
                                            px-4 py-2
                                            bg-white
                                            border border-slate-200
                                            rounded-full
                                            shadow-sm">

                                    <span class="w-2.5 h-2.5
                                                 rounded-full
                                                 bg-[#008C45]">
                                    </span>

                                    <span class="text-sm
                                                 font-semibold
                                                 text-[#005C3B]">

                                        Kepala Dinas

                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         INFORMASI
                    ================================================== --}}

                    <div class="p-8
                                md:p-12
                                lg:p-14
                                flex flex-col
                                justify-center">

                        <div class="flex items-center gap-3">

                            <div class="w-10 h-[3px]
                                        rounded-full
                                        bg-[#F4B400]">
                            </div>

                            <span class="text-sm
                                         font-bold
                                         uppercase
                                         tracking-[0.16em]
                                         text-[#008C45]">

                                Profil Pimpinan

                            </span>

                        </div>


                        <h2 class="mt-5
                                   text-3xl
                                   md:text-5xl
                                   font-bold
                                   leading-tight
                                   text-[#005C3B]">

                            {{ $kepalaDinas->nama }}

                        </h2>


                        {{-- JABATAN --}}
                        @if($kepalaDinas->jabatan)

                            <div class="mt-6">

                                <p class="text-xs
                                          font-bold
                                          uppercase
                                          tracking-wider
                                          text-slate-400">

                                    Jabatan

                                </p>

                                <p class="mt-2
                                          text-lg
                                          md:text-xl
                                          font-semibold
                                          text-slate-700
                                          leading-relaxed">

                                    {{ $kepalaDinas->jabatan }}

                                </p>

                            </div>

                        @endif


                        {{-- NIP --}}
                        @if($kepalaDinas->nip)

                            <div class="mt-6
                                        inline-flex
                                        items-center
                                        gap-4
                                        px-5 py-4
                                        bg-[#F6F9F7]
                                        border
                                        border-[#E2EEE8]
                                        rounded-2xl
                                        w-fit">

                                <div class="w-10 h-10
                                            rounded-xl
                                            bg-[#008C45]/10
                                            flex items-center
                                            justify-center">

                                    <span class="text-[#008C45]
                                                 font-bold
                                                 text-sm">

                                        ID

                                    </span>

                                </div>


                                <div>

                                    <p class="text-xs
                                              uppercase
                                              tracking-wider
                                              font-bold
                                              text-slate-400">

                                        NIP

                                    </p>

                                    <p class="mt-1
                                              font-semibold
                                              text-slate-800">

                                        {{ $kepalaDinas->nip }}

                                    </p>

                                </div>

                            </div>

                        @endif

                    </div>

                </div>

            </section>


            {{-- =================================================
                 DESKRIPSI KEPALA DINAS
            ================================================== --}}

            @if($kepalaDinas->deskripsi)

                <section class="mt-10">

                    <div class="description-card
                                relative
                                overflow-hidden
                                rounded-[28px]
                                border border-slate-100
                                shadow-[0_15px_45px_rgba(0,77,50,0.07)]
                                px-8
                                py-9
                                md:px-12
                                md:py-10">


                        {{-- Dekorasi --}}
                        <div class="absolute top-0 right-0
                                    w-44 h-44
                                    rounded-full
                                    bg-[#008C45]/5
                                    -translate-y-1/2
                                    translate-x-1/3">
                        </div>

                        <div class="absolute bottom-0 left-0
                                    w-28 h-28
                                    rounded-full
                                    bg-[#F4B400]/5
                                    translate-y-1/2
                                    -translate-x-1/3">
                        </div>


                        <div class="relative z-10">

                            {{-- Header --}}
                            <div class="flex flex-col
                                        md:flex-row
                                        md:items-center
                                        justify-between
                                        gap-5
                                        mb-6">

                                <div class="flex items-center gap-4">

                                    <div class="w-12 h-12
                                                rounded-2xl
                                                bg-[#008C45]/10
                                                flex items-center
                                                justify-center
                                                flex-shrink-0">

                                        <span class="text-[#008C45]
                                                     text-xl
                                                     font-bold">

                                            "

                                        </span>

                                    </div>


                                    <div>

                                        <p class="text-xs
                                                  uppercase
                                                  tracking-[0.18em]
                                                  font-bold
                                                  text-[#008C45]">

                                            Tentang Kepala Dinas

                                        </p>

                                        <h3 class="mt-1
                                                   text-2xl
                                                   md:text-3xl
                                                   font-bold
                                                   text-[#005C3B]">

                                            Profil dan Deskripsi

                                        </h3>

                                    </div>

                                </div>


                                <div class="hidden md:block
                                            w-28 h-1
                                            rounded-full
                                            gold-line">
                                </div>

                            </div>


                            {{-- Deskripsi dari database --}}
                            <div class="border-t
                                        border-slate-100
                                        pt-6">

                                <p class="text-slate-600
                                          text-base
                                          md:text-lg
                                          leading-8">

                                    {{ $kepalaDinas->deskripsi }}

                                </p>

                            </div>

                        </div>

                    </div>

                </section>

            @endif


        @else

            {{-- =================================================
                 DATA KOSONG
            ================================================== --}}

            <div class="max-w-2xl mx-auto
                        bg-white
                        rounded-3xl
                        border border-slate-100
                        shadow-lg
                        p-10
                        md:p-14
                        text-center">

                <div class="w-16 h-16 mx-auto
                            rounded-2xl
                            bg-[#008C45]/10
                            flex items-center
                            justify-center">

                    <span class="text-[#008C45] text-2xl">
                        !
                    </span>

                </div>


                <h2 class="mt-6
                           text-2xl
                           font-bold
                           text-[#005C3B]">

                    Data Kepala Dinas Belum Tersedia

                </h2>


                <p class="mt-3
                          text-slate-500
                          leading-7">

                    Profil Kepala Dinas belum ditambahkan
                    melalui halaman admin.

                </p>


                <a href="{{ url('/') }}"
                   class="inline-flex
                          items-center
                          gap-2
                          mt-7
                          px-5 py-3
                          rounded-xl
                          bg-[#008C45]
                          text-white
                          font-semibold
                          hover:bg-[#006B3F]
                          transition">

                    ← Kembali ke Beranda

                </a>

            </div>

        @endif

    </main>


    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer class="bg-[#004D32] text-white">

        <div class="max-w-7xl mx-auto px-6 py-10">

            <div class="flex flex-col
                        md:flex-row
                        items-center
                        justify-between
                        gap-5">

                <div>

                    <p class="font-semibold">

                        Dinas Komunikasi, Informatika,
                        Statistik dan Persandian

                    </p>

                    <p class="text-sm
                              text-white/60
                              mt-1">

                        Kota Pasuruan

                    </p>

                </div>


                <p class="text-sm
                          text-white/60">

                    © {{ date('Y') }} Diskominfotik Kota Pasuruan

                </p>

            </div>

        </div>

    </footer>

</body>

</html>