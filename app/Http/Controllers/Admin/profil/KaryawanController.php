<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::latest()->get();

        return view('admin.profil.karyawan', compact('karyawans'));
    }

    public function create()
    {
        return view('admin.profil.karyawan-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'nullable',
            'jabatan' => 'nullable',
            'bidang' => 'required|in:IKP,E-Government,Statistik',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $karyawan = new Karyawan();

        $karyawan->nama = $request->nama;
        $karyawan->nip = $request->nip;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->bidang = $request->bidang;

        if ($request->hasFile('foto')) {
            $karyawan->foto = $request->file('foto')->store(
                'karyawan',
                'public'
            );
        }

        $karyawan->save();

        return redirect()
    ->route('admin.profil.index')
    ->with('success', 'Karyawan berhasil ditambahkan.');
    }

    public function edit(Karyawan $karyawan)
    {
        return view('admin.profil.karyawan-edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'nullable',
            'jabatan' => 'nullable',
            'bidang' => 'required|in:IKP,E-Government,Statistik',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $karyawan->nama = $request->nama;
        $karyawan->nip = $request->nip;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->bidang = $request->bidang;

        if ($request->hasFile('foto')) {

            if ($karyawan->foto) {
                Storage::disk('public')->delete($karyawan->foto);
            }

            $karyawan->foto = $request->file('foto')->store(
                'karyawan',
                'public'
            );
        }

        $karyawan->save();

        return redirect()
            ->route('admin.profil.karyawan')
            ->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function destroy(Karyawan $karyawan)
    {
        if ($karyawan->foto) {
            Storage::disk('public')->delete($karyawan->foto);
        }

        $karyawan->delete();

        return redirect()
            ->route('admin.profil.karyawan')
            ->with('success', 'Karyawan berhasil dihapus.');
    }
}