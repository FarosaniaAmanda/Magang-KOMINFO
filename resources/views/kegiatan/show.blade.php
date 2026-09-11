<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $kegiatan->nama_kegiatan }} | E-Government Kota Pasuruan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#FAFAF7] text-slate-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center">

            <div class="flex items-center gap-3">

                <div class="w-10 h-10 sm:w-12 sm:h-12 overflow-hidden rounded-xl">
    <img src="{{ asset('images/logo.jpeg') }}"
         class="w-full h-full object-contain"
         alt="Logo">
</div>

                <div>
                    <h1 class="font-bold text-xl text-slate-800">
                        E-GOVERNMENT
                    </h1>

                    <p class="text-xs text-slate-500">
                        Diskominfotik Kota Pasuruan
                    </p>
                </div>

            </div>

        </div>
    </nav>


    <!-- Header -->
    <section class="bg-gradient-to-r from-[#005C3B] to-[#008C45] text-white">

        <div class="max-w-7xl mx-auto px-6 py-12">

            



            <p class="text-sm font-semibold uppercase tracking-wider
                      text-green-100 mb-3">

                Detail Kegiatan

            </p>

            <h1 class="text-3xl md:text-4xl font-bold">

                {{ $kegiatan->nama_kegiatan }}

            </h1>

        </div>

    </section>


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