<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    /**
     * Menampilkan daftar berita.
     */
    public function index()
    {
        $informasi = Informasi::orderBy('tanggal', 'desc')->get();

        return view('admin.informasi.index', compact('informasi'));
    }


    /**
     * Menampilkan halaman tambah berita.
     */
    public function create()
    {
        return view('admin.informasi.create');
    }


    /**
     * Menyimpan berita baru.
     */
    public function store(Request $request)
    {
          dd($_FILES);
        // Validasi data
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'ringkasan' => 'required|string',

            // Isi berita boleh kosong jika belum digunakan
            'isi' => 'nullable|string',

            // Gambar
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        // Jika ada gambar yang diupload
        if ($request->hasFile('gambar')) {

            $data['gambar'] = $request
                ->file('gambar')
                ->store('berita', 'public');

        }


        // Simpan berita
        Informasi::create($data);


        return redirect()
            ->route('admin.informasi.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }


    /**
     * Menampilkan form edit berita.
     */
    public function edit($id)
    {
        $informasi = Informasi::findOrFail($id);

        return view('admin.informasi.edit', compact('informasi'));
    }


    /**
     * Memperbarui berita.
     */
    public function update(Request $request, $id)
    {
        // Cari berita berdasarkan ID
        $informasi = Informasi::findOrFail($id);


        // Validasi data
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'ringkasan' => 'required|string',

            // Isi berita
            'isi' => 'nullable|string',

            // Gambar baru (opsional)
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        // Jika admin mengupload gambar baru
        if ($request->hasFile('gambar')) {

            // Hapus gambar lama jika ada
            if ($informasi->gambar) {

                Storage::disk('public')->delete($informasi->gambar);

            }


            // Simpan gambar baru
            $data['gambar'] = $request
                ->file('gambar')
                ->store('berita', 'public');

        }


        // Update data berita
        $informasi->update($data);


        return redirect()
            ->route('admin.informasi.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }


    /**
     * Menghapus berita.
     */
    public function destroy($id)
    {
        // Cari berita
        $informasi = Informasi::findOrFail($id);


        // Jika ada gambar, hapus gambar dari storage
        if ($informasi->gambar) {

            Storage::disk('public')->delete($informasi->gambar);

        }


        // Hapus berita dari database
        $informasi->delete();


        return redirect()
            ->route('admin.informasi.index')
            ->with('success', 'Berita berhasil dihapus!');
    }
}