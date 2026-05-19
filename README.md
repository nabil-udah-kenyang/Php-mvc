# PHP|MVC

<p align="center">
  <img src="https://www.php.net/images/logos/new-php-logo.svg" width="150" alt="PHP Logo">
</p>

<h2 align="center">PHP|MVC</h2>

<p align="center">
  Aplikasi CRUD data mahasiswa sederhana dengan konsep MVC menggunakan PHP native, Bootstrap, jQuery, dan MySQL.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white" alt="jQuery">
  <img src="https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white" alt="XAMPP">
  <img src="https://img.shields.io/badge/VS_Code-007ACC?style=for-the-badge&logo=visualstudiocode&logoColor=white" alt="VS Code">
  <img src="https://img.shields.io/badge/Neovim-57A143?style=for-the-badge&logo=neovim&logoColor=white" alt="Neovim">
</p>

---

## Logo Project

```text
╔════════════════╗
║    PHP|MVC     ║
╚════════════════╝
```

**PHP|MVC** menggambarkan aplikasi PHP yang disusun dengan pola **Model - View - Controller** supaya kode lebih rapi, mudah dibaca, dan lebih mudah dikembangkan.

## Penjelasan

Project ini adalah aplikasi web sederhana untuk mengelola data mahasiswa. Aplikasi memiliki halaman utama, halaman tentang pembuat, dan halaman daftar mahasiswa yang mendukung proses tambah, lihat detail, ubah, hapus, serta pencarian data.

Project ini cocok digunakan sebagai latihan dasar memahami:

- Struktur folder MVC.
- Routing controller sederhana.
- Koneksi database dengan PDO.
- Operasi CRUD ke database MySQL.
- Penggunaan Bootstrap untuk tampilan.
- Penggunaan jQuery Ajax untuk mengambil data saat mengubah mahasiswa.

## Fitur

- Menampilkan daftar mahasiswa.
- Menambahkan data mahasiswa baru.
- Melihat detail mahasiswa.
- Mengubah data mahasiswa melalui modal.
- Menghapus data mahasiswa.
- Mencari mahasiswa berdasarkan nama.
- Menampilkan pesan flash setelah tambah, ubah, atau hapus data.

## Struktur Folder

```text
phpmvc/
├── app/
│   ├── config/
│   ├── controllers/
│   ├── core/
│   ├── models/
│   └── views/
├── public/
│   ├── css/
│   ├── img/
│   ├── js/
│   └── index.php
└── README.md
```

## Teknologi dan Tools

- PHP Native
- MySQL
- PDO
- Bootstrap
- jQuery
- XAMPP / LAMPP
- Visual Studio Code
- Neovim

## Stack yang Digunakan

| Logo | Nama | Fungsi |
| --- | --- | --- |
| <img src="https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP"> | PHP Native | Bahasa utama untuk membuat aplikasi web dan menjalankan pola MVC. |
| <img src="https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white" alt="MySQL"> | MySQL | Database untuk menyimpan data mahasiswa. |
| <img src="https://img.shields.io/badge/PDO-555555?style=flat-square" alt="PDO"> | PDO | Penghubung antara PHP dan database MySQL. |
| <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=flat-square&logo=bootstrap&logoColor=white" alt="Bootstrap"> | Bootstrap | Framework CSS untuk membuat tampilan lebih rapi dan responsif. |
| <img src="https://img.shields.io/badge/jQuery-0769AD?style=flat-square&logo=jquery&logoColor=white" alt="jQuery"> | jQuery | Digunakan untuk Ajax pada proses ambil data ubah mahasiswa. |
| <img src="https://img.shields.io/badge/XAMPP-FB7A24?style=flat-square&logo=xampp&logoColor=white" alt="XAMPP"> | XAMPP / LAMPP | Server lokal untuk menjalankan Apache dan MySQL. |
| <img src="https://img.shields.io/badge/VS_Code-007ACC?style=flat-square&logo=visualstudiocode&logoColor=white" alt="VS Code"> | Visual Studio Code | Code editor yang bisa digunakan untuk mengedit project. |
| <img src="https://img.shields.io/badge/Neovim-57A143?style=flat-square&logo=neovim&logoColor=white" alt="Neovim"> | Neovim | Editor terminal yang bisa digunakan untuk coding dan navigasi file. |

## Cara Pakai

1. Simpan folder project di dalam direktori `htdocs`.

   Contoh:

   ```text
   /opt/lampp/htdocs/phpmvc
   ```

2. Jalankan Apache dan MySQL melalui XAMPP/LAMPP.

3. Buat database baru dengan nama:

   ```sql
   phpmvc
   ```

4. Buat tabel `mahasiswa`.

   ```sql
   CREATE TABLE mahasiswa (
     id INT AUTO_INCREMENT PRIMARY KEY,
     nama VARCHAR(100) NOT NULL,
     nrp VARCHAR(50) NOT NULL,
     email VARCHAR(100) NOT NULL,
     jurusan VARCHAR(100) NOT NULL
   );
   ```

5. Masukkan contoh data jika diperlukan.

   ```sql
   INSERT INTO mahasiswa (nama, nrp, email, jurusan) VALUES
   ('Nabil', '123456', 'nabil@example.com', 'Teknik Informatika'),
   ('Budi', '654321', 'budi@example.com', 'Teknik Informatika');
   ```

6. Sesuaikan konfigurasi database di file:

   ```text
   app/config/config.php
   ```

   Konfigurasi default:

   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   define('DB_NAME', 'phpmvc');
   ```

7. Buka aplikasi melalui browser:

   ```text
   http://localhost/phpmvc/public
   ```

## Alur Penggunaan

1. Masuk ke halaman **Home** untuk melihat halaman utama aplikasi.
2. Buka menu **Mahasiswa** untuk melihat daftar data mahasiswa.
3. Klik **Tambah Data Mahasiswa** untuk menambahkan data baru.
4. Klik **Detail** untuk melihat informasi mahasiswa.
5. Klik **Ubah** untuk mengedit data mahasiswa.
6. Klik **Hapus** untuk menghapus data mahasiswa.
7. Gunakan kolom pencarian untuk mencari mahasiswa berdasarkan nama.

## Catatan

- Pastikan `BASEURL` di `app/config/config.php` sesuai dengan lokasi project.
- Jika project dijalankan di folder berbeda, ubah nilai `BASEURL`.
- Jika database menggunakan password, isi bagian `DB_PASS`.

## Pembuat

Project ini dibuat sebagai latihan PHP MVC dan pengelolaan data mahasiswa.
