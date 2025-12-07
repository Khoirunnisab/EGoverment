@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">
    <div class="card form-card shadow p-4">

        <h4 class="text-center mb-4">Buat Aduan</h4>

        <form method="POST" action="/buat-aduan" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col">
                <label>Nama</label>
                <input class="form-control" name="nama">
            </div>
            <div class="col">
                <label>Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
            </div>
        </div>

        <label>Kategori Fasilitas</label>         
        <select class="form-control mb-3" name="kategori" required>
            <option value="">-- Pilih Kategori Fasilitas --</option>
            <option value="Jalan Raya">Jalan Raya</option>
            <option value="Lampu Penerangan">Lampu Penerangan</option>
            <option value="Trotoar">Trotoar</option>
            <option value="Saluran Air">Saluran Air</option>
        </select>

        <label>Lokasi</label>
        <input class="form-control mb-3" name="lokasi">

        <label>Deskripsi Kerusakan</label>
        <textarea class="form-control mb-3" rows="4" name="deskripsi"></textarea>

        <label>Upload Foto</label>
        <input type="file" class="form-control mb-4" name="foto">

        <div class="text-end">
            <button class="btn btn-primary px-4">Kirim</button>
        </div>

        </form>

    </div>
</div>

@endsection
