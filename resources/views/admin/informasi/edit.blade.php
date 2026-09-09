<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Berita | Admin E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-slate-100">


    <!-- HEADER -->

    <header class="bg-white shadow-sm">

        <div class="max-w-4xl mx-auto px-6 py-5 flex justify-between items-center">

            <div>

                <p class="text-sm font-semibold text-[#008C45]">
                    ADMIN PANEL
                </p>

                <h1 class="text-2xl font-bold text-slate-800">
                    Edit Berita Kota Pasuruan
                </h1>

            </div>


            <a href="{{ route('admin.informasi.index') }}"
               class="px-5 py-2 bg-slate-700 text-white rounded-lg hover:bg-slate-800">

                ← Kembali

            </a>

        </div>

    </header>


    <!-- CONTENT -->

    <main class="max-w-4xl mx-auto px-6 py-10">


        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">


            <h2 class="text-xl font-bold text-slate-800 mb-6">

                Form Edit Berita

            </h2>


            <!-- FORM -->

            <form
                action="{{ route('admin.informasi.update', $informasi->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                @method('PUT')


                <!-- JUDUL -->

                <div class="mb-5">

                    <label class="block font-semibold text-slate-700 mb-2">

                        Judul Berita

                    </label>


                    <input
                        type="text"
                        name="judul"
                        value="{{ old('judul', $informasi->judul) }}"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >


                    @error('judul')

                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                <!-- KATEGORI -->

                <div class="mb-5">

                    <label class="block font-semibold text-slate-700 mb-2">

                        Kategori

                    </label>


                    <select
                        name="kategori"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3"
                    >

                        <option value="Pemerintahan"
                            {{ $informasi->kategori == 'Pemerintahan' ? 'selected' : '' }}>
                            Pemerintahan
                        </option>

                        <option value="Pembangunan"
                            {{ $informasi->kategori == 'Pembangunan' ? 'selected' : '' }}>
                            Pembangunan
                        </option>

                        <option value="Pelayanan Publik"
                            {{ $informasi->kategori == 'Pelayanan Publik' ? 'selected' : '' }}>
                            Pelayanan Publik
                        </option>

                        <option value="Event Kota"
                            {{ $informasi->kategori == 'Event Kota' ? 'selected' : '' }}>
                            Event Kota
                        </option>

                        <option value="Pengumuman"
                            {{ $informasi->kategori == 'Pengumuman' ? 'selected' : '' }}>
                            Pengumuman
                        </option>

                    </select>


                    @error('kategori')

                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                <!-- TANGGAL -->

                <div class="mb-5">

                    <label class="block font-semibold text-slate-700 mb-2">

                        Tanggal Berita

                    </label>


                    <input
                        type="date"
                        name="tanggal"
                        value="{{ old('tanggal', \Carbon\Carbon::parse($informasi->tanggal)->format('Y-m-d')) }}"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3"
                    >

                </div>


                <!-- GAMBAR LAMA -->

                @if($informasi->gambar)

                    <div class="mb-5">

                        <label class="block font-semibold text-slate-700 mb-2">

                            Gambar Saat Ini

                        </label>


                        <img
                            src="{{ asset('storage/' . $informasi->gambar) }}"
                            alt="{{ $informasi->judul }}"
                            class="w-64 rounded-lg border"
                        >

                    </div>

                @endif


                <!-- GANTI GAMBAR -->

                <div class="mb-5">

                    <label class="block font-semibold text-slate-700 mb-2">

                        Ganti Gambar Berita

                    </label>


                    <input
                        type="file"
                        name="gambar"
                        accept="image/*"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3"
                    >


                    <p class="text-sm text-slate-500 mt-2">

                        Kosongkan jika tidak ingin mengganti gambar.

                    </p>


                    @error('gambar')

                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                <!-- RINGKASAN -->

                <div class="mb-5">

                    <label class="block font-semibold text-slate-700 mb-2">

                        Ringkasan Berita

                    </label>


                    <textarea
                        name="ringkasan"
                        rows="5"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3"
                    >{{ old('ringkasan', $informasi->ringkasan) }}</textarea>


                    @error('ringkasan')

                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                <!-- ISI BERITA -->

                <div class="mb-6">

                    <label class="block font-semibold text-slate-700 mb-2">

                        Isi Berita

                    </label>


                    <textarea
                        name="isi"
                        rows="10"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3"
                    >{{ old('isi', $informasi->isi) }}</textarea>


                    @error('isi')

                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                <!-- BUTTON -->

                <div class="flex justify-end gap-3">


                    <a
                        href="{{ route('admin.informasi.index') }}"
                        class="px-6 py-3 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300"
                    >

                        Batal

                    </a>


                    <button
                        type="submit"
                        class="px-6 py-3 bg-[#008C45] text-white font-semibold rounded-lg hover:bg-[#006F38]"
                    >

                        Update Berita

                    </button>


                </div>


            </form>


        </div>


    </main>


</body>

</html>