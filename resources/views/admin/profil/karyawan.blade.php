<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Profil Karyawan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100">

<div class="max-w-6xl mx-auto p-8">

    <div class="flex justify-between items-center mb-8">

        <h1 class="text-3xl font-bold">
            Profil Karyawan
        </h1>

        <a
            href="{{ route('admin.profil.karyawan.create') }}"
            class="bg-green-600 text-white px-5 py-3 rounded-lg"
        >
            + Tambah Karyawan
        </a>

    </div>


    @if(session('success'))

        <div id="success-alert" class="mb-6 flex items-start gap-4 bg-green-50 border-l-4 border-green-500 text-green-700 px-6 py-4 rounded-lg shadow-md animate-pulse">

            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center mt-0.5">
                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
            </div>

            <div class="flex-1">
                <h3 class="font-bold text-lg">Sukses! ✓</h3>
                <p class="text-sm mt-1">{{ session('success') }}</p>
            </div>

            <button onclick="closeAlert()" class="text-green-500 hover:text-green-700 text-xl font-bold">
                ×
            </button>

        </div>

        <script>
            function closeAlert() {
                const alert = document.getElementById('success-alert');
                alert.style.opacity = '0';
                alert.style.transition = 'opacity 0.3s ease-out';
                setTimeout(() => alert.remove(), 300);
            }

            // Auto-hide after 5 seconds
            setTimeout(() => {
                const alert = document.getElementById('success-alert');
                if (alert) {
                    alert.style.opacity = '0';
                    alert.style.transition = 'opacity 0.5s ease-out';
                    setTimeout(() => alert.remove(), 500);
                }
            }, 5000);
        </script>

    @endif


    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="p-4 text-left">
                        Foto
                    </th>

                    <th class="p-4 text-left">
                        Nama
                    </th>

                    <th class="p-4 text-left">
                        NIP
                    </th>

                    <th class="p-4 text-left">
                        Jabatan
                    </th>

                    <th class="p-4 text-left">
                        Bidang
                    </th>

                    <th class="p-4 text-left">
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody>

                @forelse($karyawans as $karyawan)

                    <tr class="border-t">

                        <td class="p-4">

                            @if($karyawan->foto)

                                <img
                                    src="{{ asset('storage/' . $karyawan->foto) }}"
                                    class="w-16 h-16 object-cover rounded-lg"
                                >

                            @else

                                <div class="text-gray-400">
                                    Tidak ada foto
                                </div>

                            @endif

                        </td>


                        <td class="p-4">
                            {{ $karyawan->nama }}
                        </td>


                        <td class="p-4">
                            {{ $karyawan->nip ?? '-' }}
                        </td>


                        <td class="p-4">
                            {{ $karyawan->jabatan ?? '-' }}
                        </td>


                        <td class="p-4">
                            {{ $karyawan->bidang }}
                        </td>


                        <td class="p-4">

                            <div class="flex gap-2">

                                <a
                                    href="{{ route('admin.profil.karyawan.edit', $karyawan->id) }}"
                                    class="bg-yellow-500 text-white px-4 py-2 rounded"
                                >
                                    Edit
                                </a>


                                <form
                                    action="{{ route('admin.profil.karyawan.destroy', $karyawan->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus karyawan ini?')"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="bg-red-600 text-white px-4 py-2 rounded"
                                    >
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="6"
                            class="p-8 text-center text-gray-500"
                        >
                            Belum ada data karyawan.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>

</html>
