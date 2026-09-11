<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\KepalaDinas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KepalaDinasController extends Controller
{
    public function index()
    {
        $kepalaDinas = KepalaDinas::first();

        return view('admin.profil.kepala-dinas', compact('kepalaDinas'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'nullable',
            'jabatan' => 'nullable',
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $kepalaDinas = KepalaDinas::first();

        if (!$kepalaDinas) {
            $kepalaDinas = new KepalaDinas();
        }

        $kepalaDinas->nama = $request->nama;
        $kepalaDinas->nip = $request->nip;
        $kepalaDinas->jabatan = $request->jabatan;
        $kepalaDinas->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {

            if ($kepalaDinas->foto) {
                Storage::disk('public')->delete($kepalaDinas->foto);
            }

            $kepalaDinas->foto = $request->file('foto')->store(
                'kepala-dinas',
                'public'
            );
        }

        $kepalaDinas->save();

        return redirect()
    ->route('admin.profil.index')
    ->with('success', 'Profil kepala dinas berhasil diperbarui.');
    }
}