@extends('layouts.app')

@section('content')

<style>
    .label-title {
        font-size: 0.85rem;
        color: #6c757d;
        margin-bottom: 2px;
    }
    .value-text {
        font-size: 1rem;
        font-weight: 600;
    }
</style>

<div class="container mt-5">

    {{-- CARD PENCARIAN --}}
    <div class="card shadow-sm border-0 p-4 mb-4">
        <h4 class="mb-3 fw-bold">🔍 Cek Status Aduan</h4>

        <form method="POST" action="/cek-status">
            @csrf
            <div class="input-group">
                <input class="form-control form-control-lg"
                       name="keyword"
                       placeholder="Masukkan Kode Aduan atau Nama">
                <button class="btn btn-primary btn-lg px-4">Cari</button>
            </div>
        </form>
    </div>


    {{-- JIKA DATA DITEMUKAN --}}
    @if(isset($aduan) && $aduan != null)
    <div class="card shadow-sm border-0 p-4 mb-4">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold text-primary mb-0">{{ $aduan->kode_aduan }}</h5>

            @php
                $badgeColor = match($aduan->status) {
                    'selesai' => 'success',
                    'diproses' => 'warning',
                    'ditolak' => 'danger',
                    default => 'secondary'
                };
            @endphp

            <span class="badge bg-{{ $badgeColor }} text-dark px-3 py-2" style="font-size: 14px;">
                {{ strtoupper($aduan->status) }}
            </span>
        </div>

        <hr>

        {{-- DETAILS --}}
        <div class="row mb-3">

            <div class="col-md-6 mb-3">
                <p class="label-title">Nama Pelapor</p>
                <p class="value-text">{{ $aduan->nama }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <p class="label-title">Tanggal Aduan</p>
                <p class="value-text">{{ $aduan->tanggal }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <p class="label-title">Kategori Fasilitas</p>
                <p class="value-text">{{ $aduan->kategori }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <p class="label-title">Lokasi Kerusakan</p>
                <p class="value-text">{{ $aduan->lokasi }}</p>
            </div>

        </div>

        <hr>

        {{-- Deskripsi --}}
        <div class="mb-3">
            <p class="label-title">Deskripsi Kerusakan</p>
            <div class="bg-light p-3 rounded">
                {{ $aduan->deskripsi }}
            </div>
        </div>

        {{-- Foto --}}
        @if($aduan->foto)
        <div class="text-center">
            <p class="label-title">Foto Aduan</p>
            <img src="{{ asset('storage/'.$aduan->foto) }}"
                 class="img-fluid rounded shadow-sm"
                 style="max-width: 420px;">
        </div>
        @endif

    </div>


    {{-- JIKA DATA TIDAK DITEMUKAN --}}
    @elseif(isset($aduan) && $aduan == null)
        <div class="alert alert-danger text-center">
            ❌ Data aduan tidak ditemukan.
        </div>
    @endif

</div>

@endsection
