<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Karyawan - E-Government</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-gray-100">

<div class="min-h-screen">


    <!-- ================= HEADER ================= -->

    <header class="bg-[#005C3B] text-white shadow-md">

        <div class="max-w-6xl mx-auto px-6 py-5">

            <div class="flex items-center justify-between">

                <div>

                    <h1 class="text-2xl font-bold">
                        Tambah Karyawan
                    </h1>

                    <p class="text-sm text-white/80 mt-1">
                        Tambahkan data karyawan Diskominfotik.
                    </p>

                </div>


                <!-- KEMBALI -->

                <a
                    href="{{ route('admin.profil.index') }}"
                    class="inline-flex items-center gap-2 bg-white text-[#005C3B] hover:bg-gray-100 px-5 py-2.5 rounded-lg font-semibold text-sm transition"
                >

                    ← Kembali ke Profil

                </a>

            </div>

        </div>

    </header>



    <!-- ================= CONTENT ================= -->

    <main class="max-w-6xl mx-auto px-6 py-8">


        <!-- ERROR -->

        @if($errors->any())

            <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-5 py-4 rounded-xl">

                <p class="font-semibold mb-2">
                    Terdapat kesalahan:
                </p>

                <ul class="text-sm list-disc list-inside">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif



        <!-- ================= FORM CARD ================= -->

        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">


            <!-- CARD HEADER -->

            <div class="px-8 py-6 border-b border-gray-200">

                <div class="flex items-center gap-3">

                    <div class="w-11 h-11 rounded-xl bg-[#005C3B] flex items-center justify-center text-white text-lg">

                        👤

                    </div>


                    <div>

                        <h2 class="text-xl font-bold text-gray-800">

                            Informasi Karyawan

                        </h2>


                        <p class="text-sm text-gray-500 mt-1">

                            Lengkapi data karyawan sesuai dengan informasi yang tersedia.

                        </p>

                    </div>

                </div>

            </div>



            <!-- ================= FORM ================= -->

            <form
                action="{{ route('admin.profil.karyawan.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                <div class="p-8">


                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">


                        <!-- ================= FOTO ================= -->

                        <div>

                            <label class="block text-sm font-semibold text-gray-700 mb-3">

                                Foto Karyawan

                            </label>


                            <div class="border-2 border-dashed border-gray-300 rounded-2xl p-5 text-center">


                                <!-- PREVIEW FOTO -->

                                <div
                                    id="preview-container"
                                    class="w-44 h-44 mx-auto mb-4 rounded-xl bg-gray-100 flex items-center justify-center overflow-hidden"
                                >

                                    <div id="default-photo" class="text-center">

                                        <div class="text-4xl mb-2">
                                            👤
                                        </div>

                                        <p class="text-sm text-gray-400">
                                            Belum ada foto
                                        </p>

                                    </div>


                                    <img
                                        id="preview-image"
                                        class="hidden w-full h-full object-cover"
                                        alt="Preview Foto"
                                    >

                                </div>


                                <!-- INPUT FOTO -->

                                <label
                                    class="inline-flex items-center justify-center cursor-pointer bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2.5 rounded-lg text-sm font-semibold transition"
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


                                <p class="text-xs text-gray-400 mt-3">

                                    JPG, JPEG, PNG atau WEBP · Maks. 2 MB

                                </p>

                            </div>

                        </div>



                        <!-- ================= DATA KARYAWAN ================= -->

                        <div class="lg:col-span-2 space-y-5">


                            <!-- NAMA -->

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
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#005C3B] focus:border-[#005C3B]"
                                    required
                                >

                            </div>



                            <!-- NIP -->

                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">

                                    NIP

                                </label>


                                <input
                                    type="text"
                                    name="nip"
                                    value="{{ old('nip') }}"
                                    placeholder="Masukkan NIP karyawan"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#005C3B] focus:border-[#005C3B]"
                                >

                            </div>



                            <!-- JABATAN -->

                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">

                                    Jabatan

                                </label>


                                <input
                                    type="text"
                                    name="jabatan"
                                    value="{{ old('jabatan') }}"
                                    placeholder="Contoh: Analis Kebijakan"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#005C3B] focus:border-[#005C3B]"
                                >

                            </div>



                            <!-- BIDANG -->

                            <div>

                                <label class="block text-sm font-semibold text-gray-700 mb-2">

                                    Bidang

                                    <span class="text-red-500">*</span>

                                </label>


                                <select
                                    name="bidang"
                                    required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-[#005C3B] focus:border-[#005C3B]"
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



                <!-- ================= FOOTER FORM ================= -->

                <div class="px-8 py-5 bg-gray-50 border-t border-gray-200 flex items-center justify-between">


                    <p class="text-xs text-gray-500">

                        Pastikan data karyawan yang dimasukkan sudah benar.

                    </p>


                    <div class="flex items-center gap-3">


                        <!-- BATAL -->

                        <a
                            href="{{ route('admin.profil.index') }}"
                            class="px-5 py-2.5 rounded-lg border border-gray-300 text-gray-700 hover:bg-white font-semibold text-sm transition"
                        >

                            Batal

                        </a>


                        <!-- SIMPAN -->

                        <button
                            type="submit"
                            class="px-6 py-2.5 rounded-lg bg-[#005C3B] hover:bg-[#00482F] text-white font-semibold text-sm transition shadow-sm"
                        >

                            Simpan Karyawan

                        </button>

                    </div>

                </div>


            </form>

        </div>

    </main>

</div>



<!-- ================= PREVIEW FOTO ================= -->

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