<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Berita | Admin E-Government</title>

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
                    Tambah Berita Kota Pasuruan
                </h1>

            </div>


            <div class="mb-5">
    <a href="{{ route('admin.informasi.index') }}"
       class="inline-flex w-10 h-10 items-center justify-center
              bg-slate-700 text-white rounded-lg
              hover:bg-slate-800 transition"
       title="Kembali ke daftar berita">

        <svg xmlns="http://www.w3.org/2000/svg"
             fill="none"
             viewBox="0 0 24 24"
             stroke-width="2"
             stroke="currentColor"
             class="w-5 h-5">

            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />

        </svg>

    </a>
</div>

        </div>

    </header>


    <!-- CONTENT -->

    <main class="max-w-4xl mx-auto px-6 py-10">


        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">


            <h2 class="text-xl font-bold text-slate-800 mb-6">

                Form Tambah Berita

            </h2>


            <form action="{{ route('admin.informasi.store') }}"
      method="POST"
      enctype="multipart/form-data">

                @csrf


                <!-- JUDUL -->

                <div class="mb-5">

                    <label class="block font-semibold text-slate-700 mb-2">

                        Judul Berita

                    </label>

                    <input
                        type="text"
                        name="judul"
                        value="{{ old('judul') }}"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Masukkan judul berita"
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
        class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"
    >

        <option value="">
            -- Pilih Kategori --
        </option>

        <option value="Pemerintahan"
            {{ old('kategori') == 'Pemerintahan' ? 'selected' : '' }}>
            Pemerintahan
        </option>

        <option value="Pembangunan"
            {{ old('kategori') == 'Pembangunan' ? 'selected' : '' }}>
            Pembangunan
        </option>

        <option value="Pelayanan Publik"
            {{ old('kategori') == 'Pelayanan Publik' ? 'selected' : '' }}>
            Pelayanan Publik
        </option>

        <option value="Event Kota"
            {{ old('kategori') == 'Event Kota' ? 'selected' : '' }}>
            Event Kota
        </option>

        <option value="Pengumuman"
            {{ old('kategori') == 'Pengumuman' ? 'selected' : '' }}>
            Pengumuman
        </option>

    </select>

    @error('kategori')
        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>
    @enderror

</div>

                <!-- TANGGAL BERITA -->

<div class="mb-5">

    <label class="block font-semibold text-slate-700 mb-2">
        Tanggal Berita
    </label>

    <input
        type="date"
        name="tanggal"
        value="{{ old('tanggal') }}"
        class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"
    >

    @error('tanggal')
        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>
    @enderror

</div>

            <!-- GAMBAR BERITA -->

        <div class="mb-5">

        <label class="block font-semibold text-slate-700 mb-2">
        Gambar Berita
    </label>

    <input
        type="file"
        name="gambar"
        accept="image/*"
        class="w-full border border-slate-300 rounded-lg px-4 py-3
               focus:outline-none focus:ring-2 focus:ring-green-500"
    >

    <p class="text-sm text-slate-500 mt-2">
        Pilih gambar pendukung untuk berita.
    </p>

    @error('gambar')
        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>
    @enderror

</div>

                <!-- RINGKASAN -->

                <div class="mb-6">

                    <label class="block font-semibold text-slate-700 mb-2">

                        Ringkasan Berita

                    </label>

                    <textarea
                        name="ringkasan"
                        rows="6"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Masukkan ringkasan berita"
                    >{{ old('ringkasan') }}</textarea>

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
        class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"
        placeholder="Masukkan isi berita secara lengkap"
    >{{ old('isi') }}</textarea>

    @error('isi')

        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>

    @enderror

</div>
                <!-- BUTTON -->

                <div class="flex justify-end gap-3">


                    <a href="{{ route('admin.informasi.index') }}"
                       class="px-6 py-3 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300">

                        Batal

                    </a>


                    <button
                        type="submit"
                        class="px-6 py-3 bg-[#008C45] text-white font-semibold rounded-lg hover:bg-[#006F38]"
                    >

                        Simpan Berita

                    </button>


                </div>


            </form>


        </div>


    </main>


</body>

</html>