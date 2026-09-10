<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Agenda</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50">

<div class="mx-auto max-w-4xl px-5 py-8 sm:px-8">

    {{-- HEADER --}}
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800 sm:text-3xl">
            Edit Agenda
        </h1>
        <p class="mt-1 text-sm text-slate-400">
            Perbarui informasi agenda kegiatan.
        </p>
    </div>

    {{-- ERROR --}}
    @if ($errors->any())
        <div class="mb-6 rounded-lg border border-red-200 bg-red-50 px-5 py-4 text-sm text-red-600">
            <p class="mb-2 font-semibold">Terjadi kesalahan:</p>
            <ul class="list-inside list-disc space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- FORM --}}
    <form action="{{ route('admin.agenda.update', $agenda) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">

            <table class="w-full">
                <tbody class="divide-y divide-slate-100">

                    {{-- JUDUL --}}
                    <tr>
                        <td class="w-1/3 bg-slate-50 px-5 py-5 align-top">
                            <label for="judul"
                                   class="text-sm font-semibold text-slate-700">
                                Judul Agenda
                            </label>
                        </td>

                        <td class="px-5 py-5">
                            <input
                                type="text"
                                id="judul"
                                name="judul"
                                value="{{ old('judul', $agenda->judul) }}"
                                required
                                class="w-full rounded-lg border border-slate-200 px-4 py-2.5 text-sm text-slate-700 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100"
                                placeholder="Masukkan judul agenda">
                        </td>
                    </tr>

                    {{-- DESKRIPSI --}}
                    <tr>
                        <td class="bg-slate-50 px-5 py-5 align-top">
                            <label for="deskripsi"
                                   class="text-sm font-semibold text-slate-700">
                                Deskripsi
                            </label>
                        </td>

                        <td class="px-5 py-5">
                            <textarea
                                id="deskripsi"
                                name="deskripsi"
                                rows="4"
                                class="w-full resize-none rounded-lg border border-slate-200 px-4 py-2.5 text-sm text-slate-700 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100"
                                placeholder="Masukkan deskripsi agenda">{{ old('deskripsi', $agenda->deskripsi) }}</textarea>
                        </td>
                    </tr>

                    {{-- TANGGAL --}}
                    <tr>
                        <td class="bg-slate-50 px-5 py-5">
                            <label for="tanggal"
                                   class="text-sm font-semibold text-slate-700">
                                Tanggal
                            </label>
                        </td>

                        <td class="px-5 py-5">
                            <input
                                type="date"
                                id="tanggal"
                                name="tanggal"
                                value="{{ old('tanggal', $agenda->tanggal?->format('Y-m-d')) }}"
                                required
                                class="rounded-lg border border-slate-200 px-4 py-2.5 text-sm text-slate-700 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">
                        </td>
                    </tr>

                    {{-- WAKTU --}}
                    <tr>
                        <td class="bg-slate-50 px-5 py-5">
                            <label class="text-sm font-semibold text-slate-700">
                                Waktu
                            </label>
                        </td>

                        <td class="px-5 py-5">
                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center">

                                <input
                                    type="time"
                                    name="waktu_mulai"
                                    value="{{ old('waktu_mulai', $agenda->waktu_mulai ? substr($agenda->waktu_mulai, 0, 5) : '') }}"
                                    class="rounded-lg border border-slate-200 px-4 py-2.5 text-sm text-slate-700 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">

                                <span class="text-sm text-slate-400">
                                    sampai
                                </span>

                                <input
                                    type="time"
                                    name="waktu_selesai"
                                    value="{{ old('waktu_selesai', $agenda->waktu_selesai ? substr($agenda->waktu_selesai, 0, 5) : '') }}"
                                    class="rounded-lg border border-slate-200 px-4 py-2.5 text-sm text-slate-700 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">

                            </div>
                        </td>
                    </tr>

                    {{-- LOKASI --}}
                    <tr>
                        <td class="bg-slate-50 px-5 py-5">
                            <label for="lokasi"
                                   class="text-sm font-semibold text-slate-700">
                                Lokasi
                            </label>
                        </td>

                        <td class="px-5 py-5">
                            <input
                                type="text"
                                id="lokasi"
                                name="lokasi"
                                value="{{ old('lokasi', $agenda->lokasi) }}"
                                class="w-full rounded-lg border border-slate-200 px-4 py-2.5 text-sm text-slate-700 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100"
                                placeholder="Masukkan lokasi kegiatan">
                        </td>
                    </tr>

                    {{-- PENYELENGGARA --}}
                    <tr>
                        <td class="bg-slate-50 px-5 py-5">
                            <label for="penyelenggara"
                                   class="text-sm font-semibold text-slate-700">
                                Penyelenggara
                            </label>
                        </td>

                        <td class="px-5 py-5">
                            <input
                                type="text"
                                id="penyelenggara"
                                name="penyelenggara"
                                value="{{ old('penyelenggara', $agenda->penyelenggara) }}"
                                class="w-full rounded-lg border border-slate-200 px-4 py-2.5 text-sm text-slate-700 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100"
                                placeholder="Masukkan penyelenggara">
                        </td>
                    </tr>

                    {{-- STATUS --}}
                    <tr>
                        <td class="bg-slate-50 px-5 py-5">
                            <label for="status"
                                   class="text-sm font-semibold text-slate-700">
                                Status
                            </label>
                        </td>

                        <td class="px-5 py-5">
                            <select
                                id="status"
                                name="status"
                                required
                                class="rounded-lg border border-slate-200 px-4 py-2.5 text-sm text-slate-700 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">

                                <option value="akan_datang"
                                    {{ old('status', $agenda->status) === 'akan_datang' ? 'selected' : '' }}>
                                    Akan Datang
                                </option>

                                <option value="selesai"
                                    {{ old('status', $agenda->status) === 'selesai' ? 'selected' : '' }}>
                                    Selesai
                                </option>

                            </select>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

        {{-- BUTTON --}}
<div class="mt-8 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">

    {{-- KEMBALI --}}
    <a href="{{ route('admin.agenda.index') }}"
       style="background-color: #facc15; color: #0f172a;"
       class="inline-flex items-center justify-center rounded-lg px-7 py-3 text-sm font-bold shadow-sm">
        ← Kembali
    </a>

    {{-- SIMPAN PERUBAHAN --}}
    <button
        type="submit"
        style="background-color: #16a34a; color: white;"
        class="inline-flex items-center justify-center rounded-lg px-7 py-3 text-sm font-bold shadow-sm">
        Simpan Perubahan
    </button>

</div>

</div>

        </div>

    </form>

</div>

</body>
</html>