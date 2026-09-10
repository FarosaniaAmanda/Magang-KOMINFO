<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Kegiatan | E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F6F8F5] min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-sm border-b border-gray-100">
        <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">

            <div class="flex items-center gap-4">

                <div class="w-14 h-14 rounded-xl overflow-hidden">
                    <img src="{{ asset('images/logo.jpeg') }}"
                         class="w-full h-full object-cover">
                </div>

                <div>
                    <h1 class="font-bold text-xl text-slate-800">
                        E-GOVERNMENT
                    </h1>

                    <p class="text-xs text-slate-500">
                        Diskominfotik Kota Pasuruan
                    </p>
                </div>

    </nav>


    <!-- CONTENT -->
    <main class="max-w-5xl mx-auto px-6 py-8">

        <div class="mb-8">

            <p class="text-sm font-semibold text-[#008C45]">
                MANAJEMEN KEGIATAN
            </p>

            <h2 class="text-3xl font-bold text-slate-800 mt-1">
                Detail Kegiatan
            </h2>

        </div>


        <!-- CARD -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

            <!-- HEADER -->
            <div class="bg-gradient-to-r from-[#075E4A] to-[#087F5B] px-6 py-7 text-white">

                <p class="text-sm opacity-80 mb-2">
                    KEGIATAN DISKOMINFOTIK
                </p>

                <h1 class="text-2xl md:text-3xl font-bold">
                    {{ $kegiatan->nama_kegiatan }}
                </h1>

            </div>


            <!-- DETAIL -->
            <div class="p-6 md:p-8">

                <div class="grid md:grid-cols-2 gap-6">


                    <!-- TANGGAL -->
                    <div class="bg-gray-50 rounded-xl p-5">

                        <p class="text-xs uppercase tracking-wide text-slate-400 font-semibold">
                            Tanggal Kegiatan
                        </p>

                        <p class="text-lg font-semibold text-slate-800 mt-2">
                            {{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d F Y') }}
                        </p>

                    </div>


                    <!-- WAKTU -->
                    <div class="bg-gray-50 rounded-xl p-5">

                        <p class="text-xs uppercase tracking-wide text-slate-400 font-semibold">
                            Waktu
                        </p>

                        <p class="text-lg font-semibold text-slate-800 mt-2">

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
                    <div class="bg-gray-50 rounded-xl p-5">

                        <p class="text-xs uppercase tracking-wide text-slate-400 font-semibold">
                            Lokasi
                        </p>

                        <p class="text-lg font-semibold text-slate-800 mt-2">
                            {{ $kegiatan->lokasi ?: '-' }}
                        </p>

                    </div>


                    <!-- BIDANG -->
                    <div class="bg-gray-50 rounded-xl p-5">

                        <p class="text-xs uppercase tracking-wide text-slate-400 font-semibold">
                            Bidang Penyelenggara
                        </p>

                        <p class="text-lg font-semibold text-slate-800 mt-2">
                            {{ $kegiatan->bidang_penyelenggara }}
                        </p>

                    </div>


                    <!-- PESERTA -->
                    <div class="md:col-span-2 bg-gray-50 rounded-xl p-5">

                        <p class="text-xs uppercase tracking-wide text-slate-400 font-semibold">
                            Peserta
                        </p>

                        <p class="text-slate-700 mt-2 leading-relaxed">
                            {{ $kegiatan->peserta ?: '-' }}
                        </p>

                    </div>


                    <!-- DESKRIPSI -->
                    <div class="md:col-span-2 bg-gray-50 rounded-xl p-5">

                        <p class="text-xs uppercase tracking-wide text-slate-400 font-semibold">
                            Deskripsi Kegiatan
                        </p>

                        <p class="text-slate-700 mt-2 leading-relaxed whitespace-pre-line">
                            {{ $kegiatan->deskripsi ?: '-' }}
                        </p>

                    </div>

                </div>


                <!-- DOKUMEN -->
                <div class="mt-8 pt-7 border-t border-gray-100">

                    <h3 class="text-lg font-bold text-slate-800 mb-4">
                        Dokumen Kegiatan
                    </h3>


                    <div class="grid md:grid-cols-2 gap-4">


                        <!-- BERITA ACARA -->
                        <div class="border border-gray-100 rounded-xl p-5">

                            <p class="font-semibold text-slate-800">
                                Berita Acara
                            </p>

                            @if($kegiatan->berita_acara)

                                <a href="{{ asset('storage/' . $kegiatan->berita_acara) }}"
                                   target="_blank"
                                   class="inline-flex mt-4 px-4 py-2 rounded-lg bg-red-50 text-red-600 hover:bg-red-100 font-semibold text-sm">
                                    📄 Buka Berita Acara
                                </a>

                            @else

                                <p class="text-sm text-slate-400 mt-3">
                                    Belum ada file.
                                </p>

                            @endif

                        </div>


                        <!-- LAPORAN -->
                        <div class="border border-gray-100 rounded-xl p-5">

                            <p class="font-semibold text-slate-800">
                                Laporan Kegiatan
                            </p>

                            @if($kegiatan->laporan_kegiatan)

                                <a href="{{ asset('storage/' . $kegiatan->laporan_kegiatan) }}"
                                   target="_blank"
                                   class="inline-flex mt-4 px-4 py-2 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-100 font-semibold text-sm">
                                    📄 Buka Laporan Kegiatan
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
                <div class="flex justify-end gap-3 mt-8 pt-6 border-t border-gray-100">

                    <a href="{{ route('admin.kegiatan.index') }}"
                       class="inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600 text-white px-5 py-3 rounded-xl font-semibold shadow-md transition">
                <span class="text-xl"></span>
                        Kembali
                    </a>

                    <a href="{{ route('admin.kegiatan.edit', $kegiatan->id) }}"
                       class="px-5 py-3 rounded-xl bg-[#008C45] hover:bg-[#006F37] text-white font-semibold">
                        Edit Kegiatan
                    </a>

                </div>

            </div>

        </div>

    </main>


    <!-- FOOTER -->
    <footer class="bg-gradient-to-r from-[#075E4A] to-[#087F5B] text-white py-6 text-center mt-10">

        <p class="text-sm">
            © {{ date('Y') }} E-GOVERNMENT — Diskominfotik Kota Pasuruan
        </p>

    </footer>

</body>
</html>