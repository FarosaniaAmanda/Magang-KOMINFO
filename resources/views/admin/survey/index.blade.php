<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Survey Kepuasan Masyarakat | E-Government</title>

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



            <!-- =================================================
                 SURVEY AKTIF
            ================================================== -->

            <a
                href="{{ route('admin.survey.index') }}"
                class="block
                       px-4 py-3
                       rounded-lg
                       bg-[#C9A227]
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

                            Survey Kepuasan Masyarakat

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
                 STATISTIK
            ================================================== -->

            <div
                class="grid
                       grid-cols-1
                       md:grid-cols-3
                       gap-4 sm:gap-5
                       mb-6"
            >


                <!-- TOTAL RESPONDEN -->

                <div
                    class="bg-white
                           rounded-2xl
                           shadow-sm
                           border border-gray-100
                           p-5 sm:p-6"
                >

                    <p class="text-sm text-slate-500">

                        Total Responden

                    </p>


                    <div
                        class="flex
                               items-end
                               gap-2
                               mt-2"
                    >

                        <p
                            class="text-3xl
                                   font-bold
                                   text-[#005C3B]"
                        >

                            {{ $totalSurvey }}

                        </p>


                        <span
                            class="text-sm
                                   text-slate-400
                                   mb-1"
                        >

                            responden

                        </span>

                    </div>

                </div>



                <!-- RATA-RATA RATING -->

                <div
                    class="bg-white
                           rounded-2xl
                           shadow-sm
                           border border-gray-100
                           p-5 sm:p-6"
                >

                    <p class="text-sm text-slate-500">

                        Rata-rata Rating

                    </p>


                    <div
                        class="flex
                               items-center
                               gap-3
                               mt-2"
                    >

                        <span class="text-3xl">

                            ⭐

                        </span>


                        <p
                            class="text-3xl
                                   font-bold
                                   text-slate-800"
                        >

                            {{ $rataRating ? number_format($rataRating, 1) : '0.0' }}

                        </p>


                        <span class="text-slate-400">

                            / 5

                        </span>

                    </div>

                </div>



                <!-- SURVEY BULAN INI -->

                <div
                    class="bg-white
                           rounded-2xl
                           shadow-sm
                           border border-gray-100
                           p-5 sm:p-6"
                >

                    <p class="text-sm text-slate-500">

                        Survey Bulan Ini

                    </p>


                    <p
                        class="text-3xl
                               font-bold
                               text-[#008C45]
                               mt-2"
                    >

                        {{ $surveyBulanIni }}

                    </p>

                </div>


            </div>



            <!-- =================================================
                 FILTER
            ================================================== -->

            <div
                class="bg-white
                       rounded-2xl
                       shadow-sm
                       border border-gray-100
                       overflow-hidden
                       mb-6"
            >


                <!-- FILTER HEADER -->

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

                        Data Survey

                    </h3>


                    <p
                        class="text-sm
                               text-slate-500
                               mt-1"
                    >

                        Cari dan filter data survey
                        berdasarkan periode.

                    </p>

                </div>



                <!-- FILTER FORM -->

                <div class="px-4 sm:px-6 py-5">

                    <form
                        method="GET"
                        action="{{ route('admin.survey.index') }}"
                    >

                        <div
                            class="grid
                                   grid-cols-1
                                   sm:grid-cols-2
                                   lg:grid-cols-4
                                   gap-4"
                        >


                            <!-- SEARCH -->

                            <div>

                                <label
                                    class="block
                                           text-sm
                                           font-semibold
                                           text-slate-700
                                           mb-2"
                                >

                                    Cari Survey

                                </label>


                                <input
                                    type="text"
                                    name="search"
                                    value="{{ request('search') }}"
                                    placeholder="Nama, WhatsApp, atau pendapat..."
                                    class="w-full
                                           border
                                           border-slate-300
                                           rounded-xl
                                           px-4
                                           py-3
                                           text-sm
                                           outline-none
                                           focus:border-[#008C45]
                                           focus:ring-2
                                           focus:ring-green-100"
                                >

                            </div>



                            <!-- BULAN -->

                            <div>

                                <label
                                    class="block
                                           text-sm
                                           font-semibold
                                           text-slate-700
                                           mb-2"
                                >

                                    Bulan

                                </label>


                                <select
                                    name="bulan"
                                    class="w-full
                                           border
                                           border-slate-300
                                           rounded-xl
                                           px-4
                                           py-3
                                           text-sm
                                           bg-white
                                           outline-none
                                           focus:border-[#008C45]
                                           focus:ring-2
                                           focus:ring-green-100"
                                >

                                    <option value="">
                                        Semua Bulan
                                    </option>


                                    @foreach([
                                        1 => 'Januari',
                                        2 => 'Februari',
                                        3 => 'Maret',
                                        4 => 'April',
                                        5 => 'Mei',
                                        6 => 'Juni',
                                        7 => 'Juli',
                                        8 => 'Agustus',
                                        9 => 'September',
                                        10 => 'Oktober',
                                        11 => 'November',
                                        12 => 'Desember'
                                    ] as $nomor => $namaBulan)

                                        <option
                                            value="{{ $nomor }}"
                                            {{ request('bulan') == $nomor ? 'selected' : '' }}
                                        >

                                            {{ $namaBulan }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>



                            <!-- TAHUN -->

                            <div>

                                <label
                                    class="block
                                           text-sm
                                           font-semibold
                                           text-slate-700
                                           mb-2"
                                >

                                    Tahun

                                </label>


                                <select
                                    name="tahun"
                                    class="w-full
                                           border
                                           border-slate-300
                                           rounded-xl
                                           px-4
                                           py-3
                                           text-sm
                                           bg-white
                                           outline-none
                                           focus:border-[#008C45]
                                           focus:ring-2
                                           focus:ring-green-100"
                                >

                                    <option value="">
                                        Semua Tahun
                                    </option>


                                    @for($tahun = date('Y'); $tahun >= 2024; $tahun--)

                                        <option
                                            value="{{ $tahun }}"
                                            {{ request('tahun') == $tahun ? 'selected' : '' }}
                                        >

                                            {{ $tahun }}

                                        </option>

                                    @endfor

                                </select>

                            </div>



                            <!-- BUTTON -->

                            <div class="flex items-end">

                                <button
                                    type="submit"
                                    class="w-full
                                           bg-[#008C45]
                                           hover:bg-[#005C3B]
                                           text-white
                                           font-semibold
                                           px-5
                                           py-3
                                           rounded-xl
                                           text-sm
                                           transition
                                           shadow-sm"
                                >

                                    Tampilkan Data

                                </button>

                            </div>


                        </div>

                    </form>



                    <!-- =================================================
                         DOWNLOAD PDF
                    ================================================== -->

                    <div
                        class="flex
                               flex-col
                               sm:flex-row
                               sm:items-center
                               sm:justify-between
                               gap-4
                               mt-5
                               pt-5
                               border-t border-gray-100"
                    >

                        <p
                            class="text-xs sm:text-sm
                                   text-slate-500"
                        >

                            Data yang ditampilkan dapat
                            diunduh sebagai laporan PDF.

                        </p>


                        <a
                            href="{{ route('admin.survey.pdf', request()->query()) }}"
                            class="inline-flex
                                   items-center
                                   justify-center
                                   gap-2
                                   bg-red-600
                                   hover:bg-red-700
                                   text-white
                                   font-semibold
                                   px-5
                                   py-3
                                   rounded-xl
                                   text-sm
                                   transition
                                   shadow-sm"
                        >

                            <span>
                                📄
                            </span>

                            Download PDF

                        </a>

                    </div>

                </div>

            </div>



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

                        Daftar Hasil Survey

                    </h3>


                    <p
                        class="text-sm
                               text-slate-500
                               mt-1"
                    >

                        Menampilkan hasil penilaian dan
                        masukan dari masyarakat.

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
                               min-w-[1050px]
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
                                           min-w-[180px]"
                                >

                                    Nama

                                </th>



                                <!-- WHATSAPP -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           min-w-[150px]"
                                >

                                    WhatsApp

                                </th>



                                <!-- DOMISILI -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           min-w-[180px]"
                                >

                                    Domisili

                                </th>



                                <!-- RATING -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           whitespace-nowrap"
                                >

                                    Rating

                                </th>



                                <!-- SARAN -->

                                <th
                                    class="px-4 sm:px-6
                                           py-4
                                           font-semibold
                                           min-w-[300px]"
                                >

                                    Saran & Masukan

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


                            </tr>

                        </thead>



                        <!-- =================================================
                             TABLE BODY
                        ================================================== -->

                        <tbody class="divide-y divide-gray-100">


                            @forelse($survey as $index => $item)


                                <tr
                                    class="hover:bg-gray-50
                                           transition"
                                >


                                    <!-- NO -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-5
                                               text-slate-600"
                                    >

                                        {{ $survey->firstItem() + $index }}

                                    </td>



                                    <!-- NAMA -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-5"
                                    >

                                        <div
                                            class="font-semibold
                                                   text-slate-800
                                                   leading-relaxed"
                                        >

                                            {{ $item->nama }}

                                        </div>

                                    </td>



                                    <!-- WHATSAPP -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-5
                                               text-slate-600
                                               whitespace-nowrap"
                                    >

                                        {{ $item->no_wa ?: '-' }}

                                    </td>



                                    <!-- DOMISILI -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-5
                                               text-slate-600
                                               leading-relaxed"
                                    >

                                        {{ $item->alamat ?: '-' }}

                                    </td>



                                    <!-- RATING -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-5
                                               whitespace-nowrap"
                                    >

                                        <div
                                            class="flex
                                                   items-center
                                                   gap-2"
                                        >

                                            <span
                                                class="text-yellow-500
                                                       text-base
                                                       tracking-wide"
                                            >

                                                {{ str_repeat('★', $item->rating) }}

                                            </span>


                                            <span
                                                class="text-xs
                                                       text-slate-500"
                                            >

                                                {{ $item->rating }}/5

                                            </span>

                                        </div>

                                    </td>



                                    <!-- SARAN -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-5
                                               max-w-[350px]"
                                    >

                                        <p
                                            class="text-slate-600
                                                   leading-relaxed
                                                   line-clamp-2"
                                        >

                                            {{ $item->pesan ?: '-' }}

                                        </p>

                                    </td>



                                    <!-- TANGGAL -->

                                    <td
                                        class="px-4 sm:px-6
                                               py-5
                                               text-slate-500
                                               whitespace-nowrap"
                                    >

                                        {{ $item->created_at->format('d M Y') }}

                                    </td>


                                </tr>


                            @empty


                                <!-- =================================================
                                     DATA KOSONG
                                ================================================== -->

                                <tr>

                                    <td
                                        colspan="7"
                                        class="px-6
                                               py-16
                                               text-center"
                                    >


                                        <div
                                            class="text-5xl
                                                   mb-3"
                                        >

                                            📭

                                        </div>


                                        <p
                                            class="font-semibold
                                                   text-slate-700"
                                        >

                                            Belum ada data survey

                                        </p>


                                        <p
                                            class="text-sm
                                                   text-slate-500
                                                   mt-1"
                                        >

                                            Data survey masyarakat
                                            akan muncul di sini.

                                        </p>


                                    </td>

                                </tr>


                            @endforelse


                        </tbody>


                    </table>

                </div>



                <!-- =================================================
                     PAGINATION
                ================================================== -->

                @if($survey->hasPages())

                    <div
                        class="px-4 sm:px-6
                               py-5
                               border-t border-gray-100
                               overflow-x-auto"
                    >

                        <div class="min-w-max">

                            {{ $survey->links() }}

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

        const sidebar =
            document.getElementById('sidebar');

        const overlay =
            document.getElementById('sidebarOverlay');


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
         * ketika menggunakan HP.
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
         * Jika ukuran layar kembali ke desktop,
         * overlay dihilangkan.
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