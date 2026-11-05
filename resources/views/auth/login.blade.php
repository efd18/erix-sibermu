<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Masuk - Kopi Rakyat</title>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous">
    </head>
    <body class="bg-body-tertiary">
        <main class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
            <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5 text-center">
                        <img
                            src="{{ asset('images/kr-management.png') }}"
                            width="240"
                            alt="Kopi Rakyat"
                            class="img-fluid mb-3">
                        
                        <h1 class="h3 mb-2">Menuju Dashboard</h1>
                        <p class="text-body-secondary mb-4">
                            Selamat Datang.! Masuk sebagai Staff.
                        </p>

                        <form method="POST" action="{{ route('login.authenticate') }}" class="text-start">
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first() }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control"
                                    autocomplete="username"
                                    value="{{ old('email') }}"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="form-control"
                                    autocomplete="current-password"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-dark w-100">
                                Masuk
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>