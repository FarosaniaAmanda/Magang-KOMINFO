<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Kegiatan | E-Government</title>

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
                Edit Kegiatan
            </h2>

            <p class="text-slate-500 mt-2">
                Perbarui informasi kegiatan di bawah ini.
            </p>
        </div>


        <!-- ERROR -->
        @if($errors->any())

            <div class="mb-6 bg-red-50 border border-red-200 text-red-700 rounded-xl p-5">

                <p class="font-bold mb-2">
                    Terdapat kesalahan:
                </p>

                <ul class="list-disc ml-5 text-sm space-y-1">

                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif


        <!-- FORM -->
        <form action="{{ route('admin.kegiatan.update', $kegiatan->id) }}"
              method="POST"
              enctype="multipart/form-data"
              class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">

            @csrf
            @method('PUT')


            <div class="grid md:grid-cols-2 gap-6">

                <!-- NAMA -->
                <div class="md:col-span-2">

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Nama Kegiatan *
                    </label>

                    <input type="text"
                           name="nama_kegiatan"
                           value="{{ old('nama_kegiatan', $kegiatan->nama_kegiatan) }}"
                           required
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none">

                </div>


                <!-- TANGGAL -->
                <div>

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Tanggal Kegiatan *
                    </label>

                    <input type="date"
                           name="tanggal_kegiatan"
                           value="{{ old('tanggal_kegiatan', $kegiatan->tanggal_kegiatan) }}"
                           required
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none">

                </div>


                <!-- BIDANG -->
                <div>

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Bidang Penyelenggara *
                    </label>

                    <input type="text"
                           name="bidang_penyelenggara"
                           value="{{ old('bidang_penyelenggara', $kegiatan->bidang_penyelenggara) }}"
                           required
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none">

                </div>


                <!-- WAKTU MULAI -->
                <div>

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Waktu Mulai
                    </label>

                    <input type="time"
                           name="waktu_mulai"
                           value="{{ old('waktu_mulai', $kegiatan->waktu_mulai) }}"
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none">

                </div>


                <!-- WAKTU SELESAI -->
                <div>

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Waktu Selesai
                    </label>

                    <input type="time"
                           name="waktu_selesai"
                           value="{{ old('waktu_selesai', $kegiatan->waktu_selesai) }}"
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none">

                </div>


                <!-- LOKASI -->
                <div class="md:col-span-2">

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Lokasi
                    </label>

                    <input type="text"
                           name="lokasi"
                           value="{{ old('lokasi', $kegiatan->lokasi) }}"
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none">

                </div>


                <!-- PESERTA -->
                <div class="md:col-span-2">

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Peserta
                    </label>

                    <textarea name="peserta"
                              rows="3"
                              class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none">{{ old('peserta', $kegiatan->peserta) }}</textarea>

                </div>


                <!-- DESKRIPSI -->
                <div class="md:col-span-2">

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi"
                              rows="5"
                              class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none">{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>

                </div>


                <!-- BERITA ACARA -->
                <div>

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Berita Acara
                    </label>

                    @if($kegiatan->berita_acara)

                        <div class="mb-3 bg-red-50 rounded-xl p-3">

                            <p class="text-xs text-red-600 font-semibold mb-2">
                                File saat ini
                            </p>

                            <a href="{{ asset('storage/' . $kegiatan->berita_acara) }}"
                               target="_blank"
                               class="text-sm text-red-600 underline">
                                Lihat Berita Acara
                            </a>

                        </div>

                    @endif

                    <input type="file"
                           name="berita_acara"
                           accept=".pdf"
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm">

                    <p class="text-xs text-slate-400 mt-2">
                        Kosongkan jika tidak ingin mengganti file.
                    </p>

                </div>


                <!-- LAPORAN -->
                <div>

                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Laporan Kegiatan
                    </label>

                    @if($kegiatan->laporan_kegiatan)

                        <div class="mb-3 bg-blue-50 rounded-xl p-3">

                            <p class="text-xs text-blue-600 font-semibold mb-2">
                                File saat ini
                            </p>

                            <a href="{{ asset('storage/' . $kegiatan->laporan_kegiatan) }}"
                               target="_blank"
                               class="text-sm text-blue-600 underline">
                                Lihat Laporan
                            </a>

                        </div>

                    @endif

                    <input type="file"
                           name="laporan_kegiatan"
                           accept=".pdf"
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm">

                    <p class="text-xs text-slate-400 mt-2">
                        Kosongkan jika tidak ingin mengganti file.
                    </p>

                </div>

            </div>


            <!-- BUTTON -->
            <div class="flex justify-end gap-3 mt-8 pt-6 border-t border-gray-100">

                <a href="{{ route('admin.kegiatan.index') }}"
                   class="px-5 py-3 rounded-xl bg-gray-100 hover:bg-gray-200 text-slate-700 font-semibold">
                    Batal
                </a>

                <button type="submit"
                        class="px-6 py-3 rounded-xl bg-[#008C45] hover:bg-[#006F37] text-white font-semibold shadow-md">
                    Simpan Perubahan
                </button>

                </div>

            <a href="{{ route('admin.kegiatan.index') }}"
               class="inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600 text-white px-5 py-3 rounded-xl font-semibold shadow-md transition">
                <span class="text-xl"></span>
                ← Kembali
            </a>

        </div>

            </div>

        </form>

    </main>


    <footer class="bg-gradient-to-r from-[#075E4A] to-[#087F5B] text-white py-6 text-center mt-10">

        <p class="text-sm">
            © {{ date('Y') }} E-GOVERNMENT — Diskominfotik Kota Pasuruan
        </p>

    </footer>

</body>
</html>