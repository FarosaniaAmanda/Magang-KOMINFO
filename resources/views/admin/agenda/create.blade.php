<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Agenda</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="max-w-4xl mx-auto px-6 py-8">

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            Tambah Agenda
        </h1>

        <p class="text-gray-500">
            Tambahkan agenda kegiatan baru
        </p>
    </div>


    {{-- Error validasi --}}
    @if ($errors->any())

        <div class="bg-red-100 text-red-700 px-4 py-3 rounded-lg mb-5">

            <ul class="list-disc pl-5">

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('admin.agenda.store') }}"
          method="POST"
          class="bg-white rounded-xl shadow p-6">

        @csrf


        {{-- Judul --}}
        <div class="mb-5">

            <label class="block font-medium text-gray-700 mb-2">
                Judul Agenda
            </label>

            <input
                type="text"
                name="judul"
                value="{{ old('judul') }}"
                placeholder="Contoh: Rapat Koordinasi E-Government"
                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required
            >

        </div>


        {{-- Deskripsi --}}
        <div class="mb-5">

            <label class="block font-medium text-gray-700 mb-2">
                Deskripsi
            </label>

            <textarea
                name="deskripsi"
                rows="4"
                placeholder="Masukkan deskripsi kegiatan..."
                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >{{ old('deskripsi') }}</textarea>

        </div>


        {{-- Tanggal --}}
        <div class="mb-5">

            <label class="block font-medium text-gray-700 mb-2">
                Tanggal
            </label>

            <input
                type="date"
                name="tanggal"
                value="{{ old('tanggal') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-3"
                required
            >

        </div>


        {{-- Waktu --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">

            <div>

                <label class="block font-medium text-gray-700 mb-2">
                    Waktu Mulai
                </label>

                <input
                    type="time"
                    name="waktu_mulai"
                    value="{{ old('waktu_mulai') }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3"
                >

            </div>


            <div>

                <label class="block font-medium text-gray-700 mb-2">
                    Waktu Selesai
                </label>

                <input
                    type="time"
                    name="waktu_selesai"
                    value="{{ old('waktu_selesai') }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3"
                >

            </div>

        </div>


        {{-- Lokasi --}}
        <div class="mb-5">

            <label class="block font-medium text-gray-700 mb-2">
                Lokasi
            </label>

            <input
                type="text"
                name="lokasi"
                value="{{ old('lokasi') }}"
                placeholder="Contoh: Ruang Rapat Kominfo"
                class="w-full border border-gray-300 rounded-lg px-4 py-3"
            >

        </div>


        {{-- Penyelenggara --}}
        <div class="mb-5">

            <label class="block font-medium text-gray-700 mb-2">
                Penyelenggara
            </label>

            <input
                type="text"
                name="penyelenggara"
                value="{{ old('penyelenggara') }}"
                placeholder="Contoh: Dinas Komunikasi dan Informatika"
                class="w-full border border-gray-300 rounded-lg px-4 py-3"
            >

        </div>


        {{-- Status --}}
        <div class="mb-6">

            <label class="block font-medium text-gray-700 mb-2">
                Status
            </label>

            <select
                name="status"
                class="w-full border border-gray-300 rounded-lg px-4 py-3"
                required
            >

                <option value="akan_datang"
                    {{ old('status') === 'akan_datang' ? 'selected' : '' }}>
                    Akan Datang
                </option>

                <option value="selesai"
                    {{ old('status') === 'selesai' ? 'selected' : '' }}>
                    Selesai
                </option>

            </select>

        </div>


        {{-- Tombol --}}
        <div class="flex gap-3">

            <a href="{{ route('admin.agenda.index') }}"
               class="px-5 py-3 bg-gray-200 text-gray-700 rounded-lg">
                Batal
            </a>

            <button
                type="submit"
                class="px-5 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                Simpan Agenda
            </button>

        </div>

    </form>

</div>

</body>
</html>