<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Admin - E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        /* Supaya teks panjang tidak merusak layout */
        .break-text {
            overflow-wrap: anywhere;
            word-break: break-word;
        }

        /* Scroll tabel hanya pada tabel */
        .table-scroll {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-scroll::-webkit-scrollbar {
            height: 6px;
        }
    </style>
</head>


<body class="bg-gray-100">


<div class="min-h-screen">


    <!-- =====================================================
         SIDEBAR DESKTOP
    ====================================================== -->

    <aside id="sidebar"
           class="fixed
                  left-0
                  top-0
                  bottom-0
                  z-50
                  w-64
                  bg-[#005C3B]
                  text-white
                  transform
                  -translate-x-full
                  lg:translate-x-0
                  transition-transform
                  duration-300
                  flex
                  flex-col">

        <!-- LOGO / TITLE -->

        <div class="p-5 sm:p-6">

            <h1 class="text-xl font-bold">
                E-Government
            </h1>

            <p class="text-sm mt-1 text-white/80">
                Admin Panel
            </p>

        </div>


        <!-- MENU -->

        <nav class="px-4 space-y-2 flex-1">

            <!-- DASHBOARD -->

            <a href="{{ route('admin.dashboard') }}"
               class="block
                      px-4 py-3
                      rounded-lg
                      hover:bg-[#C9A227]
                      transition">

                Dashboard

            </a>


            <!-- BERITA -->

            <a href="{{ route('admin.informasi.index') }}"
               class="block
                      px-4 py-3
                      rounded-lg
                      hover:bg-[#C9A227]
                      transition">

                Berita

            </a>


            <!-- KEGIATAN -->

            <a href="{{ route('admin.kegiatan.index') }}"
               class="block
                      px-4 py-3
                      rounded-lg
                      hover:bg-[#C9A227]
                      transition">

                Kegiatan

            </a>


            <!-- AGENDA -->

            <a href="{{ route('admin.agenda.index') }}"
               class="block
                      px-4 py-3
                      rounded-lg
                      hover:bg-[#C9A227]
                      transition">

                Agenda

            </a>


            <!-- PROFIL -->

            <a href="{{ route('admin.profil.index') }}"
               class="block
                      px-4 py-3
                      rounded-lg
                      bg-[#C9A227]
                      transition">

                Profil

            </a>


            <!-- SURVEY -->

            <a href="{{ route('admin.survey.index') }}"
               class="block
                      px-4 py-3
                      rounded-lg
                      hover:bg-[#C9A227]
                      transition">

                Survey Kepuasan

            </a>

        </nav>


        <!-- LOGOUT -->

        <div class="p-4 sm:p-6">

            <form method="POST"
                  action="{{ route('admin.logout') }}">

                @csrf

                <button type="submit"
                        class="w-full
                               text-left
                               px-4 py-3
                               rounded-lg
                               hover:bg-red-600
                               transition">

                    Logout

                </button>

            </form>

        </div>

    </aside>



    <!-- =====================================================
         OVERLAY MOBILE
    ====================================================== -->

    <div id="sidebarOverlay"
         class="fixed
                inset-0
                bg-black/50
                z-40
                hidden
                lg:hidden"
         onclick="closeSidebar()">
    </div>



    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="lg:ml-64 min-h-screen">


        <!-- =================================================
             HEADER
        ================================================== -->

        <header class="bg-white
                       border-b
                       px-4 sm:px-6 lg:px-8
                       py-4 sm:py-5">

            <div class="flex
                        items-center
                        justify-between
                        gap-4">


                <!-- HAMBURGER MOBILE -->

                <button type="button"
                        onclick="openSidebar()"
                        class="lg:hidden
                               shrink-0
                               w-10 h-10
                               rounded-lg
                               bg-[#005C3B]
                               text-white
                               flex
                               items-center
                               justify-center
                               shadow-sm">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-5 h-5"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>

                    </svg>

                </button>


                <!-- TITLE -->

                <div class="flex-1 min-w-0">

                    <h2 class="text-xl sm:text-2xl
                               font-bold
                               text-gray-800">

                        Profil

                    </h2>

                    <p class="text-xs sm:text-sm
                              text-gray-500
                              mt-1
                              break-text">

                        Kelola profil Kepala Dinas dan Karyawan

                    </p>

                </div>


                <!-- USER -->

                <div class="hidden sm:block text-right shrink-0">

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



        <!-- =================================================
             CONTENT
        ================================================== -->

        <section class="p-4 sm:p-6 lg:p-8">


            <!-- =================================================
                 SUCCESS ALERT
            ================================================== -->

            @if(session('success'))

                <div class="mb-5 sm:mb-6
                            bg-green-100
                            border border-green-300
                            text-green-800
                            px-4 sm:px-5
                            py-3 sm:py-4
                            rounded-xl
                            text-sm sm:text-base
                            break-text">

                    {{ session('success') }}

                </div>

            @endif



            <!-- =================================================
                 PAGE INTRO
            ================================================== -->

            <div class="mb-6 sm:mb-8">

                <h3 class="text-lg sm:text-xl
                           font-semibold
                           text-gray-800">

                    Pengelolaan Profil

                </h3>

                <p class="text-sm sm:text-base
                          text-gray-500
                          mt-1
                          leading-relaxed">

                    Kelola informasi Kepala Dinas dan data Karyawan Diskominfotik.

                </p>

            </div>



            <!-- =================================================
                 KEPALA DINAS
            ================================================== -->

            <div class="bg-white
                        rounded-xl sm:rounded-2xl
                        shadow-sm
                        overflow-hidden
                        mb-6 sm:mb-8">


                <!-- HEADER CARD -->

                <div class="px-4 sm:px-6
                            py-4 sm:py-5
                            border-b
                            flex
                            flex-col
                            sm:flex-row
                            sm:items-center
                            sm:justify-between
                            gap-4">

                    <div class="min-w-0">

                        <h3 class="text-base sm:text-lg
                                   font-semibold
                                   text-gray-800">

                            Profil Kepala Dinas

                        </h3>

                        <p class="text-xs sm:text-sm
                                  text-gray-500
                                  mt-1
                                  break-text">

                            Informasi Kepala Dinas Diskominfotik.

                        </p>

                    </div>


                    <!-- BUTTON -->

                    <a href="{{ route('admin.profil.kepala-dinas') }}"
                       class="w-full sm:w-auto
                              shrink-0
                              inline-flex
                              items-center
                              justify-center
                              bg-[#005C3B]
                              hover:bg-[#00482F]
                              text-white
                              px-4 sm:px-5
                              py-2.5
                              rounded-lg
                              text-xs sm:text-sm
                              font-semibold
                              transition
                              text-center">

                        @if($kepalaDinas)

                            Edit Profil

                        @else

                            + Tambah Profil Kepala Dinas

                        @endif

                    </a>

                </div>



                <!-- CONTENT -->

                <div class="p-4 sm:p-6">

                    @if($kepalaDinas)


                        <!-- FOTO + DATA -->

                        <div class="flex
                                    flex-col
                                    sm:flex-row
                                    gap-5 sm:gap-6">


                            <!-- FOTO -->

                            <div class="flex-shrink-0">

                                @if($kepalaDinas->foto)

                                    <img
                                        src="{{ asset('storage/' . $kepalaDinas->foto) }}"
                                        alt="Foto Kepala Dinas"
                                        class="w-28 h-28
                                               sm:w-36 sm:h-36
                                               lg:w-40 lg:h-40
                                               object-cover
                                               rounded-2xl
                                               border">

                                @else

                                    <div class="w-28 h-28
                                                sm:w-36 sm:h-36
                                                lg:w-40 lg:h-40
                                                bg-gray-100
                                                rounded-2xl
                                                flex
                                                items-center
                                                justify-center">

                                        <span class="text-gray-400
                                                     text-xs sm:text-sm
                                                     text-center
                                                     px-2">

                                            Belum ada foto

                                        </span>

                                    </div>

                                @endif

                            </div>



                            <!-- DATA -->

                            <div class="flex-1 min-w-0">

                                <h4 class="text-xl sm:text-2xl
                                           font-bold
                                           text-gray-800
                                           break-text">

                                    {{ $kepalaDinas->nama }}

                                </h4>


                                @if($kepalaDinas->nip)

                                    <p class="text-sm sm:text-base
                                              text-gray-500
                                              mt-2
                                              break-text">

                                        NIP: {{ $kepalaDinas->nip }}

                                    </p>

                                @endif


                                @if($kepalaDinas->jabatan)

                                    <p class="text-sm sm:text-base
                                              text-gray-600
                                              font-medium
                                              mt-1
                                              break-text">

                                        {{ $kepalaDinas->jabatan }}

                                    </p>

                                @endif


                                @if($kepalaDinas->deskripsi)

                                    <div class="mt-4 sm:mt-5">

                                        <p class="text-sm
                                                  font-semibold
                                                  text-gray-700
                                                  mb-2">

                                            Deskripsi

                                        </p>

                                        <p class="text-sm sm:text-base
                                                  text-gray-600
                                                  leading-relaxed
                                                  break-text">

                                            {{ $kepalaDinas->deskripsi }}

                                        </p>

                                    </div>

                                @endif

                            </div>

                        </div>


                    @else


                        <!-- DATA KOSONG -->

                        <div class="text-center
                                    py-8 sm:py-10">

                            <div class="text-4xl sm:text-5xl
                                        mb-4">

                                👤

                            </div>

                            <h4 class="font-semibold
                                       text-gray-700
                                       text-sm sm:text-base">

                                Belum ada data Kepala Dinas

                            </h4>

                            <p class="text-xs sm:text-sm
                                      text-gray-500
                                      mt-1">

                                Silakan tambahkan informasi Kepala Dinas.

                            </p>

                        </div>

                    @endif

                </div>

            </div>



            <!-- =================================================
                 KARYAWAN
            ================================================== -->

            <div class="bg-white
                        rounded-xl sm:rounded-2xl
                        shadow-sm
                        overflow-hidden">


                <!-- HEADER -->

                <div class="px-4 sm:px-6
                            py-4 sm:py-5
                            border-b
                            flex
                            flex-col
                            sm:flex-row
                            sm:items-center
                            sm:justify-between
                            gap-3">


                    <div class="min-w-0">

                        <h3 class="text-base sm:text-lg
                                   font-semibold
                                   text-gray-800">

                            Profil Karyawan

                        </h3>

                        <p class="text-xs sm:text-sm
                                  text-gray-500
                                  mt-1
                                  break-text">

                            Kelola data karyawan berdasarkan bidang.

                        </p>

                    </div>


                    <!-- TAMBAH KARYAWAN -->

                    <a href="{{ route('admin.profil.karyawan.create') }}"
                       class="w-full sm:w-auto
                              shrink-0
                              inline-flex
                              items-center
                              justify-center
                              bg-[#005C3B]
                              hover:bg-[#00482F]
                              text-white
                              px-4 sm:px-5
                              py-2.5
                              rounded-lg
                              text-xs sm:text-sm
                              font-semibold
                              transition">

                        + Tambah Karyawan

                    </a>

                </div>



                <!-- INFO TABLE MOBILE -->

                <div class="px-4 sm:px-6
                            pt-4
                            lg:hidden">

                    <div class="bg-green-50
                                border border-green-100
                                rounded-lg
                                px-3 py-2.5">

                        <p class="text-xs
                                  text-green-700">

                            ↔ Geser tabel ke kiri/kanan untuk melihat seluruh data.

                        </p>

                    </div>

                </div>



                <!-- =================================================
                     TABLE
                ================================================== -->

                <div class="table-scroll w-full">

                    <table class="w-full min-w-[900px]">

                        <thead class="bg-gray-50">

                            <tr>

                                <th class="px-4 sm:px-6
                                           py-4
                                           text-left
                                           text-xs sm:text-sm
                                           font-semibold
                                           text-gray-600
                                           whitespace-nowrap">

                                    No

                                </th>


                                <th class="px-4 sm:px-6
                                           py-4
                                           text-left
                                           text-xs sm:text-sm
                                           font-semibold
                                           text-gray-600
                                           whitespace-nowrap">

                                    Foto

                                </th>


                                <th class="px-4 sm:px-6
                                           py-4
                                           text-left
                                           text-xs sm:text-sm
                                           font-semibold
                                           text-gray-600
                                           whitespace-nowrap">

                                    Nama

                                </th>


                                <th class="px-4 sm:px-6
                                           py-4
                                           text-left
                                           text-xs sm:text-sm
                                           font-semibold
                                           text-gray-600
                                           whitespace-nowrap">

                                    NIP

                                </th>


                                <th class="px-4 sm:px-6
                                           py-4
                                           text-left
                                           text-xs sm:text-sm
                                           font-semibold
                                           text-gray-600
                                           whitespace-nowrap">

                                    Jabatan

                                </th>


                                <th class="px-4 sm:px-6
                                           py-4
                                           text-left
                                           text-xs sm:text-sm
                                           font-semibold
                                           text-gray-600
                                           whitespace-nowrap">

                                    Bidang

                                </th>


                                <th class="px-4 sm:px-6
                                           py-4
                                           text-left
                                           text-xs sm:text-sm
                                           font-semibold
                                           text-gray-600
                                           whitespace-nowrap">

                                    Aksi

                                </th>

                            </tr>

                        </thead>



                        <tbody class="divide-y">

                            @forelse($karyawans as $index => $karyawan)

                                <tr class="hover:bg-gray-50">


                                    <!-- NO -->

                                    <td class="px-4 sm:px-6
                                               py-4
                                               text-sm
                                               text-gray-500">

                                        {{ $index + 1 }}

                                    </td>



                                    <!-- FOTO -->

                                    <td class="px-4 sm:px-6
                                               py-4">

                                        @if($karyawan->foto)

                                            <img
                                                src="{{ asset('storage/' . $karyawan->foto) }}"
                                                alt="Foto {{ $karyawan->nama }}"
                                                class="w-11 h-11
                                                       sm:w-12 sm:h-12
                                                       object-cover
                                                       rounded-full
                                                       border">

                                        @else

                                            <div class="w-11 h-11
                                                        sm:w-12 sm:h-12
                                                        bg-gray-100
                                                        rounded-full
                                                        flex
                                                        items-center
                                                        justify-center">

                                                <span class="text-gray-400
                                                             text-xs">

                                                    -

                                                </span>

                                            </div>

                                        @endif

                                    </td>



                                    <!-- NAMA -->

                                    <td class="px-4 sm:px-6
                                               py-4
                                               max-w-[220px]">

                                        <p class="font-semibold
                                                  text-gray-800
                                                  text-sm
                                                  break-text">

                                            {{ $karyawan->nama }}

                                        </p>

                                    </td>



                                    <!-- NIP -->

                                    <td class="px-4 sm:px-6
                                               py-4
                                               text-sm
                                               text-gray-600
                                               whitespace-nowrap">

                                        {{ $karyawan->nip ?? '-' }}

                                    </td>



                                    <!-- JABATAN -->

                                    <td class="px-4 sm:px-6
                                               py-4
                                               text-sm
                                               text-gray-600
                                               max-w-[220px]">

                                        <span class="break-text">

                                            {{ $karyawan->jabatan ?? '-' }}

                                        </span>

                                    </td>



                                    <!-- BIDANG -->

                                    <td class="px-4 sm:px-6
                                               py-4">

                                        @if($karyawan->bidang === 'IKP')

                                            <span class="inline-flex
                                                         px-3 py-1
                                                         rounded-full
                                                         text-xs
                                                         font-semibold
                                                         bg-blue-100
                                                         text-blue-700
                                                         whitespace-nowrap">

                                                IKP

                                            </span>


                                        @elseif($karyawan->bidang === 'E-Government')

                                            <span class="inline-flex
                                                         px-3 py-1
                                                         rounded-full
                                                         text-xs
                                                         font-semibold
                                                         bg-green-100
                                                         text-green-700
                                                         whitespace-nowrap">

                                                E-Government

                                            </span>


                                        @elseif($karyawan->bidang === 'Statistik')

                                            <span class="inline-flex
                                                         px-3 py-1
                                                         rounded-full
                                                         text-xs
                                                         font-semibold
                                                         bg-yellow-100
                                                         text-yellow-700
                                                         whitespace-nowrap">

                                                Statistik

                                            </span>


                                        @else

                                            <span class="inline-flex
                                                         px-3 py-1
                                                         rounded-full
                                                         text-xs
                                                         font-semibold
                                                         bg-gray-100
                                                         text-gray-700
                                                         whitespace-nowrap">

                                                {{ $karyawan->bidang }}

                                            </span>

                                        @endif

                                    </td>



                                    <!-- AKSI -->

                                    <td class="px-4 sm:px-6
                                               py-4">

                                        <div class="flex
                                                    items-center
                                                    gap-2
                                                    whitespace-nowrap">


                                            <!-- EDIT -->

                                            <a href="{{ route('admin.profil.karyawan.edit', $karyawan->id) }}"
                                               class="inline-flex
                                                      items-center
                                                      justify-center
                                                      bg-[#005C3B]
                                                      hover:bg-[#00482F]
                                                      text-white
                                                      px-3 py-2
                                                      rounded-lg
                                                      text-xs
                                                      font-semibold
                                                      transition">

                                                Edit

                                            </a>



                                            <!-- HAPUS -->

                                            <form method="POST"
                                                  action="{{ route('admin.profil.karyawan.destroy', $karyawan->id) }}"
                                                  onsubmit="return confirm('Yakin ingin menghapus data karyawan ini?');">

                                                @csrf

                                                @method('DELETE')

                                                <button type="submit"
                                                        class="inline-flex
                                                               items-center
                                                               justify-center
                                                               bg-red-500
                                                               hover:bg-red-600
                                                               text-white
                                                               px-3 py-2
                                                               rounded-lg
                                                               text-xs
                                                               font-semibold
                                                               transition">

                                                    Hapus

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>


                            @empty

                                <tr>

                                    <td colspan="7"
                                        class="px-6 py-12
                                               text-center">

                                        <div class="text-4xl
                                                    mb-3">

                                            👥

                                        </div>

                                        <p class="font-semibold
                                                  text-gray-700">

                                            Belum ada data karyawan

                                        </p>

                                        <p class="text-sm
                                                  text-gray-500
                                                  mt-1
                                                  mb-5">

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



<!-- =========================================================
     JAVASCRIPT SIDEBAR MOBILE
========================================================== -->

<script>

    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');


    function openSidebar() {

        sidebar.classList.remove('-translate-x-full');

        overlay.classList.remove('hidden');

        document.body.classList.add('overflow-hidden');

    }


    function closeSidebar() {

        sidebar.classList.add('-translate-x-full');

        overlay.classList.add('hidden');

        document.body.classList.remove('overflow-hidden');

    }


    /* Tutup sidebar setelah memilih menu di HP */

    document.querySelectorAll('#sidebar a').forEach(function(link) {

        link.addEventListener('click', function() {

            if (window.innerWidth < 1024) {

                closeSidebar();

            }

        });

    });


    /* Jika layar diperbesar kembali ke PC */

    window.addEventListener('resize', function() {

        if (window.innerWidth >= 1024) {

            overlay.classList.add('hidden');

            document.body.classList.remove('overflow-hidden');

        }

    });

</script>


</body>
</html>