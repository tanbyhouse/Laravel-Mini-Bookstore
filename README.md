# Tan's Mini Bookstore - Laravel Mini Project

![Built with Laravel](https://img.shields.io/badge/Built%20with-Laravel-FF2D20?style=for-the-badge&logo=laravel)

This is a simple bookstore inventory system project built using Laravel. This project was created specifically to meet assignment requirements that focus on the core concepts of Laravel without using a database.

* **Routing** (`web.php`)
* **Single Controller** (`PageController.php`)
* **Blade Templating** (Layouts, Components, @extends)
* **Session-based Authentication** (Login/Logout manual)
* **Penanganan Form** (Login, Search, Update Profile)

---

## 🚀 Fitur Utama

* 🔐 **Autentikasi Berbasis Session:** Sistem login dan logout fungsional tanpa database.
* 🛡️ **Halaman Terlindungi:** Halaman Dashboard, Management, dan Profile tidak dapat diakses sebelum login.
* 📊 **Dashboard Statistik:** Menampilkan ringkasan data (total judul, total stok, stok menipis) yang dihitung secara dinamis dari *array*.
* 📚 **Manajemen Data (Statis):** Menampilkan daftar buku dari *array* statis yang didefinisikan di *controller*.
* 🔍 **Fitur Pencarian:** Memfilter daftar buku pada halaman pengelolaan berdasarkan judul.
* 👤 **Profil:** flash message (sukses/error).

---

## Tech Stack

* **Framework:** Laravel 11
* **Templating:** Blade
* **Autentikasi:** Manual Session-Based
* **Styling:** CSS Murni (Inline & Internal Stylesheet)