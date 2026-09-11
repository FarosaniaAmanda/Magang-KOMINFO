<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Karyawan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#FAFAF7]">

    <div class="max-w-7xl mx-auto px-6 py-10">

        <a href="{{ url('/') }}"
           class="inline-flex items-center gap-2 px-4 py-2.5
                  bg-white border border-slate-200 rounded-lg
                  shadow-sm text-[#008C45]
                  hover:bg-[#008C45] hover:text-white
                  transition-all duration-200">

            <span>←</span>
            <span>Kembali ke Beranda</span>
        </a>

        <div class="mt-10">
            <h1 class="text-3xl font-bold text-[#005C3B]">
                Profil Karyawan
            </h1>

            <p class="mt-3 text-slate-600">
                Halaman profil karyawan Diskominfotik Kota Pasuruan.
            </p>
        </div>

    </div>

</body>
</html>