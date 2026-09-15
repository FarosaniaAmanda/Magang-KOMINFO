<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Karyawan - E-Government</title>

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


<body class="bg-gray-100">


<div class="min-h-screen">


    <!-- =====================================================
         HEADER
    ====================================================== -->

    <header class="bg-[#005C3B] text-white shadow-md">

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-5">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">


                <!-- JUDUL -->

                <div class="min-w-0">

                    <h1 class="text-xl sm:text-2xl font-bold break-text">
                        Tambah Karyawan
                    </h1>

                    <p class="text-xs sm:text-sm text-white/80 mt-1 break-text">
                        Tambahkan data karyawan Diskominfotik.
                    </p>

                </div>


                <!-- KEMBALI -->

                <a
                    href="{{ route('admin.profil.index') }}"
                    class="w-full sm:w-auto shrink-0 inline-flex items-center justify-center gap-2 bg-white text-[#005C3B] hover:bg-gray-100 px-4 sm:px-5 py-2.5 rounded-lg font-semibold text-xs sm:text-sm transition"
                >

                    ← Kembali ke Profil

                </a>

            </div>

        </div>

    </header>


    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-5 sm:py-8">


        <!-- =====================================================
             ERROR
        ====================================================== -->

        @if($errors->any())

            <div class="mb-5 sm:mb-6 bg-red-50 border border-red-200 text-red-700 px-4 sm:px-5 py-3 sm:py-4 rounded-xl">

                <p class="font-semibold text-sm sm:text-base mb-2">
                    Terdapat kesalahan:
                </p>

                <ul class="text-xs sm:text-sm list-disc list-inside space-y-1 break-text">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- =====================================================
             FORM CARD
        ====================================================== -->

        <div class="bg-white rounded-xl sm:rounded-2xl shadow-sm border border-gray-200 overflow-hidden">


            <!-- =====================================================
                 CARD HEADER
            ====================================================== -->

            <div class="px-4 sm:px-6 lg:px-8 py-4 sm:py-6 border-b border-gray-200">

                <div class="flex items-start gap-3 sm:gap-4">


                    <!-- ICON -->

                    <div class="w-10 h-10 sm:w-11 sm:h-11 shrink-0 rounded-xl bg-[#005C3B] flex items-center justify-center text-white text-sm sm:text-lg">

                        👤

                    </div>


                    <!-- TEXT -->

                    <div class="min-w-0">

                        <h2 class="text-base sm:text-xl font-bold text-gray-800 break-text">
                            Informasi Karyawan
                        </h2>

                        <p class="text-xs sm:text-sm text-gray-500 mt-1 leading-relaxed break-text">
                            Lengkapi data karyawan sesuai dengan informasi yang tersedia.
                        </p>

                    </div>

                </div>

            </div>


            <!-- =====================================================
                 FORM
            ====================================================== -->

            <form
                action="{{ route('admin.profil.karyawan.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                <div class="p-4 sm:p-6 lg:p-8">


                    <!-- =================================================
                         GRID FORM
                    ================================================== -->

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">


                        <!-- =================================================
                             FOTO KARYAWAN
                        ================================================== -->

                        <div class="min-w-0">

                            <label class="block text-sm font-semibold text-gray-700 mb-3">

                                Foto Karyawan

                            </label>


                            <div class="border-2 border-dashed border-gray-300 rounded-xl sm:rounded-2xl p-4 sm:p-5 text-center">


                                <!-- =================================================
                                     PREVIEW FOTO
                                ================================================== -->

                                <div
                                    id="preview-container"
                                    class="w-36 h-36 sm:w-44 sm:h-44 mx-auto mb-4 rounded-xl bg-gray-100 flex items-center justify-center overflow-hidden"
                                >


                                    <!-- FOTO DEFAULT -->

                                    <div id="default-photo" class="text-center">

                                        <div class="text-3xl sm:text-4xl mb-2">
                                            👤
                                        </div>

                                        <p class="text-xs sm:text-sm text-gray-400">
                                            Belum ada foto
                                        </p>

                                    </div>


                                    <!-- FOTO PREVIEW -->

                                    <img
                                        id="preview-image"
                                        class="hidden w-full h-full object-cover"
                                        alt="Preview Foto"
                                    >

                                </div>


                                <!-- =================================================
                                     INPUT FOTO
                                ================================================== -->

                                <label
                                    class="w-full sm:w-auto inline-flex items-center justify-center cursor-pointer bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2.5 rounded-lg text-xs sm:text-sm font-semibold transition"
                                >

                                    Pilih Foto

                                    <input
                                        type="file"
                                        name="foto"
                                        id="foto"
                                        class="hidden"
                                        accept=".jpg,.jpeg,.png,.webp"
                                        onchange="previewFoto(event)"
                                    >

                                </label>


                                <p class="text-[11px] sm:text-xs text-gray-400 mt-3 leading-relaxed">

                                    JPG, JPEG, PNG atau WEBP · Maks. 2 MB

                                </p>

                            </div>

                        </div>


                        <!-- =================================================
                             DATA KARYAWAN
                        ================================================== -->

                        <div class="lg:col-span-2 space-y-4 sm:space-y-5 min-w-0">


                            <!-- =================================================
                                 NAMA
                            ================================================== -->

                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">

                                    Nama Karyawan

                                    <span class="text-red-500">*</span>

                                </label>


                                <input
                                    type="text"
                                    name="nama"
                                    value="{{ old('nama') }}"
                                    placeholder="Masukkan nama lengkap karyawan"
                                    class="w-full border border-gray-300 rounded-lg px-3 sm:px-4 py-2.5 sm:py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#005C3B] focus:border-[#005C3B]"
                                    required
                                >

                            </div>


                            <!-- =================================================
                                 NIP
                            ================================================== -->

                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">

                                    NIP

                                </label>


                                <input
                                    type="text"
                                    name="nip"
                                    value="{{ old('nip') }}"
                                    placeholder="Masukkan NIP karyawan"
                                    class="w-full border border-gray-300 rounded-lg px-3 sm:px-4 py-2.5 sm:py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#005C3B] focus:border-[#005C3B]"
                                >

                            </div>


                            <!-- =================================================
                                 JABATAN
                            ================================================== -->

                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">

                                    Jabatan

                                </label>


                                <input
                                    type="text"
                                    name="jabatan"
                                    value="{{ old('jabatan') }}"
                                    placeholder="Contoh: Analis Kebijakan"
                                    class="w-full border border-gray-300 rounded-lg px-3 sm:px-4 py-2.5 sm:py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#005C3B] focus:border-[#005C3B]"
                                >

                            </div>


                            <!-- =================================================
                                 BIDANG
                            ================================================== -->

                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">

                                    Bidang

                                    <span class="text-red-500">*</span>

                                </label>


                                <select
                                    name="bidang"
                                    required
                                    class="w-full border border-gray-300 rounded-lg px-3 sm:px-4 py-2.5 sm:py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-[#005C3B] focus:border-[#005C3B]"
                                >

                                    <option value="">
                                        Pilih bidang
                                    </option>


                                    <option
                                        value="IKP"
                                        {{ old('bidang') == 'IKP' ? 'selected' : '' }}
                                    >
                                        IKP
                                    </option>


                                    <option
                                        value="E-Government"
                                        {{ old('bidang') == 'E-Government' ? 'selected' : '' }}
                                    >
                                        E-Government
                                    </option>


                                    <option
                                        value="Statistik"
                                        {{ old('bidang') == 'Statistik' ? 'selected' : '' }}
                                    >
                                        Statistik
                                    </option>

                                </select>

                            </div>


                        </div>

                    </div>

                </div>


                <!-- =====================================================
                     FOOTER FORM
                ====================================================== -->

                <div class="px-4 sm:px-6 lg:px-8 py-4 sm:py-5 bg-gray-50 border-t border-gray-200">


                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">


                        <!-- KETERANGAN -->

                        <p class="text-xs text-gray-500 leading-relaxed break-text">

                            Pastikan data karyawan yang dimasukkan sudah benar.

                        </p>


                        <!-- =================================================
                             BUTTON
                        ================================================== -->

                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 w-full sm:w-auto">


                            <!-- BATAL -->

                            <a
                                href="{{ route('admin.profil.index') }}"
                                class="w-full sm:w-auto inline-flex items-center justify-center px-5 py-2.5 rounded-lg border border-gray-300 text-gray-700 hover:bg-white font-semibold text-xs sm:text-sm transition"
                            >

                                Batal

                            </a>


                            <!-- SIMPAN -->

                            <button
                                type="submit"
                                class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-2.5 rounded-lg bg-[#005C3B] hover:bg-[#00482F] text-white font-semibold text-xs sm:text-sm transition shadow-sm"
                            >

                                Simpan Karyawan

                            </button>


                        </div>

                    </div>

                </div>


            </form>

        </div>

    </main>

</div>


<!-- =====================================================
     PREVIEW FOTO JAVASCRIPT
====================================================== -->

<script>

function previewFoto(event) {

    const input = event.target;

    const image = document.getElementById('preview-image');

    const defaultPhoto = document.getElementById('default-photo');


    if (input.files && input.files[0]) {

        const reader = new FileReader();


        reader.onload = function(e) {

            image.src = e.target.result;

            image.classList.remove('hidden');

            defaultPhoto.classList.add('hidden');

        };


        reader.readAsDataURL(input.files[0]);

    }

}

</script>


</body>
</html>