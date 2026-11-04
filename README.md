# Kopi Rakyat
Menggunakan Laravel dan Bootstrap
Web profile kedai kopi dengan nuansa Payakumbuh dan Limapuluh Kota.

# Isi halaman
Dalam proyek ini saya baru merapikan di 1 halaman utama
- Beranda
- Menu minuman dan camilan
- Galeri
- Tentang Kami
- Kontak

# Menjalankan proyek
Persyaratan: PHP 8.3+, Composer, dan Node.js/npm.

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve