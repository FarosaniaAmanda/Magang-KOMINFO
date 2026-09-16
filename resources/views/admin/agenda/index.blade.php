<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agenda - Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        .break-text {
            overflow-wrap: anywhere;
            word-break: break-word;
        }

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


<body class="bg-[#FAFAF7] text-slate-800">


    <!-- =====================================================
         SIDEBAR DESKTOP + MOBILE
    ====================================================== -->

    <aside
        id="sidebar"
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
               flex-col"
    >


        <!-- =================================================
             LOGO / TITLE
        ================================================== -->

        <div class="p-5 sm:p-6">

            <h1 class="text-xl font-bold">
                E-Government
            </h1>

            <p class="text-sm mt-1 text-white/80">
                Admin Panel
            </p>

        </div>



        <!-- =================================================
             MENU
        ================================================== -->

        <nav class="px-4 space-y-2 flex-1">


            <!-- DASHBOARD -->

            <a
                href="{{ route('admin.dashboard') }}"
                class="block
                       px-4 py-3
                       rounded-lg
                       hover:bg-[#C9A227]
                       transition"
            >

                Dashboard

            </a>



            <!-- BERITA -->

            <a
                href="{{ route('admin.informasi.index') }}"
                class="block
                       px-4 py-3
                       rounded-lg
                       hover:bg-[#C9A227]
                       transition"
            >

                Berita

            </a>



            <!-- KEGIATAN -->

            <a
                href="{{ route('admin.kegiatan.index') }}"
                class="block
                       px-4 py-3
                       rounded-lg
                       hover:bg-[#C9A227]
                       transition"
            >

                Kegiatan

            </a>



            <!-- AGENDA AKTIF -->

            <a
                href="{{ route('admin.agenda.index') }}"
                class="block
                       px-4 py-3
                       rounded-lg
                       bg-[#C9A227]
                       transition"
            >

                Agenda

            </a>



            <!-- PROFIL -->

            <a
                href="{{ route('admin.profil.index') }}"
                class="block
                       px-4 py-3
                       rounded-lg
                       hover:bg-[#C9A227]
                       transition"
            >

                Profil Karyawan

            </a>



            <!-- SURVEY -->

            <a
                href="{{ route('admin.survey.index') }}"
                class="block
                       px-4 py-3
                       rounded-lg
                       hover:bg-[#C9A227]
                       transition"
            >

                Survey Kepuasan

            </a>


        </nav>



        <!-- =================================================
             LOGOUT
        ================================================== -->

        <div class="p-4 sm:p-6">

            <form
                method="POST"
                action="{{ route('admin.logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="w-full
                           text-left
                           px-4 py-3
                           rounded-lg
                           hover:bg-red-600
                           transition"
                >

                    Logout

                </button>

            </form>

        </div>


    </aside>



    <!-- =====================================================
         OVERLAY MOBILE
    ====================================================== -->

    <div
        id="sidebarOverlay"
        class="fixed
               inset-0
               bg-black/50
               z-40
               hidden
               lg:hidden"
        onclick="closeSidebar()"
    >
    </div>



    <!-- =====================================================
         MAIN WRAPPER
         Memberikan ruang 256px untuk sidebar pada desktop
    ====================================================== -->

    <div class="relative z-0 lg:ml-64 min-h-screen min-w-0 w-full lg:w-[calc(100%-16rem)] flex flex-col overflow-x-hidden">


        <!-- =================================================
             HEADER MOBILE
        ================================================== -->

        <header
            class="lg:hidden
                   bg-white
                   border-b
                   border-slate-200
                   shadow-sm"
        >

            <div class="px-4 py-4">

                <div class="flex items-center gap-3">


                    <!-- HAMBURGER -->

                    <button
                        type="button"
                        onclick="openSidebar()"
                        class="shrink-0
                               w-10 h-10
                               rounded-lg
                               bg-[#005C3B]
                               text-white
                               flex
                               items-center
                               justify-center
                               shadow-sm
                               hover:bg-[#00482F]
                               transition"
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />

                        </svg>

                    </button>



                    <!-- TITLE MOBILE -->

                    <div class="min-w-0">

                        <p
                            class="text-xs
                                   font-semibold
                                   text-[#008C45]"
                        >

                            ADMIN E-GOVERNMENT

                        </p>


                        <h1
                            class="text-lg
                                   font-bold
                                   text-slate-800
                                   mt-0.5"
                        >

                            Agenda

                        </h1>

                    </div>

                </div>

            </div>

        </header>



        <!-- =====================================================
             KONTEN UTAMA
        ====================================================== -->

        <main 
    class="min-w-0 w-full
           px-4 sm:px-6 lg:px-8
           py-5 sm:py-8
           flex-1"
>

            <!-- =================================================
                 HEADER HALAMAN
            ================================================== -->

            <div
                class="flex
                       flex-col
                       lg:flex-row
                       lg:items-center
                       lg:justify-between
                       gap-5 sm:gap-6
                       mb-6 sm:mb-8"
            >


                <!-- JUDUL -->

                <div class="min-w-0">

                    <div
                        class="flex
                               flex-wrap
                               items-center
                               gap-2
                               mb-2"
                    >

                        <span
                            class="text-xs
                                   sm:text-sm
                                   font-semibold
                                   text-[#008C45]"
                        >

                            ADMIN E-GOVERNMENT

                        </span>

                    </div>


                    <h1
                        class="text-2xl
                               sm:text-3xl
                               lg:text-4xl
                               font-bold
                               text-slate-800
                               break-text"
                    >

                        Agenda

                    </h1>


                    <p
                        class="text-sm
                               sm:text-base
                               text-slate-500
                               mt-1
                               leading-relaxed
                               break-text"
                    >

                        Kelola agenda kegiatan Diskominfotik Kota Pasuruan.

                    </p>

                </div>



                <!-- =================================================
                     TOMBOL HEADER
                ================================================== -->

                <div
                    class="flex
                           flex-col
                           sm:flex-row
                           gap-2 sm:gap-3
                           w-full
                           lg:w-auto"
                >


                    <!-- DASHBOARD -->

                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="w-full
                               sm:w-auto
                               inline-flex
                               items-center
                               justify-center
                               gap-2
                               bg-white
                               hover:bg-green-50
                               text-slate-700
                               border
                               border-slate-200
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
                        href="{{ route('admin.agenda.create') }}"
                        class="w-full
                               sm:w-auto
                               inline-flex
                               items-center
                               justify-center
                               gap-2
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

                        Tambah Agenda

                    </a>

                </div>

            </div>



            <!-- =====================================================
                 PESAN SUKSES
            ====================================================== -->

            @if(session('success'))

                <div
                    class="mb-5 sm:mb-6
                           bg-green-50
                           border
                           border-green-200
                           text-green-700
                           px-4 sm:px-5
                           py-3 sm:py-4
                           rounded-xl
                           text-sm
                           break-text"
                >

                    {{ session('success') }}

                </div>

            @endif



            <!-- =====================================================
                 CARD TABEL
            ====================================================== -->

            <div
                class="bg-white
                       rounded-xl sm:rounded-2xl
                       border
                       border-slate-100
                       shadow-sm
                       overflow-hidden"
            >


                <!-- =================================================
                     JUDUL CARD
                ================================================== -->

                <div
                    class="px-4 sm:px-6
                           py-4 sm:py-5
                           border-b
                           border-slate-100"
                >

                    <div
                        class="flex
                               items-center
                               justify-between
                               gap-4"
                    >


                        <!-- TEXT -->

                        <div class="min-w-0">

                            <h2
                                class="text-base
                                       sm:text-lg
                                       font-bold
                                       text-slate-800"
                            >

                                Daftar Agenda

                            </h2>


                            <p
                                class="text-xs
                                       sm:text-sm
                                       text-slate-500
                                       mt-1
                                       leading-relaxed
                                       break-text"
                            >

                                Kelola seluruh agenda kegiatan yang tersedia.

                            </p>

                        </div>



                        <!-- ICON -->

                        <div
                            class="w-9 h-9
                                   sm:w-10 sm:h-10
                                   shrink-0
                                   rounded-xl
                                   bg-green-50
                                   flex
                                   items-center
                                   justify-center"
                        >

                            <span class="text-base sm:text-lg">
                                📅
                            </span>

                        </div>

                    </div>

                </div>



                <!-- =================================================
                     CATATAN MOBILE
                ================================================== -->

                <div
                    class="px-4
                           py-3
                           bg-slate-50
                           border-b
                           border-slate-100
                           sm:hidden"
                >

                    <p
                        class="text-xs
                               text-slate-500
                               text-center"
                    >

                        ↔ Geser tabel ke kiri/kanan untuk melihat seluruh data

                    </p>

                </div>



                <!-- =================================================
                     TABLE WRAPPER
                ================================================== -->

                <div class="w-full max-w-full overflow-x-auto table-scroll">


                    <table class="w-full min-w-[950px]">


                        <!-- =================================================
                             TABLE HEADER
                        ================================================== -->

                        <thead class="bg-slate-50">

                            <tr>


                                <!-- NO -->

                                <th
                                    class="px-4 sm:px-5
                                           py-3 sm:py-4
                                           text-left
                                           text-[10px] sm:text-xs
                                           font-bold
                                           uppercase
                                           tracking-wider
                                           text-slate-500
                                           w-20"
                                >

                                    No

                                </th>



                                <!-- JUDUL -->

                                <th
                                    class="px-4 sm:px-5
                                           py-3 sm:py-4
                                           text-left
                                           text-[10px] sm:text-xs
                                           font-bold
                                           uppercase
                                           tracking-wider
                                           text-slate-500
                                           min-w-[220px]"
                                >

                                    Judul

                                </th>



                                <!-- TANGGAL -->

                                <th
                                    class="px-4 sm:px-5
                                           py-3 sm:py-4
                                           text-left
                                           text-[10px] sm:text-xs
                                           font-bold
                                           uppercase
                                           tracking-wider
                                           text-slate-500
                                           whitespace-nowrap"
                                >

                                    Tanggal

                                </th>



                                <!-- WAKTU -->

                                <th
                                    class="px-4 sm:px-5
                                           py-3 sm:py-4
                                           text-left
                                           text-[10px] sm:text-xs
                                           font-bold
                                           uppercase
                                           tracking-wider
                                           text-slate-500
                                           whitespace-nowrap"
                                >

                                    Waktu

                                </th>



                                <!-- LOKASI -->

                                <th
                                    class="px-4 sm:px-5
                                           py-3 sm:py-4
                                           text-left
                                           text-[10px] sm:text-xs
                                           font-bold
                                           uppercase
                                           tracking-wider
                                           text-slate-500
                                           min-w-[180px]"
                                >

                                    Lokasi

                                </th>



                                <!-- STATUS -->

                                <th
                                    class="px-4 sm:px-5
                                           py-3 sm:py-4
                                           text-left
                                           text-[10px] sm:text-xs
                                           font-bold
                                           uppercase
                                           tracking-wider
                                           text-slate-500
                                           whitespace-nowrap"
                                >

                                    Status

                                </th>



                                <!-- AKSI -->

                                <th
                                    class="px-4 sm:px-5
                                           py-3 sm:py-4
                                           text-left
                                           text-[10px] sm:text-xs
                                           font-bold
                                           uppercase
                                           tracking-wider
                                           text-slate-500
                                           whitespace-nowrap"
                                >

                                    Aksi

                                </th>

                            </tr>

                        </thead>



                        <!-- =================================================
                             TABLE BODY
                        ================================================== -->

                        <tbody class="divide-y divide-slate-100">


                            @forelse($agenda as $item)


                                <tr
                                    class="hover:bg-[#FAFAF7]
                                           transition"
                                >


                                    <!-- NO -->

                                    <td
                                        class="px-4 sm:px-5
                                               py-4 sm:py-5"
                                    >

                                        <span
                                            class="inline-flex
                                                   items-center
                                                   justify-center
                                                   w-8 h-8
                                                   rounded-lg
                                                   bg-slate-100
                                                   text-slate-600
                                                   text-sm
                                                   font-semibold"
                                        >

                                            {{ $loop->iteration }}

                                        </span>

                                    </td>



                                    <!-- JUDUL -->

                                    <td
                                        class="px-4 sm:px-5
                                               py-4 sm:py-5"
                                    >

                                        <span
                                            class="font-semibold
                                                   text-sm
                                                   text-slate-800
                                                   break-text"
                                        >

                                            {{ $item->judul }}

                                        </span>

                                    </td>



                                    <!-- TANGGAL -->

                                    <td
                                        class="px-4 sm:px-5
                                               py-4 sm:py-5
                                               whitespace-nowrap"
                                    >

                                        <div
                                            class="flex
                                                   items-center
                                                   gap-2
                                                   text-sm
                                                   text-slate-600"
                                        >

                                            <span>
                                                📅
                                            </span>

                                            {{ $item->tanggal->format('d-m-Y') }}

                                        </div>

                                    </td>



                                    <!-- WAKTU -->

                                    <td
                                        class="px-4 sm:px-5
                                               py-4 sm:py-5
                                               whitespace-nowrap"
                                    >

                                        <div
                                            class="flex
                                                   items-center
                                                   gap-2
                                                   text-sm
                                                   text-slate-600"
                                        >

                                            <span>
                                                🕐
                                            </span>


                                            @if($item->waktu_mulai)

                                                <span>

                                                    {{ $item->waktu_mulai }}

                                                    @if($item->waktu_selesai)

                                                        - {{ $item->waktu_selesai }}

                                                    @endif

                                                </span>

                                            @else

                                                <span>
                                                    -
                                                </span>

                                            @endif

                                        </div>

                                    </td>



                                    <!-- LOKASI -->

                                    <td
                                        class="px-4 sm:px-5
                                               py-4 sm:py-5"
                                    >

                                        <div
                                            class="flex
                                                   items-start
                                                   gap-2
                                                   text-sm
                                                   text-slate-500
                                                   max-w-[250px]"
                                        >

                                            <span class="shrink-0">
                                                📍
                                            </span>

                                            <span class="break-text">

                                                {{ $item->lokasi ?? '-' }}

                                            </span>

                                        </div>

                                    </td>



                                    <!-- STATUS -->

                                    <td
                                        class="px-4 sm:px-5
                                               py-4 sm:py-5"
                                    >


                                        @if($item->status === 'akan_datang')


                                            <span
                                                class="inline-flex
                                                       items-center
                                                       gap-2
                                                       bg-yellow-50
                                                       text-yellow-700
                                                       border
                                                       border-yellow-300
                                                       px-3 py-1.5
                                                       rounded-full
                                                       text-xs
                                                       font-semibold
                                                       whitespace-nowrap"
                                            >

                                                <span
                                                    class="w-1.5 h-1.5
                                                           shrink-0
                                                           rounded-full
                                                           bg-yellow-500"
                                                >
                                                </span>

                                                Akan Datang

                                            </span>


                                        @else


                                            <span
                                                class="inline-flex
                                                       items-center
                                                       gap-2
                                                       bg-red-50
                                                       text-red-600
                                                       border
                                                       border-red-200
                                                       px-3 py-1.5
                                                       rounded-full
                                                       text-xs
                                                       font-semibold
                                                       whitespace-nowrap"
                                            >

                                                <span
                                                    class="w-1.5 h-1.5
                                                           shrink-0
                                                           rounded-full
                                                           bg-red-500"
                                                >
                                                </span>

                                                Selesai

                                            </span>


                                        @endif

                                    </td>



                                    <!-- AKSI -->

                                    <td
                                        class="px-4 sm:px-5
                                               py-4 sm:py-5"
                                    >

                                        <div
                                            class="flex
                                                   items-center
                                                   gap-2
                                                   whitespace-nowrap"
                                        >


                                            <!-- DETAIL -->

                                            <a
                                                href="{{ route('admin.agenda.show', $item->id) }}"
                                                class="inline-flex
                                                       items-center
                                                       justify-center
                                                       bg-green-500
                                                       hover:bg-green-600
                                                       text-white
                                                       px-3 py-2
                                                       rounded-lg
                                                       text-xs
                                                       font-semibold
                                                       transition"
                                            >

                                                Detail

                                            </a>



                                            <!-- EDIT -->

                                            <a
                                                href="{{ route('admin.agenda.edit', $item->id) }}"
                                                class="inline-flex
                                                       items-center
                                                       justify-center
                                                       bg-yellow-500
                                                       hover:bg-yellow-600
                                                       text-white
                                                       px-3 py-2
                                                       rounded-lg
                                                       text-xs
                                                       font-semibold
                                                       transition"
                                            >

                                                Edit

                                            </a>



                                            <!-- HAPUS -->

                                            <form
                                                action="{{ route('admin.agenda.destroy', $item->id) }}"
                                                method="POST"
                                                class="m-0"
                                            >

                                                @csrf

                                                @method('DELETE')


                                                <button
                                                    type="submit"
                                                    onclick="return confirm('Yakin ingin menghapus agenda ini?')"
                                                    class="inline-flex
                                                           items-center
                                                           justify-center
                                                           bg-red-600
                                                           hover:bg-red-700
                                                           text-white
                                                           px-3 py-2
                                                           rounded-lg
                                                           text-xs
                                                           font-semibold
                                                           transition"
                                                >

                                                    Hapus

                                                </button>

                                            </form>


                                        </div>

                                    </td>


                                </tr>


                            @empty


                                <!-- =================================================
                                     DATA KOSONG
                                ================================================== -->

                                <tr>

                                    <td
                                        colspan="7"
                                        class="px-4 sm:px-6
                                               py-14 sm:py-20
                                               text-center"
                                    >

                                        <div
                                            class="flex
                                                   flex-col
                                                   items-center
                                                   max-w-md
                                                   mx-auto"
                                        >


                                            <!-- ICON -->

                                            <div
                                                class="w-16 h-16
                                                       sm:w-20 sm:h-20
                                                       rounded-2xl
                                                       bg-green-50
                                                       flex
                                                       items-center
                                                       justify-center
                                                       mb-4 sm:mb-5"
                                            >

                                                <span
                                                    class="text-3xl sm:text-4xl"
                                                >

                                                    📅

                                                </span>

                                            </div>



                                            <!-- TITLE -->

                                            <h2
                                                class="text-lg
                                                       sm:text-xl
                                                       font-bold
                                                       text-slate-800
                                                       mb-2"
                                            >

                                                Belum Ada Agenda

                                            </h2>



                                            <!-- DESCRIPTION -->

                                            <p
                                                class="text-sm
                                                       sm:text-base
                                                       text-slate-500
                                                       mb-5 sm:mb-6
                                                       leading-relaxed"
                                            >

                                                Belum ada agenda kegiatan
                                                yang tersedia saat ini.

                                            </p>



                                            <!-- BUTTON -->

                                            <a
                                                href="{{ route('admin.agenda.create') }}"
                                                class="w-full
                                                       sm:w-auto
                                                       inline-flex
                                                       items-center
                                                       justify-center
                                                       bg-[#008C45]
                                                       hover:bg-[#005C3B]
                                                       text-white
                                                       px-5 py-3
                                                       rounded-xl
                                                       font-semibold
                                                       text-sm
                                                       transition"
                                            >

                                                + Tambah Agenda

                                            </a>

                                        </div>

                                    </td>

                                </tr>


                            @endforelse


                        </tbody>

                    </table>

                </div>


            </div>


        </main>



        <!-- =====================================================
             FOOTER
        ====================================================== -->

        <footer
            class="bg-gradient-to-r
                   from-[#075E4A]
                   to-[#087F5B]
                   text-white
                   py-6 sm:py-7
                   text-center
                   mt-6 sm:mt-8"
        >

            <div
                class="max-w-7xl
                       mx-auto
                       px-4 sm:px-6"
            >

                <p
                    class="text-xs
                           sm:text-sm
                           leading-relaxed"
                >

                    © {{ date('Y') }} E-GOVERNMENT —
                    Diskominfotik Kota Pasuruan

                </p>

            </div>

        </footer>


    </div>



    <!-- =====================================================
         JAVASCRIPT SIDEBAR MOBILE
    ====================================================== -->

    <script>

        const sidebar =
            document.getElementById('sidebar');

        const overlay =
            document.getElementById('sidebarOverlay');


        function openSidebar() {

            sidebar.classList.remove(
                '-translate-x-full'
            );

            overlay.classList.remove(
                'hidden'
            );

            document.body.classList.add(
                'overflow-hidden'
            );

        }


        function closeSidebar() {

            sidebar.classList.add(
                '-translate-x-full'
            );

            overlay.classList.add(
                'hidden'
            );

            document.body.classList.remove(
                'overflow-hidden'
            );

        }


        /*
         * Tutup sidebar setelah memilih menu
         * ketika menggunakan HP.
         */

        document
            .querySelectorAll('#sidebar a')
            .forEach(function(link) {

                link.addEventListener(
                    'click',
                    function() {

                        if (window.innerWidth < 1024) {

                            closeSidebar();

                        }

                    }
                );

            });


        /*
         * Jika ukuran layar kembali ke PC,
         * overlay otomatis dihilangkan.
         */

        window.addEventListener(
            'resize',
            function() {

                if (window.innerWidth >= 1024) {

                    overlay.classList.add(
                        'hidden'
                    );

                    document.body.classList.remove(
                        'overflow-hidden'
                    );

                }

            }
        );

    </script>


</body>

</html>