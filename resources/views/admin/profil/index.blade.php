<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Admin - E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="min-h-screen flex">

    <!-- ========================= -->
    <!-- SIDEBAR -->
    <!-- ========================= -->

    <aside class="w-64 bg-[#005C3B] text-white fixed left-0 top-0 bottom-0">

        <div class="p-6">

            <h1 class="text-xl font-bold">
                E-Government
            </h1>

            <p class="text-sm mt-1">
                Admin Panel
            </p>

        </div>


        <nav class="px-4 space-y-2">

            <!-- DASHBOARD -->

            <a href="{{ route('admin.dashboard') }}"
               class="block px-4 py-3 rounded-lg hover:bg-[#C9A227]">

                Dashboard

            </a>


            <!-- BERITA -->

            <a href="{{ route('admin.informasi.index') }}"
               class="block px-4 py-3 rounded-lg hover:bg-[#C9A227]">

                Berita

            </a>


            <!-- KEGIATAN -->

            <a href="{{ route('admin.kegiatan.index') }}"
               class="block px-4 py-3 rounded-lg hover:bg-[#C9A227]">

                Kegiatan

            </a>


            <!-- AGENDA -->

            <a href="{{ route('admin.agenda.index') }}"
               class="block px-4 py-3 rounded-lg hover:bg-[#C9A227]">

                Agenda

            </a>


            <!-- PROFIL -->

            <a href="{{ route('admin.profil.index') }}"
               class="block px-4 py-3 rounded-lg bg-[#C9A227]">

                Profil

            </a>


            <!-- SURVEY -->

            <a href="{{ route('admin.survey.index') }}"
               class="block px-4 py-3 rounded-lg hover:bg-[#C9A227]">

                Survey Kepuasan

            </a>

        </nav>


        <!-- LOGOUT -->

        <div class="absolute bottom-6 left-4 right-4">

            <form method="POST"
                  action="{{ route('admin.logout') }}">

                @csrf

                <button
                    type="submit"
                    class="w-full text-left px-4 py-3 rounded-lg hover:bg-red-600">

                    Logout

                </button>

            </form>

        </div>

    </aside>



    <!-- ========================= -->
    <!-- MAIN -->
    <!-- ========================= -->

    <main class="ml-64 flex-1">


        <!-- ========================= -->
        <!-- HEADER -->
        <!-- ========================= -->

        <header class="bg-white border-b px-8 py-5 flex justify-between items-center">

            <div>

                <h2 class="text-2xl font-bold text-gray-800">
                    Profil
                </h2>

                <p class="text-gray-500 text-sm">
                    Kelola profil Kepala Dinas dan Karyawan
                </p>

            </div>


            <div class="text-right">

                <p class="font-semibold text-gray-800">
                    {{ auth()->user()->name }}
                </p>

                <p class="text-sm text-gray-500">
                    Administrator
                </p>

            </div>

        </header>



        <!-- ========================= -->
        <!-- CONTENT -->
        <!-- ========================= -->

        <section class="p-8">


            <!-- ========================= -->
            <!-- ALERT SUCCESS -->
            <!-- ========================= -->

            @if(session('success'))

                <div class="mb-6 bg-green-100 border border-green-300 text-green-800 px-5 py-4 rounded-xl">

                    {{ session('success') }}

                </div>

            @endif



            <!-- ========================= -->
            <!-- JUDUL -->
            <!-- ========================= -->

            <div class="mb-8">

                <h3 class="text-xl font-semibold text-gray-800">
                    Pengelolaan Profil
                </h3>

                <p class="text-gray-500 mt-1">
                    Kelola informasi Kepala Dinas dan data Karyawan Diskominfotik.
                </p>

            </div>



           <!-- ========================= -->
<!-- KEPALA DINAS -->
<!-- ========================= -->

<div class="bg-white rounded-2xl shadow-sm overflow-hidden mb-8">

    <!-- HEADER -->
    <div class="px-6 py-5 border-b flex items-center justify-between">

        <div>
            <h3 class="text-lg font-semibold text-gray-800">
                Profil Kepala Dinas
            </h3>

            <p class="text-sm text-gray-500 mt-1">
                Informasi Kepala Dinas Diskominfotik.
            </p>
        </div>

        <a href="{{ route('admin.profil.kepala-dinas') }}"
           class="inline-flex items-center justify-center bg-[#005C3B] hover:bg-[#00482F] text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition">

            @if($kepalaDinas)
                Edit Profil
            @else
               + Tambah Profil Kepala Dinas
            @endif

        </a>

    </div>


    <!-- CONTENT -->
    <div class="p-6">

        @if($kepalaDinas)

            <div class="flex flex-col md:flex-row gap-6">

                <!-- FOTO -->
                <div class="flex-shrink-0">

                    @if($kepalaDinas->foto)

                        <img
                            src="{{ asset('storage/' . $kepalaDinas->foto) }}"
                            alt="Foto Kepala Dinas"
                            class="w-40 h-40 object-cover rounded-2xl border"
                        >

                    @else

                        <div class="w-40 h-40 bg-gray-100 rounded-2xl flex items-center justify-center">

                            <span class="text-gray-400 text-sm">
                                Belum ada foto
                            </span>

                        </div>

                    @endif

                </div>


                <!-- DATA -->
                <div class="flex-1">

                    <h4 class="text-2xl font-bold text-gray-800">
                        {{ $kepalaDinas->nama }}
                    </h4>


                    @if($kepalaDinas->nip)

                        <p class="text-gray-500 mt-2">
                            NIP: {{ $kepalaDinas->nip }}
                        </p>

                    @endif


                    @if($kepalaDinas->jabatan)

                        <p class="text-gray-600 font-medium mt-1">
                            {{ $kepalaDinas->jabatan }}
                        </p>

                    @endif


                    @if($kepalaDinas->deskripsi)

                        <div class="mt-5">

                            <p class="text-sm font-semibold text-gray-700 mb-2">
                                Deskripsi
                            </p>

                            <p class="text-gray-600 leading-relaxed">
                                {{ $kepalaDinas->deskripsi }}
                            </p>

                        </div>

                    @endif

                </div>

            </div>

        @else

            <!-- DATA KOSONG -->
            <div class="text-center py-10">

                <div class="text-5xl mb-4">
                    👤
                </div>

                <h4 class="font-semibold text-gray-700">
                    Belum ada data Kepala Dinas
                </h4>

                <p class="text-sm text-gray-500 mt-1">
                    Silakan tambahkan informasi Kepala Dinas.
                </p>

            </div>

        @endif

    </div>

