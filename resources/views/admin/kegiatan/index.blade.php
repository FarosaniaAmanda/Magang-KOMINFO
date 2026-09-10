<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manajemen Kegiatan | E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F6F8F5] min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-xl overflow-hidden shadow-sm">
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

            <a href="{{ route('admin.dashboard') }}"
            class="inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600 text-white px-5 py-3 rounded-xl font-semibold shadow-md transition">
                <span class="text-xl"></span>
                ← Dashboard
            </a>

        </div>
    </nav>


    <!-- CONTENT -->
    <main class="max-w-7xl mx-auto px-6 py-8">

        <!-- HEADER -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">

            <div>
                <p class="text-sm font-medium text-[#008C45] mb-1">
                    ADMINISTRASI
                </p>

                <h2 class="text-3xl font-bold text-slate-800">
                    Manajemen Kegiatan
                </h2>

                <p class="text-slate-500 mt-2">
                    Kelola data kegiatan Diskominfotik Kota Pasuruan.
                </p>
            </div>

            <a href="{{ route('admin.kegiatan.create') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#008C45] hover:bg-[#006F37] text-white px-5 py-3 rounded-xl font-semibold shadow-md transition">
                <span class="text-xl">+</span>
                Tambah Kegiatan
            </a>

        </div>


        <!-- SUCCESS MESSAGE -->
        @if(session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-xl">
                {{ session('success') }}
            </div>
        @endif


        <!-- TABLE -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

            <div class="px-6 py-5 border-b border-gray-100">
                <h3 class="font-bold text-lg text-slate-800">
                    Daftar Kegiatan
                </h3>

                <p class="text-sm text-slate-500 mt-1">
                    Total data: {{ $kegiatans->total() }} kegiatan
                </p>
            </div>


            <div class="overflow-x-auto">

                <table class="w-full text-sm">

                    <thead class="bg-[#F0F7F3]">
                        <tr class="text-left text-slate-700">

                            <th class="px-6 py-4 font-semibold">
                                No
                            </th>

                            <th class="px-6 py-4 font-semibold">
                                Nama Kegiatan
                            </th>

                            <th class="px-6 py-4 font-semibold">
                                Tanggal
                            </th>

                            <th class="px-6 py-4 font-semibold">
                                Waktu
                            </th>

                            <th class="px-6 py-4 font-semibold">
                                Lokasi
                            </th>

                            <th class="px-6 py-4 font-semibold">
                                Bidang
                            </th>

                            <th class="px-6 py-4 font-semibold text-center">
                                Dokumen
                            </th>

                            <th class="px-6 py-4 font-semibold text-center">
                                Aksi
                            </th>

                        </tr>
                    </thead>


                    <tbody class="divide-y divide-gray-100">

                        @forelse($kegiatans as $index => $kegiatan)

                            <tr class="hover:bg-gray-50 transition">

                                <td class="px-6 py-4 text-slate-600">
                                    {{ $kegiatans->firstItem() + $index }}
                                </td>


                                <td class="px-6 py-4">

                                    <div class="font-semibold text-slate-800">
                                        {{ $kegiatan->nama_kegiatan }}
                                    </div>

                                    @if($kegiatan->peserta)
                                        <div class="text-xs text-slate-500 mt-1">
                                            Peserta: {{ $kegiatan->peserta }}
                                        </div>
                                    @endif

                                </td>


                                <td class="px-6 py-4 whitespace-nowrap text-slate-600">
                                    {{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d M Y') }}
                                </td>


                                <td class="px-6 py-4 whitespace-nowrap text-slate-600">

                                    @if($kegiatan->waktu_mulai)
                                        {{ $kegiatan->waktu_mulai }}

                                        @if($kegiatan->waktu_selesai)
                                            - {{ $kegiatan->waktu_selesai }}
                                        @endif
                                    @else
                                        -
                                    @endif

                                </td>


                                <td class="px-6 py-4 text-slate-600">
                                    {{ $kegiatan->lokasi ?: '-' }}
                                </td>


                                <td class="px-6 py-4">

                                    <span class="inline-flex px-3 py-1 rounded-full bg-green-50 text-[#075E4A] text-xs font-semibold">
                                        {{ $kegiatan->bidang_penyelenggara }}
                                    </span>

                                </td>


                                <td class="px-6 py-4">

                                    <div class="flex justify-center gap-2">

                                        @if($kegiatan->berita_acara)

                                            <a href="{{ asset('storage/' . $kegiatan->berita_acara) }}"
                                               target="_blank"
                                               class="px-3 py-1.5 rounded-lg bg-red-50 text-red-600 hover:bg-red-100 text-xs font-semibold">
                                                Berita Acara
                                            </a>

                                        @endif


                                        @if($kegiatan->laporan_kegiatan)

                                            <a href="{{ asset('storage/' . $kegiatan->laporan_kegiatan) }}"
                                               target="_blank"
                                               class="px-3 py-1.5 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-100 text-xs font-semibold">
                                                Laporan
                                            </a>

                                        @endif


                                        @if(!$kegiatan->berita_acara && !$kegiatan->laporan_kegiatan)
                                            <span class="text-xs text-slate-400">
                                                Tidak ada
                                            </span>
                                        @endif

                                    </div>

                                </td>


                                <td class="px-6 py-4">

                                    <div class="flex justify-center gap-2">

                                        <!-- DETAIL -->
                                        <a href="{{ route('admin.kegiatan.show', $kegiatan->id) }}"
                                           class="px-3 py-2 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-100 font-semibold text-xs">
                                            Detail
                                        </a>


                                        <!-- EDIT -->
                                        <a href="{{ route('admin.kegiatan.edit', $kegiatan->id) }}"
                                           class="px-3 py-2 rounded-lg bg-yellow-50 text-yellow-600 hover:bg-yellow-100 font-semibold text-xs">
                                            Edit
                                        </a>


                                        <!-- DELETE -->
                                        <form action="{{ route('admin.kegiatan.destroy', $kegiatan->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus kegiatan ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="px-3 py-2 rounded-lg bg-red-50 text-red-600 hover:bg-red-100 font-semibold text-xs">
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="8"
                                    class="px-6 py-12 text-center">

                                    <div class="text-5xl mb-3">
                                        📅
                                    </div>

                                    <p class="font-semibold text-slate-700">
                                        Belum ada kegiatan
                                    </p>

                                    <p class="text-sm text-slate-500 mt-1">
                                        Silakan tambahkan kegiatan baru.
                                    </p>

                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>


            <!-- PAGINATION -->
            @if($kegiatans->hasPages())

                <div class="px-6 py-5 border-t border-gray-100">
                    {{ $kegiatans->links() }}
                </div>

            @endif

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