<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous">
    </head>
    <body class="bg-body-tertiary">
        <nav class="navbar bg-white border-bottom">
            <div class="container">
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    Dashboard
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">
                        Keluar
                    </button>
                </form>
            </div>
        </nav>

        <main class="container py-5">
            <div class="mb-4">
                <p class="text-uppercase text-secondary small mb-2">Dashboard Pengelola</p>
                <h1 class="h2 mb-2">
                    Hai, Selamat datang, {{ auth()->user()->name }}
                </h1>
                <p class="text-body-secondary">
                    Akses cepat ke informasi Kopi Rakyat.
                </p>
            </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <img 
                    src="{{ asset('images/kr-kopi.jpg') }}" 
                    class="card-img-top" 
                    alt="Menu Kopi Rakyat">
                <div class="card-body">
                    <h5 class="card-title">Menu</h5>
                    <p class="card-text">Kelola Menu yang ada di Kopi Rakyat.</p>
                    <a href="/#menu" class="btn btn-primary">Kelola Menu</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <img 
                    src="{{ asset('images/kr-bar.jpg') }}" 
                    class="card-img-top" 
                    alt="Menu Kopi Rakyat">
                <div class="card-body">
                    <h5 class="card-title">Tentang</h5>
                    <p class="card-text">Ceritakan Siapa kita - Kopi Rakyat.</p>
                    <a href="/#tentang" class="btn btn-primary">Ubah Profil</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <img 
                    src="{{ asset('images/kr-meja.jpg') }}" 
                    class="card-img-top" 
                    alt="Menu Kopi Rakyat">
                <div class="card-body">
                    <h5 class="card-title">Galeri</h5>
                    <p class="card-text">Kelola Galeri, foto suasana dan foto menu terbaru dan unggulan.</p>
                    <a href="/#galeri" class="btn btn-primary">Kelola Galeri</a>
                </div>
            </div>
        </div>
    </div>

            <div class="alert alert-light border mt-4 mb-0">
                Login sebagai <strong>{{ auth()->user()->email }}</strong>
            </div>
        </main>
    </body>
</html>