</div>





            <!-- ========================= -->
            <!-- KARYAWAN -->
            <!-- ========================= -->

            <div class="bg-white rounded-2xl shadow-sm overflow-hidden">


                <!-- HEADER -->

                <div class="px-6 py-5 border-b flex flex-col md:flex-row md:items-center md:justify-between gap-3">

                    <div>

                        <h3 class="text-lg font-semibold text-gray-800">
                            Profil Karyawan
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Kelola data karyawan berdasarkan bidang.
                        </p>

                    </div>


                    <a href="{{ route('admin.profil.karyawan.create') }}"
                       class="inline-flex items-center justify-center bg-[#005C3B] hover:bg-[#00482F] text-white px-5 py-2.5 rounded-lg text-sm font-semibold">

                        + Tambah Karyawan

                    </a>

                </div>



                <!-- TABLE -->

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead class="bg-gray-50">

                            <tr>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    No
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    Foto
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    Nama
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    NIP
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    Jabatan
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    Bidang
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y">

                            @forelse($karyawans as $index => $karyawan)

                                <tr class="hover:bg-gray-50">


                                    <!-- NO -->

                                    <td class="px-6 py-4 text-sm text-gray-500">

                                        {{ $index + 1 }}

                                    </td>



                                    <!-- FOTO -->

                                    <td class="px-6 py-4">

                                        @if($karyawan->foto)

                                            <img
                                                src="{{ asset('storage/' . $karyawan->foto) }}"
                                                alt="Foto {{ $karyawan->nama }}"
                                                class="w-12 h-12 object-cover rounded-full border">

                                        @else

                                            <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">

                                                <span class="text-gray-400 text-xs">
                                                    -
                                                </span>

                                            </div>

                                        @endif

                                    </td>



                                    <!-- NAMA -->

                                    <td class="px-6 py-4">

                                        <p class="font-semibold text-gray-800">
                                            {{ $karyawan->nama }}
                                        </p>

                                    </td>



                                    <!-- NIP -->

                                    <td class="px-6 py-4 text-sm text-gray-600">

                                        {{ $karyawan->nip ?? '-' }}

                                    </td>



                                    <!-- JABATAN -->

                                    <td class="px-6 py-4 text-sm text-gray-600">

                                        {{ $karyawan->jabatan ?? '-' }}

                                    </td>



                                    <!-- BIDANG -->

                                    <td class="px-6 py-4">

                                        @if($karyawan->bidang === 'IKP')

                                            <span class="inline-flex px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700">
                                                IKP
                                            </span>

                                        @elseif($karyawan->bidang === 'E-Government')

                                            <span class="inline-flex px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                                                E-Government
                                            </span>

                                        @elseif($karyawan->bidang === 'Statistik')

                                            <span class="inline-flex px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700">
                                                Statistik
                                            </span>

                                        @else

                                            <span class="inline-flex px-3 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-700">
                                                {{ $karyawan->bidang }}
                                            </span>

                                        @endif

                                    </td>



                                    <!-- AKSI -->

                                    <td class="px-6 py-4">

                                        <div class="flex items-center gap-2">


                                            <!-- EDIT -->

                                            <a href="{{ route('admin.profil.karyawan.edit', $karyawan->id) }}"
                                               class="bg-[#005C3B] hover:bg-[#00482F] text-white px-3 py-2 rounded-lg text-xs font-semibold">

                                                Edit

                                            </a>



                                            <!-- HAPUS -->

                                            <form
                                                method="POST"
                                                action="{{ route('admin.profil.karyawan.destroy', $karyawan->id) }}"
                                                onsubmit="return confirm('Yakin ingin menghapus data karyawan ini?');">

                                                @csrf

                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-xs font-semibold">

                                                    Hapus

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="7" class="px-6 py-12 text-center">

                                        <div class="text-4xl mb-3">
                                            👥
                                        </div>

                                        <p class="font-semibold text-gray-700">
                                            Belum ada data karyawan
                                        </p>

                                        <p class="text-sm text-gray-500 mt-1 mb-5">
                                            Silakan tambahkan data karyawan.
                                        </p>



                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </section>

    </main>

</div>

</body>

</html>