<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-gray-100">


<div class="min-h-screen flex">


    <!-- ========================= -->
    <!-- SIDEBAR -->
    <!-- ========================= -->

    <aside class="w-64 bg-[#005C3B] text-white
                  fixed left-0 top-0 bottom-0">

        <div class="p-6">

            <h1 class="text-xl font-bold">
                E-Government
            </h1>

            <p class="text-x1 text-sm mt-1">
                Admin Panel
            </p>

        </div>


        <nav class="px-4 space-y-2">


            <!-- DASHBOARD -->

            <a href="{{ route('admin.dashboard') }}"
               class="block px-4 py-3 rounded-lg
                      hover:bg-[#C9A227]">

                Dashboard

            </a>



            <!-- BERITA -->

            <a href="{{ route('admin.informasi.index') }}"
               class="block px-4 py-3 rounded-lg
                      hover:bg-[#C9A227]">

                Berita

            </a>



            <!-- KEGIATAN -->

            <a href="{{ route('admin.kegiatan.index') }}"
               class="block px-4 py-3 rounded-lg
                      hover:bg-[#C9A227]">

                Kegiatan

            </a>



            <!-- AGENDA -->

            <a href="{{ route('admin.agenda.index') }}"
               class="block px-4 py-3 rounded-lg
                      hover:bg-[#C9A227]">

                Agenda

            </a>



            <!-- PROFILE KARYAWAN -->

            <a href="{{ route('admin.profil.index') }}"
   class="block px-4 py-3 rounded-lg
          hover:bg-[#C9A227]">

                Profile Karyawan

            </a>



            <!-- SURVEY -->

            <a href="{{ route('admin.survey.index') }}"
               class="block px-4 py-3 rounded-lg
                      hover:bg-[#C9A227]">

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
                    class="w-full text-left px-4 py-3
                           rounded-lg hover:bg-red-600">

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

        <header class="bg-white border-b
                       px-8 py-5
                       flex justify-between items-center">

            <div>

                <h2 class="text-2xl font-bold
                           text-gray-800">

                    Dashboard

                </h2>

                <p class="text-gray-500 text-sm">

                    Kelola informasi E-Government

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


            <!-- WELCOME -->

            <div class="mb-8">

                <h3 class="text-xl font-semibold">

                    Selamat datang,
                    {{ auth()->user()->name }}

                </h3>

                <p class="text-gray-500 mt-1">

                    Berikut ringkasan pengelolaan website
                    E-Government.

                </p>

            </div>



            <!-- ========================= -->
            <!-- STATISTICS -->
            <!-- ========================= -->

            <div class="grid grid-cols-1
                        md:grid-cols-2
                        xl:grid-cols-5
                        gap-6">


                <!-- BERITA -->

                <div class="bg-white rounded-2xl
                            shadow-sm p-6">

                    <p class="text-gray-500">

                        Total Berita

                    </p>

                    <h3 class="text-3xl font-bold
                               text-blue-700 mt-2">

                        {{ $jumlahBerita }}

                    </h3>

                </div>



                <!-- KEGIATAN -->

                <div class="bg-white rounded-2xl
                            shadow-sm p-6">

                    <p class="text-gray-500">

                        Total Kegiatan

                    </p>

                    <h3 class="text-3xl font-bold
                               text-green-600 mt-2">

                        {{ $jumlahKegiatan }}

                    </h3>

                </div>



                <!-- AGENDA -->

                <div class="bg-white rounded-2xl
                            shadow-sm p-6">

                    <p class="text-gray-500">

                        Agenda Mendatang

                    </p>

                    <h3 class="text-3xl font-bold
                               text-orange-500 mt-2">

                        {{ $jumlahAgenda }}

                    </h3>

                </div>



                <!-- SURVEY -->

                <div class="bg-white rounded-2xl
                            shadow-sm p-6">

                    <p class="text-gray-500">

                        Total Survey

                    </p>

                    <h3 class="text-3xl font-bold
                               text-[#005C3B] mt-2">

                        {{ $jumlahSurvey }}

                    </h3>

                </div>



                <!-- RATING -->

                <div class="bg-white rounded-2xl
                            shadow-sm p-6">

                    <p class="text-gray-500">

                        Rata-rata Rating

                    </p>


                    <div class="flex items-center
                                gap-2 mt-2">

                        <span class="text-2xl">
                            ⭐
                        </span>

                        <h3 class="text-3xl font-bold
                                   text-[#C9A227]">

                            {{ $rataRating ? number_format($rataRating, 1) : '0.0' }}

                        </h3>

                        <span class="text-gray-400
                                     text-sm">

                            / 5

                        </span>

                    </div>

                </div>


            </div>



            <!-- ========================= -->
            <!-- SURVEY TERBARU -->
            <!-- ========================= -->

            <div class="bg-white rounded-2xl
                        shadow-sm mt-8
                        overflow-hidden">


                <!-- HEADER TABLE -->

                <div class="px-6 py-5
                            border-b
                            flex flex-col
                            md:flex-row
                            md:items-center
                            md:justify-between
                            gap-3">

                    <div>

                        <h3 class="font-semibold
                                   text-lg">

                            Survey Kepuasan Masyarakat

                        </h3>

                        <p class="text-gray-500
                                  text-sm mt-1">

                            Data survey masyarakat terbaru.

                        </p>

                    </div>


                    <a href="{{ route('admin.survey.index') }}"
                       class="inline-flex
                              items-center
                              justify-center
                              bg-[#005C3B]
                              hover:bg-[#00482F]
                              text-white
                              px-5 py-2.5
                              rounded-lg
                              text-sm
                              font-semibold
                              transition">

                        Lihat Semua Survey

                    </a>

                </div>



                <!-- TABLE -->

                <div class="overflow-x-auto">

                    <table class="w-full">


                        <thead class="bg-gray-50">

                            <tr>

                                <th class="px-6 py-4
                                           text-left
                                           text-sm
                                           font-semibold
                                           text-gray-600">

                                    No

                                </th>


                                <th class="px-6 py-4
                                           text-left
                                           text-sm
                                           font-semibold
                                           text-gray-600">

                                    Nama

                                </th>


                                <th class="px-6 py-4
                                           text-left
                                           text-sm
                                           font-semibold
                                           text-gray-600">

                                    Domisili

                                </th>


                                <th class="px-6 py-4
                                           text-left
                                           text-sm
                                           font-semibold
                                           text-gray-600">

                                    Rating

                                </th>


                                <th class="px-6 py-4
                                           text-left
                                           text-sm
                                           font-semibold
                                           text-gray-600">

                                    Saran

                                </th>


                                <th class="px-6 py-4
                                           text-left
                                           text-sm
                                           font-semibold
                                           text-gray-600">

                                    Tanggal

                                </th>

                            </tr>

                        </thead>



                        <tbody class="divide-y">


                            @forelse($surveyTerbaru as $index => $item)

                                <tr class="hover:bg-gray-50">


                                    <!-- NO -->

                                    <td class="px-6 py-4
                                               text-sm
                                               text-gray-500">

                                        {{ $index + 1 }}

                                    </td>



                                    <!-- NAMA -->

                                    <td class="px-6 py-4">

                                        <p class="font-semibold
                                                  text-gray-800">

                                            {{ $item->nama }}

                                        </p>


                                        @if($item->no_wa)

                                            <p class="text-xs
                                                      text-gray-400
                                                      mt-1">

                                                {{ $item->no_wa }}

                                            </p>

                                        @endif

                                    </td>



                                    <!-- DOMISILI -->

                                    <td class="px-6 py-4
                                               text-sm
                                               text-gray-600">

                                        {{ $item->alamat }}

                                    </td>



                                    <!-- RATING -->

                                    <td class="px-6 py-4
                                               whitespace-nowrap">

                                        <span class="text-[#C9A227]
                                                     tracking-wide">

                                            {{ str_repeat('★', $item->rating) }}

                                        </span>

                                        <span class="text-xs
                                                     text-gray-400">

                                            ({{ $item->rating }}/5)

                                        </span>

                                    </td>



                                    <!-- SARAN -->

                                    <td class="px-6 py-4
                                               max-w-xs">

                                        <p class="text-sm
                                                  text-gray-600
                                                  line-clamp-2">

                                            {{ $item->pesan }}

                                        </p>

                                    </td>



                                    <!-- TANGGAL -->

                                    <td class="px-6 py-4
                                               text-sm
                                               text-gray-500
                                               whitespace-nowrap">

                                        {{ $item->created_at->format('d M Y') }}

                                    </td>


                                </tr>


                            @empty

                                <tr>

                                    <td colspan="6"
                                        class="px-6 py-12
                                               text-center">

                                        <div class="text-4xl mb-3">
                                            📭
                                        </div>

                                        <p class="font-semibold
                                                  text-gray-700">

                                            Belum ada survey

                                        </p>

                                        <p class="text-sm
                                                  text-gray-500
                                                  mt-1">

                                            Data survey masyarakat
                                            akan muncul di sini.

                                        </p>

                                    </td>

                                </tr>

                            @endforelse


                        </tbody>

                    </table>

                </div>



                <!-- FOOTER TABLE -->

                @if($jumlahSurvey > 0)

                    <div class="px-6 py-4
                                border-t
                                bg-gray-50
                                flex flex-col
                                sm:flex-row
                                sm:items-center
                                sm:justify-between
                                gap-3">

                        <p class="text-sm
                                  text-gray-500">

                            Menampilkan
                            {{ min(5, $jumlahSurvey) }}
                            survey terbaru dari
                            {{ $jumlahSurvey }}
                            responden.

                        </p>


                        <a href="{{ route('admin.survey.index') }}"
                           class="text-[#005C3B]
                                  hover:text-[#C9A227]
                                  font-semibold
                                  text-sm">

                            Kelola Data Survey →

                        </a>

                    </div>

                @endif


            </div>


        </section>


    </main>


</div>


</body>

</html>