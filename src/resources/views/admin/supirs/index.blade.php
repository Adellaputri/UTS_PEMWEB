@extends('layouts.admin')

@section('content')
<div class="card">
    <div class='card-header d-flex justify-content-between align-items-center'>
        <h3>Profile Supir</h3>
        <a href="{{ route('supirs.create')}}" class="btn btn-primary">Tambah Supir</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Supir</th>
                        <th>Gambar Supir</th>
                        <th>Harga Sewa</th>
                        <th>Status Supir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($supirs as $supir)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $supir->nama_supir }}</td>
                        <td>
                            <img src="{{ Storage::url($supir->gambar)}}" width="200">
                        </td>
                        <td>{{ $supir->harga_sewa }}</td>
                        <td>{{ $supir->status }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                    @empty 
                    <tr>
                        <td colspan="6" class="text-center">Data Kosong</td>
                    </tr>
                    @endforelse 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection