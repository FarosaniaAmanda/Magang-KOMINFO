<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kegiatan | E-Government Kota Pasuruan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#FAFAF7] text-slate-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center">

            <div class="flex items-center gap-3">
                <div class="w-14 h-14 overflow-hidden rounded-xl">
                    <img src="{{ asset('images/logo.jpeg') }}"
                         class="w-full h-full object-cover"
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


    <!-- Tombol Kembali ke Beranda -->
    <div class="max-w-7xl mx-auto px-6 pt-6">
        <a href="{{ url('/') }}"
           class="inline-flex items-center gap-2
                  text-[#008C45] hover:text-[#005C3B]
                  font-semibold text-sm
                  transition duration-200">

            <span class="text-lg">
                ←
            </span>

            <span>
                Kembali ke Beranda
            </span>

        </a>
    </div>


    <!-- Header -->
    <section class="bg-gradient-to-r from-[#005C3B] to-[#008C45] text-white mt-5">
        <div class="max-w-7xl mx-auto px-6 py-14">

            <div class="max-w-3xl">

                <p class="text-sm font-semibold uppercase tracking-wider text-green-100 mb-3">
                    Informasi Kegiatan
                </p>

                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Kegiatan DISKOMINFOTIK
                </h1>

                <p class="text-green-50 leading-relaxed">
                    Informasi kegiatan dan agenda Diskominfotik
                    Kota Pasuruan.
                </p>

            </div>

        </div>
    </section>


    <!-- Daftar Kegiatan -->
    <main class="max-w-7xl mx-auto px-6 py-12">

        @if(session('success'))

            <div class="mb-8 bg-green-50 border border-green-200
                        text-green-700 px-5 py-4 rounded-xl">

                {{ session('success') }}

            </div>

        @endif


        @if($kegiatans->count() > 0)

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">

                @foreach($kegiatans as $kegiatan)

                    <article class="bg-white rounded-2xl shadow-sm
                                    border border-slate-100
                                    overflow-hidden
                                    hover:shadow-lg transition duration-300">

                        <!-- Icon -->
                        <div class="h-40 bg-gradient-to-br
                                    from-[#005C3B] to-[#008C45]
                                    flex items-center justify-center">

                            <div class="text-7xl">
                                📅
                            </div>

                        </div>


                        <!-- Isi -->
                        <div class="p-6">

                            <!-- Tanggal -->
                            <div class="flex items-center gap-2
                                        text-sm text-[#008C45]
                                        font-semibold mb-3">

                                <span>📅</span>

                                <span>
                                    {{ $kegiatan->tanggal_kegiatan
                                        ? $kegiatan->tanggal_kegiatan->format('d F Y')
                                        : '-' }}
                                </span>

                            </div>


                            <!-- Nama -->
                            <h2 class="text-xl font-bold text-slate-800
                                       mb-3 line-clamp-2">

                                {{ $kegiatan->nama_kegiatan }}

                            </h2>


                            <!-- Lokasi -->
                            @if($kegiatan->lokasi)

                                <div class="flex items-start gap-2
                                            text-sm text-slate-500 mb-2">

                                    <span>📍</span>

                                    <span>
                                        {{ $kegiatan->lokasi }}
                                    </span>

                                </div>

                            @endif


                            <!-- Bidang -->
                            @if($kegiatan->bidang_penyelenggara)

                                <div class="flex items-start gap-2
                                            text-sm text-slate-500 mb-4">

                                    <span>🏢</span>

                                    <span>
                                        {{ $kegiatan->bidang_penyelenggara }}
                                    </span>

                                </div>

                            @endif


                            <!-- Tombol Detail -->
                            <a href="{{ route('kegiatan.show', $kegiatan->id) }}"
                               class="inline-flex items-center justify-center
                                      w-full bg-[#008C45]
                                      hover:bg-[#005C3B]
                                      text-white font-semibold
                                      px-5 py-3 rounded-xl
                                      transition">

                                Lihat Detail

                                <span class="ml-2">
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
            <div class="bg-white rounded-2xl
                        border border-slate-100
                        shadow-sm py-20 px-6 text-center">

                <div class="text-7xl mb-6">
                    📅
                </div>

                <h2 class="text-2xl font-bold text-slate-800 mb-3">
                    Belum Ada Kegiatan
                </h2>

                <p class="text-slate-500 max-w-lg mx-auto">
                    Belum ada kegiatan yang tersedia saat ini.
                    Silakan cek kembali nanti.
                </p>

            </div>

        @endif

    </main>


    <!-- Footer -->
    <footer class="bg-gradient-to-r from-[#075E4A] to-[#087F5B]
                   text-white py-7 text-center">

        <p class="text-sm">
            © {{ date('Y') }} E-GOVERNMENT —
            Diskominfotik Kota Pasuruan
        </p>

    </footer>

</body>
