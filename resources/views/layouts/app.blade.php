<!DOCTYPE html>
<html>
<head>
    <title>SIJAKKA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f4f7fa; }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)),
            url('https://i.ibb.co/kXz7sKL/prambanan.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 20px;
            text-align: center;
        }

        /* FOOTER */
        .footer {
            background: #1976d2;
            color: white;
            padding: 30px;
            margin-top: 60px;
        }

        /* BACK BUTTON */
        .btn-back-oval {
            background: rgba(200,200,200,0.4);
            color: #fff;
            padding: 6px 16px;
            border-radius: 999px;
            text-decoration: none;
            font-size: .85rem;
            font-weight: 500;
            transition: .3s;
        }
        .btn-back-oval:hover {
            background: rgba(200,200,200,0.7);
            color: #fff;
        }

       /* NAVBAR KHUSUS HALAMAN BERANDA */
.nav-home {
    background: transparent !important;
    box-shadow: none !important;
    border: none !important;
    position: absolute;       /* tempel di atas gambar */
    width: 100%;
    top: 0;
    left: 0;
    z-index: 10;
}

.nav-home .navbar-brand,
.nav-home .nav-link,
.nav-home a {
    color: white !important;      /* biar kelihatan di atas foto */
}

.nav-home .nav-link:hover {
    opacity: 0.7;
}

/* Toggle button transparan */
.nav-home .navbar-toggler {
    background: rgba(255,255,255,0.35) !important;
    border: none;
}

    </style>
</head>
<body>


{{-- ===========================================================
     NAV 1 — BERANDA (TRANSPARAN, POLOS)
=========================================================== --}}
@if (Request::is('/'))
<nav class="navbar nav-home px-4 navbar-expand-lg"
     style="position: absolute; z-index: 10; height: 80px;">


    <!-- LOGO KIRI -->
    <div class="d-flex align-items-center gap-3">
        <img src="/images/logo sijakka.png" alt="SIJAKKA" height="60">
        <img src="/images/logo jateng.png" alt="Jateng" height="55">
        <span class="fw-bold fs-5 text-white">SIJAKKA</span>
    </div>

    <!-- KANAN -->
    <div class="ms-auto d-flex align-items-center gap-3">

        <!-- LOGIN -->
        <a href="/login" class="fw-semibold text-white text-decoration-none">
            Login
        </a>

        <!-- TOGGLE -->
        <button class="btn text-white" type="button" data-bs-toggle="collapse" data-bs-target="#menuBeranda"
            style="background: rgba(255,255,255,0.25); backdrop-filter: blur(2px); border-radius: 8px;">
            ☰
        </button>

    </div>

</nav>


<!-- SUBMENU -->
<div class="collapse" id="menuBeranda"
     style="position: absolute; top: 80px; right: 0; width: 10%; z-index: 9;">
    <div class="p-3 text-end"
        style="background: rgba(0,0,0,0.45); backdrop-filter: blur(2px);">
        
        <a href="/buat-aduan" class="d-block text-white mb-2" style="text-decoration: none;">Buat Aduan</a>
        <a href="/cek-status" class="d-block text-white mb-2" style="text-decoration: none;">Cek Status</a>
        <a href="/tentang" class="d-block text-white mb-2" style="text-decoration: none;">Tentang Kami</a>
        <a href="/kontak" class="d-block text-white" style="text-decoration: none;">Kontak</a>

    </div>
</div>




{{-- ===========================================================
     NAV 2 — UMUM (SELain BERANDA & BUKAN ADMIN)
=========================================================== --}}
@elseif (!isset(auth()->user()->role) || auth()->user()->role !== 'admin')

<nav class="navbar navbar-dark bg-primary px-4">

    {{-- LOGO KIRI --}}
    <img src="/images/logo jateng.png" height="55">

    {{-- BERANDA DIKANAN --}}
    <a href="/" class="navbar-brand ms-auto fw-bold" style="font-size: 0.95rem;">
        Beranda
    </a>

    {{-- BURGER --}}
    <button class="btn btn-light ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#simpleMenu">
        ☰
    </button>
</nav>

<div class="collapse" id="simpleMenu">
    <div class="bg-primary p-3 text-end">
        <a href="/buat-aduan" class="d-block text-white text-decoration-none mb-2">Buat Aduan</a>
        <a href="/cek-status" class="d-block text-white text-decoration-none mb-2">Cek Status</a>
        <a href="/tentang" class="d-block text-white text-decoration-none mb-2">Tentang Kami</a>
        <a href="/kontak" class="d-block text-white text-decoration-none">Kontak</a>
    </div>
</div>


{{-- ===========================================================
     NAV 3 — ADMIN
=========================================================== --}}
@else
<nav class="navbar navbar-dark bg-dark px-4">
    <div class="d-flex align-items-center gap-3">
        <img src="/images/logo jateng.png" height="55">
        <span class="navbar-brand fw-bold">Admin Panel</span>
    </div>

    <a href="/logout" class="btn btn-danger ms-auto">Logout</a>
</nav>
@endif



{{-- ===========================================================
     CONTENT
=========================================================== --}}
@yield('content')



{{-- ===========================================================
     FOOTER
=========================================================== --}}
<footer class="footer text-center pt-3 pb-1" style="margin-top: 0; padding-top: 0;">
    <p>© SIJAKKA Kabupaten Klaten</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
