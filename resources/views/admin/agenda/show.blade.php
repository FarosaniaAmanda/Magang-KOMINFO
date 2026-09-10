<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Agenda</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50">

<div class="mx-auto max-w-5xl px-4 py-8 sm:px-6 lg:px-8">

    {{-- HEADER --}}
    <div class="mb-6">
        <div class="flex items-center gap-3">
            <div class="h-10 w-1 rounded-full bg-emerald-500"></div>

            <div>
                <h1 class="text-2xl font-bold text-slate-800">
                    Detail Agenda
                </h1>

                <p class="text-sm text-slate-400">
                    Informasi lengkap mengenai agenda kegiatan
                </p>
            </div>
        </div>
    </div>


    {{-- CARD --}}
    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        {{-- JUDUL --}}
        <div class="border-b border-slate-200 px-6 py-5">
            <p class="mb-1 text-xs font-semibold uppercase tracking-wider text-emerald-600">
                Nama Agenda
            </p>

            <h2 class="text-2xl font-bold text-slate-800">
                {{ $agenda->judul }}
            </h2>
        </div>


        {{-- DESKRIPSI --}}
        <div class="border-b border-slate-200 px-6 py-5">

            <p class="mb-2 text-xs font-semibold uppercase tracking-wider text-slate-400">
                Deskripsi
            </p>

            <p class="leading-7 text-slate-600">
                {{ $agenda->deskripsi ?? '-' }}
            </p>

        </div>


        {{-- TABEL --}}
        <div class="p-6">

            <div class="overflow-hidden rounded-xl border border-slate-200">

                <table class="w-full border-collapse">

                    <tbody class="divide-y divide-slate-200">

                        {{-- TANGGAL --}}
                        <tr class="hover:bg-emerald-50/50 transition">

                            <td class="w-1/3 bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-600">
                                Tanggal
                            </td>

                            <td class="px-5 py-4 text-sm font-medium text-slate-800">
                                {{ $agenda->tanggal->format('d-m-Y') }}
                            </td>

                        </tr>


                        {{-- WAKTU --}}
                        <tr class="hover:bg-emerald-50/50 transition">

                            <td class="bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-600">
                                Waktu
                            </td>

                            <td class="px-5 py-4 text-sm font-medium text-slate-800">

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


                        {{-- LOKASI --}}
                        <tr class="hover:bg-emerald-50/50 transition">

                            <td class="bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-600">
                                Lokasi
                            </td>

                            <td class="px-5 py-4 text-sm font-medium text-slate-800">
                                {{ $agenda->lokasi ?? '-' }}
                            </td>

                        </tr>


                        {{-- PENYELENGGARA --}}
                        <tr class="hover:bg-emerald-50/50 transition">

                            <td class="bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-600">
                                Penyelenggara
                            </td>

                            <td class="px-5 py-4 text-sm font-medium text-slate-800">
                                {{ $agenda->penyelenggara ?? '-' }}
                            </td>

                        </tr>


                        {{-- STATUS --}}
                        <tr class="hover:bg-emerald-50/50 transition">

                            <td class="bg-slate-50 px-5 py-4 text-sm font-semibold text-slate-600">
                                Status
                            </td>

                            <td class="px-5 py-4">

                                @if($agenda->status === 'akan_datang')

                                    <span class="inline-flex items-center gap-2 rounded-full
                                                 bg-emerald-100 px-3 py-1.5 text-xs
                                                 font-bold text-emerald-700">

                                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                                        Akan Datang
                                    </span>

                                @else

                                    <span class="inline-flex items-center gap-2 rounded-full
                                                 bg-slate-100 px-3 py-1.5 text-xs
                                                 font-bold text-slate-600">

                                        <span class="h-2 w-2 rounded-full bg-slate-400"></span>

                                        Selesai
                                    </span>

                                @endif

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>


            {{-- BUTTON --}}
            <div class="mt-6 flex justify-end gap-3">

                {{-- KEMBALI --}}
                <a href="{{ route('admin.agenda.index') }}"
                style="background-color: #facc15; color: #0f172a;"
                class="inline-flex items-center justify-center rounded-lg
                        px-5 py-2.5 text-sm font-semibold shadow-sm
                        transition hover:opacity-90 active:scale-95">

                    ← Kembali

                </a>

                {{-- EDIT AGENDA --}}
                <a href="{{ route('admin.agenda.edit', $agenda) }}"
                style="background-color: #16a34a; color: white;"
                class="inline-flex items-center justify-center rounded-lg
                        px-5 py-2.5 text-sm font-semibold shadow-sm
                        transition hover:opacity-90 active:scale-95">

                    Edit Agenda

                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>