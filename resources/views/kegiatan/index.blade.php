
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
                    text-white mt-5 sm:mt-6">

        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
             style="background-image: linear-gradient(135deg, rgba(0, 92, 59, 0.85) 0%, rgba(0, 112, 79, 0.80) 50%, rgba(0, 140, 69, 0.85) 100%), url('https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=600&fit=crop&q=80');
                    background-attachment: fixed;
                    background-position: center;">
        </div>

        <!-- Decorative Pattern Overlay -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 1200 600">
                <defs>
                    <pattern id="kegiatan-pattern" x="0" y="0" width="120" height="120" patternUnits="userSpaceOnUse">
                        <circle cx="60" cy="60" r="40" fill="none" stroke="white" stroke-width="1"/>
                        <circle cx="60" cy="60" r="60" fill="none" stroke="white" stroke-width="0.5"/>
                    </pattern>
                </defs>
                <rect width="1200" height="600" fill="url(#kegiatan-pattern)"/>
            </svg>
        </div>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-16 md:py-20">

            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-2
                            px-3 py-1.5
                            rounded-full
                            bg-white/15
                            backdrop-blur-sm
                            border border-white/20
                            text-green-50
                            text-xs sm:text-sm
                            font-medium
                            mb-4
                            shadow-lg">

                    <span class="w-2 h-2 rounded-full bg-[#C9A227] animate-pulse"></span>

                    Informasi Kegiatan

                </div>

                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl
                           font-bold
                           tracking-tight
                           mb-4
                           drop-shadow-lg">

                    Kegiatan DISKOMINFOTIK

                </h1>

                <p class="text-green-50
                          text-sm sm:text-base md:text-lg
                          leading-relaxed
                          max-w-2xl
                          drop-shadow-md
                          font-medium">

                    Informasi kegiatan dan agenda Diskominfotik
                    Kota Pasuruan.

                </p>

            </div>

        </div>

        <!-- Bottom Accent -->
        <div class="relative h-1 bg-gradient-to-r from-white/0 via-[#C9A227] to-white/0"></div>

    </section>

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

                        <!-- Patterned Header -->
                        <div class="relative h-40 sm:h-44
                                    bg-gradient-to-br
                                    from-[#005C3B] via-[#006B47]
                                    to-[#008C45]
                                    flex items-center justify-center
                                    overflow-hidden">

                            <!-- SVG Pattern Background -->
                            <svg class="absolute inset-0 w-full h-full opacity-15"
                                 preserveAspectRatio="xMidYMid slice"
                                 viewBox="0 0 400 300">
                                <defs>
                                    <pattern id="card-pattern-{{ $kegiatan->id }}" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
                                        <circle cx="40" cy="40" r="25" fill="none" stroke="white" stroke-width="1.5"/>
                                        <path d="M 40 15 L 40 65" stroke="white" stroke-width="1"/>
                                        <path d="M 15 40 L 65 40" stroke="white" stroke-width="1"/>
                                    </pattern>
                                </defs>
                                <rect width="400" height="300" fill="url(#card-pattern-{{ $kegiatan->id }})"/>
                            </svg>

                            <!-- Decorative Circles -->
                            <div class="absolute -right-12 -top-12 w-32 h-32 rounded-full bg-white/5"></div>
                            <div class="absolute -left-12 -bottom-12 w-36 h-36 rounded-full bg-white/5"></div>

                            <!-- Date Badge (Geometric) -->
                            <div class="relative flex flex-col items-center justify-center">
                                <div class="w-16 h-16 rounded-3xl
                                            bg-white/15 backdrop-blur-sm
                                            border border-white/30
                                            flex items-center justify-center
                                            group-hover:scale-110 group-hover:bg-white/20
                                            transition-all duration-300
                                            shadow-lg">
                                    <span class="text-2xl font-bold text-white">
                                        {{ $kegiatan->tanggal_kegiatan ? $kegiatan->tanggal_kegiatan->format('d') : '-' }}
                                    </span>
                                </div>
                                <span class="text-xs text-white/80 font-semibold mt-2">
                                    {{ $kegiatan->tanggal_kegiatan ? $kegiatan->tanggal_kegiatan->format('M') : 'N/A' }}
                                </span>
                            </div>

                        </div>


                        <!-- Content -->
                        <div class="p-5 sm:p-6">

                            <!-- Tanggal Info -->
                            <div class="flex items-center gap-2
                                        text-xs text-[#008C45]
                                        font-semibold uppercase
                                        tracking-wide
                                        mb-3">

                                <div class="w-1 h-1 rounded-full bg-[#008C45]"></div>
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

                                <div class="flex items-start gap-3
                                            text-sm
                                            text-slate-600
                                            mb-3">

                                    <div class="flex-shrink-0 w-5 h-5 flex items-center justify-center
                                                rounded-full bg-slate-100 text-xs font-bold text-[#008C45]">
                                        📍
                                    </div>

                                    <span class="line-clamp-2 leading-snug">
                                        {{ $kegiatan->lokasi }}
                                    </span>

                                </div>

                            @endif


                            <!-- Bidang -->
                            @if($kegiatan->bidang_penyelenggara)

                                <div class="flex items-start gap-3
                                            text-sm
                                            text-slate-600
                                            mb-5">

                                    <div class="flex-shrink-0 w-5 h-5 flex items-center justify-center
                                                rounded-full bg-slate-100 text-xs font-bold text-[#008C45]">
                                        🏢
                                    </div>

                                    <span class="line-clamp-2 leading-snug">
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

