<!DOCTYPE html>

<html lang="id">

<head>

```
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Agenda</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])
```

</head>

<body class="min-h-screen bg-gradient-to-br from-green-50 via-white to-yellow-50">

```
<!-- Background Decoration -->
<div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-green-200/30 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 -left-40 w-96 h-96 bg-yellow-200/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-32 right-1/4 w-80 h-80 bg-green-100/40 rounded-full blur-3xl"></div>
</div>


<div class="max-w-5xl mx-auto px-4 sm:px-6 py-8 lg:py-10">

    <!-- Header -->
    <div class="relative overflow-hidden bg-gradient-to-r from-green-800 via-green-700 to-green-600 rounded-3xl shadow-xl mb-8">

        <!-- Decorative Elements -->
        <div class="absolute -right-12 -top-16 w-56 h-56 bg-yellow-400/20 rounded-full"></div>
        <div class="absolute right-20 -bottom-20 w-40 h-40 bg-white/10 rounded-full"></div>
        <div class="absolute left-1/2 -top-20 w-32 h-32 bg-yellow-300/10 rounded-full"></div>

        <div class="relative px-6 sm:px-8 py-7">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-5">

                <div class="flex items-center gap-4">

                    <div class="w-14 h-14 rounded-2xl bg-white/15 backdrop-blur-sm border border-white/20 flex items-center justify-center shadow-lg">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-7 h-7 text-yellow-300"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8 7V3m8 4V3m-9 8h10M5 5h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/>

                        </svg>

                    </div>

                    <div>

                        <div class="flex items-center gap-2 mb-1">

                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-yellow-400/15 border border-yellow-300/20 text-yellow-200 text-xs font-semibold">

                                ADMIN

                            </span>

                            <span class="text-green-100/70 text-xs">

                                Manajemen Agenda

                            </span>

                        </div>

                        <h1 class="text-2xl sm:text-3xl font-bold text-white tracking-tight">

                            Edit Agenda

                        </h1>

                        <p class="text-green-100 mt-1 text-sm sm:text-base">

                            Perbarui informasi agenda kegiatan

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Error validasi --}}

    @if ($errors->any())

        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-5 shadow-sm">

            <div class="flex gap-3">

                <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-red-100 flex items-center justify-center">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 text-red-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 9v3.75m0 3.75h.007M10.29 3.86l-7.3 12.65A2 2 0 004.72 19.5h14.56a2 2 0 001.73-2.99l-7.3-12.65a2 2 0 00-3.42 0z"/>

                    </svg>

                </div>

                <div>

                    <h3 class="font-bold text-red-800">

                        Terjadi kesalahan

                    </h3>

                    <ul class="list-disc pl-5 mt-1 text-sm text-red-700 space-y-1">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            </div>

        </div>

    @endif


    <!-- Main Card -->

    <form action="{{ route('admin.agenda.update', $agenda) }}"
        method="POST"
        class="bg-white rounded-3xl shadow-xl shadow-green-900/5 border border-green-100 overflow-hidden">

        @csrf

        @method('PUT')


        <!-- Card Header -->

        <div class="px-6 sm:px-8 py-5 border-b border-green-100 bg-gradient-to-r from-green-50 to-yellow-50">

            <div class="flex items-center gap-3">

                <div class="w-10 h-10 rounded-xl bg-green-600 flex items-center justify-center shadow-md shadow-green-600/20">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 text-white"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.5-9.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 8.5-8.5z"/>

                    </svg>

                </div>

                <div>

                    <h2 class="font-bold text-green-900">

                        Informasi Agenda

                    </h2>

                    <p class="text-xs text-green-600">

                        Lengkapi informasi kegiatan dengan benar

                    </p>

                </div>

            </div>

        </div>


        <!-- Form Content -->

        <div class="p-6 sm:p-8 space-y-7">


            {{-- Judul --}}

            <div>

                <label class="flex items-center gap-2 text-sm font-bold text-green-900 mb-2.5">

                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span>

                    Judul Agenda

                </label>

                <input
                    type="text"
                    name="judul"
                    value="{{ old('judul', $agenda->judul) }}"
                    class="w-full border border-green-200 bg-green-50/30 rounded-xl px-4 py-3.5 text-gray-800 placeholder-gray-400 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-green-500/10 focus:border-green-500 focus:bg-white hover:border-green-300"
                    required
                >

            </div>


            {{-- Deskripsi --}}

            <div>

                <label class="flex items-center gap-2 text-sm font-bold text-green-900 mb-2.5">

                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span>

                    Deskripsi

                </label>

                <textarea
                    name="deskripsi"
                    rows="4"
                    class="w-full border border-green-200 bg-green-50/30 rounded-xl px-4 py-3.5 text-gray-800 placeholder-gray-400 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-green-500/10 focus:border-green-500 focus:bg-white hover:border-green-300 resize-none"
                >{{ old('deskripsi', $agenda->deskripsi) }}</textarea>

            </div>


            <!-- Date & Time Section -->

            <div class="rounded-2xl border border-green-100 bg-gradient-to-br from-green-50/70 to-white p-5">

                <div class="flex items-center gap-2 mb-5">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 text-green-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 7V3m8 4V3m-9 8h10M5 5h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/>

                    </svg>

                    <h3 class="font-bold text-green-900">

                        Jadwal Kegiatan

                    </h3>

                </div>


                {{-- Tanggal --}}

                <div class="mb-5">

                    <label class="flex items-center gap-2 text-sm font-semibold text-green-900 mb-2.5">

                        Tanggal

                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        value="{{ old('tanggal', $agenda->tanggal->format('Y-m-d')) }}"
                        class="w-full border border-green-200 bg-white rounded-xl px-4 py-3.5 text-gray-800 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-green-500/10 focus:border-green-500 hover:border-green-300"
                        required
                    >

                </div>


                {{-- Waktu --}}

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <div>

                        <label class="block text-sm font-semibold text-green-900 mb-2.5">

                            Waktu Mulai

                        </label>

                        <input
                            type="time"
                            name="waktu_mulai"
                            value="{{ old('waktu_mulai', $agenda->waktu_mulai) }}"
                            class="w-full border border-green-200 bg-white rounded-xl px-4 py-3.5 text-gray-800 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-green-500/10 focus:border-green-500 hover:border-green-300"
                        >

                    </div>


                    <div>

                        <label class="block text-sm font-semibold text-green-900 mb-2.5">

                            Waktu Selesai

                        </label>

                        <input
                            type="time"
                            name="waktu_selesai"
                            value="{{ old('waktu_selesai', $agenda->waktu_selesai) }}"
                            class="w-full border border-green-200 bg-white rounded-xl px-4 py-3.5 text-gray-800 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-green-500/10 focus:border-green-500 hover:border-green-300"
                        >

                    </div>

                </div>

            </div>


            {{-- Lokasi --}}

            <div>

                <label class="flex items-center gap-2 text-sm font-bold text-green-900 mb-2.5">

                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span>

                    Lokasi

                </label>

                <div class="relative">

                    <div class="absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-green-500"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/>

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>

                        </svg>

                    </div>

                    <input
                        type="text"
                        name="lokasi"
                        value="{{ old('lokasi', $agenda->lokasi) }}"
                        class="w-full border border-green-200 bg-green-50/30 rounded-xl pl-12 pr-4 py-3.5 text-gray-800 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-green-500/10 focus:border-green-500 focus:bg-white hover:border-green-300"
                    >

                </div>

            </div>


            {{-- Penyelenggara --}}

            <div>

                <label class="flex items-center gap-2 text-sm font-bold text-green-900 mb-2.5">

                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span>

                    Penyelenggara

                </label>

                <input
                    type="text"
                    name="penyelenggara"
                    value="{{ old('penyelenggara', $agenda->penyelenggara) }}"
                    class="w-full border border-green-200 bg-green-50/30 rounded-xl px-4 py-3.5 text-gray-800 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-green-500/10 focus:border-green-500 focus:bg-white hover:border-green-300"
                >

            </div>


            {{-- Status --}}

            <div>

                <label class="flex items-center gap-2 text-sm font-bold text-green-900 mb-2.5">

                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span>

                    Status

                </label>

                <div class="relative">

                    <select
                        name="status"
                        class="appearance-none w-full border border-green-200 bg-green-50/30 rounded-xl px-4 py-3.5 pr-12 text-gray-800 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-green-500/10 focus:border-green-500 focus:bg-white hover:border-green-300"
                        required
                    >

                        <option value="akan_datang"
                            {{ old('status', $agenda->status) === 'akan_datang' ? 'selected' : '' }}>
                            Akan Datang
                        </option>

                        <option value="selesai"
                            {{ old('status', $agenda->status) === 'selesai' ? 'selected' : '' }}>
                            Selesai
                        </option>

                    </select>

                    <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-green-600"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19 9l-7 7-7-7"/>

                        </svg>

                    </div>

                </div>

            </div>

        </div>


        <!-- Footer / Buttons -->

        <div class="px-6 sm:px-8 py-5 bg-gradient-to-r from-green-50/80 to-yellow-50/50 border-t border-green-100">

            <div class="flex flex-col-reverse sm:flex-row sm:justify-between sm:items-center gap-3">

                <a
                    href="{{ route('admin.agenda.index') }}"
                    class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-white border border-green-200 text-green-800 font-semibold hover:bg-green-50 hover:border-green-300 transition-all duration-200"
                >

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"/>

                    </svg>

                    Batal

                </a>


                <button
                    type="submit"
                    class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold shadow-lg shadow-green-600/20 hover:from-green-700 hover:to-green-800 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200"
                >

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 13l4 4L19 7"/>

                    </svg>

                    Simpan Perubahan

                </button>

            </div>

        </div>

    </form>


    <!-- Bottom Accent -->

    <div class="flex items-center justify-center gap-2 mt-6">

        <span class="w-8 h-1 rounded-full bg-green-600"></span>

        <span class="w-3 h-1 rounded-full bg-yellow-400"></span>

        <span class="w-2 h-1 rounded-full bg-green-300"></span>

    </div>

</div>
```

</body>

</html>
