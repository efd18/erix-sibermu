# Kopi Rakyat
Web profil kedai kopi dengan sistem login sebagai pengelola.

# Fitur
- Halaman profil kedai, menu dan galeri
- Login sebagai pengelola "Kelola"
- Dashboard yang hanya dapat dibuka setelah login
- Logout "Keluar"

# Teknologi
- Laravel 13
- Bootstrap 5.3 (dimuat melalui CDN)
- MySql

# Akun Demo
Email: admin@kopirakyat.com
Kata sandi: Admin1234

# Persyaratan
- PHP 8.3 atau lebih baru
- Composer
- Node.js dan npm
- MySQL

# Cara menjalankannya di Windows
1. Buka terminal pada folder proyek

2. Pasang dependensi PHP:

    ```powershell
   composer install
   ```

3. Buat file konfigurasi lokal

    ```powershell
    Copy-Item .env.example .env
    php artisan key:generate
    ```

4. Pastikan server MySQL berjalan dan database yang namanya sesuai dengan DB_DATABASE di .env sudah dibuat. Sesuaikan nilai DB_* di .env jika konfigurasi MySQL kamu berbeda.

5. Buat tabel dan akun demo

    ```powershell
    php artisan migrate
    php artisan db:seed
    ```

6. Pasang dan bangun aset frontend
    ```powershell
    npm install
    npm run build
    ```

7. Jalankan Laravel

    ```powershell
   php artisan serve
   ```

8. Buka alamat yang muncul di terminal, biasanya http://127.0.0.1:8000

Bootstrap dimuat melalui CDN, memerlukan koneksi internet agar tampilannya termuat.