<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::latest('tanggal_kegiatan')
            ->paginate(10);

        return view('admin.kegiatan.index', compact('kegiatans'));
    }

    public function create()
    {
        return view('admin.kegiatan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal_kegiatan' => 'required|date',
            'waktu_mulai' => 'nullable',
            'waktu_selesai' => 'nullable',
            'lokasi' => 'nullable|string|max:255',
            'bidang_penyelenggara' => 'required|string|max:255',
            'peserta' => 'nullable|string',
            'deskripsi' => 'nullable|string',

            'berita_acara' => 'nullable|file|mimes:pdf|max:10240',
            'laporan_kegiatan' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        if ($request->hasFile('berita_acara')) {
            $validated['berita_acara'] = $request
                ->file('berita_acara')
                ->store('kegiatan/berita-acara', 'public');
        }

        if ($request->hasFile('laporan_kegiatan')) {
            $validated['laporan_kegiatan'] = $request
                ->file('laporan_kegiatan')
                ->store('kegiatan/laporan', 'public');
        }

        Kegiatan::create($validated);

        return redirect()
            ->route('admin.kegiatan.index')
            ->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function show(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.show', compact('kegiatan'));
    }

    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal_kegiatan' => 'required|date',
            'waktu_mulai' => 'nullable',
            'waktu_selesai' => 'nullable',
            'lokasi' => 'nullable|string|max:255',
            'bidang_penyelenggara' => 'required|string|max:255',
            'peserta' => 'nullable|string',
            'deskripsi' => 'nullable|string',

            'berita_acara' => 'nullable|file|mimes:pdf|max:10240',
            'laporan_kegiatan' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        if ($request->hasFile('berita_acara')) {

            if ($kegiatan->berita_acara) {
                Storage::disk('public')->delete(
                    $kegiatan->berita_acara
                );
            }

            $validated['berita_acara'] = $request
                ->file('berita_acara')
                ->store('kegiatan/berita-acara', 'public');
        }

        if ($request->hasFile('laporan_kegiatan')) {

            if ($kegiatan->laporan_kegiatan) {
                Storage::disk('public')->delete(
                    $kegiatan->laporan_kegiatan
                );
            }

            $validated['laporan_kegiatan'] = $request
                ->file('laporan_kegiatan')
                ->store('kegiatan/laporan', 'public');
        }

        $kegiatan->update($validated);

        return redirect()
            ->route('admin.kegiatan.index')
            ->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function destroy(Kegiatan $kegiatan)
    {
        if ($kegiatan->berita_acara) {
            Storage::disk('public')->delete(
                $kegiatan->berita_acara
            );
        }

        if ($kegiatan->laporan_kegiatan) {
            Storage::disk('public')->delete(
                $kegiatan->laporan_kegiatan
            );
        }

        $kegiatan->delete();

        return redirect()
            ->route('admin.kegiatan.index')
            ->with('success', 'Kegiatan berhasil dihapus.');
    }
}