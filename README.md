# Login Socialite
Proyek ini adalah aplikasi web yang dibangun menggunakan framework Laravel. Aplikasi ini menyediakan fitur autentikasi pengguna, termasuk login dan pendaftaran, serta integrasi dengan platform media sosial menggunakan Laravel Socialite. Proyek ini juga menggunakan template Argon Dashboard Tailwind untuk tampilan antarmuka yang modern dan responsif.

Fitur Utama:
1. Autentikasi Pengguna: Pengguna dapat mendaftar dan login menggunakan email dan password.
2. Login dengan Media Sosial: Integrasi dengan Google dan GitHub untuk login menggunakan akun media sosial.
3. Dashboard: Antarmuka pengguna yang menarik dan responsif menggunakan template Argon Dashboard Tailwind.
4. Manajemen Pengguna: Pengguna dapat mengelola profil mereka setelah login.
Struktur Proyek

Frontend: Menggunakan Vue.js dengan Inertia.js untuk membangun antarmuka pengguna yang dinamis.
Backend: Menggunakan Laravel sebagai framework utama untuk menangani logika bisnis dan manajemen data.
Database: Menggunakan migrasi Laravel untuk mengelola skema database.


## Persyaratan

- PHP >= 7.3
- Composer
- Node.js
- NPM

## Instalasi

1. Clone repository ini:
   git clone 

2. Install dependensi PHP:
   composer install


3. Install dependensi JavaScript:
   npm install

4. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:
   cp .env.example -> .env

5. Generate kunci aplikasi:
   php artisan key:generate

6. Migrasi dan seed database:
   php artisan migrate --seed

7. Jalankan server lokal:

   php artisan serve


## Penggunaan

1. Buka browser dan akses `http://localhost:8000`.
2. Untuk login menggunakan socialite, klik tombol "Sign up with Google" atau "Sign up with GitHub".

## Konfigurasi Socialite

Tambahkan konfigurasi berikut ke file `.env` Anda:
GITHUB_CLIENT_ID=your_github_client_id
GITHUB_CLIENT_SECRET=your_github_client_secret
GITHUB_REDIRECT_URI=http://localhost:8000/auth/github/login
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/login