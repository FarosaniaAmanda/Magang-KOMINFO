<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Agenda</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="max-w-4xl mx-auto px-6 py-8">

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            Detail Agenda
        </h1>

        <p class="text-gray-500">
            Informasi lengkap agenda kegiatan
        </p>
    </div>


    <div class="bg-white rounded-xl shadow p-6">

        {{-- Judul --}}
        <div class="mb-6">

            <p class="text-sm text-gray-500 mb-1">
                Judul Agenda
            </p>

            <h2 class="text-xl font-bold text-gray-800">
                {{ $agenda->judul }}
            </h2>

        </div>


        {{-- Deskripsi --}}
        <div class="mb-6">

            <p class="text-sm text-gray-500 mb-1">
                Deskripsi
            </p>

            <p class="text-gray-700">
                {{ $agenda->deskripsi ?? '-' }}
            </p>

        </div>


        {{-- Informasi --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


            {{-- Tanggal --}}
            <div>

                <p class="text-sm text-gray-500 mb-1">
                    Tanggal
                </p>

                <p class="font-medium text-gray-800">
                    {{ $agenda->tanggal->format('d-m-Y') }}
                </p>

            </div>


            {{-- Waktu --}}
            <div>

                <p class="text-sm text-gray-500 mb-1">
                    Waktu
                </p>

                <p class="font-medium text-gray-800">

                    @if($agenda->waktu_mulai)

                        {{ $agenda->waktu_mulai }}

                        @if($agenda->waktu_selesai)
                            - {{ $agenda->waktu_selesai }}
                        @endif

                    @else
                        -
                    @endif

                </p>

            </div>


            {{-- Lokasi --}}
            <div>

                <p class="text-sm text-gray-500 mb-1">
                    Lokasi
                </p>

                <p class="font-medium text-gray-800">
                    {{ $agenda->lokasi ?? '-' }}
                </p>

            </div>


            {{-- Penyelenggara --}}
            <div>

                <p class="text-sm text-gray-500 mb-1">
                    Penyelenggara
                </p>

                <p class="font-medium text-gray-800">
                    {{ $agenda->penyelenggara ?? '-' }}
                </p>

            </div>


            {{-- Status --}}
            <div>

                <p class="text-sm text-gray-500 mb-1">
                    Status
                </p>

                @if($agenda->status === 'akan_datang')

                    <span class="inline-block bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                        Akan Datang
                    </span>

                @else

                    <span class="inline-block bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                        Selesai
                    </span>

                @endif

            </div>


        </div>


        {{-- Tombol --}}
        <div class="flex gap-3 mt-8">

            <a href="{{ route('admin.agenda.index') }}"
               class="px-5 py-3 bg-gray-200 text-gray-700 rounded-lg">
                Kembali
            </a>

            <a href="{{ route('admin.agenda.edit', $agenda) }}"
               class="px-5 py-3 bg-yellow-500 text-white rounded-lg">
                Edit Agenda
            </a>

        </div>

    </div>

</div>

</body>
</html>