@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow p-5 text-center">

        <div class="alert alert-success fw-bold">
            Aduan Berhasil Dikirim!
        </div>

        <h4 class="mb-3">Terima kasih, {{ $nama }}!</h4>
        <p class="text-muted">Aduan Anda telah kami catat dengan kode berikut:</p>

        <h2 class="fw-bold text-primary mb-4">{{ $kode }}</h2>

        <p class="text-muted mb-4">
            Simpan kode ini untuk mengecek status aduan Anda.
        </p>

        <a href="/cek-status" class="btn btn-outline-primary px-4 mb-1">Cek Status Aduan</a>
        <a href="/" class="btn btn-secondary px-4">Kembali ke Beranda</a>

    </div>

</div>

@endsection
