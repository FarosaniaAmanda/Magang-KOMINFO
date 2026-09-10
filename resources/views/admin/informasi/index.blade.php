<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Berita | E-Government Kota Pasuruan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <!-- ================= HEADER ================= -->

    <header class="bg-white shadow-sm">

        <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">

            <div>

                <p class="text-sm font-semibold text-[#008C45]">
                    ADMIN PANEL
                </p>

                <h1 class="text-2xl font-bold text-slate-800">
                    Berita Kota Pasuruan
                </h1>

            </div>


            <!-- KEMBALI KE DASHBOARD -->

            <a href="{{ route('admin.dashboard') }}"
                class="px-5 py-2.5 rounded-lg
                       bg-slate-700 text-white
                       hover:bg-slate-800
                       transition">

                ← Dashboard

            </a>

        </div>

    </header>


    <!-- ================= CONTENT ================= -->

    <main class="max-w-7xl mx-auto px-6 py-10">


        <!-- JUDUL + BUTTON -->

        <div class="flex flex-col md:flex-row
                    md:items-center
                    justify-between
                    gap-5
                    mb-8">

            <div>

                <h2 class="text-3xl font-bold text-slate-800">
                    Daftar Berita
                </h2>

                <p class="text-slate-500 mt-2">

                    Kelola berita dan informasi terbaru Kota Pasuruan.

                </p>

            </div>


            <!-- TAMBAH BERITA -->

            <a href="{{ route('admin.informasi.create') }}"
                class="inline-flex items-center justify-center
                       px-6 py-3
                       bg-[#008C45]
                       text-white
                       font-semibold
                       rounded-xl
                       hover:bg-[#006F38]
                       transition
                       shadow-md">

                + Tambah Berita

            </a>

        </div>


        <!-- ================= NOTIFIKASI ================= -->

        @if(session('success'))

            <div class="mb-6
                        bg-green-100
                        border border-green-300
                        text-green-700
                        px-5 py-4
                        rounded-xl">

                {{ session('success') }}

            </div>

        @endif


        <!-- ================= TABLE ================= -->

        <div class="bg-white
                    rounded-2xl
                    shadow-sm
                    border border-slate-200
                    overflow-hidden">


            <div class="overflow-x-auto">

                <table class="w-full">

                    <thead class="bg-slate-50 border-b">

                        <tr>

                            <th class="px-6 py-4 text-left text-sm font-bold text-slate-600">
                                No
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-bold text-slate-600">
                                Judul Berita
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-bold text-slate-600">
                                Kategori
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-bold text-slate-600">
                                Tanggal
                            </th>

                            <th class="px-6 py-4 text-center text-sm font-bold text-slate-600">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($informasi as $item)

                            <tr class="border-b border-slate-100 hover:bg-slate-50 transition">

                                <!-- NOMOR -->

                                <td class="px-6 py-5 text-slate-600">

                                    {{ $loop->iteration }}

                                </td>


                                <!-- JUDUL -->

                                <td class="px-6 py-5">

                                    <p class="font-semibold text-slate-800">

                                        {{ $item->judul }}

                                    </p>

                                </td>


                                <!-- KATEGORI -->

                                <td class="px-6 py-5">

                                    <span class="inline-block
                                                 px-3 py-1
                                                 text-xs font-semibold
                                                 rounded-full
                                                 bg-green-100
                                                 text-[#008C45]">

                                        {{ $item->kategori }}

                                    </span>

                                </td>


                                <!-- TANGGAL -->

                                <td class="px-6 py-5 text-slate-600">

                                    {{ $item->tanggal->format('d M Y') }}

                                </td>


                                <!-- AKSI -->

                                <td class="px-6 py-5">

                                    <div class="flex justify-center gap-3">


                                        <!-- EDIT -->

                                        <a href="{{ route('admin.informasi.edit', $item->id) }}"
                                            class="px-4 py-2
                                                   bg-blue-500
                                                   text-white
                                                   text-sm
                                                   rounded-lg
                                                   hover:bg-blue-600
                                                   transition">

                                            Edit

                                        </a>


                                        <!-- HAPUS -->

                                        <form
                                            action="{{ route('admin.informasi.destroy', $item->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus berita ini?')"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="px-4 py-2
                                                       bg-red-500
                                                       text-white
                                                       text-sm
                                                       rounded-lg
                                                       hover:bg-red-600
                                                       transition"
                                            >

                                                Hapus

                                            </button>

                                        </form>


                                    </div>

                                </td>

                            </tr>


                        @empty


                            <!-- JIKA BELUM ADA BERITA -->

                            <tr>

                                <td
                                    colspan="5"
                                    class="text-center
                                           py-16
                                           text-slate-500"
                                >

                                    <div class="text-5xl mb-4">

                                        📰

                                    </div>

                                    <h3 class="text-lg font-bold text-slate-700">

                                        Belum Ada Berita

                                    </h3>

                                    <p class="mt-2">

                                        Silakan tambahkan berita pertama Kota Pasuruan.

                                    </p>

                                </td>

                            </tr>


                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


    </main>

</body>

</html>