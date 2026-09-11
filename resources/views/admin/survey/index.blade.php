<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Survey Kepuasan Masyarakat | Admin
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="bg-[#F7F8F7] text-slate-800">


    {{-- HEADER --}}

    <header class="bg-white border-b border-slate-200">

        <div class="max-w-[1400px] mx-auto px-6 md:px-10 py-7">

            <div class="flex flex-col md:flex-row
                        md:items-center
                        md:justify-between
                        gap-5">


                <div>

                    <p class="text-sm
                              font-semibold
                              text-[#008C45]
                              uppercase
                              tracking-wider">

                        ADMIN E-GOVERNMENT

                    </p>


                    <h1 class="text-3xl md:text-4xl
                               font-bold
                               text-slate-900
                               mt-1">

                        Survey Kepuasan Masyarakat

                    </h1>


                    <p class="text-slate-500 mt-2">

                        Kelola dan pantau hasil survey
                        masyarakat.

                    </p>

                </div>


                <a href="{{ route('admin.dashboard') }}"
                   class="inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600 text-white px-5 py-3 rounded-xl font-semibold shadow-md transition">
                <span class="text-xl"></span>

                    ← Kembali ke Dashboard

                </a>

            </div>

        </div>

    </header>



    {{-- CONTENT --}}

    <main class="max-w-[1400px] mx-auto px-6 md:px-10 py-8">


        {{-- STATISTIK --}}

        <div class="grid grid-cols-1
                    md:grid-cols-3
                    gap-5
                    mb-7">


            {{-- TOTAL --}}

            <div class="bg-white
                        rounded-2xl
                        border border-slate-200
                        p-6
                        shadow-sm">

                <p class="text-sm text-slate-500">
                    Total Responden
                </p>


                <div class="flex items-end gap-2 mt-2">

                    <p class="text-3xl
                              font-bold
                              text-[#005C3B]">

                        {{ $totalSurvey }}

                    </p>

                    <span class="text-sm
                                 text-slate-400
                                 mb-1">

                        responden

                    </span>

                </div>

            </div>



            {{-- RATING --}}

            <div class="bg-white
                        rounded-2xl
                        border border-slate-200
                        p-6
                        shadow-sm">

                <p class="text-sm text-slate-500">
                    Rata-rata Rating
                </p>


                <div class="flex items-center gap-3 mt-2">

                    <span class="text-3xl">
                        ⭐
                    </span>


                    <p class="text-3xl
                              font-bold
                              text-slate-900">

                        {{ $rataRating ? number_format($rataRating, 1) : '0.0' }}

                    </p>


                    <span class="text-slate-400">
                        / 5
                    </span>

                </div>

            </div>



            {{-- BULAN INI --}}

            <div class="bg-white
                        rounded-2xl
                        border border-slate-200
                        p-6
                        shadow-sm">

                <p class="text-sm text-slate-500">
                    Survey Bulan Ini
                </p>


                <p class="text-3xl
                          font-bold
                          text-[#008C45]
                          mt-2">

                    {{ $surveyBulanIni }}

                </p>

            </div>

        </div>



        {{-- FILTER CARD --}}

        <div class="bg-white
                    rounded-2xl
                    border border-slate-200
                    shadow-sm
                    p-6
                    mb-6">


            <div class="flex flex-col
                        lg:flex-row
                        lg:items-center
                        lg:justify-between
                        gap-4
                        mb-5">

                <div>

                    <h2 class="text-xl
                               font-bold
                               text-slate-900">

                        Data Survey

                    </h2>


                    <p class="text-sm
                              text-slate-500
                              mt-1">

                        Cari dan filter data survey
                        berdasarkan periode.

                    </p>

                </div>

            </div>



            {{-- FILTER --}}

            <form method="GET"
                  action="{{ route('admin.survey.index') }}">

                <div class="grid grid-cols-1
                            md:grid-cols-2
                            xl:grid-cols-4
                            gap-4">


                    {{-- SEARCH --}}

                    <div>

                        <label class="block
                                      text-sm
                                      font-semibold
                                      mb-2">

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
                                   outline-none
                                   focus:border-[#008C45]
                                   focus:ring-2
                                   focus:ring-green-100">

                    </div>



                    {{-- BULAN --}}

                    <div>

                        <label class="block
                                      text-sm
                                      font-semibold
                                      mb-2">

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
                                   bg-white
                                   outline-none
                                   focus:border-[#008C45]">

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
                                    {{ request('bulan') == $nomor ? 'selected' : '' }}>

                                    {{ $namaBulan }}

                                </option>

                            @endforeach

                        </select>

                    </div>



                    {{-- TAHUN --}}

                    <div>

                        <label class="block
                                      text-sm
                                      font-semibold
                                      mb-2">

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
                                   bg-white
                                   outline-none
                                   focus:border-[#008C45]">

                            <option value="">
                                Semua Tahun
                            </option>


                            @for($tahun = date('Y'); $tahun >= 2024; $tahun--)

                                <option
                                    value="{{ $tahun }}"
                                    {{ request('tahun') == $tahun ? 'selected' : '' }}>

                                    {{ $tahun }}

                                </option>

                            @endfor

                        </select>

                    </div>



                    {{-- BUTTON --}}

                    <div class="flex items-end">

                        <button
                            type="submit"
                            class="w-full
                                   bg-[#005C3B]
                                   hover:bg-[#00482F]
                                   text-white
                                   font-semibold
                                   px-5
                                   py-3
                                   rounded-xl
                                   transition">

                            Tampilkan Data

                        </button>

                    </div>

                </div>

            </form>



            {{-- ACTION PDF --}}

            <div class="flex flex-col
                        sm:flex-row
                        sm:items-center
                        sm:justify-between
                        gap-4
                        mt-6
                        pt-5
                        border-t border-slate-100">


                <p class="text-sm text-slate-500">

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
                           transition
                           shadow-sm">

                    <span>📄</span>

                    Download PDF

                </a>

            </div>

        </div>



        {{-- TABLE --}}

        <div class="bg-white
                    rounded-2xl
                    border border-slate-200
                    shadow-sm
                    overflow-hidden">


            <div class="px-6 py-5
                        border-b border-slate-100">

                <h3 class="font-bold
                           text-lg
                           text-slate-900">

                    Daftar Hasil Survey

                </h3>

            </div>



            <div class="overflow-x-auto">

                <table class="w-full min-w-[1100px]">


                    <thead class="bg-[#F8FAF9]">

                        <tr>

                            <th class="px-6 py-4
                                       text-left
                                       text-xs
                                       uppercase
                                       tracking-wider
                                       text-slate-500">

                                No

                            </th>


                            <th class="px-6 py-4
                                       text-left
                                       text-xs
                                       uppercase
                                       tracking-wider
                                       text-slate-500">

                                Nama

                            </th>


                            <th class="px-6 py-4
                                       text-left
                                       text-xs
                                       uppercase
                                       tracking-wider
                                       text-slate-500">

                                WhatsApp

                            </th>


                            <th class="px-6 py-4
                                       text-left
                                       text-xs
                                       uppercase
                                       tracking-wider
                                       text-slate-500">

                                Domisili

                            </th>


                            <th class="px-6 py-4
                                       text-left
                                       text-xs
                                       uppercase
                                       tracking-wider
                                       text-slate-500">

                                Rating

                            </th>


                            <th class="px-6 py-4
                                       text-left
                                       text-xs
                                       uppercase
                                       tracking-wider
                                       text-slate-500">

                                Saran & Masukan

                            </th>


                            <th class="px-6 py-4
                                       text-left
                                       text-xs
                                       uppercase
                                       tracking-wider
                                       text-slate-500">

                                Tanggal

                            </th>

                        </tr>

                    </thead>



                    <tbody class="divide-y divide-slate-100">


                        @forelse($survey as $index => $item)

                            <tr class="hover:bg-slate-50
                                       transition">


                                {{-- NO --}}

                                <td class="px-6 py-5
                                           text-sm
                                           text-slate-500">

                                    {{ $survey->firstItem() + $index }}

                                </td>



                                {{-- NAMA --}}

                                <td class="px-6 py-5">

                                    <p class="font-semibold
                                              text-slate-900">

                                        {{ $item->nama }}

                                    </p>

                                </td>



                                {{-- WHATSAPP --}}

                                <td class="px-6 py-5
                                           text-sm
                                           text-slate-600">

                                    {{ $item->no_wa ?: '-' }}

                                </td>



                                {{-- ALAMAT --}}

                                <td class="px-6 py-5
                                           text-sm
                                           text-slate-600
                                           max-w-[180px]">

                                    {{ $item->alamat }}

                                </td>



                                {{-- RATING --}}

                                <td class="px-6 py-5
                                           whitespace-nowrap">

                                    <span class="text-yellow-500
                                                 text-base">

                                        {{ str_repeat('★', $item->rating) }}

                                    </span>


                                    <span class="text-xs
                                                 text-slate-400
                                                 ml-1">

                                        {{ $item->rating }}/5

                                    </span>

                                </td>



                                {{-- PESAN --}}

                                <td class="px-6 py-5
                                           max-w-[300px]">

                                    <p class="text-sm
                                              text-slate-600
                                              line-clamp-2">

                                        {{ $item->pesan }}

                                    </p>

                                </td>



                                {{-- TANGGAL --}}

                                <td class="px-6 py-5
                                           text-sm
                                           text-slate-500
                                           whitespace-nowrap">

                                    {{ $item->created_at->format('d M Y') }}

                                </td>

                            </tr>


                        @empty

                            <tr>

                                <td colspan="7"
                                    class="px-6 py-16
                                           text-center">

                                    <div class="text-4xl mb-3">
                                        📭
                                    </div>

                                    <p class="font-semibold
                                              text-slate-700">

                                        Belum ada data survey

                                    </p>

                                    <p class="text-sm
                                              text-slate-500
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



            {{-- PAGINATION --}}

            @if($survey->hasPages())

                <div class="px-6 py-5
                            border-t border-slate-100">

                    {{ $survey->links() }}

                </div>

            @endif

        </div>

    </main>


</body>

</html>