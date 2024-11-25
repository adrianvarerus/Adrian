<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WEB PROFILE - Perusahaan XYZ')</title>
    <!-- Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-ligth bg-ligth shadow">
            <div class="container">
                <a class="navbar-brand text-start" href="/">Company.</a>
                <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mx-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link {{ Request::is('about') ? 'active' : '' }}">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <a href="/login" class="btn btn-outline-dark me-2 shadow">Login
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                    <a href="/register" class="btn btn-signup shadow">Sign Up
                        <i class="fas fa-user-plus"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <div class="mb-5 mt-5">
        @yield('content')
    </div>
    <!-- Bagian Footer -->
    <footer class="footer bg-dark text-light py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <img src="{{ asset('logo1.png') }}" alt="Perusahaan XYZ" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h5>IndoBricket</h5>
                    <p>Kami adalah perusahaan inovatif yang berfokus pada pengembangan solusi teknologi terbaik untuk
                        memenuhi kebutuhan bisnis klien kami.</p>
                </div>
                <div class="col-lg-3">
                    <h5>Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> Jalan Flamboyan Blok A22, Medan, Indonesia</li>
                        <li><i class="bi bi-telephone-fill"></i> +62 3556621 789</li>
                        <li><i class="bi bi-envelope-fill"></i> indobricket@gmail.com.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JS dari CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>