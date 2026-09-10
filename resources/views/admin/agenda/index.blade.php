<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agenda - Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FAFAF7] text-slate-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center">

            <div class="flex items-center gap-3">

                <div class="w-14 h-14 overflow-hidden rounded-xl">
                    <img src="{{ asset('images/logo.jpeg') }}"
                         class="w-full h-full object-cover"
                         alt="Logo">
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
    <main class="max-w-7xl mx-auto px-6 py-8">


        <!-- Header -->
        <div class="flex flex-col md:flex-row
                    md:items-center md:justify-between
                    gap-5 mb-8">

            <div>

                <div class="flex items-center gap-2 mb-2">

                    <span class="text-sm font-semibold
                                 text-[#008C45]">
                        ADMIN
                    </span>

                    <span class="text-slate-300">
                        /
                    </span>

                    <span class="text-sm text-slate-500">
                        Agenda
                    </span>

                </div>

                <h1 class="text-3xl font-bold text-slate-800">
                    Agenda
                </h1>

                <p class="text-slate-500 mt-1">
                    Kelola agenda kegiatan Diskominfotik Kota Pasuruan.
                </p>

            </div>


            <!-- Tombol Header -->
            <div class="flex items-center gap-3">

                {{-- Tombol Kembali ke Dashboard --}}
                <a href="{{ route('admin.dashboard') }}"
                   class="inline-flex items-center gap-2
                          bg-white
                          hover:bg-green-50
                          text-slate-700
                          border border-slate-200
                          px-5 py-3
                          rounded-xl
                          font-semibold
                          shadow-sm
                          transition">

                    <span class="text-lg">
                        ←
                    </span>

                    Dashboard

                </a>


                {{-- Tombol Tambah Agenda --}}
                <a href="{{ route('admin.agenda.create') }}"
                   class="inline-flex items-center gap-2
                          bg-[#008C45]
                          hover:bg-[#005C3B]
                          text-white
                          px-5 py-3
                          rounded-xl
                          font-semibold
                          shadow-sm
                          transition">

                    <span class="text-xl">
                        +
                    </span>

                    Tambah Agenda

                </a>

            </div>

        </div>


        <!-- Pesan Sukses -->
        @if(session('success'))

            <div class="mb-6
                        bg-green-50
                        border border-green-200
                        text-green-700
                        px-5 py-4
                        rounded-xl">

                {{ session('success') }}

            </div>

        @endif


        <!-- Card Tabel -->
        <div class="bg-white
                    rounded-2xl
                    border border-slate-100
                    shadow-sm
                    overflow-hidden">


            <!-- Judul Card -->
            <div class="px-6 py-5
                        border-b border-slate-100
                        flex items-center justify-between">

                <div>

                    <h2 class="text-lg font-bold text-slate-800">
                        Daftar Agenda
                    </h2>

                    <p class="text-sm text-slate-500 mt-1">
                        Kelola seluruh agenda kegiatan yang tersedia.
                    </p>

                </div>

                <div class="w-10 h-10
                            rounded-xl
                            bg-green-50
                            flex items-center
                            justify-center">

                    <span class="text-lg">
                        📅
                    </span>

                </div>

            </div>


            <!-- Table -->
            <div class="overflow-x-auto">

                <table class="w-full">

                    <thead class="bg-slate-50">

                        <tr>

                            <th class="px-5 py-4 text-left
                                       text-xs font-bold
                                       uppercase tracking-wider
                                       text-slate-500">
                                No
                            </th>

                            <th class="px-5 py-4 text-left
                                       text-xs font-bold
                                       uppercase tracking-wider
                                       text-slate-500">
                                Judul
                            </th>

                            <th class="px-5 py-4 text-left
                                       text-xs font-bold
                                       uppercase tracking-wider
                                       text-slate-500">
                                Tanggal
                            </th>

                            <th class="px-5 py-4 text-left
                                       text-xs font-bold
                                       uppercase tracking-wider
                                       text-slate-500">
                                Waktu
                            </th>

                            <th class="px-5 py-4 text-left
                                       text-xs font-bold
                                       uppercase tracking-wider
                                       text-slate-500">
                                Lokasi
                            </th>

                            <th class="px-5 py-4 text-left
                                       text-xs font-bold
                                       uppercase tracking-wider
                                       text-slate-500">
                                Status
                            </th>

                            <th class="px-5 py-4 text-left
                                       text-xs font-bold
                                       uppercase tracking-wider
                                       text-slate-500
                                       whitespace-nowrap">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-slate-100">

                        @forelse($agenda as $item)

                            <tr class="hover:bg-[#FAFAF7]
                                       transition">


                                <!-- No -->
                                <td class="px-5 py-5">

                                    <span class="inline-flex
                                                 items-center
                                                 justify-center
                                                 w-8 h-8
                                                 rounded-lg
                                                 bg-slate-100
                                                 text-slate-600
                                                 text-sm
                                                 font-semibold">

                                        {{ $loop->iteration }}

                                    </span>

                                </td>


                                <!-- Judul -->
                                <td class="px-5 py-5">

                                    <span class="font-semibold
                                                 text-slate-800">

                                        {{ $item->judul }}

                                    </span>

                                </td>


                                <!-- Tanggal -->
                                <td class="px-5 py-5
                                           whitespace-nowrap">

                                    <div class="flex items-center gap-2
                                                text-sm text-slate-600">

                                        <span>
                                            📅
                                        </span>

                                        {{ $item->tanggal->format('d-m-Y') }}

                                    </div>

                                </td>


                                <!-- Waktu -->
                                <td class="px-5 py-5
                                           whitespace-nowrap">

                                    <div class="flex items-center gap-2
                                                text-sm text-slate-600">

                                        <span>
                                            🕐
                                        </span>

                                        @if($item->waktu_mulai)

                                            {{ $item->waktu_mulai }}

                                            @if($item->waktu_selesai)
                                                - {{ $item->waktu_selesai }}
                                            @endif

                                        @else

                                            -

                                        @endif

                                    </div>

                                </td>


                                <!-- Lokasi -->
                                <td class="px-5 py-5">

                                    <div class="flex items-start gap-2
                                                text-sm text-slate-500">

                                        <span>
                                            📍
                                        </span>

                                        <span>
                                            {{ $item->lokasi ?? '-' }}
                                        </span>

                                    </div>

                                </td>


                                <!-- Status -->
                                <td class="px-5 py-5">

                                    @if($item->status === 'akan_datang')

                                        <span class="inline-flex
                                                     items-center gap-2
                                                     bg-yellow-50
                                                     text-yellow-700
                                                     border border-yellow-300
                                                     px-3 py-1.5
                                                     rounded-full
                                                     text-xs
                                                     font-semibold
                                                     whitespace-nowrap">

                                            <span class="w-1.5 h-1.5
                                                         rounded-full
                                                         bg-yellow-500">
                                            </span>

                                            Akan Datang

                                        </span>

                                    @else

                                        <span class="inline-flex
                                                     items-center gap-2
                                                     bg-red-50
                                                     text-red-600
                                                     border border-red-200
                                                     px-3 py-1.5
                                                     rounded-full
                                                     text-xs
                                                     font-semibold
                                                     whitespace-nowrap">

                                            <span class="w-1.5 h-1.5
                                                         rounded-full
                                                         bg-red-500">
                                            </span>

                                            Selesai

                                        </span>

                                    @endif

                                </td>


                                <!-- AKSI -->
                                <td class="px-5 py-5">

                                    <div class="flex items-center gap-2
                                                whitespace-nowrap">

                                        {{-- Detail --}}
                                        <a href="{{ route('admin.agenda.show', $item->id) }}"
                                           class="bg-green-500
                                                  hover:bg-yellow-600
                                                  text-white
                                                  px-3 py-2
                                                  rounded-lg
                                                  text-xs
                                                  font-semibold
                                                  transition">

                                            Detail

                                        </a>


                                        {{-- Edit --}}
                                        <a href="{{ route('admin.agenda.edit', $item->id) }}"
                                           class="bg-yellow-500
                                                  hover:bg-yellow-600
                                                  text-white
                                                  px-3 py-2
                                                  rounded-lg
                                                  text-xs
                                                  font-semibold
                                                  transition">

                                            Edit

                                        </a>


                                        {{-- Hapus --}}
                                        <form action="{{ route('admin.agenda.destroy', $item->id) }}"
                                              method="POST"
                                              class="m-0">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    onclick="return confirm('Yakin ingin menghapus agenda ini?')"
                                                    class="bg-red-600
                                                           hover:bg-red-700
                                                           text-white
                                                           px-3 py-2
                                                           rounded-lg
                                                           text-xs
                                                           font-semibold
                                                           transition">

                                                Hapus

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>


                        @empty

                            <tr>

                                <td colspan="7"
                                    class="px-6 py-20 text-center">

                                    <div class="flex flex-col
                                                items-center">

                                        <div class="w-20 h-20
                                                    rounded-2xl
                                                    bg-green-50
                                                    flex items-center
                                                    justify-center
                                                    mb-5">

                                            <span class="text-4xl">
                                                📅
                                            </span>

                                        </div>

                                        <h2 class="text-xl
                                                   font-bold
                                                   text-slate-800
                                                   mb-2">

                                            Belum Ada Agenda

                                        </h2>

                                        <p class="text-slate-500
                                                  mb-6">

                                            Belum ada agenda kegiatan
                                            yang tersedia saat ini.

                                        </p>

                                        <a href="{{ route('admin.agenda.create') }}"
                                           class="bg-[#008C45]
                                                  hover:bg-[#005C3B]
                                                  text-white
                                                  px-5 py-3
                                                  rounded-xl
                                                  font-semibold
                                                  transition">

                                            + Tambah Agenda

                                        </a>

                                    </div>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </main>


    <!-- Footer -->
    <footer class="bg-gradient-to-r
                   from-[#075E4A] to-[#087F5B]
                   text-white
                   py-7
                   text-center
                   mt-8">

        <p class="text-sm">
            © {{ date('Y') }} E-GOVERNMENT —
            Diskominfotik Kota Pasuruan
        </p>

    </footer>

</body>
</html>