<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Berita | Admin E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>

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


<body class="bg-slate-100">


    <!-- =====================================================
         HEADER
    ====================================================== -->

    <header class="bg-white shadow-sm">

        <div class="max-w-4xl mx-auto
                    px-4 sm:px-6
                    py-4 sm:py-5">

            <div class="flex flex-col sm:flex-row
                        sm:items-center
                        sm:justify-between
                        gap-4">


                <!-- JUDUL -->

                <div class="min-w-0">

                    <p class="text-xs sm:text-sm
                              font-semibold
                              text-[#008C45]">

                        ADMIN PANEL

                    </p>


                    <h1 class="text-xl sm:text-2xl lg:text-3xl
                               font-bold
                               text-slate-800
                               mt-1
                               break-text">

                        Edit Berita Kota Pasuruan

                    </h1>

                </div>



                <!-- KEMBALI -->

                <a
                    href="{{ route('admin.informasi.index') }}"
                    class="w-full sm:w-auto
                           shrink-0
                           inline-flex
                           items-center
                           justify-center
                           px-5 py-3
                           bg-slate-700
                           text-white
                           text-sm
                           font-semibold
                           rounded-lg
                           hover:bg-slate-800
                           transition"
                >

                    ← Kembali

                </a>


            </div>

        </div>

    </header>



    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <main class="max-w-4xl mx-auto
                 px-4 sm:px-6
                 py-5 sm:py-8 lg:py-10">


        <!-- =================================================
             FORM CARD
        ================================================== -->

        <div class="bg-white
                    rounded-xl sm:rounded-2xl
                    shadow-sm
                    border border-slate-200
                    overflow-hidden">


            <!-- =================================================
                 CARD HEADER
            ================================================== -->

            <div class="px-4 sm:px-6 lg:px-8
                        py-4 sm:py-6
                        border-b border-slate-200">


                <h2 class="text-lg sm:text-xl
                           font-bold
                           text-slate-800">

                    Form Edit Berita

                </h2>


                <p class="text-xs sm:text-sm
                          text-slate-500
                          mt-1
                          leading-relaxed">

                    Perbarui informasi berita Kota Pasuruan.

                </p>


            </div>



            <!-- =================================================
                 FORM
            ================================================== -->

            <form
                action="{{ route('admin.informasi.update', $informasi->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                @method('PUT')


                <div class="p-4 sm:p-6 lg:p-8">


                    <!-- =================================================
                         JUDUL
                    ================================================== -->

                    <div class="mb-5">


                        <label class="block
                                      font-semibold
                                      text-sm
                                      text-slate-700
                                      mb-2">

                            Judul Berita

                        </label>


                        <input
                            type="text"
                            name="judul"
                            value="{{ old('judul', $informasi->judul) }}"
                            class="w-full
                                   border border-slate-300
                                   rounded-lg
                                   px-3 sm:px-4
                                   py-2.5 sm:py-3
                                   text-sm
                                   text-slate-800
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-green-500
                                   focus:border-green-500"
                        >


                        @error('judul')

                            <p class="text-red-500
                                      text-xs sm:text-sm
                                      mt-2
                                      break-text">

                                {{ $message }}

                            </p>

                        @enderror


                    </div>



                    <!-- =================================================
                         KATEGORI
                    ================================================== -->

                    <div class="mb-5">


                        <label class="block
                                      font-semibold
                                      text-sm
                                      text-slate-700
                                      mb-2">

                            Kategori

                        </label>


                        <select
                            name="kategori"
                            class="w-full
                                   border border-slate-300
                                   rounded-lg
                                   px-3 sm:px-4
                                   py-2.5 sm:py-3
                                   text-sm
                                   bg-white
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-green-500
                                   focus:border-green-500"
                        >


                            <option
                                value="Pemerintahan"
                                {{ old('kategori', $informasi->kategori) == 'Pemerintahan' ? 'selected' : '' }}
                            >
                                Pemerintahan
                            </option>


                            <option
                                value="Pembangunan"
                                {{ old('kategori', $informasi->kategori) == 'Pembangunan' ? 'selected' : '' }}
                            >
                                Pembangunan
                            </option>


                            <option
                                value="Pelayanan Publik"
                                {{ old('kategori', $informasi->kategori) == 'Pelayanan Publik' ? 'selected' : '' }}
                            >
                                Pelayanan Publik
                            </option>


                            <option
                                value="Event Kota"
                                {{ old('kategori', $informasi->kategori) == 'Event Kota' ? 'selected' : '' }}
                            >
                                Event Kota
                            </option>


                            <option
                                value="Pengumuman"
                                {{ old('kategori', $informasi->kategori) == 'Pengumuman' ? 'selected' : '' }}
                                >
                                Pengumuman
                            </option>


                        </select>


                        @error('kategori')

                            <p class="text-red-500
                                      text-xs sm:text-sm
                                      mt-2
                                      break-text">

                                {{ $message }}

                            </p>

                        @enderror


                    </div>



                    <!-- =================================================
                         TANGGAL
                    ================================================== -->

                    <div class="mb-5">


                        <label class="block
                                      font-semibold
                                      text-sm
                                      text-slate-700
                                      mb-2">

                            Tanggal Berita

                        </label>


                        <input
                            type="date"
                            name="tanggal"
                            value="{{ old('tanggal', \Carbon\Carbon::parse($informasi->tanggal)->format('Y-m-d')) }}"
                            class="w-full
                                   border border-slate-300
                                   rounded-lg
                                   px-3 sm:px-4
                                   py-2.5 sm:py-3
                                   text-sm
                                   bg-white
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-green-500
                                   focus:border-green-500"
                        >


                    </div>



                    <!-- =================================================
                         GAMBAR LAMA
                    ================================================== -->

                    @if($informasi->gambar)


                        <div class="mb-5">


                            <label class="block
                                          font-semibold
                                          text-sm
                                          text-slate-700
                                          mb-2">

                                Gambar Saat Ini

                            </label>


                            <!--
                                Gambar dibuat responsif.
                                HP: maksimal selebar card.
                                PC: tetap memiliki ukuran yang nyaman.
                            -->

                            <div class="w-full sm:w-fit
                                        max-w-full
                                        rounded-xl
                                        overflow-hidden
                                        border border-slate-200
                                        bg-slate-50">


                                <img
                                    src="{{ asset('storage/' . $informasi->gambar) }}"
                                    alt="{{ $informasi->judul }}"
                                    class="block
                                           w-full
                                           sm:w-80
                                           max-w-full
                                           h-auto
                                           max-h-72
                                           object-cover"
                                >

                            </div>


                        </div>


                    @endif



                    <!-- =================================================
                         GANTI GAMBAR
                    ================================================== -->

                    <div class="mb-5">


                        <label class="block
                                      font-semibold
                                      text-sm
                                      text-slate-700
                                      mb-2">

                            Ganti Gambar Berita

                        </label>


                        <input
                            type="file"
                            name="gambar"
                            accept="image/*"
                            class="w-full
                                   border border-slate-300
                                   rounded-lg
                                   px-3 sm:px-4
                                   py-2.5 sm:py-3
                                   text-xs sm:text-sm
                                   bg-white
                                   file:mr-3
                                   file:py-2
                                   file:px-3
                                   file:rounded-lg
                                   file:border-0
                                   file:bg-green-50
                                   file:text-[#008C45]
                                   file:font-semibold
                                   hover:file:bg-green-100"
                        >


                        <p class="text-xs sm:text-sm
                                  text-slate-500
                                  mt-2
                                  leading-relaxed">

                            Kosongkan jika tidak ingin mengganti gambar.

                        </p>


                        @error('gambar')

                            <p class="text-red-500
                                      text-xs sm:text-sm
                                      mt-2
                                      break-text">

                                {{ $message }}

                            </p>

                        @enderror


                    </div>



                    <!-- =================================================
                         RINGKASAN
                    ================================================== -->

                    <div class="mb-5">


                        <label class="block
                                      font-semibold
                                      text-sm
                                      text-slate-700
                                      mb-2">

                            Ringkasan Berita

                        </label>


                        <textarea
                            name="ringkasan"
                            rows="5"
                            class="w-full
                                   border border-slate-300
                                   rounded-lg
                                   px-3 sm:px-4
                                   py-2.5 sm:py-3
                                   text-sm
                                   text-slate-800
                                   resize-y
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-green-500
                                   focus:border-green-500"
                        >{{ old('ringkasan', $informasi->ringkasan) }}</textarea>


                        @error('ringkasan')

                            <p class="text-red-500
                                      text-xs sm:text-sm
                                      mt-2
                                      break-text">

                                {{ $message }}

                            </p>

                        @enderror


                    </div>



                    <!-- =================================================
                         ISI BERITA
                    ================================================== -->

                    <div class="mb-6">


                        <label class="block
                                      font-semibold
                                      text-sm
                                      text-slate-700
                                      mb-2">

                            Isi Berita

                        </label>


                        <textarea
                            name="isi"
                            rows="10"
                            class="w-full
                                   border border-slate-300
                                   rounded-lg
                                   px-3 sm:px-4
                                   py-2.5 sm:py-3
                                   text-sm
                                   text-slate-800
                                   resize-y
                                   focus:outline-none
                                   focus:ring-2
                                   focus:ring-green-500
                                   focus:border-green-500"
                        >{{ old('isi', $informasi->isi) }}</textarea>


                        @error('isi')

                            <p class="text-red-500
                                      text-xs sm:text-sm
                                      mt-2
                                      break-text">

                                {{ $message }}

                            </p>

                        @enderror


                    </div>



                    <!-- =================================================
                         BUTTON
                    ================================================== -->

                    <div class="flex flex-col-reverse
                                sm:flex-row
                                sm:justify-end
                                gap-2.5 sm:gap-3">


                        <!-- BATAL -->

                        <a
                            href="{{ route('admin.informasi.index') }}"
                            class="w-full sm:w-auto
                                   inline-flex
                                   items-center
                                   justify-center
                                   px-6
                                   py-3
                                   bg-slate-200
                                   text-slate-700
                                   text-sm
                                   font-semibold
                                   rounded-lg
                                   hover:bg-slate-300
                                   transition"
                        >

                            Batal

                        </a>



                        <!-- UPDATE -->

                        <button
                            type="submit"
                            class="w-full sm:w-auto
                                   inline-flex
                                   items-center
                                   justify-center
                                   px-6
                                   py-3
                                   bg-[#008C45]
                                   text-white
                                   font-semibold
                                   text-sm
                                   rounded-lg
                                   hover:bg-[#006F38]
                                   transition
                                   shadow-sm"
                        >

                            Update Berita

                        </button>


                    </div>


                </div>


            </form>


        </div>


    </main>


</body>

</html>