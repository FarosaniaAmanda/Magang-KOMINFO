
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kegiatan | E-Government Kota Pasuruan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F7F9F8] text-slate-800">

    <!-- Navbar -->
    <nav class="bg-white/95 backdrop-blur-sm border-b border-slate-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 h-16 sm:h-20 flex items-center">

            <div class="flex items-center gap-3">

                <!-- Logo -->
                <div class="w-11 h-11 sm:w-12 sm:h-12 overflow-hidden rounded-xl">
                    <img src="{{ asset('images/logo.jpeg') }}"
                         class="w-full h-full object-contain"
                         alt="Logo">
                </div>

                <!-- Judul -->
                <div>
                    <h1 class="font-bold text-lg sm:text-xl text-slate-800 tracking-tight">
                        E-GOVERNMENT
                    </h1>

                    <p class="text-[11px] sm:text-xs text-slate-500">
                        Diskominfotik Kota Pasuruan
                    </p>
                </div>

            </div>

        </div>
    </nav>


    <!-- Tombol Kembali ke Beranda -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 pt-5 sm:pt-6">

        <a href="{{ url('/') }}"
           class="group inline-flex items-center gap-2
                  px-4 py-2.5
                   bg-[#008C45] 
                  border border-slate-200
                  rounded-lg
                  shadow-sm
                  text-white
                  hover:bg-[#C9A227]
                  hover:text-white
                  hover:border-[#008C45]
                  hover:shadow-md
                  font-semibold text-sm
                  transition-all duration-200
                  focus:outline-none
                  focus:ring-2
                  focus:ring-[#C9A227]
                  focus:ring-offset-2">

            <span class="flex items-center justify-center
                         w-6 h-6
                         rounded-full
                         bg-[#008C45]/10
                         text-white
                         group-hover:bg-white/20
                         group-hover:text-white
                         transition-all duration-200">

                ←

            </span>

            <span>
                Kembali ke Beranda
            </span>

        </a>

    </div>


    <!-- Header -->
    <section class="relative overflow-hidden
                    bg-gradient-to-br from-[#005C3B] via-[#007A4A] to-[#008C45]
                    text-white mt-5 sm:mt-6">

        <!-- Dekorasi -->
        <div class="absolute -right-20 -top-20
                    w-64 h-64
                    rounded-full
                    bg-white/5">
        </div>

        <div class="absolute -left-20 -bottom-24
                    w-72 h-72
                    rounded-full
                    bg-white/5">
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-16">

            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-2
                            px-3 py-1.5
                            rounded-full
                            bg-white/10
                            border border-white/10
                            text-green-50
                            text-xs sm:text-sm
                            font-medium
                            mb-4">

                    <span class="w-2 h-2 rounded-full bg-[#C9A227]"></span>

                    Informasi Kegiatan

                </div>

                <h1 class="text-3xl sm:text-4xl md:text-5xl
                           font-bold
                           tracking-tight
                           mb-4">

                    Kegiatan DISKOMINFOTIK

                </h1>

                <p class="text-green-50
                          text-sm sm:text-base
                          leading-relaxed
                          max-w-2xl">

                    Informasi kegiatan dan agenda Diskominfotik
                    Kota Pasuruan.

                </p>

            </div>

        </div>

    </section>


    <!-- Daftar Kegiatan -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-12">

        @if(session('success'))

            <div class="mb-8
                        flex items-start gap-3
                        bg-green-50
                        border border-green-200
                        text-green-700
                        px-5 py-4
                        rounded-xl
                        shadow-sm">

                <div class="flex-shrink-0
                            w-6 h-6
                            rounded-full
                            bg-green-100
                            flex items-center justify-center">

                    ✓

                </div>

                <p class="text-sm font-medium">
                    {{ session('success') }}
                </p>

            </div>

        @endif


        @if($kegiatans->count() > 0)

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-7">

                @foreach($kegiatans as $kegiatan)

                    <article class="group
                                    bg-white
                                    rounded-2xl
                                    shadow-sm
                                    border border-slate-100
                                    overflow-hidden
                                    hover:-translate-y-1
                                    hover:shadow-xl
                                    transition-all duration-300">

                        <!-- Icon -->
                        <div class="relative h-36 sm:h-40
                                    bg-gradient-to-br
                                    from-[#005C3B]
                                    to-[#008C45]
                                    flex items-center justify-center
                                    overflow-hidden">

                            <!-- Dekorasi -->
                            <div class="absolute
                                        -right-8 -top-8
                                        w-28 h-28
                                        rounded-full
                                        bg-white/5">
                            </div>

                            <div class="absolute
                                        -left-10 -bottom-10
                                        w-32 h-32
                                        rounded-full
                                        bg-white/5">
                            </div>

                            <div class="relative
                                        w-20 h-20
                                        rounded-2xl
                                        bg-white/10
                                        border border-white/10
                                        flex items-center justify-center
                                        text-5xl
                                        group-hover:scale-105
                                        transition-transform duration-300">

                                📅

                            </div>

                        </div>


                        <!-- Isi -->
                        <div class="p-5 sm:p-6">

                            <!-- Tanggal -->
                            <div class="flex items-center gap-2
                                        text-sm
                                        text-[#008C45]
                                        font-semibold
                                        mb-3">

                                <span class="flex items-center justify-center
                                             w-7 h-7
                                             rounded-lg
                                             bg-green-50">

                                    📅

                                </span>

                                <span>
                                    {{ $kegiatan->tanggal_kegiatan
                                        ? $kegiatan->tanggal_kegiatan->format('d F Y')
                                        : '-' }}
                                </span>

                            </div>


                            <!-- Nama -->
                            <h2 class="text-lg sm:text-xl
                                       font-bold
                                       text-slate-800
                                       mb-3
                                       line-clamp-2
                                       leading-snug
                                       group-hover:text-[#008C45]
                                       transition-colors duration-200">

                                {{ $kegiatan->nama_kegiatan }}

                            </h2>


                            <!-- Lokasi -->
                            @if($kegiatan->lokasi)

                                <div class="flex items-start gap-2
                                            text-sm
                                            text-slate-500
                                            mb-2">

                                    <span class="flex-shrink-0">
                                        📍
                                    </span>

                                    <span class="line-clamp-2">
                                        {{ $kegiatan->lokasi }}
                                    </span>

                                </div>

                            @endif


                            <!-- Bidang -->
                            @if($kegiatan->bidang_penyelenggara)

                                <div class="flex items-start gap-2
                                            text-sm
                                            text-slate-500
                                            mb-5">

                                    <span class="flex-shrink-0">
                                        🏢
                                    </span>

                                    <span class="line-clamp-2">
                                        {{ $kegiatan->bidang_penyelenggara }}
                                    </span>

                                </div>

                            @endif


                            <!-- Tombol Detail -->
                            <a href="{{ route('kegiatan.show', $kegiatan->id) }}"
                               class="inline-flex items-center justify-center
                                      w-full
                                      bg-[#008C45]
                                      hover:bg-[#005C3B]
                                      text-white
                                      font-semibold
                                      text-sm
                                      px-5 py-3
                                      rounded-xl
                                      shadow-sm
                                      hover:shadow-md
                                      transition-all duration-200">

                                Lihat Detail

                                <span class="ml-2
                                             transition-transform duration-200
                                             group-hover:translate-x-1">

                                    →

                                </span>

                            </a>

                        </div>

                    </article>

                @endforeach

            </div>


            <!-- Pagination -->
            @if($kegiatans->hasPages())

                <div class="mt-10">
                    {{ $kegiatans->links() }}
                </div>

            @endif


        @else

            <!-- Belum ada kegiatan -->
            <div class="bg-white
                        rounded-2xl
                        border border-slate-100
                        shadow-sm
                        py-16 sm:py-20
                        px-6
                        text-center">

                <div class="mx-auto mb-6
                            w-20 h-20
                            rounded-2xl
                            bg-green-50
                            flex items-center justify-center
                            text-5xl">

                    📅

                </div>

                <h2 class="text-xl sm:text-2xl
                           font-bold
                           text-slate-800
                           mb-3">

                    Belum Ada Kegiatan

                </h2>

                <p class="text-sm sm:text-base
                          text-slate-500
                          max-w-lg
                          mx-auto
                          leading-relaxed">

                    Belum ada kegiatan yang tersedia saat ini.
                    Silakan cek kembali nanti.

                </p>

            </div>

        @endif

    </main>


    <!-- Footer -->
    <footer class="bg-gradient-to-r
                   from-[#075E4A]
                   to-[#087F5B]
                   text-white
                   py-7
                   mt-6">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">

            <p class="text-xs sm:text-sm text-green-50">

                © {{ date('Y') }} E-GOVERNMENT —
                Diskominfotik Kota Pasuruan

            </p>

        </div>

    </footer>

</body>
</html>

