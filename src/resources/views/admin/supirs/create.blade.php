@extends('layouts.admin')

@section('content')
    <div class="card">
    <div class="card header"></div>
        Form Tambah Data
    </div>
   
    <div class="card body">
        <form action="{{ route('supirs.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_supir">Nama Supir</label>
                <input type="text" name="nama_supir" class="form-control" value="{{ old('nama_supir')}}">
            </div>
            <div class="form-group">
                <label for="harga_sewa">Harga Sewa</label>
                <input type="number" name="harga_sewa" class="form-control"value="{{ old('harga_sewa')}}">
            </div>
            <div class="form-group">
                <label for="usia">Usia</label>
                <input type="number" name="usia" class="form-control"value="{{ old('usia')}}">
            </div>
            <div class="form-group">
                <label for="kinerja_supir">Kinerja Supir</label>
                <input type="text" name="kinerja_supir" class="form-control"value="{{ old('kinerja_supir')}}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak tersedia">Tidak Tersedia</option>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi"  class="form-control"  id="deskripsi" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="sehat">Sehat</label>
                <input type="text" name="sehat" class="form-control"value="{{ old('sehat')}}">
            </div>
            <div class="form-group">
                <label for="profesioanl">Profesional</label>
                <input type="text" name="profesional" class="form-control"value="{{ old('profesional')}}">
            </div>
            <div class="form-group">
                <label for="driver_lisensi_lengkap">Driver Lisensi Lengkap</label>
                <input type="text" name="driver_lisensi_lengkap" class="form-control"value="{{ old('driver_lisensi_lengkap')}}">
            </div>
            <div class="form-group">
                <label for="berpengalaman">Berpengalaman</label>
                <input type="text" name="berpengalaman" class="form-control"value="{{ old('berpengalaman')}}">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <div class="form-grup">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection