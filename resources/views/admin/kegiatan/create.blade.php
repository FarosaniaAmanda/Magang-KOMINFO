@extends('layouts.app')

@section('content')

<div class="container mx-auto px-6 py-8">

    <h1 class="text-2xl font-bold mb-2">
        Tambah Kegiatan
    </h1>

    <p class="text-gray-500 mb-6">
        Tambahkan dokumentasi kegiatan yang telah dilaksanakan.
    </p>


    @if($errors->any())

        <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-6">

            <ul class="list-disc ml-5">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form
        action="{{ route('admin.kegiatan.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white rounded-xl shadow p-6">

        @csrf


        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


            <div class="md:col-span-2">

                <label class="block font-semibold mb-2">
                    Nama Kegiatan
                </label>

                <input
                    type="text"
                    name="nama_kegiatan"
                    value="{{ old('nama_kegiatan') }}"
                    required
                    class="w-full border rounded-lg px-4 py-3"
                    placeholder="Contoh: Rapat Koordinasi SPBE">

            </div>


            <div>

                <label class="block font-semibold mb-2">
                    Tanggal Kegiatan
                </label>

                <input
                    type="date"
                    name="tanggal_kegiatan"
                    value="{{ old('tanggal_kegiatan') }}"
                    required
                    class="w-full border rounded-lg px-4 py-3">

            </div>


            <div>

                <label class="block font-semibold mb-2">
                    Bidang Penyelenggara
                </label>

                <select
                    name="bidang_penyelenggara"
                    required
                    class="w-full border rounded-lg px-4 py-3">

                    <option value="">
                        -- Pilih Bidang --
                    </option>

                    <option value="E-Government">
                        E-Government
                    </option>

                    <option value="Informatika">
                        Informatika
                    </option>

                    <option value="Persandian">
                        Persandian
                    </option>

                    <option value="Statistik">
                        Statistik
                    </option>

                    <option value="Komunikasi dan Informasi">
                        Komunikasi dan Informasi
                    </option>

                </select>

            </div>


            <div>

                <label class="block font-semibold mb-2">
                    Waktu Mulai
                </label>

                <input
                    type="time"
                    name="waktu_mulai"
                    value="{{ old('waktu_mulai') }}"
                    class="w-full border rounded-lg px-4 py-3">

            </div>


            <div>

                <label class="block font-semibold mb-2">
                    Waktu Selesai
                </label>

                <input
                    type="time"
                    name="waktu_selesai"
                    value="{{ old('waktu_selesai') }}"
                    class="w-full border rounded-lg px-4 py-3">

            </div>


            <div class="md:col-span-2">

                <label class="block font-semibold mb-2">
                    Lokasi
                </label>

                <input
                    type="text"
                    name="lokasi"
                    value="{{ old('lokasi') }}"
                    class="w-full border rounded-lg px-4 py-3"
                    placeholder="Contoh: Aula Diskominfotik">

            </div>


            <div class="md:col-span-2">

                <label class="block font-semibold mb-2">
                    Peserta
                </label>

                <textarea
                    name="peserta"
                    rows="4"
                    class="w-full border rounded-lg px-4 py-3"
                    placeholder="Contoh: Kepala OPD, ASN Diskominfotik, perwakilan OPD">{{ old('peserta') }}</textarea>

            </div>


            <div class="md:col-span-2">

                <label class="block font-semibold mb-2">
                    Deskripsi Kegiatan
                </label>

                <textarea
                    name="deskripsi"
                    rows="5"
                    class="w-full border rounded-lg px-4 py-3"
                    placeholder="Tuliskan ringkasan kegiatan...">{{ old('deskripsi') }}</textarea>

            </div>


            <div>

                <label class="block font-semibold mb-2">
                    Berita Acara
                </label>

                <input
                    type="file"
                    name="berita_acara"
                    accept=".pdf"
                    class="w-full border rounded-lg px-4 py-3">

                <p class="text-sm text-gray-500 mt-1">
                    Format PDF, maksimal 10 MB.
                </p>

            </div>


            <div>

                <label class="block font-semibold mb-2">
                    Laporan Kegiatan
                </label>

                <input
                    type="file"
                    name="laporan_kegiatan"
                    accept=".pdf"
                    class="w-full border rounded-lg px-4 py-3">

                <p class="text-sm text-gray-500 mt-1">
                    Format PDF, maksimal 10 MB.
                </p>

            </div>

        </div>


        <div class="flex justify-end gap-3 mt-8">

            <a
                href="{{ route('admin.kegiatan.index') }}"
                class="px-5 py-3 border rounded-lg">

                Batal

            </a>

            <button
                type="submit"
                class="bg-green-600 text-white px-6 py-3 rounded-lg">

                Simpan Kegiatan

            </button>

        </div>

    </form>

</div>

@endsection