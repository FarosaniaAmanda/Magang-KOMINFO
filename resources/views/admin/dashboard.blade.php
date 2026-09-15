<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #005C3B;
            border-radius: 10px;
        }

        /* Mencegah horizontal overflow */
        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        /* Sidebar transition */
        #sidebar {
            transition: transform 0.3s ease-in-out;
        }

        #sidebarOverlay {
            transition: opacity 0.3s ease-in-out;
        }
    </style>

</head>


<body class="bg-gray-100">


<!-- ===================================================== -->
<!-- MOBILE OVERLAY -->
<!-- ===================================================== -->

<div id="sidebarOverlay"
     class="fixed inset-0 bg-black/50 z-40 hidden opacity-0 md:hidden"
     onclick="closeSidebar()">
</div>



<!-- ===================================================== -->
<!-- SIDEBAR -->
<!-- ===================================================== -->

<aside id="sidebar"
       class="w-64 bg-[#005C3B] text-white
              fixed left-0 top-0 bottom-0
              z-50 flex flex-col
              -translate-x-full md:translate-x-0">

    <!-- LOGO / HEADER SIDEBAR -->

    <div class="px-5 py-6 border-b border-white/10">

        <h1 class="text-xl font-bold">
            E-Government
        </h1>

        <p class="text-sm text-white/70 mt-1">
            Admin Panel
        </p>

    </div>



    <!-- NAVIGATION -->

    <nav class="px-3 py-5 space-y-1 flex-1 overflow-y-auto">


        <!-- DASHBOARD -->

        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center gap-3
                  px-4 py-3
                  rounded-xl
                  bg-white/10
                  hover:bg-[#C9A227]
                  transition">

            

            <span>
                Dashboard
            </span>

        </a>



        <!-- BERITA -->

        <a href="{{ route('admin.informasi.index') }}"
           class="flex items-center gap-3
                  px-4 py-3
                  rounded-xl
                  hover:bg-[#C9A227]
                  transition">

    

            <span>
                Berita
            </span>

        </a>



        <!-- KEGIATAN -->

        <a href="{{ route('admin.kegiatan.index') }}"
           class="flex items-center gap-3
                  px-4 py-3
                  rounded-xl
                  hover:bg-[#C9A227]
                  transition">

           

            <span>
                Kegiatan
            </span>

        </a>



        <!-- AGENDA -->

        <a href="{{ route('admin.agenda.index') }}"
           class="flex items-center gap-3
                  px-4 py-3
                  rounded-xl
                  hover:bg-[#C9A227]
                  transition">

            
            <span>
                Agenda
            </span>

        </a>



        <!-- PROFILE KARYAWAN -->

        <a href="{{ route('admin.profil.index') }}"
           class="flex items-center gap-3
                  px-4 py-3
                  rounded-xl
                  hover:bg-[#C9A227]
                  transition">

            

            <span>
                Profile Karyawan
            </span>

        </a>



        <!-- SURVEY -->

        <a href="{{ route('admin.survey.index') }}"
           class="flex items-center gap-3
                  px-4 py-3
                  rounded-xl
                  hover:bg-[#C9A227]
                  transition">

            

            <span>
                Survey Kepuasan
            </span>

        </a>

    </nav>



    <!-- LOGOUT -->

    <div class="p-3 border-t border-white/10">

        <form method="POST"
              action="{{ route('admin.logout') }}">

            @csrf

            <button
                type="submit"
                class="w-full
                       flex items-center gap-3
                       px-4 py-3
                       rounded-xl
                       text-left
                       hover:bg-red-600
                       transition">

                

                <span>
                    Logout
                </span>

            </button>

        </form>

    </div>

</aside>



<!-- ===================================================== -->
<!-- MAIN -->
<!-- ===================================================== -->

<main class="md:ml-64 min-h-screen">


    <!-- ================================================= -->
    <!-- HEADER -->
    <!-- ================================================= -->

    <header class="bg-white border-b
                   px-4 sm:px-6 lg:px-8
                   py-4 sm:py-5
                   sticky top-0 z-30">

        <div class="flex items-center justify-between gap-4">


            <!-- LEFT -->

            <div class="flex items-center gap-3 min-w-0">


                <!-- MOBILE MENU BUTTON -->

                <button
                    onclick="openSidebar()"
                    class="md:hidden
                           flex-shrink-0
                           w-10 h-10
                           rounded-xl
                           bg-[#005C3B]
                           text-white
                           flex items-center justify-center
                           hover:bg-[#00482F]
                           transition">

                    ☰

                </button>



                <!-- TITLE -->

                <div class="min-w-0">

                    <h2 class="text-xl sm:text-2xl
                               font-bold
                               text-gray-800
                               truncate">

                        Dashboard

                    </h2>

                    <p class="text-gray-500
                              text-xs sm:text-sm
                              mt-0.5
                              truncate">

                        Kelola informasi E-Government

                    </p>

                </div>

            </div>



            <!-- USER -->

            <div class="text-right
                        flex-shrink-0
                        hidden sm:block">

                <p class="font-semibold
                          text-gray-800
                          text-sm sm:text-base">

                    {{ auth()->user()->name }}

                </p>

                <p class="text-xs sm:text-sm
                          text-gray-500">

                    Administrator

                </p>

            </div>


        </div>

    </header>



    <!-- ================================================= -->
    <!-- CONTENT -->
    <!-- ================================================= -->

    <section class="p-4 sm:p-6 lg:p-8">


        <!-- ================================================= -->
        <!-- WELCOME -->
        <!-- ================================================= -->

        <div class="mb-6 sm:mb-8">

            <h3 class="text-lg sm:text-xl
                       font-semibold
                       text-gray-800">

                Selamat datang,
                {{ auth()->user()->name }}

            </h3>

            <p class="text-gray-500
                      text-sm sm:text-base
                      mt-1">

                Berikut ringkasan pengelolaan website
                E-Government.

            </p>

        </div>



        <!-- ================================================= -->
        <!-- STATISTICS -->
        <!-- ================================================= -->

        <div class="grid
                    grid-cols-1
                    sm:grid-cols-2
                    xl:grid-cols-5
                    gap-4 sm:gap-5 lg:gap-6">


            <!-- BERITA -->

            <div class="bg-white
                        rounded-2xl
                        shadow-sm
                        p-5 sm:p-6
                        border border-gray-100">

                <div class="flex items-center
                            justify-between gap-3">

                    <div>

                        <p class="text-gray-500
                                  text-sm">

                            Total Berita

                        </p>

                        <h3 class="text-3xl
                                   font-bold
                                   text-blue-700
                                   mt-2">

                            {{ $jumlahBerita }}

                        </h3>

                    </div>

                    <div class="w-11 h-11
                                rounded-xl
                                bg-blue-50
                                flex items-center
                                justify-center
                                text-xl">

                        📰

                    </div>

                </div>

            </div>



            <!-- KEGIATAN -->

            <div class="bg-white
                        rounded-2xl
                        shadow-sm
                        p-5 sm:p-6
                        border border-gray-100">

                <div class="flex items-center
                            justify-between gap-3">

                    <div>

                        <p class="text-gray-500
                                  text-sm">

                            Total Kegiatan

                        </p>

                        <h3 class="text-3xl
                                   font-bold
                                   text-green-600
                                   mt-2">

                            {{ $jumlahKegiatan }}

                        </h3>

                    </div>

                    <div class="w-11 h-11
                                rounded-xl
                                bg-green-50
                                flex items-center
                                justify-center
                                text-xl">

                        📋

                    </div>

                </div>

            </div>



            <!-- AGENDA -->

            <div class="bg-white
                        rounded-2xl
                        shadow-sm
                        p-5 sm:p-6
                        border border-gray-100">

                <div class="flex items-center
                            justify-between gap-3">

                    <div>

                        <p class="text-gray-500
                                  text-sm">

                            Total Agenda

                        </p>

                        <h3 class="text-3xl
                                   font-bold
                                   text-orange-500
                                   mt-2">

                            {{ $jumlahAgenda }}

                        </h3>

                    </div>

                    <div class="w-11 h-11
                                rounded-xl
                                bg-orange-50
                                flex items-center
                                justify-center
                                text-xl">

                        📅

                    </div>

                </div>

            </div>



            <!-- SURVEY -->

            <div class="bg-white
                        rounded-2xl
                        shadow-sm
                        p-5 sm:p-6
                        border border-gray-100">

                <div class="flex items-center
                            justify-between gap-3">

                    <div>

                        <p class="text-gray-500
                                  text-sm">

                            Total Survey

                        </p>

                        <h3 class="text-3xl
                                   font-bold
                                   text-[#005C3B]
                                   mt-2">

                            {{ $jumlahSurvey }}

                        </h3>

                    </div>

                    <div class="w-11 h-11
                                rounded-xl
                                bg-green-50
                                flex items-center
                                justify-center
                                text-xl">

                        📊

                    </div>

                </div>

            </div>



            <!-- RATING -->

            <div class="bg-white
                        rounded-2xl
                        shadow-sm
                        p-5 sm:p-6
                        border border-gray-100">

                <div class="flex items-center
                            justify-between gap-3">

                    <div>

                        <p class="text-gray-500
                                  text-sm">

                            Rata-rata Rating

                        </p>

                        <div class="flex items-center
                                    gap-2 mt-2">

                            <span class="text-xl sm:text-2xl">
                                ⭐
                            </span>

                            <h3 class="text-2xl sm:text-3xl
                                       font-bold
                                       text-[#C9A227]">

                                {{ $rataRating ? number_format($rataRating, 1) : '0.0' }}

                            </h3>

                            <span class="text-gray-400
                                         text-xs sm:text-sm">

                                / 5

                            </span>

                        </div>

                    </div>

                </div>

            </div>


        </div>



        <!-- ================================================= -->
        <!-- SURVEY TERBARU -->
        <!-- ================================================= -->

        <div class="bg-white
                    rounded-2xl
                    shadow-sm
                    mt-6 sm:mt-8
                    overflow-hidden
                    border border-gray-100">


            <!-- TABLE HEADER -->

            <div class="px-4 sm:px-6
                        py-5
                        border-b">

                <div class="flex flex-col
                            lg:flex-row
                            lg:items-center
                            lg:justify-between
                            gap-4">


                    <!-- TITLE -->

                    <div>

                        <h3 class="font-semibold
                                   text-base sm:text-lg
                                   text-gray-800">

                            Survey Kepuasan Masyarakat

                        </h3>

                        <p class="text-gray-500
                                  text-sm
                                  mt-1">

                            Data survey masyarakat terbaru.

                        </p>

                    </div>



                    <!-- BUTTON -->

                    <a href="{{ route('admin.survey.index') }}"
                       class="w-full sm:w-auto
                              inline-flex
                              items-center
                              justify-center
                              bg-[#005C3B]
                              hover:bg-[#00482F]
                              text-white
                              px-5 py-3
                              rounded-xl
                              text-sm
                              font-semibold
                              transition">

                        Lihat Semua Survey

                    </a>


                </div>

            </div>



            <!-- ================================================= -->
            <!-- TABLE -->
            <!-- ================================================= -->

            <div class="overflow-x-auto">

                <table class="w-full min-w-[800px]">

                    <thead class="bg-gray-50">

                        <tr>

                            <th class="px-5 sm:px-6 py-4
                                       text-left
                                       text-xs sm:text-sm
                                       font-semibold
                                       text-gray-600">

                                No

                            </th>


                            <th class="px-5 sm:px-6 py-4
                                       text-left
                                       text-xs sm:text-sm
                                       font-semibold
                                       text-gray-600">

                                Nama

                            </th>


                            <th class="px-5 sm:px-6 py-4
                                       text-left
                                       text-xs sm:text-sm
                                       font-semibold
                                       text-gray-600">

                                Domisili

                            </th>


                            <th class="px-5 sm:px-6 py-4
                                       text-left
                                       text-xs sm:text-sm
                                       font-semibold
                                       text-gray-600">

                                Rating

                            </th>


                            <th class="px-5 sm:px-6 py-4
                                       text-left
                                       text-xs sm:text-sm
                                       font-semibold
                                       text-gray-600">

                                Saran

                            </th>


                            <th class="px-5 sm:px-6 py-4
                                       text-left
                                       text-xs sm:text-sm
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

                                <td class="px-5 sm:px-6 py-4
                                           text-sm
                                           text-gray-500">

                                    {{ $index + 1 }}

                                </td>



                                <!-- NAMA -->

                                <td class="px-5 sm:px-6 py-4">

                                    <p class="font-semibold
                                              text-gray-800
                                              text-sm">

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

                                <td class="px-5 sm:px-6 py-4
                                           text-sm
                                           text-gray-600">

                                    {{ $item->alamat }}

                                </td>



                                <!-- RATING -->

                                <td class="px-5 sm:px-6 py-4
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

                                <td class="px-5 sm:px-6 py-4
                                           max-w-xs">

                                    <p class="text-sm
                                              text-gray-600">

                                        {{ $item->pesan }}

                                    </p>

                                </td>



                                <!-- TANGGAL -->

                                <td class="px-5 sm:px-6 py-4
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



            <!-- ================================================= -->
            <!-- FOOTER TABLE -->
            <!-- ================================================= -->

            @if($jumlahSurvey > 0)

                <div class="px-4 sm:px-6
                            py-4
                            border-t
                            bg-gray-50">

                    <div class="flex flex-col
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

                </div>

            @endif


        </div>


    </section>


</main>



<!-- ===================================================== -->
<!-- JAVASCRIPT MOBILE SIDEBAR -->
<!-- ===================================================== -->

<script>

    function openSidebar() {

        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');

        sidebar.classList.remove('-translate-x-full');

        overlay.classList.remove('hidden');

        setTimeout(() => {
            overlay.classList.remove('opacity-0');
        }, 10);

        document.body.classList.add('overflow-hidden');

    }


    function closeSidebar() {

        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');

        sidebar.classList.add('-translate-x-full');

        overlay.classList.add('opacity-0');

        setTimeout(() => {
            overlay.classList.add('hidden');
        }, 300);

        document.body.classList.remove('overflow-hidden');

    }


    /* Tutup sidebar ketika menu diklik di HP */

    document.querySelectorAll('#sidebar a').forEach(function(link) {

        link.addEventListener('click', function() {

            if (window.innerWidth < 768) {
                closeSidebar();
            }

        });

    });


    /* Jika ukuran layar berubah ke PC */

    window.addEventListener('resize', function() {

        if (window.innerWidth >= 768) {

            document.getElementById('sidebar')
                .classList.remove('-translate-x-full');

            document.getElementById('sidebarOverlay')
                .classList.add('hidden');

            document.body.classList.remove('overflow-hidden');

        } else {

            document.getElementById('sidebar')
                .classList.add('-translate-x-full');

        }

    });

</script>


</body>

</html>