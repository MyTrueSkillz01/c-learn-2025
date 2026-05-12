Nama : Ihsan Dwika Putra
NIM : 103012400119

# Laravel StudyGroup API

REST API menggunakan Laravel (versi 11) dengan autentikasi JWT, CRUD resource, relasi antar entitas (1:M), dan custom JSON exception handling.

## Fitur
1. **JWT Authentication**: Register & Login untuk mendapatkan token.
2. **Global JSON Exception Handling**: Format respons terstandarisasi untuk error 404, 401, 422, dan 500.
3. **CRUD Operations**: Endpoint penuh untuk entitas `Product`.
4. **Relational Data**: Relasi `Category` memiliki banyak `Product`. Mendukung Eager Loading (mencegah N+1).

## Persyaratan
* PHP 8.2 atau lebih baru
* Composer
* MySQL / PostgreSQL

## Cara Setup & Menjalankan Project

1. **Clone repository ini** (jika menggunakan git)
   ```bash
   git clone <url-repo-kamu>
   cd laravel-studygroup-api
