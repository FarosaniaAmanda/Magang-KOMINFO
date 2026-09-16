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
             TITLE
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



            <!-- KEGIATAN AKTIF -->

            <a
                href="{{ route('admin.kegiatan.index') }}"
                class="block
                       px-4 py-3
                       rounded-lg
                       bg-[#C9A227]
                       transition"
            >

                Kegiatan

            </a>



            <!-- AGENDA -->

            <a
                href="{{ route('admin.agenda.index') }}"
                class="block
                       px-4 py-3
                       rounded-lg
                       hover:bg-[#C9A227]
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
    ====================================================== -->

    <div class="lg:ml-64 min-h-screen flex flex-col">



        <!-- =================================================
             HEADER
        ================================================== -->

        <header class="bg-white shadow-sm">

            <div
                class="max-w-7xl mx-auto
                       px-4 sm:px-6 lg:px-8
                       py-4 sm:py-5"
            >

                <div
                    class="flex
                           items-center
                           justify-between
                           gap-3 sm:gap-4"
                >


                    <!-- =================================================
                         HAMBURGER HP
                    ================================================== -->

                    <button
                        type="button"
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



                    <!-- =================================================
                         JUDUL
                    ================================================== -->

                    <div class="flex-1 min-w-0">

                        <p
                            class="text-xs sm:text-sm
                                   font-semibold
                                   text-[#008C45]"
                        >

                            ADMIN E-GOVERNMENT

                        </p>


                        <h1
                            class="text-lg sm:text-2xl
                                   font-bold
                                   text-slate-800
                                   mt-1
                                   break-words"
                        >

                            Kegiatan Diskominfotik Kota Pasuruan

                        </h1>

                    </div>



                    <!-- =================================================
                         TOMBOL DESKTOP
                    ================================================== -->

                    <div
                        class="hidden sm:flex
                               flex-col sm:flex-row
                               gap-2 sm:gap-3
                               shrink-0"
                    >


                        <!-- DASHBOARD -->

                        <a
                            href="{{ route('admin.dashboard') }}"
                            class="w-full sm:w-auto
                                   inline-flex
                                   items-center
                                   justify-center
                                   gap-2
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



                        <!-- TAMBAH KEGIATAN -->

                        <a
                            href="{{ route('admin.kegiatan.create') }}"
                            class="w-full sm:w-auto
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

                            Tambah Kegiatan

                        </a>


                    </div>


                </div>



                <!-- =================================================
                     TOMBOL MOBILE
                ================================================== -->

                <div
                    class="flex
                           sm:hidden
                           flex-col
                           gap-2
                           mt-4"
                >


                    <!-- DASHBOARD -->

                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="w-full
                               inline-flex
                               items-center
                               justify-center
                               gap-2
                               bg-[#C9A227]
                               hover:bg-[#008C45]
                               text-white
                               px-4
                               py-3
                               rounded-xl
                               font-semibold
                               text-sm
                               shadow-sm
                               transition"
                    >

                        ← Dashboard

                    </a>



                    <!-- TAMBAH KEGIATAN -->

                    <a
                        href="{{ route('admin.kegiatan.create') }}"
                        class="w-full
                               inline-flex
                               items-center
                               justify-center
                               gap-2
                               bg-[#008C45]
                               hover:bg-[#005C3B]
                               text-white
                               px-4
                               py-3
                               rounded-xl
                               font-semibold
                               text-sm
                               shadow-sm
                               transition"
                    >

                        + Tambah Kegiatan

                    </a>


                </div>


            </div>

        </header>



        <!-- =================================================
             CONTENT
        ================================================== -->

        <main
            class="max-w-7xl mx-auto
                   w-full
                   px-4 sm:px-6 lg:px-8
                   py-6 sm:py-8 lg:py-10
                   flex-1"
        >


            <!-- =================================================
                 SUCCESS MESSAGE
            ================================================== -->

            @if(session('success'))

                <div
                    class="mb-6
                           bg-green-50
                           border border-green-200
                           text-green-700
                           px-4 sm:px-5
                           py-4
                           rounded-xl
                           text-sm sm:text-base"
                >

                    {{ session('success') }}

                </div>

            @endif



            <!-- =================================================
                 TABLE CONTAINER
            ================================================== -->

            <div
                class="bg-white
                       rounded-2xl
                       shadow-sm
                       border border-gray-100
                       overflow-hidden"
            >


                <!-- =================================================
                     TABLE HEADER
                ================================================== -->

                <div
                    class="px-4 sm:px-6
                           py-5
                           border-b border-gray-100"
                >

                    <h3
                        class="font-bold
                               text-base sm:text-lg
                               text-slate-800"
                    >

                        Daftar Kegiatan

                    </h3>


                    <p
                        class="text-sm
                               text-slate-500
                               mt-1"
                    >

                        Total data:
                        {{ $kegiatans->total() }}
                        kegiatan

                    </p>


                    <!-- KHUSUS HP -->

                    <p
                        class="text-xs
                               text-slate-400
                               mt-2
                               sm:hidden"
                    >

                        Geser tabel ke kanan atau kiri
                        untuk melihat data lainnya.

                    </p>

                </div>



                <!-- =================================================
                     TABLE
                ================================================== -->

                <div class="overflow-x-auto table-scroll">


                    <table
                        class="w-full
                               min-w-[1100px]
                               text-sm"
                    >


                        <!-- =================================================
                             TABLE HEADER
                        ================================================== -->

                        <thead class="bg-[#F0F7F3]">

                            <tr
                                class="text-left
                                       text-slate-700"
                            >


                                <!-- NO -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           w-16"
                                >

                                    No

                                </th>



                                <!-- NAMA -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           min-w-[250px]"
                                >

                                    Nama Kegiatan

                                </th>



                                <!-- TANGGAL -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           whitespace-nowrap"
                                >

                                    Tanggal

                                </th>



                                <!-- WAKTU -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           whitespace-nowrap"
                                >

                                    Waktu

                                </th>



                                <!-- LOKASI -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           min-w-[180px]"
                                >

                                    Lokasi

                                </th>



                                <!-- BIDANG -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           min-w-[180px]"
                                >

                                    Bidang

                                </th>



                                <!-- DOKUMEN -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           text-center
                                           min-w-[220px]"
                                >

                                    Dokumen

                                </th>



                                <!-- AKSI -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           text-center
                                           min-w-[240px]"
                                >

                                    Aksi

                                </th>


                            </tr>

                        </thead>



                        <!-- =================================================
                             TABLE BODY
                        ================================================== -->

                        <tbody class="divide-y divide-gray-100">


                            @forelse($kegiatans as $index => $kegiatan)


                                <tr
                                    class="hover:bg-gray-50
                                           transition"
                                >


                                    <!-- NO -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-4
                                               text-slate-600"
                                    >

                                        {{ $kegiatans->firstItem() + $index }}

                                    </td>



                                    <!-- NAMA KEGIATAN -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-4"
                                    >

                                        <div
                                            class="font-semibold
                                                   text-slate-800
                                                   leading-relaxed"
                                        >

                                            {{ $kegiatan->nama_kegiatan }}

                                        </div>


                                        @if($kegiatan->peserta)

                                            <div
                                                class="text-xs
                                                       text-slate-500
                                                       mt-1
                                                       leading-relaxed"
                                            >

                                                Peserta:
                                                {{ $kegiatan->peserta }}

                                            </div>

                                        @endif

                                    </td>



                                    <!-- TANGGAL -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-4
                                               whitespace-nowrap
                                               text-slate-600"
                                    >

                                        {{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d M Y') }}

                                    </td>



                                    <!-- WAKTU -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-4
                                               whitespace-nowrap
                                               text-slate-600"
                                    >

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

                                    <td
                                        class="px-4 sm:px-6
                                               py-4
                                               text-slate-600
                                               leading-relaxed"
                                    >

                                        {{ $kegiatan->lokasi ?: '-' }}

                                    </td>



                                    <!-- BIDANG -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-4"
                                    >

                                        <span
                                            class="inline-flex
                                                   px-3 py-1.5
                                                   rounded-full
                                                   bg-green-50
                                                   text-[#075E4A]
                                                   text-xs
                                                   font-semibold
                                                   leading-relaxed"
                                        >

                                            {{ $kegiatan->bidang_penyelenggara }}

                                        </span>

                                    </td>



                                    <!-- DOKUMEN -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-4"
                                    >

                                        <div
                                            class="flex
                                                   flex-wrap
                                                   justify-center
                                                   gap-2"
                                        >


                                            @if($kegiatan->berita_acara)

                                                <a
                                                    href="{{ asset('storage/' . $kegiatan->berita_acara) }}"
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
                                                           whitespace-nowrap"
                                                >

                                                    Berita Acara

                                                </a>

                                            @endif



                                            @if($kegiatan->laporan_kegiatan)

                                                <a
                                                    href="{{ asset('storage/' . $kegiatan->laporan_kegiatan) }}"
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
                                                           whitespace-nowrap"
                                                >

                                                    Laporan

                                                </a>

                                            @endif



                                            @if(!$kegiatan->berita_acara && !$kegiatan->laporan_kegiatan)

                                                <span
                                                    class="text-xs
                                                           text-slate-400"
                                                >

                                                    Tidak ada

                                                </span>

                                            @endif


                                        </div>

                                    </td>



                                    <!-- AKSI -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-4"
                                    >

                                        <div
                                            class="flex
                                                   items-center
                                                   justify-center
                                                   gap-2"
                                        >


                                            <!-- DETAIL -->

                                            <a
                                                href="{{ route('admin.kegiatan.show', $kegiatan->id) }}"
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
                                                       whitespace-nowrap"
                                            >

                                                Detail

                                            </a>



                                            <!-- EDIT -->

                                            <a
                                                href="{{ route('admin.kegiatan.edit', $kegiatan->id) }}"
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
                                                       whitespace-nowrap"
                                            >

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
                                                           whitespace-nowrap"
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
                                        colspan="8"
                                        class="px-6
                                               py-16
                                               text-center"
                                    >


                                        <div class="text-5xl mb-3">

                                            📅

                                        </div>


                                        <p
                                            class="font-semibold
                                                   text-slate-700"
                                        >

                                            Belum ada kegiatan

                                        </p>


                                        <p
                                            class="text-sm
                                                   text-slate-500
                                                   mt-1"
                                        >

                                            Silakan tambahkan
                                            kegiatan baru.

                                        </p>



                                        <!-- BUTTON -->

                                        <a
                                            href="{{ route('admin.kegiatan.create') }}"
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
                                                   transition"
                                        >

                                            + Tambah Kegiatan

                                        </a>


                                    </td>

                                </tr>


                            @endforelse


                        </tbody>


                    </table>

                </div>



                <!-- =================================================
                     PAGINATION
                ================================================== -->

                @if($kegiatans->hasPages())

                    <div
                        class="px-4 sm:px-6
                               py-5
                               border-t border-gray-100
                               overflow-x-auto"
                    >

                        <div class="min-w-max">

                            {{ $kegiatans->links() }}

                        </div>

                    </div>

                @endif


            </div>


        </main>



        <!-- =================================================
             FOOTER
        ================================================== -->

        <footer
            class="bg-gradient-to-r
                   from-[#075E4A]
                   to-[#087F5B]
                   text-white
                   py-6
                   text-center
                   mt-8 sm:mt-10"
        >

            <div class="px-4">

                <p class="text-xs sm:text-sm">

                    © {{ date('Y') }}
                    E-GOVERNMENT —
                    Diskominfotik Kota Pasuruan

                </p>

            </div>

        </footer>


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


        /*
         * Tutup sidebar setelah memilih menu
         * ketika sedang menggunakan HP.
         */

        document
            .querySelectorAll('#sidebar a')
            .forEach(function(link) {

                link.addEventListener('click', function() {

                    if (window.innerWidth < 1024) {

                        closeSidebar();

                    }

                });

            });


        /*
         * Jika ukuran layar kembali ke PC,
         * pastikan overlay hilang.
         */

        window.addEventListener('resize', function() {

            if (window.innerWidth >= 1024) {

                overlay.classList.add('hidden');

                document.body.classList.remove('overflow-hidden');

            }

        });

    </script>


</body>

</html>