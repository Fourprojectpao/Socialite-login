
# Login Socialite | laravel livewire edition
Social Login Laravel - livewire edition merukapan halaman login dengan mengambil API dari sosial media 

Proyek ini dibangun menggunakan framework Laravel.
Aplikasi ini menyediakan fitur autentikasi pengguna, termasuk login dan pendaftaran, serta integrasi dengan platform media sosial menggunakan Laravel Socialite. Proyek ini juga menggunakan template Argon Dashboard Tailwind untuk tampilan antarmuka yang modern dan responsif.


Fitur Utama:
1. Autentikasi Pengguna: Pengguna dapat mendaftar dan login menggunakan email dan password.
2. Login dengan Media Sosial: Integrasi dengan Google dan GitHub untuk login menggunakan akun media sosial.
3. Dashboard: Antarmuka pengguna yang menarik dan responsif menggunakan template Argon Dashboard Tailwind.
4. Manajemen Pengguna: Pengguna dapat mengelola profil mereka setelah login.
Struktur Proyek

Frontend: Menggunakan Vue.js dengan Inertia.js untuk membangun antarmuka pengguna yang dinamis.
Backend: Menggunakan Laravel sebagai framework utama untuk menangani logika bisnis dan manajemen data.
Database: Menggunakan migrasi Laravel untuk mengelola skema database
=======
## Persyaratan

- PHP >= 7.3
- Composer
- Node.js
- NPM
  
##Instalasi
# Create the Laravel application...
composer create-project laravel/laravel login-socialite
cd login-socialite

# Install Breeze and dependencies...
composer require laravel/breeze - livewire-functional
composer require laravel/socialite
npm install && npm run dev

# Run database migrations...
php artisan migrate

Git Clone
# Clone repository ini:
   git clone 

# Install dependensi PHP:
   composer install


# Install dependensi JavaScript:
   npm install

# Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:
   cp .env.example -> .env

# Generate kunci aplikasi:
   php artisan key:generate

# Migrasi dan seed database:
   php artisan migrate --seed

# Jalankan server lokal:
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

