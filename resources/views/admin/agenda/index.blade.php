<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agenda - Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="max-w-7xl mx-auto px-6 py-8">

    <div class="flex justify-between items-center mb-6">

        <div>
            <h1 class="text-2xl font-bold text-gray-800">
                Agenda
            </h1>

            <p class="text-gray-500">
                Kelola agenda kegiatan
            </p>
        </div>

        <a href="{{ route('admin.agenda.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">
            + Tambah Agenda
        </a>

    </div>


    {{-- Pesan sukses --}}
    @if(session('success'))

        <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-5">
            {{ session('success') }}
        </div>

    @endif


    {{-- Tabel Agenda --}}
    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-50 border-b">

                <tr>

                    <th class="px-6 py-4 text-left">
                        No
                    </th>

                    <th class="px-6 py-4 text-left">
                        Judul
                    </th>

                    <th class="px-6 py-4 text-left">
                        Tanggal
                    </th>

                    <th class="px-6 py-4 text-left">
                        Waktu
                    </th>

                    <th class="px-6 py-4 text-left">
                        Lokasi
                    </th>

                    <th class="px-6 py-4 text-left">
                        Status
                    </th>

                    <th class="px-6 py-4 text-left">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($agenda as $item)

                    <tr class="border-b hover:bg-gray-50">

                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>

                        <td class="px-6 py-4 font-medium">
                            {{ $item->judul }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $item->tanggal->format('d-m-Y') }}
                        </td>

                        <td class="px-6 py-4">

                            @if($item->waktu_mulai)

                                {{ $item->waktu_mulai }}

                                @if($item->waktu_selesai)
                                    - {{ $item->waktu_selesai }}
                                @endif

                            @else
                                -
                            @endif

                        </td>

                        <td class="px-6 py-4">
                            {{ $item->lokasi ?? '-' }}
                        </td>

                        <td class="px-6 py-4">

                            @if($item->status === 'akan_datang')

                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                                    Akan Datang
                                </span>

                            @else

                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                    Selesai
                                </span>

                            @endif

                        </td>

                        <td class="px-6 py-4">

                            <div style="display: flex; gap: 8px; align-items: center;">

                                <a href="{{ route('admin.agenda.show', $item->id) }}"
                                style="background: #6b7280; color: white; padding: 8px 12px; border-radius: 8px; text-decoration: none; display: inline-block;">
                                    Detail
                                </a>

                                <a href="{{ route('admin.agenda.edit', $item->id) }}"
                                style="background: #f59e0b; color: white; padding: 8px 12px; border-radius: 8px; text-decoration: none; display: inline-block;">
                                    Edit
                                </a>

                                <form action="{{ route('admin.agenda.destroy', $item->id) }}"
                                    method="POST"
                                    style="display: inline; margin: 0;"
                                    onsubmit="return confirm('Yakin ingin menghapus agenda ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            style="background: #dc2626; color: white; padding: 8px 12px; border-radius: 8px; border: none; cursor: pointer;">
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7"
                            class="px-6 py-10 text-center text-gray-500">

                            Belum ada agenda.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>