# 🏛️ Sistem Informasi Publik — Magang KOMINFO

> Platform informasi publik berbasis **Laravel 13** + **Tailwind CSS 4** untuk publikasi pengumuman, berita pemerintahan, dan kegiatan layanan publik.

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-13-red?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-%5E8.3-777BB4?style=flat-square&logo=php)
![Tailwind CSS](https://img.shields.io/badge/Tailwind-v4-38BDF8?style=flat-square&logo=tailwindcss)
![Vite](https://img.shields.io/badge/Vite-8-646CFF?style=flat-square&logo=vite)
![Pest](https://img.shields.io/badge/Tested%20with-Pest-FFC107?style=flat-square)

</div>

---

## 📋 Daftar Isi

- [Tentang Proyek](#-tentang-proyek)
- [Fitur](#-fitur)
- [Tech Stack](#-tech-stack)
- [Struktur Proyek](#-struktur-proyek)
- [Instalasi](#-instalasi)
- [Skrip Composer](#-skrip-composer)
- [Routes & Endpoint](#-routes--endpoint)
- [Skema Database](#-skema-database)
- [Testing](#-testing)

---

## 🎯 Tentang Proyek

Proyek ini merupakan sistem informasi publik sederhana yang dikembangkan sebagai bagian dari program **Magang KOMINFO**. Aplikasi menyediakan halaman landing yang menampilkan informasi terbaru serta halaman katalog informasi yang dapat diakses publik.

## ✨ Fitur

| Fitur | Deskripsi |
|---|---|
| 🏠 **Halaman Utama** | Menampilkan 3 informasi terbaru berdasarkan tanggal |
| 📰 **Katalog Informasi** | Daftar semua informasi terurut terbaru |
| 🔍 **Detail Informasi** | Halaman detail per informasi dengan gambar |
| 🖼️ **Upload Gambar** | Support gambar opsional pada setiap informasi |
| 🗂️ **Kategorisasi** | Informasi dikelompokkan berdasarkan kategori |

## 🛠️ Tech Stack

| Layer | Teknologi |
|---|---|
| **Backend** | Laravel 13, PHP ≥ 8.3 |
| **Frontend** | Blade Template, Tailwind CSS v4 |
| **Build Tool** | Vite 8 |
| **Database** | MySQL / PostgreSQL / SQLite |
| **Testing** | Pest v5 |

## 📂 Struktur Proyek

```text
app/
├── Http/Controllers/
│   ├── HomeController.php        # Landing page (3 info terbaru)
│   └── InformasiController.php  # Katalog & detail informasi
├── Models/
│   └── Informasi.php             # Model Eloquent
database/
├── migrations/                   # Skema tabel `informasi`
└── seeders/
    └── InformasiSeeder.php       # Data contoh informasi
resources/views/
├── home.blade.php                # Landing page
└── informasi/
    ├── index.blade.php           # Katalog informasi
    └── show.blade.php            # Detail informasi
routes/
└── web.php                       # Definisi route
```

## 🚀 Instalasi

### Prasyarat

- PHP ≥ 8.3
- Composer
- Node.js ≥ 20 & npm

### Langkah Setup

```bash
# 1. Clone repositori
git clone <url-repo>
cd Magang-KOMINFO

# 2. Install dependensi backend
composer install

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Konfigurasi database di .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=magang_kominfo
DB_USERNAME=root
DB_PASSWORD=

# 5. Jalankan migrasi + seeder
php artisan migrate --seed

# 6. Install dependensi frontend
npm install

# 7. Build aset (atau `npm run dev` untuk development)
npm run build

# 8. Jalankan server
php artisan serve
```

Aplikasi dapat diakses di `http://127.0.0.1:8000`

## 📦 Skrip Composer

Proyek ini menyediakan shortcut via Composer:

```bash
# Setup lengkap otomatis (install + migrate + build)
composer setup

# Menjalankan dev server + queue + vite sekaligus
composer dev

# Menjalankan test suite
composer test
```

## 🔗 Routes & Endpoint

| Method | URI | Controller | Nama Route | Deskripsi |
|---|---|---|---|---|
| `GET` | `/` | `HomeController@index` | `home` | Landing page |
| `GET` | `/informasi` | `InformasiController@index` | `informasi.index` | Katalog informasi |
| `GET` | `/informasi/{id}` | `InformasiController@show` | `informasi.show` | Detail informasi |

## 🗃️ Skema Database

### Tabel: `informasi`

| Kolom | Tipe | Keterangan |
|---|---|---|
| `id` | `BIGINT UNSIGNED` | Primary key, auto-increment |
| `judul` | `VARCHAR(255)` | Judul informasi |
| `kategori` | `VARCHAR(255)` | Kategori (Pemerintahan, Pengumuman, dll.) |
| `ringkasan` | `TEXT` | Ringkasan singkat |
| `isi` | `LONGTEXT` | Konten lengkap informasi |
| `tanggal` | `DATE` | Tanggal publikasi (cast: `date`) |
| `gambar` | `VARCHAR(255) NULL` | Path gambar opsional |
| `created_at` | `TIMESTAMP` | Dibuat |
| `updated_at` | `TIMESTAMP` | Diperbarui |

### Model: `App\Models\Informasi`

```php
protected $fillable = ['judul', 'kategori', 'ringkasan', 'isi', 'tanggal'];
protected $casts = ['tanggal' => 'date'];
```

## 🧪 Testing

Proyek menggunakan **Pest** untuk testing. Jalankan dengan:

```bash
composer test
# atau
php artisan test
```

---

<div align="center">

**Dikembangkan untuk Program Magang KOMINFO** 🚀

</div>

