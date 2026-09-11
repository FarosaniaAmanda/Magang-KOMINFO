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

        <div class="bg-green-100 text-green-700 p-4 rounded mb-6">
            {{ session('success') }}
        </div>

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
