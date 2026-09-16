<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Berita | E-Government Kota Pasuruan</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        /* Scrollbar tabel */
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


<body class="bg-slate-100">


    <!-- ================================================= -->
    <!-- HEADER -->
    <!-- ================================================= -->

    <header class="bg-white shadow-sm">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8
                    py-4 sm:py-5">

            <div class="flex flex-col
                        sm:flex-row
                        sm:items-center
                        sm:justify-between
                        gap-4">


                <!-- JUDUL -->

                <div class="min-w-0">

                    <p class="text-xs sm:text-sm
                              font-semibold
                              text-[#008C45]">

                        ADMIN E-GOVERNMENT

                    </p>

                    <h1 class="text-xl sm:text-2xl
                               font-bold
                               text-slate-800
                               mt-1">

                        Berita Kota Pasuruan

                    </h1>

                </div>

            <!-- =================================================
                 TOMBOL HEADER
            ================================================== -->

            <div class="flex flex-col sm:flex-row
                        gap-2 sm:gap-3
                        w-full lg:w-auto">


                <!-- DASHBOARD -->

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="w-full sm:w-auto
                           inline-flex items-center justify-center gap-2
                           bg-[#C9A227]
                           hover:bg-[#008C45]
                           text-white
                           border border-slate-200
                           px-4 sm:px-5
                           py-3
                           rounded-xl
                           font-semibold
                           text-sm
                           shadow-sm
                           transition"
                >

                    <span class="text-lg">
                        ←
                    </span>

                    Dashboard

                </a>



                <!-- TAMBAH AGENDA -->

                <a
                    href="{{ route('admin.informasi.create') }}"
                    class="w-full sm:w-auto
                           inline-flex items-center justify-center gap-2
                           bg-[#008C45]
                           hover:bg-[#005C3B]
                           text-white
                           px-4 sm:px-5
                           py-3
                           rounded-xl
                           font-semibold
                           text-sm
                           shadow-sm
                           transition"
                >

                    <span class="text-xl leading-none">
                        +
                    </span>

                    Tambah Berita

                </a>

            </div>

        </div>



    <!-- ================================================= -->
    <!-- CONTENT -->
    <!-- ================================================= -->

    <main class="max-w-7xl mx-auto
                 px-4 sm:px-6 lg:px-8
                 py-6 sm:py-8 lg:py-10">

        <!-- ================================================= -->
        <!-- NOTIFIKASI -->
        <!-- ================================================= -->

        @if(session('success'))

            <div class="mb-6
                        bg-green-100
                        border border-green-300
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
                    border border-slate-200
                    overflow-hidden">


            <!-- ================================================= -->
            <!-- INFO TABLE -->
            <!-- ================================================= -->

            <div class="px-4 sm:px-6
                        py-4
                        border-b
                        bg-white">

                <div class="flex items-center
                            justify-between
                            gap-3">

                    <div>

                        <p class="text-sm
                                  font-semibold
                                  text-slate-700">

                            Data Berita

                        </p>

                        <p class="text-xs
                                  text-slate-400
                                  mt-1
                                  sm:hidden">

                            Geser tabel ke samping untuk
                            melihat semua kolom.

                        </p>

                    </div>

                </div>

            </div>



            <!-- ================================================= -->
            <!-- TABLE -->
            <!-- ================================================= -->

            <div class="overflow-x-auto table-scroll">

                <table class="w-full min-w-[850px]">


                    <!-- TABLE HEADER -->

                    <thead class="bg-slate-50 border-b">

                        <tr>


                            <!-- NO -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       text-left
                                       text-xs sm:text-sm
                                       font-bold
                                       text-slate-600
                                       w-16">

                                No

                            </th>



                            <!-- JUDUL -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       text-left
                                       text-xs sm:text-sm
                                       font-bold
                                       text-slate-600">

                                Judul Berita

                            </th>



                            <!-- KATEGORI -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       text-left
                                       text-xs sm:text-sm
                                       font-bold
                                       text-slate-600">

                                Kategori

                            </th>



                            <!-- TANGGAL -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       text-left
                                       text-xs sm:text-sm
                                       font-bold
                                       text-slate-600
                                       whitespace-nowrap">

                                Tanggal

                            </th>



                            <!-- AKSI -->

                            <th class="px-4 sm:px-6
                                       py-4
                                       text-center
                                       text-xs sm:text-sm
                                       font-bold
                                       text-slate-600
                                       w-48">

                                Aksi

                            </th>


                        </tr>

                    </thead>



                    <!-- ================================================= -->
                    <!-- TABLE BODY -->
                    <!-- ================================================= -->

                    <tbody>


                        @forelse($informasi as $item)


                            <tr class="border-b
                                       border-slate-100
                                       hover:bg-slate-50
                                       transition">


                                <!-- NOMOR -->

                                <td class="px-4 sm:px-6
                                           py-5
                                           text-sm
                                           text-slate-600">

                                    {{ $loop->iteration }}

                                </td>



                                <!-- JUDUL -->

                                <td class="px-4 sm:px-6
                                           py-5
                                           max-w-md">

                                    <p class="font-semibold
                                              text-slate-800
                                              text-sm sm:text-base
                                              leading-relaxed">

                                        {{ $item->judul }}

                                    </p>

                                </td>



                                <!-- KATEGORI -->

                                <td class="px-4 sm:px-6
                                           py-5">

                                    <span class="inline-block
                                                 px-3 py-1.5
                                                 text-xs
                                                 font-semibold
                                                 rounded-full
                                                 bg-green-100
                                                 text-[#008C45]
                                                 whitespace-nowrap">

                                        {{ $item->kategori }}

                                    </span>

                                </td>



                                <!-- TANGGAL -->

                                <td class="px-4 sm:px-6
                                           py-5
                                           text-sm
                                           text-slate-600
                                           whitespace-nowrap">

                                    {{ $item->tanggal->format('d M Y') }}

                                </td>



                                <!-- AKSI -->

                                <td class="px-4 sm:px-6
                                           py-5">

                                    <div class="flex
                                                items-center
                                                justify-center
                                                gap-2">


                                        <!-- EDIT -->

                                        <a href="{{ route('admin.informasi.edit', $item->id) }}"
                                           class="inline-flex
                                                  items-center
                                                  justify-center
                                                  px-4
                                                  py-2
                                                  bg-blue-500
                                                  text-white
                                                  text-sm
                                                  font-semibold
                                                  rounded-lg
                                                  hover:bg-blue-600
                                                  transition
                                                  whitespace-nowrap">

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
                                                class="inline-flex
                                                       items-center
                                                       justify-center
                                                       px-4
                                                       py-2
                                                       bg-red-500
                                                       text-white
                                                       text-sm
                                                       font-semibold
                                                       rounded-lg
                                                       hover:bg-red-600
                                                       transition
                                                       whitespace-nowrap"
                                            >

                                                Hapus

                                            </button>

                                        </form>


                                    </div>

                                </td>


                            </tr>


                        @empty


                            <!-- ================================================= -->
                            <!-- JIKA BELUM ADA BERITA -->
                            <!-- ================================================= -->

                            <tr>

                                <td
                                    colspan="5"
                                    class="text-center
                                           px-4
                                           py-16
                                           text-slate-500"
                                >

                                    <div class="text-5xl mb-4">

                                        📰

                                    </div>


                                    <h3 class="text-lg
                                               font-bold
                                               text-slate-700">

                                        Belum Ada Berita

                                    </h3>


                                    <p class="mt-2
                                              text-sm sm:text-base">

                                        Silakan tambahkan berita
                                        pertama Kota Pasuruan.

                                    </p>


                                    <!-- BUTTON TAMBAH -->

                                    <a href="{{ route('admin.informasi.create') }}"
                                       class="inline-flex
                                              items-center
                                              justify-center
                                              mt-5
                                              px-5 py-3
                                              bg-[#008C45]
                                              hover:bg-[#006F38]
                                              text-white
                                              rounded-xl
                                              font-semibold
                                              text-sm
                                              transition">

                                        + Tambah Berita

                                    </a>

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