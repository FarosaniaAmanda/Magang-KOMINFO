<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Kegiatan | E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Mencegah teks panjang membuat halaman melebar */
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }

        /* Teks panjang seperti lokasi/peserta/deskripsi */
        .break-text {
            overflow-wrap: anywhere;
            word-break: break-word;
        }
    </style>
</head>

<body class="bg-[#F6F8F5] min-h-screen">

    <!-- HEADER -->
    <!-- Tidak sticky agar header ikut scroll -->
    <header class="relative overflow-hidden">

        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#005C3B] via-[#00704F] to-[#008C45]"></div>

        <!-- Decorative Pattern -->
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <svg class="w-full h-full"
                 preserveAspectRatio="none"
                 viewBox="0 0 1200 400">

                <defs>
                    <pattern id="pattern"
                             x="0"
                             y="0"
                             width="100"
                             height="100"
                             patternUnits="userSpaceOnUse">

                        <circle cx="50"
                                cy="50"
                                r="30"
                                fill="none"
                                stroke="white"
                                stroke-width="1"/>

                        <circle cx="50"
                                cy="50"
                                r="50"
                                fill="none"
                                stroke="white"
                                stroke-width="0.5"/>
                    </pattern>
                </defs>

                <rect width="1200"
                      height="400"
                      fill="url(#pattern)"/>
            </svg>
        </div>


        <!-- NAVBAR -->
        <div class="relative bg-black/5 backdrop-blur-sm border-b border-white/10">

            <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 sm:h-16
                        flex flex-col sm:flex-row
                        items-start sm:items-center
                        justify-between gap-3">

                <!-- LOGO + IDENTITAS -->
                <div class="flex items-center gap-3 sm:gap-4 w-full">

                    <div class="w-10 h-10 sm:w-12 sm:h-12
                                shrink-0
                                overflow-hidden
                                rounded-xl
                                ring-2 ring-white/30">

                        <img src="{{ asset('images/logo.jpeg') }}"
                             class="w-full h-full object-cover"
                             alt="Logo E-Government">
                    </div>

                    <div class="min-w-0">

                        <h1 class="font-bold text-base sm:text-lg text-white truncate">
                            E-GOVERNMENT
                        </h1>

                        <p class="text-[11px] sm:text-xs text-white/70 break-text">
                            Diskominfotik Kota Pasuruan
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- HERO -->
        <div class="relative px-4 sm:px-6 py-8 sm:py-12 md:py-16">

            <div class="max-w-5xl mx-auto">

                <div class="flex items-start gap-4 sm:gap-6">

                    <!-- ICON -->
                    <div class="hidden sm:flex shrink-0">

                        <div class="w-14 h-14 md:w-16 md:h-16
                                    rounded-2xl
                                    bg-white/15
                                    backdrop-blur-sm
                                    flex items-center justify-center
                                    ring-1 ring-white/30
                                    shadow-lg">

                            <span class="text-2xl md:text-3xl">
                                📋
                            </span>

                        </div>

                    </div>


                    <!-- TEXT -->
                    <div class="flex-1 min-w-0">

                        <p class="text-[10px] sm:text-xs
                                  font-semibold
                                  uppercase
                                  tracking-widest
                                  text-white/80
                                  mb-2
                                  flex items-center gap-2">

                            <span class="w-1 h-1 rounded-full bg-white/60 shrink-0"></span>

                            MANAJEMEN KEGIATAN

                        </p>


                        <h1 class="text-xl sm:text-2xl md:text-4xl
                                   font-bold
                                   text-white
                                   leading-tight
                                   break-text">

                            {{ $kegiatan->nama_kegiatan }}

                        </h1>

                    </div>

                </div>

            </div>


            <!-- ACCENT -->
            <div class="absolute bottom-0 left-0 right-0 h-1
                        bg-gradient-to-r
                        from-white/0
                        via-white/30
                        to-white/0">
            </div>

        </div>

    </header>


    <!-- CONTENT -->
    <main class="w-full max-w-5xl mx-auto
                 px-4 sm:px-6
                 py-6 sm:py-8">


        <!-- CARD -->
        <div class="bg-white
                    rounded-xl sm:rounded-2xl
                    shadow-sm
                    border border-gray-100
                    overflow-hidden">


            <!-- DETAIL -->
            <div class="p-4 sm:p-6 md:p-8">


                <!-- DETAIL GRID -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">


                    <!-- TANGGAL -->
                    <div class="bg-gray-50
                                rounded-xl
                                p-4 sm:p-5
                                min-w-0">

                        <p class="text-[11px] sm:text-xs
                                  uppercase
                                  tracking-wide
                                  text-slate-400
                                  font-semibold">

                            Tanggal Kegiatan

                        </p>

                        <p class="text-base sm:text-lg
                                  font-semibold
                                  text-slate-800
                                  mt-2
                                  break-text">

                            {{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d F Y') }}

                        </p>

                    </div>


                    <!-- WAKTU -->
                    <div class="bg-gray-50
                                rounded-xl
                                p-4 sm:p-5
                                min-w-0">

                        <p class="text-[11px] sm:text-xs
                                  uppercase
                                  tracking-wide
                                  text-slate-400
                                  font-semibold">

                            Waktu

                        </p>

                        <p class="text-base sm:text-lg
                                  font-semibold
                                  text-slate-800
                                  mt-2
                                  break-text">

                            @if($kegiatan->waktu_mulai)

                                {{ $kegiatan->waktu_mulai }}

                                @if($kegiatan->waktu_selesai)
                                    - {{ $kegiatan->waktu_selesai }}
                                @endif

                            @else

                                -

                            @endif

                        </p>

                    </div>


                    <!-- LOKASI -->
                    <div class="bg-gray-50
                                rounded-xl
                                p-4 sm:p-5
                                min-w-0">

                        <p class="text-[11px] sm:text-xs
                                  uppercase
                                  tracking-wide
                                  text-slate-400
                                  font-semibold">

                            Lokasi

                        </p>

                        <p class="text-base sm:text-lg
                                  font-semibold
                                  text-slate-800
                                  mt-2
                                  break-text">

                            {{ $kegiatan->lokasi ?: '-' }}

                        </p>

                    </div>


                    <!-- BIDANG -->
                    <div class="bg-gray-50
                                rounded-xl
                                p-4 sm:p-5
                                min-w-0">

                        <p class="text-[11px] sm:text-xs
                                  uppercase
                                  tracking-wide
                                  text-slate-400
                                  font-semibold">

                            Bidang Penyelenggara

                        </p>

                        <p class="text-base sm:text-lg
                                  font-semibold
                                  text-slate-800
                                  mt-2
                                  break-text">

                            {{ $kegiatan->bidang_penyelenggara }}

                        </p>

                    </div>


                    <!-- PESERTA -->
                    <div class="md:col-span-2
                                bg-gray-50
                                rounded-xl
                                p-4 sm:p-5
                                min-w-0">

                        <p class="text-[11px] sm:text-xs
                                  uppercase
                                  tracking-wide
                                  text-slate-400
                                  font-semibold">

                            Peserta

                        </p>

                        <p class="text-sm sm:text-base
                                  text-slate-700
                                  mt-2
                                  leading-relaxed
                                  break-text">

                            {{ $kegiatan->peserta ?: '-' }}

                        </p>

                    </div>


                    <!-- DESKRIPSI -->
                    <div class="md:col-span-2
                                bg-gray-50
                                rounded-xl
                                p-4 sm:p-5
                                min-w-0">

                        <p class="text-[11px] sm:text-xs
                                  uppercase
                                  tracking-wide
                                  text-slate-400
                                  font-semibold">

                            Deskripsi Kegiatan

                        </p>

                        <p class="text-sm sm:text-base
                                  text-slate-700
                                  mt-2
                                  leading-relaxed
                                  whitespace-pre-line
                                  break-text">

                            {{ $kegiatan->deskripsi ?: '-' }}

                        </p>

                    </div>

                </div>


                <!-- DOKUMEN -->
                <div class="mt-6 sm:mt-8
                            pt-6 sm:pt-7
                            border-t border-gray-100">

                    <h3 class="text-base sm:text-lg
                               font-bold
                               text-slate-800
                               mb-4">

                        Dokumen Kegiatan

                    </h3>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">


                        <!-- BERITA ACARA -->
                        <div class="border border-gray-100
                                    rounded-xl
                                    p-4 sm:p-5
                                    min-w-0">

                            <p class="font-semibold
                                      text-sm sm:text-base
                                      text-slate-800">

                                Berita Acara

                            </p>


                            @if($kegiatan->berita_acara)

                                <a href="{{ asset('storage/' . $kegiatan->berita_acara) }}"
                                   target="_blank"
                                   class="mt-4
                                          flex
                                          w-full sm:w-fit
                                          items-center
                                          justify-center
                                          gap-2
                                          px-4 py-3
                                          rounded-lg
                                          bg-red-50
                                          text-red-600
                                          hover:bg-red-100
                                          font-semibold
                                          text-sm
                                          text-center
                                          transition">

                                    📄
                                    <span>Buka Berita Acara</span>

                                </a>

                            @else

                                <p class="text-sm text-slate-400 mt-3">

                                    Belum ada file.

                                </p>

                            @endif

                        </div>


                        <!-- LAPORAN -->
                        <div class="border border-gray-100
                                    rounded-xl
                                    p-4 sm:p-5
                                    min-w-0">

                            <p class="font-semibold
                                      text-sm sm:text-base
                                      text-slate-800">

                                Laporan Kegiatan

                            </p>


                            @if($kegiatan->laporan_kegiatan)

                                <a href="{{ asset('storage/' . $kegiatan->laporan_kegiatan) }}"
                                   target="_blank"
                                   class="mt-4
                                          flex
                                          w-full sm:w-fit
                                          items-center
                                          justify-center
                                          gap-2
                                          px-4 py-3
                                          rounded-lg
                                          bg-blue-50
                                          text-blue-600
                                          hover:bg-blue-100
                                          font-semibold
                                          text-sm
                                          text-center
                                          transition">

                                    📄
                                    <span>Buka Laporan Kegiatan</span>

                                </a>

                            @else

                                <p class="text-sm text-slate-400 mt-3">

                                    Belum ada file.

                                </p>

                            @endif

                        </div>

                    </div>

                </div>


                <!-- ACTION -->
                <div class="mt-6 sm:mt-8
                            pt-5 sm:pt-6
                            border-t border-gray-100">

                    <!--
                        HP:
                        tombol disusun vertikal dan full width

                        PC:
                        tombol berada di kanan dan ukurannya normal
                    -->

                    <div class="flex flex-col-reverse sm:flex-row
                                sm:justify-end
                                gap-3">

                        <!-- KEMBALI -->
                        <a href="{{ route('admin.kegiatan.index') }}"
                           class="w-full sm:w-auto
                                  inline-flex
                                  items-center
                                  justify-center
                                  gap-2
                                  bg-amber-500
                                  hover:bg-amber-600
                                  text-white
                                  px-5 py-3
                                  rounded-xl
                                  font-semibold
                                  text-sm sm:text-base
                                  shadow-md
                                  transition">

                            Kembali

                        </a>


                        <!-- EDIT -->
                        <a href="{{ route('admin.kegiatan.edit', $kegiatan->id) }}"
                           class="w-full sm:w-auto
                                  inline-flex
                                  items-center
                                  justify-center
                                  gap-2
                                  px-5 py-3
                                  rounded-xl
                                  bg-[#008C45]
                                  hover:bg-[#006F37]
                                  text-white
                                  font-semibold
                                  text-sm sm:text-base
                                  transition">

                            Edit Kegiatan

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </main>


    <!-- FOOTER -->
    <footer class="bg-gradient-to-r
                   from-[#075E4A]
                   to-[#087F5B]
                   text-white
                   py-5 sm:py-6
                   text-center
                   mt-8 sm:mt-10">

        <div class="px-4">

            <p class="text-xs sm:text-sm leading-relaxed">

                © {{ date('Y') }}
                E-GOVERNMENT —
                Diskominfotik Kota Pasuruan

            </p>

        </div>

    </footer>

</body>
</html>