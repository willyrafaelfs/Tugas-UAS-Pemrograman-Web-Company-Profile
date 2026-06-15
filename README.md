# 🌐 WillPerfect Studio – Company Profile Website

[![GitHub](https://img.shields.io/badge/GitHub-Tugas--UAS--Pemweb-blue?logo=github)](https://github.com/willyrafaelfs/Tugas-UAS-Pemrograman-Web-Company-Profile)
[![Made with CI4](https://img.shields.io/badge/Made%20with-CodeIgniter%204-red?logo=codeigniter)](https://codeigniter.com)
[![Frontend Template](https://img.shields.io/badge/Template-Onova%20HTML5-orange)](https://themeforest.net)

Website Company Profile ini merupakan proyek tugas UAS dari mata kuliah *Pemrograman Web*, dikembangkan menggunakan **CodeIgniter 4**. Proyek ini memiliki fitur Admin Panel untuk mengelola konten seperti **services**, **products**, **portfolio**, **testimonials**, dan **contact form**. Tampilan frontend menggunakan template HTML5 **Onova** dari ThemeForest / Envato Elements.

---

## 📌 Fitur Utama

### 🔹 Frontend
- Halaman: Home, About, Services, Products, Portfolio, Testimonials, Contact
- Desain profesional dan responsif

### 🔹 Admin Panel
- CRUD untuk: Services, Products, Portfolio, Testimonials
- Manajemen pesan dari contact form

---

## 🚀 Teknologi Digunakan

- CodeIgniter 4  
- Bootstrap 5  
- PHP 8.2+  
- Composer  
- HTML5 Template: Onova (ThemeForest)

---

## ⚙️ Clone & Setup

```bash
git clone https://github.com/willyrafaelfs/Tugas-UAS-Pemrograman-Web-Company-Profile.git
cd company-profile

# Install dependencies
composer install

# Copy file .env
cp env .env

# Konfigurasi database di file .env
# Jalankan migrasi jika diperlukan
php spark migrate

# Jalankan server lokal
php spark serve

#Login Admin Panel
URL: http://localhost:8080/admin/login
Username: admin 
Password: admin123

```

> ⚠️ **Catatan keamanan:** Kredensial `admin / admin123` adalah default bawaan untuk keperluan demo/development. **Wajib diganti** sebelum aplikasi di-deploy ke produksi (ubah di `app/Database/Seeds/UserSeeder.php` lalu jalankan ulang seeder, atau update langsung di database). Jangan pernah commit file `.env` yang berisi kredensial asli.
## 👥 Anggota Kelompok – Pemweb 4G
- Adelio Raihan Aryasatya (23083000152)
- Willy Rafael F. Silalahi (23083000168)
- Imanuel Kevin Jhonson (23083000188)