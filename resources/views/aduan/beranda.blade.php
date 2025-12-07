@extends('layouts.app')

@section('content')

<style>
    /* AGAR HERO TULISANNYA BENAR-BENAR TENGAH */
    .hero-container {
        position: relative;
        top: -20px;            /* teks dinaikkan */
    }
</style>

<div class="hero d-flex flex-column justify-content-center text-center"
    style="
        background:
            linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
            url('{{ asset('images/prambanan.jpg') }}');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 600px;
        color: white;
    "
>
    <div class="container hero-container">

        {{-- JUDUL UTAMA --}}
        <h1 class="fw-bold mb-2"
            style="
                font-size: 2.3rem;
                margin-bottom: 6px;
            ">
            Selamat Datang
        </h1>

        {{-- SUBTITLE --}}
        <p class="mb-3"
            style="
                font-size: 1.15rem;
                font-weight: 500;
                margin-bottom: 20px;
            ">
            Website Pengaduan Masyarakat Kabupaten Klaten
        </p>

        {{-- BACKGROUND PUTIH TRANSPARAN FULL WIDTH --}}
        <div style="
            width: 100vw;                        /* BENAR-BENAR FULL LAYAR */
            margin-left: 50%;
            margin-top: 60px;
            transform: translateX(-50%);         /* AGAR TETAP CENTER */
            background: rgba(255,255,255,0.35);  /* transparan putih */
            backdrop-filter: blur(0.5px);
            padding: 25px 0;                     /* FULL kiri-kanan */
            border-radius: 0;                    /* polos */
        ">
            <p style="
                font-size: 1rem;
                margin: 0;
                line-height: 1.45;
                color: white;
            ">
                Laporkan kerusakan fasilitas umum dengan mudah <br>
                dan pantau progres perbaikannya secara real-time
            </p>
        </div>

    </div>
</div>



{{-- STATISTIK --}}
<div class="container" style="margin-top: 80px; margin-bottom: 80px;">
    <div class="row text-center g-4">

        {{-- TOTAL LAPORAN --}}
        <div class="col-md-4">
            <div class="card shadow"
                style="
                    border: 3px solid #28a745;
                    border-radius: 20px;
                    padding: 10px;
                ">
                <div class="card-body">
                    <h2 class="text-success fw-bold" style="font-size: 45px;">{{ $total }}</h2>
                    <p class="mb-0">Total Laporan</p>
                </div>
            </div>
        </div>

        {{-- SELESAI --}}
        <div class="col-md-4">
            <div class="card shadow"
                style="
                    border: 3px solid #dc3545;
                    border-radius: 20px;
                    padding: 10px;
                ">
                <div class="card-body">
                    <h2 class="text-danger fw-bold" style="font-size: 45px;">{{ $selesai }}</h2>
                    <p class="mb-0">Laporan selesai</p>
                </div>
            </div>
        </div>

        {{-- PROSES --}}
        <div class="col-md-4">
            <div class="card shadow"
                style="
                    border: 3px solid #0d6efd;
                    border-radius: 20px;
                    padding: 10px;
                ">
                <div class="card-body">
                    <h2 class="text-primary fw-bold" style="font-size: 45px;">{{ $proses }}</h2>
                    <p class="mb-0">Dalam Proses</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
