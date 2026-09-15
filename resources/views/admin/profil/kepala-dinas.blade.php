<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Kepala Dinas - E-Government</title>

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
                        Profil Kepala Dinas
                    </h1>

                    <p class="text-xs sm:text-sm text-white/80 mt-1 break-text">
                        Kelola informasi profil Kepala Dinas Diskominfotik.
                    </p>

                </div>


                <!-- KEMBALI -->

                <a href="{{ route('admin.profil.index') }}"
                   class="w-full sm:w-auto shrink-0 inline-flex items-center justify-center gap-2 bg-white text-[#005C3B] hover:bg-gray-100 px-4 sm:px-5 py-2.5 rounded-lg font-semibold text-xs sm:text-sm transition">

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
             SUCCESS
        ====================================================== -->

        @if(session('success'))

            <div class="mb-5 sm:mb-6 flex items-start sm:items-center gap-3 bg-green-50 border border-green-200 text-green-700 px-4 sm:px-5 py-3 sm:py-4 rounded-xl">

                <div class="w-8 h-8 shrink-0 rounded-full bg-green-100 flex items-center justify-center">
                    ✓
                </div>

                <div class="min-w-0">

                    <p class="font-semibold text-sm sm:text-base">
                        Berhasil
                    </p>

                    <p class="text-xs sm:text-sm break-text">
                        {{ session('success') }}
                    </p>

                </div>

            </div>

        @endif


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

                    <div class="w-10 h-10 sm:w-11 sm:h-11 shrink-0 rounded-xl bg-[#005C3B] flex items-center justify-center text-white text-sm sm:text-base">

                        👤

                    </div>


                    <!-- TEXT -->

                    <div class="min-w-0">

                        <h2 class="text-base sm:text-xl font-bold text-gray-800 break-text">
                            Informasi Kepala Dinas
                        </h2>

                        <p class="text-xs sm:text-sm text-gray-500 mt-1 leading-relaxed break-text">
                            Masukkan data Kepala Dinas yang akan ditampilkan pada website.
                        </p>

                    </div>

                </div>

            </div>


            <!-- =====================================================
                 FORM
            ====================================================== -->

            <form action="{{ route('admin.profil.kepala-dinas.update') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')


                <div class="p-4 sm:p-6 lg:p-8">


                    <!-- =================================================
                         GRID FORM
                    ================================================== -->

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">


                        <!-- =================================================
                             FOTO
                        ================================================== -->

                        <div class="min-w-0">

                            <label class="block text-sm font-semibold text-gray-700 mb-3">

                                Foto Kepala Dinas

                            </label>


                            <div class="border-2 border-dashed border-gray-300 rounded-xl sm:rounded-2xl p-4 sm:p-5 text-center">


                                <!-- FOTO SAAT INI -->

                                @if($kepalaDinas && $kepalaDinas->foto)

                                    <img
                                        src="{{ asset('storage/' . $kepalaDinas->foto) }}"
                                        alt="Foto Kepala Dinas"
                                        class="w-36 h-36 sm:w-44 sm:h-44 object-cover rounded-xl mx-auto mb-4 border border-gray-200"
                                    >

                                    <p class="text-xs text-gray-500 mb-4">
                                        Foto saat ini
                                    </p>

                                @else

                                    <div class="w-36 h-36 sm:w-44 sm:h-44 mx-auto mb-4 rounded-xl bg-gray-100 flex items-center justify-center">

                                        <div class="text-center">

                                            <div class="text-3xl sm:text-4xl mb-2">
                                                👤
                                            </div>

                                            <p class="text-xs sm:text-sm text-gray-400">
                                                Belum ada foto
                                            </p>

                                        </div>

                                    </div>

                                @endif


                                <!-- BUTTON PILIH FOTO -->

                                <label
                                    class="w-full sm:w-auto inline-flex items-center justify-center cursor-pointer bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2.5 rounded-lg text-xs sm:text-sm font-semibold transition">

                                    Pilih Foto

                                    <input
                                        type="file"
                                        name="foto"
                                        id="fotoInput"
                                        class="hidden"
                                        accept=".jpg,.jpeg,.png,.webp"
                                    >

                                </label>


                                <p class="text-[11px] sm:text-xs text-gray-400 mt-3 leading-relaxed">

                                    JPG, JPEG, PNG atau WEBP · Maks. 2 MB

                                </p>

                            </div>


                            <!-- =================================================
                                 PREVIEW FOTO
                            ================================================== -->

                            <script>

                                document.getElementById('fotoInput').addEventListener('change', function(e) {

                                    const file = e.target.files[0];

                                    if (file) {

                                        const reader = new FileReader();

                                        reader.onload = function(event) {

                                            const container =
                                                e.target.parentElement.parentElement;

                                            const imgContainer =
                                                container.querySelector('img');

                                            const placeholderDiv =
                                                container.querySelector('.bg-gray-100');


                                            if (imgContainer) {

                                                imgContainer.src = event.target.result;

                                            } else if (placeholderDiv) {

                                                const newImg =
                                                    document.createElement('img');

                                                newImg.src =
                                                    event.target.result;

                                                newImg.className =
                                                    'w-36 h-36 sm:w-44 sm:h-44 object-cover rounded-xl mx-auto mb-4 border border-gray-200';

                                                newImg.alt =
                                                    'Preview Foto';

                                                placeholderDiv.replaceWith(newImg);

                                            }


                                            const textInfo =
                                                container.querySelector('p');

                                            if (textInfo) {

                                                textInfo.textContent =
                                                    'Preview foto baru';

                                            }

                                        };

                                        reader.readAsDataURL(file);

                                    }

                                });

                            </script>

                        </div>


                        <!-- =================================================
                             DATA KEPALA DINAS
                        ================================================== -->

                        <div class="lg:col-span-2 space-y-4 sm:space-y-5 min-w-0">


                            <!-- =================================================
                                 NAMA
                            ================================================== -->

                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">

                                    Nama Kepala Dinas

                                    <span class="text-red-500">*</span>

                                </label>


                                <input
                                    type="text"
                                    name="nama"
                                    value="{{ old('nama', $kepalaDinas->nama ?? '') }}"
                                    placeholder="Masukkan nama Kepala Dinas"
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
                                    value="{{ old('nip', $kepalaDinas->nip ?? '') }}"
                                    placeholder="Masukkan NIP"
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
                                    value="{{ old('jabatan', $kepalaDinas->jabatan ?? '') }}"
                                    placeholder="Contoh: Kepala Dinas Komunikasi, Informatika dan Statistik"
                                    class="w-full border border-gray-300 rounded-lg px-3 sm:px-4 py-2.5 sm:py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#005C3B] focus:border-[#005C3B]"
                                >

                            </div>


                            <!-- =================================================
                                 DESKRIPSI
                            ================================================== -->

                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">

                                    Deskripsi

                                </label>


                                <textarea
                                    name="deskripsi"
                                    rows="6"
                                    placeholder="Masukkan deskripsi atau informasi mengenai Kepala Dinas..."
                                    class="w-full border border-gray-300 rounded-lg px-3 sm:px-4 py-2.5 sm:py-3 text-sm resize-none focus:outline-none focus:ring-2 focus:ring-[#005C3B] focus:border-[#005C3B]"
                                >{{ old('deskripsi', $kepalaDinas->deskripsi ?? '') }}</textarea>

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

                            Pastikan data yang dimasukkan sudah benar.

                        </p>


                        <!-- BUTTON -->

                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 w-full sm:w-auto">


                            <!-- BATAL -->

                            <a
                                href="{{ route('admin.profil.index') }}"
                                class="w-full sm:w-auto inline-flex items-center justify-center px-5 py-2.5 rounded-lg border border-gray-300 text-gray-700 hover:bg-white font-semibold text-xs sm:text-sm transition">

                                Batal

                            </a>


                            <!-- SIMPAN -->

                            <button
                                type="submit"
                                class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-2.5 rounded-lg bg-[#005C3B] hover:bg-[#00482F] text-white font-semibold text-xs sm:text-sm transition shadow-sm">

                                Simpan Profil

                            </button>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </main>

</div>


</body>
</html>