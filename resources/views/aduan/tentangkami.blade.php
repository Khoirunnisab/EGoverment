@extends('layouts.app')

@section('content')

{{-- HEADER GELAP --}}
<div style="
    background: #2b2b2b;
    color: white;
    padding: 28px 0;
    text-align: center;
">
    <h3 class="m-0" style="
        font-weight: 500;
        font-size: 1.45rem;
        letter-spacing: 0.5px;
    ">
        Tentang <i>SIJAKKA</i>
    </h3>
</div>

{{-- CARD UTAMA PUTIH --}}
<div class="container" style="margin-top: 45px;">
    <div style="
        background: #ffffff;
        border-radius: 18px;
        padding: 45px 30px;
        position: relative;
        overflow: hidden;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    ">

        {{-- LOGO TRANSPARAN BESAR --}}
        <img 
            src="{{ asset('images/logo-sijakka.png') }}"
            style="
                position: absolute;
                top: 50%;
                left: 50%;
                width: 330px;
                opacity: 0.08;
                transform: translate(-50%, -50%);
                pointer-events: none;
            "
        >

        {{-- JUDUL DALAM CARD --}}
        <h4 style="
            font-weight: 600;
            margin-bottom: 22px;
            font-size: 1.35rem;
            letter-spacing: 0.5px;
        ">
            Tentang <i>SIJAKKA</i>
        </h4>

        {{-- PARAGRAF --}}
        <p style="text-align: justify; max-width: 830px; margin: 0 auto;">
            SIJAKKA merupakan singkatan dari Sistem Pengaduan Jalan Kabupaten Klaten, 
            sebuah inovasi digital yang dikembangkan untuk meningkatkan pelayanan publik 
            di Kabupaten Klaten dalam bidang infrastruktur jalan. Melalui platform ini,
            masyarakat dapat melaporkan kerusakan jalan secara cepat, mudah, dan transparan 
            hanya dengan beberapa langkah sederhana.
        </p>

        {{-- LIST TUJUAN --}}
        <div style="text-align: left; max-width: 830px; margin: 32px auto 0 auto;">
            <p><strong>Tujuan SIJAKKA</strong></p>

            <ol style="line-height: 1.7; margin-left: 18px;">
                <li>Menyediakan sarana pengaduan kerusakan jalan yang cepat, mudah, dan efisien.</li>
                <li>Meningkatkan partisipasi masyarakat dalam pembangunan infrastruktur daerah.</li>
                <li>Mendukung transparansi dan akuntabilitas kinerja pemerintah daerah.</li>
                <li>Mempercepat proses penanganan dan perbaikan jalan rusak di wilayah Klaten.</li>
            </ol>
        </div>

    </div>
</div>

{{-- FOOTER BIRU --}}
<div style="
    background: #cae4ff;
    margin-top: 50px;
    margin-bottom: 0;
    padding: 35px 30px 40px 30px;
    width: 100%;
">
    <div class="container">
        <div class="row">

            {{-- KOLOM KIRI --}}
            <div class="col-md-4">
                <img src="{{ asset('images/logo jateng.png') }}" width="90" class="mb-3">

                <p style="font-weight: 600;">Sistem Pengaduan Jalan Kabupaten Klaten</p>

                <p style="font-size: 14px;">
                    <strong>Alamat Kantor</strong> <br>
                    Jl. Pemuda No.248, Dusun I Tegalyoso,  
                    Kabupaten Klaten, Jawa Tengah 57428
                </p>

                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.7198938379596!2d110.603!3d-7.7019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a43f8f3b1e76b%3A0xadc7ca2c89bb5b1!2sKantor%20Bupati%20Klaten!5e0!3m2!1sen!2sid!4v1700000000"
                    width="100%"
                    height="160"
                    style="border-radius: 10px; border: 0;"
                ></iframe>
            </div>

            {{-- KOLOM TENGAH --}}
            <div class="col-md-4">
                <p style="font-weight: 600;">Ikuti Kami Kanal Informasi Lainnya</p>

                <p><i class="bi bi-globe"></i> klatenkab.go.id</p>
                <p><i class="bi bi-instagram"></i> @sijakkaofficial</p>
                <p><i class="bi bi-youtube"></i> SijakkaOfficial</p>
            </div>

            {{-- KOLOM KANAN --}}
            <div class="col-md-4">
                <p style="font-weight: 600;">Pengunjung</p>

                <p>Pengunjung Hari Ini : 2</p>
                <p>Pengunjung Online : 5</p>
                <p>Total Pengunjung : 1.900</p>
            </div>

        </div>
    </div>
</div>

@endsection
