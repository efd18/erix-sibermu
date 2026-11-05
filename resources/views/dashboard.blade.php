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
                    <button type="submit" class="btn btn-outline-dark">
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
                        <div class="card-body">
                            <h2 class="h5">Menu</h2>
                            <p class="text-body-secondary">
                                Lihat daftar menu.
                            </p>
                            <a href="/#menu" class="btn btn-outline-dark btn-sm">
                                Lihat Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h5">Tentang</h2>
                            <p class="text-body-secondary">
                                Baca cerita dan informasi tentang Kopi Rakyat.
                            </p>
                            <a href="/#tentang" class="btn btn-outline-dark btn-sm">
                                Lihat Profil
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h5">Galeri</h2>
                            <p class="text-body-secondary">
                                Lihat kumpulan foto Kopi Rakyat.
                            </p>
                            <a href="/galeri" class="btn btn-outline-dark btn-sm">
                                Lihat Galeri
                            </a>
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