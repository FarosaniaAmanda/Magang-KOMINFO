<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $kegiatan->nama_kegiatan }} | E-Government Kota Pasuruan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#FAFAF7] text-slate-800">

    <!-- Header (Scrollable, Not Sticky) -->
    <header class="relative overflow-hidden">
        
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
             style="background-image: linear-gradient(135deg, rgba(0, 92, 59, 0.88) 0%, rgba(0, 112, 79, 0.83) 50%, rgba(0, 140, 69, 0.88) 100%), url('https://images.unsplash.com/photo-1552664730-d307ca884978?w=1400&h=800&fit=crop&q=80');
                    background-attachment: fixed;
                    background-position: center;">
        </div>

        <!-- Decorative Pattern Overlay -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 1200 600">
                <defs>
                    <pattern id="detail-pattern" x="0" y="0" width="120" height="120" patternUnits="userSpaceOnUse">
                        <circle cx="60" cy="60" r="40" fill="none" stroke="white" stroke-width="1"/>
                        <circle cx="60" cy="60" r="60" fill="none" stroke="white" stroke-width="0.5"/>
                    </pattern>
                </defs>
                <rect width="1200" height="600" fill="url(#detail-pattern)"/>
            </svg>
        </div>

        <!-- Top Bar (Navbar) -->
        <div class="relative bg-black/10 backdrop-blur-sm border-b border-white/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 h-16 sm:h-20 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 overflow-hidden rounded-xl ring-2 ring-white/30">
                        <img src="{{ asset('images/logo.jpeg') }}"
                             class="w-full h-full object-contain"
                             alt="Logo">
                    </div>

                    <div>
                        <h1 class="font-bold text-lg sm:text-xl text-white">
                            E-GOVERNMENT
                        </h1>

                        <p class="text-xs text-white/70">
                            Diskominfotik Kota Pasuruan
                        </p>
                    </div>
                </div>

                <!-- Back Button -->
                <a href="{{ route('kegiatan.index') }}"
                   class="inline-flex items-center gap-2 px-4 py-2
                          bg-white/10 hover:bg-white/20
                          text-white
                          rounded-lg text-sm font-semibold
                          border border-white/20
                          transition-all duration-200">
                    ← Kembali
                </a>
            </div>
        </div>

        <!-- Hero Section -->
        <div class="relative px-4 sm:px-6 py-8 md:py-10">
            <div class="max-w-7xl mx-auto">
                <div class="max-w-3xl">
                    <p class="text-sm font-semibold uppercase tracking-widest text-white/80 mb-2 inline-flex items-center gap-2">
                        <span class="w-1 h-1 rounded-full bg-[#C9A227]"></span>
                        Detail Kegiatan
                    </p>

                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white leading-tight mb-3 drop-shadow-lg">
                        {{ $kegiatan->nama_kegiatan }}
                    </h1>

                    <p class="text-green-50 text-sm md:text-base leading-relaxed max-w-2xl drop-shadow-md font-medium">
                        Informasi lengkap mengenai kegiatan DISKOMINFOTIK Kota Pasuruan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Bottom Accent -->
        <div class="relative h-1 bg-gradient-to-r from-white/0 via-[#C9A227] to-white/0"></div>

    </header>


    <!-- Detail -->
    <main class="max-w-5xl mx-auto px-6 py-12">

        <div class="bg-white rounded-2xl shadow-sm
                    border border-slate-100 overflow-hidden">

            <!-- Informasi utama -->
            <div class="p-7 md:p-10">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Tanggal -->
                    <div class="bg-green-50 rounded-xl p-5">

                        <p class="text-sm text-slate-500 mb-1">
                            Tanggal Kegiatan
                        </p>

                        <p class="font-bold text-[#005C3B] text-lg">

                            {{ $kegiatan->tanggal_kegiatan
                                ? $kegiatan->tanggal_kegiatan->format('d F Y')
                                : '-' }}

                        </p>

                    </div>


                    <!-- Waktu -->
                    <div class="bg-green-50 rounded-xl p-5">

                        <p class="text-sm text-slate-500 mb-1">
                            Waktu
                        </p>

                        <p class="font-bold text-[#005C3B] text-lg">

                            @if($kegiatan->waktu_mulai)
                                {{ \Carbon\Carbon::parse($kegiatan->waktu_mulai)->format('H:i') }}
                            @else
                                -
                            @endif

                            @if($kegiatan->waktu_selesai)
                                -
                                {{ \Carbon\Carbon::parse($kegiatan->waktu_selesai)->format('H:i') }}
                            @endif

                            WIB

                        </p>

                    </div>


                    <!-- Lokasi -->
                    <div class="bg-slate-50 rounded-xl p-5">

                        <p class="text-sm text-slate-500 mb-1">
                            Lokasi
                        </p>

                        <p class="font-semibold text-slate-800">

                            {{ $kegiatan->lokasi ?: '-' }}

                        </p>

                    </div>


                    <!-- Bidang -->
                    <div class="bg-slate-50 rounded-xl p-5">

                        <p class="text-sm text-slate-500 mb-1">
                            Bidang Penyelenggara
                        </p>

                        <p class="font-semibold text-slate-800">

                            {{ $kegiatan->bidang_penyelenggara ?: '-' }}

                        </p>

                    </div>


                    <!-- Peserta -->
                    <div class="md:col-span-2 bg-slate-50 rounded-xl p-5">

                        <p class="text-sm text-slate-500 mb-1">
                            Peserta
                        </p>

                        <p class="font-semibold text-slate-800">

                            {{ $kegiatan->peserta ?: '-' }}

                        </p>

                    </div>

                </div>


                <!-- Deskripsi -->
                <div class="mt-8">

                    <h2 class="text-xl font-bold text-[#005C3B] mb-3">
                        Deskripsi Kegiatan
                    </h2>

                    <div class="bg-slate-50 rounded-xl p-6">

                        @if($kegiatan->deskripsi)

                            <p class="text-slate-600 leading-relaxed whitespace-pre-line">
                                {{ $kegiatan->deskripsi }}
                            </p>

                        @else

                            <p class="text-slate-400">
                                Tidak ada deskripsi kegiatan.
                            </p>

                        @endif

                    </div>

                </div>


                <!-- Dokumen -->
                <div class="mt-8">

                    <h2 class="text-xl font-bold text-[#005C3B] mb-4">
                        Dokumen Kegiatan
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">


                        <!-- Berita Acara -->
                        @if($kegiatan->berita_acara)

                            <a href="{{ asset('storage/' . $kegiatan->berita_acara) }}"
                               target="_blank"
                               class="flex items-center justify-between
                                      border border-slate-200
                                      rounded-xl p-5
                                      hover:border-[#008C45]
                                      hover:bg-green-50
                                      transition">

                                <div class="flex items-center gap-4">

                                    <div class="w-12 h-12 rounded-xl
                                                bg-red-50 flex items-center
                                                justify-center text-2xl">

                                        📄

                                    </div>

                                    <div>

                                        <p class="font-semibold text-slate-800">
                                            Berita Acara
                                        </p>

                                        <p class="text-sm text-slate-500">
                                            Lihat dokumen PDF
                                        </p>

                                    </div>

                                </div>

                                <span class="text-[#008C45] text-xl">
                                    →
                                </span>

                            </a>

                        @endif


                        <!-- Laporan Kegiatan -->
                        @if($kegiatan->laporan_kegiatan)

                            <a href="{{ asset('storage/' . $kegiatan->laporan_kegiatan) }}"
                               target="_blank"
                               class="flex items-center justify-between
                                      border border-slate-200
                                      rounded-xl p-5
                                      hover:border-[#008C45]
                                      hover:bg-green-50
                                      transition">

                                <div class="flex items-center gap-4">

                                    <div class="w-12 h-12 rounded-xl
                                                bg-red-50 flex items-center
                                                justify-center text-2xl">

                                        📑

                                    </div>

                                    <div>

                                        <p class="font-semibold text-slate-800">
                                            Laporan Kegiatan
                                        </p>

                                        <p class="text-sm text-slate-500">
                                            Lihat dokumen PDF
                                        </p>

                                    </div>

                                </div>

                                <span class="text-[#008C45] text-xl">
                                    →
                                </span>

                            </a>

                        @endif

                    </div>

                </div>

            </div>

        </div>


        <!-- Tombol kembali -->
        <div class="mt-8 text-center">

            <a href="{{ route('kegiatan.index') }}"
               class="inline-flex items-center gap-2
                      bg-[#008C45] hover:bg-[#005C3B]
                      text-white font-semibold
                      px-6 py-3 rounded-xl
                      transition">

                ← Kembali ke Daftar Kegiatan

            </a>

        </div>

    </main>


    <!-- Footer -->
    <footer class="bg-gradient-to-r from-[#075E4A] to-[#087F5B]
                   text-white py-7 text-center">

        <p class="text-sm">
            © {{ date('Y') }} E-GOVERNMENT —
            Diskominfo Kota Pasuruan
        </p>

    </footer>

</body>
</html>