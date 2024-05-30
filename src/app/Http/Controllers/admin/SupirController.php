<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SupirStoreRequest;
use Illuminate\Http\Request;
use App\Models\Supir;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SupirController extends Controller
{
    public function index()
    {
        $supirs = Supir::latest()->get();
        return view('admin.supirs.index', compact('supirs'));
    }

    public function create()
    {
        return view('admin.supirs.create');
    }
    public function store(SupirStoreRequest $request)
    {
        if ($request->validated()) { 
            $gambar = $request->file('gambar')->store('assets/supir', 'public');
            $slug = Str::slug($request->nama_supir, '-');
            
           
        }
        return redirect()->route('supirs.index')->with([
            'message' => 'Data sukses dibuat',
            'alert-type' => 'success'
        ]);
    }

    public function show($id)
    {
        $supir = Supir::find($id);
        return view('admin.supirs.show', compact('supir'));
    }

    public function edit($id)
    {
        $supir = Supir::find($id);
        return view('admin.supirs.edit', compact('supir'));
    }
    public function update(SupirStoreRequest $request, Supir $supir)
    {
        if ($request->validated()) {
            if ($request->hasFile('image')) {
                File::delete('storage/' . $supir->image);
                $supirImage = $request->file('image')->store('assets/supir', 'public');
                $supir->update([
                    'nama_supir' => $request->nama_supir,
                    'harga_sewa' => $request->harga_sewa,
                    'usia' => $request->usia,
                    'status' => $request->status,
                    'deskripsi' => $request->deskripsi,
                    'sehat' => $request->sehat,
                    'driver_lisensi_lengkap' => $request->driver_lisensi_lengkap,
                    'berpengalaman' => $request->berpengalaman,
                    'gambar' => $supirImage,
                ]);
            }
        }
        return redirect()->route('supirs.index')->with([
            'message' => 'Data sukses diperbarui',
            'alert-type' => 'success'
        ]);
    }

    public function destroy($id)
    {
        $supir = Supir::find($id);

        if ($supir) {
            File::delete('storage/' . $supir->gambar);
            $supir->delete();
            return redirect()->route('admin.supirs.index')->with('success', 'Supir berhasil dihapus');
        } else {
            return redirect()->route('admin.supirs.index')->with('error', 'Supir tidak ditemukan');
 }
}
}