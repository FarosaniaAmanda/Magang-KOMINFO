<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agenda | E-Government Kota Pasuruan</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#FAFAF7] text-[#17211B]">

    <!-- NAVBAR -->
    <nav class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50">

        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-3">

                <div class="w-14 h-16 rounded-xl overflow-hidden">
                    <img
                        src="{{ asset('images/logo.jpeg') }}"
                        alt="Logo E-Government"
                        class="w-full h-full object-cover"
                    >
                </div>

                <div>
                    <h1 class="font-bold text-xl text-slate-800">
                        E-GOVERNMENT
                    </h1>

                    <p class="text-xs text-slate-500">
                        Dinas Komunikasi, Informatika dan Statistik Kota Pasuruan
                    </p>
                </div>

            </a>

            <!-- Kembali -->
            <a
                href="/"
                class="text-[#008C45] font-semibold hover:text-[#006F38] transition"
            >
                ← Kembali
            </a>

        </div>

    </nav>


    <!-- HALAMAN AGENDA -->

    <main class="min-h-[70vh] flex items-center justify-center">

        <div class="text-center px-6">

            <div class="text-6xl mb-6">
                📅
            </div>

            <h1 class="text-4xl font-bold text-[#005C3B] mb-4">
                Agenda E_Government 
            </h1>

            <p class="text-slate-600 max-w-xl mx-auto leading-relaxed">
                Halaman agenda kegiatan E-Government Kota Pasuruan.
                Informasi agenda kegiatan akan tersedia di halaman ini.
            </p>

        </div>

    </main>


    <!-- FOOTER -->

    <footer class="bg-gradient-to-br from-[#075E4A] to-[#087F5B] text-white">

        <div class="max-w-7xl mx-auto px-6 py-8 text-center">

            <p class="text-sm text-white/80">
                © {{ date('Y') }} E-GOVERNMENT — Diskominfotik Kota Pasuruan.
                Seluruh Hak Cipta Dilindungi.
            </p>

        </div>

    </footer>

</body>

</html>