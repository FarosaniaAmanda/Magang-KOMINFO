<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manajemen Kegiatan | E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        /* Scrollbar tabel di HP */
        .table-scroll::-webkit-scrollbar {
            height: 7px;
        }

        .table-scroll::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        .table-scroll::-webkit-scrollbar-thumb {
            background: #008C45;
            border-radius: 10px;
        }

    </style>

</head>


<body class="bg-[#F6F8F5] min-h-screen">


    <!-- ================================================= -->
    <!-- NAVBAR -->
    <!-- ================================================= -->

    <nav class="bg-white shadow-sm border-b border-gray-100">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8
                    py-4 sm:py-5">

            <div class="flex flex-col
                        sm:flex-row
                        sm:items-center
                        sm:justify-between
                        gap-4">


                <!-- LOGO + IDENTITAS -->

                <div class="flex items-center gap-3 sm:gap-4
                            min-w-0">

                    <div class="w-11 h-11
                                sm:w-14 sm:h-14
                                rounded-xl
                                overflow-hidden
                                shadow-sm
                                flex-shrink-0">

                        <img src="{{ asset('images/logo.jpeg') }}"
                             class="w-full h-full object-cover"
                             alt="Logo">

                    </div>


                    <div class="min-w-0">

                        <h1 class="font-bold
                                   text-lg sm:text-xl
                                   text-slate-800">

                            E-GOVERNMENT

                        </h1>

                        <p class="text-xs sm:text-sm
                                  text-slate-500
                                  mt-0.5">

                            Diskominfotik Kota Pasuruan

                        </p>

                    </div>

                </div>



                <!-- DASHBOARD -->

                <a href="{{ route('admin.dashboard') }}"
                   class="w-full sm:w-auto
                          inline-flex
                          items-center
                          justify-center
                          gap-2
                          bg-amber-500
                          hover:bg-amber-600
                          text-white
                          px-5 py-3
                          rounded-xl
                          font-semibold
                          text-sm sm:text-base
                          shadow-md
                          transition
                          whitespace-nowrap">

                    <span>
                        ←
                    </span>

                    Dashboard

                </a>


            </div>

        </div>

    </nav>



    <!-- ================================================= -->
    <!-- CONTENT -->
    <!-- ================================================= -->

    <main class="max-w-7xl mx-auto
                 px-4 sm:px-6 lg:px-8
                 py-6 sm:py-8 lg:py-10">


        <!-- ================================================= -->
        <!-- HEADER -->
        <!-- ================================================= -->

        <div class="flex flex-col
                    lg:flex-row
                    lg:items-center
                    lg:justify-between
                    gap-5
                    mb-6 sm:mb-8">


            <!-- JUDUL -->

            <div class="min-w-0">

                <p class="text-xs sm:text-sm
                          font-medium
                          text-[#008C45]
                          mb-1">

                    ADMINISTRASI

                </p>


                <h2 class="text-2xl sm:text-3xl
                           font-bold
                           text-slate-800">

                    Manajemen Kegiatan

                </h2>


                <p class="text-slate-500
                          text-sm sm:text-base
                          mt-2
                          leading-relaxed">

                    Kelola data kegiatan Diskominfotik
                    Kota Pasuruan.

                </p>

            </div>



            <!-- TAMBAH KEGIATAN -->

            <a href="{{ route('admin.kegiatan.create') }}"
               class="w-full lg:w-auto
                      inline-flex
                      items-center
                      justify-center
                      gap-2
                      bg-[#008C45]
                      hover:bg-[#006F37]
                      text-white
                      px-5 sm:px-6
                      py-3
                      rounded-xl
                      font-semibold
                      text-sm sm:text-base
                      shadow-md
                      transition
                      whitespace-nowrap">

                <span class="text-xl">
                    +
                </span>

                Tambah Kegiatan

            </a>


        </div>



        <!-- ================================================= -->
        <!-- SUCCESS MESSAGE -->
        <!-- ================================================= -->

        @if(session('success'))

            <div class="mb-6
                        bg-green-50
                        border border-green-200
                        text-green-700
                        px-4 sm:px-5
                        py-4
                        rounded-xl
                        text-sm sm:text-base">

                {{ session('success') }}

            </div>

        @endif



        <!-- ================================================= -->
        <!-- TABLE CONTAINER -->
        <!-- ================================================= -->

        <div class="bg-white
                    rounded-2xl
                    shadow-sm
                    border border-gray-100
                    overflow-hidden">


            <!-- ================================================= -->
            <!-- TABLE HEADER -->
            <!-- ================================================= -->

            <div class="px-4 sm:px-6
                        py-5
                        border-b border-gray-100">

                <h3 class="font-bold
                           text-base sm:text-lg
                           text-slate-800">

                    Daftar Kegiatan

                </h3>


                <p class="text-sm
                          text-slate-500
                          mt-1">

                    Total data:
                    {{ $kegiatans->total() }}
                    kegiatan

                </p>


                <!-- KHUSUS HP -->

                <p class="text-xs
                          text-slate-400
                          mt-2
                          sm:hidden">

                    Geser tabel ke kanan atau kiri
                    untuk melihat data lainnya.

                </p>

            </div>



            <!-- ================================================= -->
            <!-- TABLE -->
            <!-- ================================================= -->

            <div class="overflow-x-auto table-scroll">

                <!--
                    min-w membuat tabel tidak dipaksa mengecil
                    di HP.
                -->

                <table class="w-full
                              min-w-[1100px]
                              text-sm">


                    <!-- ================================================= -->
                    <!-- TABLE HEADER -->
                    <!-- ================================================= -->

                    <thead class="bg-[#F0F7F3]">

                        <tr class="text-left
                                   text-slate-700">


                            <!-- NO -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       font-semibold
                                       w-16">

                                No

                            </th>



                            <!-- NAMA -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       font-semibold
                                       min-w-[250px]">

                                Nama Kegiatan

                            </th>



                            <!-- TANGGAL -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       font-semibold
                                       whitespace-nowrap">

                                Tanggal

                            </th>



                            <!-- WAKTU -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       font-semibold
                                       whitespace-nowrap">

                                Waktu

                            </th>



                            <!-- LOKASI -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       font-semibold
                                       min-w-[180px]">

                                Lokasi

                            </th>



                            <!-- BIDANG -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       font-semibold
                                       min-w-[180px]">

                                Bidang

                            </th>



                            <!-- DOKUMEN -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       font-semibold
                                       text-center
                                       min-w-[220px]">

                                Dokumen

                            </th>



                            <!-- AKSI -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       font-semibold
                                       text-center
                                       min-w-[240px]">

                                Aksi

                            </th>


                        </tr>

                    </thead>



                    <!-- ================================================= -->
                    <!-- TABLE BODY -->
                    <!-- ================================================= -->

                    <tbody class="divide-y divide-gray-100">


                        @forelse($kegiatans as $index => $kegiatan)


                            <tr class="hover:bg-gray-50
                                       transition">


                                <!-- NO -->

                                <td class="px-4 sm:px-6
                                           py-4
                                           text-slate-600">

                                    {{ $kegiatans->firstItem() + $index }}

                                </td>



                                <!-- NAMA KEGIATAN -->

                                <td class="px-4 sm:px-6
                                           py-4">

                                    <div class="font-semibold
                                                text-slate-800
                                                leading-relaxed">

                                        {{ $kegiatan->nama_kegiatan }}

                                    </div>


                                    @if($kegiatan->peserta)

                                        <div class="text-xs
                                                    text-slate-500
                                                    mt-1
                                                    leading-relaxed">

                                            Peserta:
                                            {{ $kegiatan->peserta }}

                                        </div>

                                    @endif

                                </td>



                                <!-- TANGGAL -->

                                <td class="px-4 sm:px-6
                                           py-4
                                           whitespace-nowrap
                                           text-slate-600">

                                    {{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d M Y') }}

                                </td>



                                <!-- WAKTU -->

                                <td class="px-4 sm:px-6
                                           py-4
                                           whitespace-nowrap
                                           text-slate-600">

                                    @if($kegiatan->waktu_mulai)

                                        {{ $kegiatan->waktu_mulai }}

                                        @if($kegiatan->waktu_selesai)

                                            -
                                            {{ $kegiatan->waktu_selesai }}

                                        @endif

                                    @else

                                        -

                                    @endif

                                </td>



                                <!-- LOKASI -->

                                <td class="px-4 sm:px-6
                                           py-4
                                           text-slate-600
                                           leading-relaxed">

                                    {{ $kegiatan->lokasi ?: '-' }}

                                </td>



                                <!-- BIDANG -->

                                <td class="px-4 sm:px-6
                                           py-4">

                                    <span class="inline-flex
                                                 px-3 py-1.5
                                                 rounded-full
                                                 bg-green-50
                                                 text-[#075E4A]
                                                 text-xs
                                                 font-semibold
                                                 leading-relaxed">

                                        {{ $kegiatan->bidang_penyelenggara }}

                                    </span>

                                </td>



                                <!-- DOKUMEN -->

                                <td class="px-4 sm:px-6
                                           py-4">

                                    <div class="flex
                                                flex-wrap
                                                justify-center
                                                gap-2">


                                        @if($kegiatan->berita_acara)

                                            <a href="{{ asset('storage/' . $kegiatan->berita_acara) }}"
                                               target="_blank"
                                               class="inline-flex
                                                      items-center
                                                      justify-center
                                                      px-3 py-2
                                                      rounded-lg
                                                      bg-red-50
                                                      text-red-600
                                                      hover:bg-red-100
                                                      text-xs
                                                      font-semibold
                                                      transition
                                                      whitespace-nowrap">

                                                Berita Acara

                                            </a>

                                        @endif



                                        @if($kegiatan->laporan_kegiatan)

                                            <a href="{{ asset('storage/' . $kegiatan->laporan_kegiatan) }}"
                                               target="_blank"
                                               class="inline-flex
                                                      items-center
                                                      justify-center
                                                      px-3 py-2
                                                      rounded-lg
                                                      bg-blue-50
                                                      text-blue-600
                                                      hover:bg-blue-100
                                                      text-xs
                                                      font-semibold
                                                      transition
                                                      whitespace-nowrap">

                                                Laporan

                                            </a>

                                        @endif



                                        @if(!$kegiatan->berita_acara && !$kegiatan->laporan_kegiatan)

                                            <span class="text-xs
                                                         text-slate-400">

                                                Tidak ada

                                            </span>

                                        @endif


                                    </div>

                                </td>



                                <!-- AKSI -->

                                <td class="px-4 sm:px-6
                                           py-4">

                                    <div class="flex
                                                items-center
                                                justify-center
                                                gap-2">


                                        <!-- DETAIL -->

                                        <a href="{{ route('admin.kegiatan.show', $kegiatan->id) }}"
                                           class="inline-flex
                                                  items-center
                                                  justify-center
                                                  px-3 py-2
                                                  rounded-lg
                                                  bg-blue-50
                                                  text-blue-600
                                                  hover:bg-blue-100
                                                  font-semibold
                                                  text-xs
                                                  transition
                                                  whitespace-nowrap">

                                            Detail

                                        </a>



                                        <!-- EDIT -->

                                        <a href="{{ route('admin.kegiatan.edit', $kegiatan->id) }}"
                                           class="inline-flex
                                                  items-center
                                                  justify-center
                                                  px-3 py-2
                                                  rounded-lg
                                                  bg-yellow-50
                                                  text-yellow-600
                                                  hover:bg-yellow-100
                                                  font-semibold
                                                  text-xs
                                                  transition
                                                  whitespace-nowrap">

                                            Edit

                                        </a>



                                        <!-- DELETE -->

                                        <form
                                            action="{{ route('admin.kegiatan.destroy', $kegiatan->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus kegiatan ini?')"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="inline-flex
                                                       items-center
                                                       justify-center
                                                       px-3 py-2
                                                       rounded-lg
                                                       bg-red-50
                                                       text-red-600
                                                       hover:bg-red-100
                                                       font-semibold
                                                       text-xs
                                                       transition
                                                       whitespace-nowrap">

                                                Hapus

                                            </button>

                                        </form>


                                    </div>

                                </td>


                            </tr>


                        @empty


                            <!-- ================================================= -->
                            <!-- DATA KOSONG -->
                            <!-- ================================================= -->

                            <tr>

                                <td colspan="8"
                                    class="px-6
                                           py-16
                                           text-center">


                                    <div class="text-5xl mb-3">

                                        📅

                                    </div>


                                    <p class="font-semibold
                                              text-slate-700">

                                        Belum ada kegiatan

                                    </p>


                                    <p class="text-sm
                                              text-slate-500
                                              mt-1">

                                        Silakan tambahkan
                                        kegiatan baru.

                                    </p>


                                    <!-- BUTTON -->

                                    <a href="{{ route('admin.kegiatan.create') }}"
                                       class="inline-flex
                                              items-center
                                              justify-center
                                              gap-2
                                              mt-5
                                              px-5 py-3
                                              bg-[#008C45]
                                              hover:bg-[#006F37]
                                              text-white
                                              rounded-xl
                                              font-semibold
                                              text-sm
                                              transition">

                                        + Tambah Kegiatan

                                    </a>


                                </td>

                            </tr>


                        @endforelse


                    </tbody>

                </table>

            </div>



            <!-- ================================================= -->
            <!-- PAGINATION -->
            <!-- ================================================= -->

            @if($kegiatans->hasPages())

                <div class="px-4 sm:px-6
                            py-5
                            border-t border-gray-100
                            overflow-x-auto">

                    <div class="min-w-max">

                        {{ $kegiatans->links() }}

                    </div>

                </div>

            @endif


        </div>


    </main>



    <!-- ================================================= -->
    <!-- FOOTER -->
    <!-- ================================================= -->

    <footer class="bg-gradient-to-r
                   from-[#075E4A]
                   to-[#087F5B]
                   text-white
                   py-6
                   text-center
                   mt-8 sm:mt-10">

        <div class="px-4">

            <p class="text-xs sm:text-sm">

                © {{ date('Y') }}
                E-GOVERNMENT —
                Diskominfotik Kota Pasuruan

            </p>

        </div>

    </footer>


</body>

</html>