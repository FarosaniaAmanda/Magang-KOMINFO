<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Agenda</title>

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
    </style>
</head>


<body class="min-h-screen bg-slate-50">


<div class="w-full">


    <!-- =====================================================
         CONTAINER UTAMA
    ====================================================== -->

    <div class="mx-auto max-w-5xl
                px-4 sm:px-6 lg:px-8
                py-5 sm:py-8 lg:py-10">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="mb-5 sm:mb-6">


            <div class="flex items-start gap-3 sm:gap-4">


                <!-- GARIS HIJAU -->

                <div class="h-10 sm:h-12
                            w-1
                            shrink-0
                            rounded-full
                            bg-emerald-500">
                </div>


                <!-- JUDUL -->

                <div class="min-w-0">

                    <h1 class="text-xl sm:text-2xl lg:text-3xl
                               font-bold
                               text-slate-800
                               break-text">

                        Detail Agenda

                    </h1>


                    <p class="text-xs sm:text-sm
                              text-slate-400
                              mt-1
                              leading-relaxed
                              break-text">

                        Informasi lengkap mengenai agenda kegiatan

                    </p>

                </div>

            </div>

        </div>



        <!-- =================================================
             CARD UTAMA
        ================================================== -->

        <div class="overflow-hidden
                    rounded-xl sm:rounded-2xl
                    border border-slate-200
                    bg-white
                    shadow-sm">


            <!-- =================================================
                 JUDUL AGENDA
            ================================================== -->

            <div class="border-b border-slate-200
                        px-4 sm:px-6
                        py-4 sm:py-5">


                <p class="mb-1
                          text-[10px] sm:text-xs
                          font-semibold
                          uppercase
                          tracking-wider
                          text-emerald-600">

                    Nama Agenda

                </p>


                <h2 class="text-xl sm:text-2xl lg:text-3xl
                           font-bold
                           text-slate-800
                           leading-snug
                           break-text">

                    {{ $agenda->judul }}

                </h2>

            </div>



            <!-- =================================================
                 DESKRIPSI
            ================================================== -->

            <div class="border-b border-slate-200
                        px-4 sm:px-6
                        py-4 sm:py-5">


                <p class="mb-2
                          text-[10px] sm:text-xs
                          font-semibold
                          uppercase
                          tracking-wider
                          text-slate-400">

                    Deskripsi

                </p>


                <p class="text-sm sm:text-base
                          leading-6 sm:leading-7
                          text-slate-600
                          break-text">

                    {{ $agenda->deskripsi ?? '-' }}

                </p>

            </div>



            <!-- =================================================
                 INFORMASI AGENDA
            ================================================== -->

            <div class="p-4 sm:p-6">


                <div class="overflow-hidden
                            rounded-xl
                            border border-slate-200">


                    <div class="overflow-x-auto">


                        <table class="w-full
                                      min-w-[500px]
                                      border-collapse">


                            <tbody class="divide-y divide-slate-200">


                                <!-- =================================================
                                     TANGGAL
                                ================================================== -->

                                <tr class="hover:bg-emerald-50/50 transition">


                                    <td class="w-[35%] sm:w-1/3
                                               bg-slate-50
                                               px-4 sm:px-5
                                               py-3.5 sm:py-4
                                               text-xs sm:text-sm
                                               font-semibold
                                               text-slate-600
                                               whitespace-nowrap">

                                        Tanggal

                                    </td>


                                    <td class="px-4 sm:px-5
                                               py-3.5 sm:py-4
                                               text-xs sm:text-sm
                                               font-medium
                                               text-slate-800
                                               break-text">

                                        {{ $agenda->tanggal->format('d-m-Y') }}

                                    </td>


                                </tr>



                                <!-- =================================================
                                     WAKTU
                                ================================================== -->

                                <tr class="hover:bg-emerald-50/50 transition">


                                    <td class="bg-slate-50
                                               px-4 sm:px-5
                                               py-3.5 sm:py-4
                                               text-xs sm:text-sm
                                               font-semibold
                                               text-slate-600
                                               whitespace-nowrap">

                                        Waktu

                                    </td>


                                    <td class="px-4 sm:px-5
                                               py-3.5 sm:py-4
                                               text-xs sm:text-sm
                                               font-medium
                                               text-slate-800
                                               break-text">


                                        @if($agenda->waktu_mulai)

                                            {{ $agenda->waktu_mulai }}

                                            @if($agenda->waktu_selesai)

                                                - {{ $agenda->waktu_selesai }}

                                            @endif

                                        @else

                                            -

                                        @endif


                                    </td>


                                </tr>



                                <!-- =================================================
                                     LOKASI
                                ================================================== -->

                                <tr class="hover:bg-emerald-50/50 transition">


                                    <td class="bg-slate-50
                                               px-4 sm:px-5
                                               py-3.5 sm:py-4
                                               text-xs sm:text-sm
                                               font-semibold
                                               text-slate-600
                                               whitespace-nowrap">

                                        Lokasi

                                    </td>


                                    <td class="px-4 sm:px-5
                                               py-3.5 sm:py-4
                                               text-xs sm:text-sm
                                               font-medium
                                               text-slate-800
                                               break-text">

                                        {{ $agenda->lokasi ?? '-' }}

                                    </td>


                                </tr>



                                <!-- =================================================
                                     PENYELENGGARA
                                ================================================== -->

                                <tr class="hover:bg-emerald-50/50 transition">


                                    <td class="bg-slate-50
                                               px-4 sm:px-5
                                               py-3.5 sm:py-4
                                               text-xs sm:text-sm
                                               font-semibold
                                               text-slate-600
                                               whitespace-nowrap">

                                        Penyelenggara

                                    </td>


                                    <td class="px-4 sm:px-5
                                               py-3.5 sm:py-4
                                               text-xs sm:text-sm
                                               font-medium
                                               text-slate-800
                                               break-text">

                                        {{ $agenda->penyelenggara ?? '-' }}

                                    </td>


                                </tr>



                                <!-- =================================================
                                     STATUS
                                ================================================== -->

                                <tr class="hover:bg-emerald-50/50 transition">


                                    <td class="bg-slate-50
                                               px-4 sm:px-5
                                               py-3.5 sm:py-4
                                               text-xs sm:text-sm
                                               font-semibold
                                               text-slate-600
                                               whitespace-nowrap">

                                        Status

                                    </td>


                                    <td class="px-4 sm:px-5
                                               py-3.5 sm:py-4">


                                        @if($agenda->status === 'akan_datang')


                                            <span class="inline-flex
                                                         items-center
                                                         gap-2
                                                         rounded-full
                                                         bg-emerald-100
                                                         px-3 py-1.5
                                                         text-[10px] sm:text-xs
                                                         font-bold
                                                         text-emerald-700
                                                         whitespace-nowrap">


                                                <span class="h-2 w-2
                                                             shrink-0
                                                             rounded-full
                                                             bg-emerald-500">
                                                </span>


                                                Akan Datang


                                            </span>


                                        @else


                                            <span class="inline-flex
                                                         items-center
                                                         gap-2
                                                         rounded-full
                                                         bg-slate-100
                                                         px-3 py-1.5
                                                         text-[10px] sm:text-xs
                                                         font-bold
                                                         text-slate-600
                                                         whitespace-nowrap">


                                                <span class="h-2 w-2
                                                             shrink-0
                                                             rounded-full
                                                             bg-slate-400">
                                                </span>


                                                Selesai


                                            </span>


                                        @endif


                                    </td>


                                </tr>


                            </tbody>

                        </table>

                    </div>

                </div>



                <!-- =================================================
                     TOMBOL AKSI
                ================================================== -->

                <div class="mt-5 sm:mt-6
                            flex flex-col sm:flex-row
                            sm:justify-end
                            gap-2.5 sm:gap-3">


                    <!-- =============================================
                         KEMBALI
                    ============================================== -->

                    <a
                        href="{{ route('admin.agenda.index') }}"
                        style="background-color: #facc15; color: #0f172a;"
                        class="w-full sm:w-auto
                               inline-flex
                               items-center
                               justify-center
                               rounded-lg
                               px-5
                               py-3
                               sm:py-2.5
                               text-sm
                               font-semibold
                               shadow-sm
                               transition
                               hover:opacity-90
                               active:scale-95"
                    >

                        ← Kembali

                    </a>



                    <!-- =============================================
                         EDIT
                    ============================================== -->

                    <a
                        href="{{ route('admin.agenda.edit', $agenda) }}"
                        style="background-color: #16a34a; color: white;"
                        class="w-full sm:w-auto
                               inline-flex
                               items-center
                               justify-center
                               rounded-lg
                               px-5
                               py-3
                               sm:py-2.5
                               text-sm
                               font-semibold
                               shadow-sm
                               transition
                               hover:opacity-90
                               active:scale-95"
                    >

                        Edit Agenda

                    </a>


                </div>


            </div>


        </div>


    </div>


</div>


</body>
</html>