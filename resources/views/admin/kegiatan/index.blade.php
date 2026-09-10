@extends('layouts.app')

@section('content')

<div class="container mx-auto px-6 py-8">

    <div class="flex justify-between items-center mb-6">

        <div>
            <h1 class="text-2xl font-bold">
                Manajemen Kegiatan
            </h1>

            <p class="text-gray-500">
                Kelola dokumentasi kegiatan Diskominfotik
            </p>
        </div>

        <a
            href="{{ route('admin.kegiatan.create') }}"
            class="bg-green-600 text-white px-5 py-3 rounded-lg">

            + Tambah Kegiatan

        </a>

    </div>


    @if(session('success'))

        <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>

    @endif


    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="px-6 py-4 text-left">
                        Kegiatan
                    </th>

                    <th class="px-6 py-4 text-left">
                        Tanggal
                    </th>

                    <th class="px-6 py-4 text-left">
                        Bidang
                    </th>

                    <th class="px-6 py-4 text-left">
                        Dokumen
                    </th>

                    <th class="px-6 py-4 text-left">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($kegiatans as $kegiatan)

                    <tr class="border-t">

                        <td class="px-6 py-4">

                            <div class="font-semibold">
                                {{ $kegiatan->nama_kegiatan }}
                            </div>

                            <div class="text-sm text-gray-500">
                                {{ $kegiatan->lokasi ?? '-' }}
                            </div>

                        </td>

                        <td class="px-6 py-4">

                            {{ $kegiatan->tanggal_kegiatan->format('d M Y') }}

                        </td>

                        <td class="px-6 py-4">

                            {{ $kegiatan->bidang_penyelenggara }}

                        </td>

                        <td class="px-6 py-4">

                            @if($kegiatan->berita_acara)
                                <span class="text-green-600">
                                    Berita Acara
                                </span>
                            @endif

                            @if($kegiatan->laporan_kegiatan)
                                <span class="text-blue-600 block">
                                    Laporan
                                </span>
                            @endif

                        </td>

                        <td class="px-6 py-4">

                            <div class="flex gap-2">

                                <a
                                    href="{{ route('admin.kegiatan.show', $kegiatan) }}"
                                    class="px-3 py-2 bg-blue-600 text-white rounded">

                                    Detail

                                </a>

                                <a
                                    href="{{ route('admin.kegiatan.edit', $kegiatan) }}"
                                    class="px-3 py-2 bg-yellow-500 text-white rounded">

                                    Edit

                                </a>

                                <form
                                    action="{{ route('admin.kegiatan.destroy', $kegiatan) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus kegiatan ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="px-3 py-2 bg-red-600 text-white rounded">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="5"
                            class="text-center py-10 text-gray-500">

                            Belum ada kegiatan.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>


    <div class="mt-6">

        {{ $kegiatans->links() }}

    </div>

</div>

@endsection