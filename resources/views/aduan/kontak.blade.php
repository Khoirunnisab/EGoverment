@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 40px; margin-bottom: 50px;">

    {{-- CARD LUAR PUTIH --}}
    <div class="p-4 p-md-5 shadow rounded-4" 
        style="background: white; border-radius: 20px;">

        {{-- JUDUL --}}
        <h3 class="text-center mb-4" style="font-weight: 600;">
            Hubungi Kami
        </h3>

        {{-- CARD DALAM BIRU --}}
        <div class="position-relative p-4 rounded-4"
            style="background: #e9f2fc; border-radius: 18px;">

            {{-- LOGO BESAR TRANSPARAN --}}
            <img src="{{ asset('images/sijakka.png') }}"
                class="position-absolute top-50 start-50 translate-middle"
                style="opacity: 0.12; width: 340px; pointer-events: none;" />

            <div class="row">

                {{-- KOLOM KIRI --}}
                <div class="col-md-6" style="position: relative; z-index: 5;">

                    {{-- INFORMASI KONTAK --}}
                    <h5 class="mb-3" style="font-weight: 600;">Informasi Kontak</h5>

                    <div class="d-flex gap-2 mb-3">
                        <span style="font-size: 18px;">📍</span>
                        <p class="mb-0" style="font-size: 14px;">
                            Jl. Pemuda No. 294, Bareng Lor, Klaten Utara <br>
                            Kabupaten Klaten, Jawa Tengah 57438
                        </p>
                    </div>

                    <div class="d-flex gap-2 mb-3">
                        <span style="font-size: 18px;">✉️</span>
                        <p class="mb-0" style="font-size: 14px;">
                            pengaduan@klatenkab.go.id <br>
                            pinfo@klatenkab.go.id
                        </p>
                    </div>

                    <div class="d-flex gap-2 mb-3">
                        <span style="font-size: 18px;">📞</span>
                        <p class="mb-0" style="font-size: 14px;">
                            (0272) 32160 <br>
                            Hotline: 0800-123-4567
                        </p>
                    </div>

                    <div class="d-flex gap-2 mb-4">
                        <span style="font-size: 18px;">🌐</span>
                        <p class="mb-0" style="font-size: 14px;">
                            Website <br>
                            www.klatenkab.go.id
                        </p>
                    </div>

                    {{-- JAM OPERASIONAL --}}
                    <h5 class="mb-3" style="font-weight: 600;">Jam Operasional</h5>

                    <div class="p-3 rounded-3 d-flex justify-content-between"
                        style="background: #d6e4f5;">

                        <div style="font-size: 14px;">
                            <p class="mb-1"><strong>Senin – Jumat</strong></p>
                            <p class="mb-1"><strong>Sabtu</strong></p>
                            <p class="mb-0"><strong>Minggu & Libur</strong></p>
                        </div>

                        <div class="text-end" style="font-size: 14px;">
                            <p class="mb-1">08:00 – 16:00 WIB</p>
                            <p class="mb-1">08:00 – 12:00 WIB</p>
                            <p class="mb-0">Tutup</p>
                        </div>
                    </div>

                    <p class="mt-2 mb-0" style="font-size: 12px; color: #555;">
                        * Layanan pengaduan online 24/7
                    </p>

                </div>

                {{-- KOLOM KANAN (LOGO UTAMA) --}}
                <div class="col-md-6 d-flex justify-content-center align-items-center"
                    style="position: relative; z-index: 5;">

                    <img src="{{ asset('images/logo sijakka.png') }}" 
                        style="
                            width: 240px;          /* LEBIH BESAR */
                            opacity: 0.55;         /* LEBIH TRANSPARAN */
                            display: block;
                            margin: 0 auto;        /* BENAR-BENAR TENGAH */
                        "
                    />

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
