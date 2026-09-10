<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Kegiatan DISKOMINFOTIK</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FAFAF7]">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

            <div class="flex items-center gap-3">
                <div class="w-14 h-14 overflow-hidden rounded-xl">
                    <img src="{{ asset('images/logo.jpeg') }}"
                         class="w-full h-full object-cover">
                </div>

                <div>
                    <h1 class="font-bold text-xl text-slate-800">
                        E-GOVERNMENT
                    </h1>
                    <p class="text-xs text-slate-500">
                        Diskominfotik Kota Pasuruan
                    </p>
                </div>
            </div>

            
        </div>
    </nav>


    <!-- Konten -->
    <section class="min-h-[70vh] flex items-center justify-center">

        <div class="text-center">

            <div class="text-7xl mb-6">
                📅
            </div>

            <h1 class="text-4xl font-bold text-[#005C3B] mb-4">
                Manajemen Kegiatan DISKOMINFOTIK
            </h1>

            <p class="text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Halaman ini akan digunakan untuk menampilkan
                agenda dan kegiatan Diskominfotik Kota Pasuruan.
            </p>

            <div class="mt-8">
                <button class="bg-[#008C45] text-white px-6 py-3 rounded-xl">
                    Tambah Kegiatan
                </button>
            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer class="bg-gradient-to-r from-[#075E4A] to-[#087F5B] text-white py-6 text-center">
        <p class="text-sm">
            © {{ date('Y') }} E-GOVERNMENT — Diskominfotik Kota Pasuruan
        </p>
    </footer>

</body>
</html>