<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supir;

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
public function store(Request $request)
{
    // Validasi data dari request
    $validatedData = $request->validate([
        'nama' => 'required',
        'nomor_telepon' => 'required',
        // Tambahkan validasi lainnya sesuai kebutuhan
    ]);

    // Simpan data supir baru ke dalam database
    Supir::create($validatedData);

    return redirect()->route('admin.supirs.index')->with('success', 'Supir berhasil ditambahkan');
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
public function update(Request $request, $id)
{
    // Validasi data dari request
    $validatedData = $request->validate([
        'nama' => 'required',
        'nomor_telepon' => 'required',
        // Tambahkan validasi lainnya sesuai kebutuhan
    ]);

    // Update data supir yang ada dalam database
    Supir::where('id', $id)->update($validatedData);

    return redirect()->route('admin.supirs.index')->with('success', 'Supir berhasil diperbarui');
}

public function destroy($id)
{
    // Hapus data supir berdasarkan ID
    Supir::destroy($id);

    return redirect()->route('admin.supirs.index')->with('success', 'Supir berhasil dihapus');
}
}