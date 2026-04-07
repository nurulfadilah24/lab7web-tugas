# Lab7Web - Praktikum Pemrograman Web 2 (CodeIgniter 4)

## Nama: Nurul Fadilah
## Nim: 312410689
## kelas: I241C

---
## Tujun Praktikum
1. Memahami konsep dasar Framework.
2. Memahami konsep dasar MVC (Model-View-Controller).
3. Membuat program sederhana menggunakan Framework CodeIgniter 4.

## persiapan

1. Menggunakan text editor VSCode.
2. Membuat folder project di htdocs dengan nama lab11_php_ci.
3. Mengaktifkan ekstensi PHP yang diperlukan:
. php-json
. php-mysqlnd
. php-xml
. php-intl
. libcurl (opsional)

Konfigurasi ekstensi dilakukan melalui php.ini pada XAMPP, hilangkan tanda ; pada ekstensi yang dibutuhkan, kemudian restart Apache.


## Instalasi CodeIgniter 4 (Manual)

1. Unduh CodeIgniter 4 dari codeigniter.com/download
.
2. Ekstrak file zip ke direktori htdocs/lab11_ci.
3. Ubah nama folder hasil ekstrak menjadi ci4.
4. Akses di browser:
http://localhost/lab11_ci/ci4/public/ 


## Menjalankan CLI CodeIgniter

1. Buka terminal atau command prompt.
2. Arahkan ke folder project:
cd C:\xampp\htdocs\lab11_ci\ci4 
3. Jalankan perintah CLI\cmd:
php spark


## Mengaktifkan Mode Debugging

1. Salin file env menjadi .env.
2. Ubah variabel berikut:
CI_ENVIRONMENT = development 
3. Hal ini berguna untuk menampilkan error yang lebih detail saat terjadi kesalahan.


## Struktur Direktori CodeIgniter 4

app/ : Tempat menulis kode aplikasi (Controller, Model, View).
public/ : File yang bisa diakses publik (CSS, JS, index.php, dll).
writable/ : File yang bisa ditulis aplikasi (logs, session, uploads).
vendor/ : Library dan core CodeIgniter.
File root seperti .env, composer.json, spark, README.md, dll.

## Konsep MVC

Model : Kode untuk pemodelan data (database atau sumber lain).
View : Tampilan user interface (HTML, CSS, JS).
Controller : Logic aplikasi, menghubungkan Model dan View.


## Routing
File routing: app/Config/Routes.php
Contoh route:

$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');

Untuk melihat semua route:
php spark routes


## Membuat Controller
Buat app/Controllers/Page.php:

<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan isi halaman ini.'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Contact',
            'content' => 'Ini adalah halaman contact untuk menghubungi kami.'
        ]);
    }

    public function faqs()
    {
        return view('faqs', [
            'title' => 'Halaman FAQ',
            'content' => 'Ini adalah halaman FAQ yang berisi pertanyaan umum.'
        ]);
    }

    public function tos()
    {
        echo "Ini halaman Terms of Services";
    }
}
 


## Membuat View

1. Buat file app/Views/about.php:

<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>


2. Buat layout template:
app/Views/template/header.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
<div id="container">
<header>
<h1>Layout Sederhana</h1>
</header>
<nav>
<a href="<?= base_url('/');?>" class="active">Home</a>
<a href="<?= base_url('/artikel');?>">Artikel</a>
<a href="<?= base_url('/about');?>">About</a>
<a href="<?= base_url('/contact');?>">Kontak</a>
</nav>
<section id="wrapper">
<section id="main">


# app/Views/template/footer.php

</section>
<aside id="sidebar">
<div class="widget-box">
<h3 class="title">Widget Header</h3>
<ul>
<li><a href="#">Widget Link</a></li>
<li><a href="#">Widget Link</a></li>
</ul>
</div>
<div class="widget-box">
<h3 class="title">Widget Text</h3>
<p>Vestibulum lorem elit, iaculis in nisl volutpat, malesuada tincidunt arcu.</p>
</div>
</aside>
</section>
<footer>
<p>&copy; 2021 - Universitas Pelita Bangsa</p>
</footer>
</div>
</body>
</html>


## Auto Routing

CodeIgniter 4 sudah mengaktifkan auto routing secara default:
$routes->setAutoRoute(true);

Method baru di Controller dapat diakses melalui:
http://localhost:8080/page/tos 

## kesimpulan

Praktikum ini menunjukkan bahwa CodeIgniter 4 memudahkan pembuatan aplikasi web dengan konsep MVC, routing, template, dan debugging sehingga logika, data, dan tampilan dapat dikelola secara terstruktur dan efisien.


##  Screenshot

## Istalasi Codeigniter 4 

<img width="1365" height="381" alt="Screenshot 2026-03-03 211446" src="https://github.com/user-attachments/assets/a1de5abc-b287-4886-a55c-bb3274ca9ed0" />

---

## Routes List 

<img width="872" height="454" alt="Screenshot 2026-03-03 223115" src="https://github.com/user-attachments/assets/b071ea76-8ef3-4940-a218-a89afd26d931" />

---

## Tampilan Error 404 saat Mengakses Router About

<img width="845" height="167" alt="image" src="https://github.com/user-attachments/assets/27674c1c-6434-496b-a856-3274bc9b56e8" />


---

Tampilan Error 404 saat Mengakses Router Contact

<img width="912" height="183" alt="image" src="https://github.com/user-attachments/assets/f4ca8a7b-7a5e-4014-9593-1c7cbf695946" />

---

Tampilan Error 404 saat Mengakses Router Faqs

<img width="910" height="153" alt="image" src="https://github.com/user-attachments/assets/91fd130b-5c4a-4233-94a2-33079a81c4a6" />

--- 

##  Tampilan Halaman About - Berhasil Diakses

<img width="389" height="114" alt="Screenshot 2026-03-03 222654" src="https://github.com/user-attachments/assets/ca05bb59-690f-4ad1-80f4-da2a6fccba7c" />

---

## Tampilan Halaman  Terms of Service - Berhasil Diakses

<img width="677" height="154" alt="Screenshot 2026-03-03 223906" src="https://github.com/user-attachments/assets/147af805-bac0-47ea-aefc-9eda0b608794" />

---

## Tampilan Halaman About - Versi Modifikasi

<img width="567" height="173" alt="Screenshot 2026-03-03 225103" src="https://github.com/user-attachments/assets/7808353e-8b85-4f3b-a4fd-8d08f819e219" />

---

## Tampilan Halaman About dengan Layout Sederhana

<img width="793" height="496" alt="Screenshot 2026-03-03 231810" src="https://github.com/user-attachments/assets/1eaab14e-ad98-408c-a33f-5b6338c5bc92" />

---


# Lab 7 Praktikum 2 Pemrograman Web 2 – CodeIgniter 4 CRUD

---

## Deskripsi
Praktikum ini bertujuan untuk membuat aplikasi CRUD sederhana menggunakan Framework CodeIgniter 4 dengan studi kasus Data Artikel. 

Tujuan praktikum:  
Memahami konsep dasar Model di CodeIgniter 4.
Memahami konsep dasar CRUD (Create, Read, Update, Delete).
Mampu membuat program sederhana menggunakan framework CI4.
---

## persiapan

Pastikan XAMPP sudah terinstall dan MySQL dapat dijalankan.
Siapkan text editor seperti VSCode.
Buat folder project lab7_php_ci di htdocs.


## Struktur Folder Project

lab7_php_ci/
│
├─ app/
│ ├─ Controllers/
│ │ └─ Artikel.php
│ ├─ Models/
│ │ └─ ArtikelModel.php
│ └─ Views/
│ ├─ artikel/
│ │ ├─ index.php
│ │ ├─ detail.php
│ │ ├─ admin_index.php
│ │ ├─ form_add.php
│ │ └─ form_edit.php
│ └─ template/
│ ├─ header.php
│ ├─ footer.php
│ ├─ admin_header.php
│ └─ admin_footer.php
│
├─ public/
│ └─ gambar/ (tempat menyimpan file gambar artikel)
│
├─ .env (konfigurasi database)
└─ composer.json



---

## 1.Membuat Database

Buka phpMyAdmin atau MySQL CLI, lalu buat database:

```sql
CREATE DATABASE lab_ci4;

CREATE TABLE artikel (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(200) NOT NULL,
    isi TEXT,
    gambar VARCHAR(200),
    status TINYINT(1) DEFAULT 0,
    slug VARCHAR(200)
);

---

## 2.Konfigurasi Database

Edit file .env di root project CI4:

database.default.hostname = localhost
database.default.database = lab_ci4
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
---

## 3. Membuat Modell

File: app/Models/ArtikelModel.php

<?php
namespace App\Models;
use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar'];
}

---

## 4. Membuat Controller

File: app/Controllers/Artikel.php

<?php
namespace App\Controllers;
use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/index', compact('artikel', 'title'));
    }
}

--

## 5. Membuat View Artikel

File:app/Views/artikel/index.php

$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');

$routes->group('admin', function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->add('artikel/add', 'Artikel::add');
    $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
});

---

## 6. View

index.php → menampilkan daftar artikel
detail.php → menampilkan detail artikel
admin_index.php → daftar artikel untuk admin
form_add.php → form tambah artikel
form_edit.php → form edit artikel

---

## 7. Menambahkan Data Contoh

INSERT INTO artikel (judul, isi, slug) VALUES
('Artikel pertama', 'Lorem Ipsum adalah contoh teks...', 'artikel-pertama'),
('Artikel kedua', 'Tidak seperti anggapan banyak orang...', 'artikel-kedua');

---

## 8. Menjalankan Aplikasi

untuk menjalankan aplikasi codeIgniter gunankan perintah:

```
php spark serve
```

kemudian buka browser da akses:

```
http://localhost:8080
```

Untuk halaman artikel:
```
http://localhost:8080/artikel
```

Untuk halaman admin:

```
http://localhost:8080/admin/artikel
```

---

# Kesimpulan

Praktikum ini melatih kemampuan mahasiswa dalam membuat CRUD menggunakan CI4, menghubungkan Model, Controller, dan View, serta menerapkan routing dan form validation.

# Screenshot


1. Halaman Artikel
   
Halaman artikel adalah halaman yang menampilkan daftar semua artikel yang ada di database.

<img width="1365" height="678" alt="artikel" src="https://github.com/user-attachments/assets/169e7a33-fa8f-4d3c-90c1-ef02f3a00e38" />

---

2. Halaman Detail Artikel
   
Halaman detali artikel digunakan untuk menampilkan isi artikel secara lengkap.

<img width="1365" height="681" alt="detail_artikel" src="https://github.com/user-attachments/assets/37fb793b-5597-4bfd-8019-29f9abfbf74e" />

---

3. Halaman Admin 
Halaman admin adalah halaman yang digunakan untuk mengelola data artikel.

<img width="1365" height="493" alt="admin" src="https://github.com/user-attachments/assets/49b33ea9-e845-486a-81ab-512e6ef67a50" />

---

4. Hapus Artikel
   
Fitur hapus artikel digunakan untuk menghapus data artikel dari database.

<img width="552" height="187" alt="hapus_artikel" src="https://github.com/user-attachments/assets/0806bcb4-e73e-471b-9d75-d0abbc25d1fe" />


---

5. Edit Artikel
   
Fitur edit artikel digunakan untuk mengubah atau memperbarui data artikel yang sudah ada.

<img width="1365" height="446" alt="edit_artikel" src="https://github.com/user-attachments/assets/724f8bc5-c3bb-4e01-8b79-c376dd413105" />

---

6. Tambah Artikel
   
Fitur tambah artikel digunakan untuk menambahkan artikel ke dalam database.

<img width="1365" height="420" alt="tambah_artikel" src="https://github.com/user-attachments/assets/c7eb69ff-6201-473d-9bdd-dfea5d7dce33" />

---


---
  

---

# Laporan Praktikum Pemrograman Web 2

## Praktikum 3: View Layout dan View Cell (CodeIgniter 4)

##  Tujuan Praktikum

Memahami konsep View Layout di CodeIgniter 4
Menggunakan View Layout untuk template tampilan
Memahami dan mengimplementasikan View Cell
Menggunakan View Cell untuk komponen UI modular

---

##  Langkah-Langkah Praktikum

### 1.Membuat Layout Utama

Membuat folder layout di dalam app/Views/, kemudian membuat file main.php.

Fungsi:

Sebagai template utama (header, navbar, footer)
Menggunakan renderSection('content') untuk isi halaman

---

### 2.Modifikasi View Home

Mengubah file home.php agar menggunakan layout:

```php
<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<h1><?= $title; ?></h1>
<p><?= $content; ?></p>
<?= $this->endSection() ?>

---

### 3. Membuat View Cell

Membuat folder `Cells` dan file `ArtikelTerkini.php`.

Fungsi:

* Menampilkan artikel terbaru di sidebar
* Mengambil data dari database

```php
$model->orderBy('created_at', 'DESC')->limit(5)->findAll();

---

### 4. Membuat View untuk View Cell

Membuat folder `components` dan file `artikel_terkini.php`.

Fungsi:

* Menampilkan daftar artikel dalam bentuk list

---

### 5. Menambahkan Field Tanggal pada Database

Menambahkan field `created_at` untuk menampilkan artikel terbaru.

```sql
ALTER TABLE artikel 
ADD created_at DATETIME DEFAULT CURRENT_TIMESTAMP;

---

### 6. Menampilkan Data Dinamis

Artikel ditampilkan berdasarkan tanggal terbaru menggunakan:

```php
orderBy('created_at', 'DESC')
```

##  Kesimpulan

Pada praktikum ini, mahasiswa berhasil:

Menggunakan View Layout untuk template
Menggunakan View Cell untuk sidebar
Menampilkan data artikel dari database
Mengurutkan artikel berdasarkan tanggal terbaru

## Screenshot

## Tampilan Halaman Home dengan Layout Lengkap
![WhatsApp Image 2026-03-25 at 13 40 58](https://github.com/user-attachments/assets/40f99f0d-99f9-41db-ab52-dbea5858c9c4)

## Tampilan Widget Artikel Terkini
![WhatsApp Image 2026-03-25 at 13 50 06](https://github.com/user-attachments/assets/9707c9e8-9c13-4e24-b77c-46af88fa4799)

##  Struktur Tabel Database - Artikel
![WhatsApp Image 2026-03-25 at 13 51 45](https://github.com/user-attachments/assets/b8d74d93-2df5-469f-a0e0-f3b69a19085a)

## Pertanyaan dan Tugas 
1. Apa manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi?

jawab: Memudahkan pengelolaan tampilan yang konsisten (header, footer, sidebar) di seluruh halaman aplikasi tanpa menulis ulang kode.

2. Jelaskan perbedaan antara View Cell dan View biasa.

jawab: View biasa: Hanya menampilkan template dari Controller secara langsung.
View Cell: Komponen kecil yang bisa dipanggil di view lain, bersifat modular dan bisa menerima parameter

3. Ubah View Cell agar hanya menampilkan post dengan kategori tertentu. 

jawab: Untuk menampilkan post berdasarkan kategori tertentu, View Cell dapat dibuat menerima input kategori sebagai parameter, kemudian memanggil model dengan kondisi where('kategori', $kategori) agar hanya data sesuai kategori yang dikirimkan yang ditampilkan.

---

# Pemrograman Web 2
## Praktikum 4: Modul Login CodeIgniter 4

---

## Tujuan

1. Memahami konsep login pada framework CodeIgniter 4
2. Mampu membuat sistem autentikasi sederhana
3. Mengimplementasikan session dan filter pada aplikasi

---

##  Struktur Database
### Tabel: `user`
<img width="802" height="85" alt="image" src="https://github.com/user-attachments/assets/16e50b9d-aaec-4283-b4a8-ccb6721ab6f0" />


---

##  Fitur yang Dibuat

### 1.  Login User

* User login menggunakan email dan password
* Password menggunakan `password_hash()` dan `password_verify()`

---

### 2.  Session

Digunakan untuk menyimpan status login user:

```php
$session->set([
    'user_id'    => $login['id'],
    'user_name'  => $login['username'],
    'user_email' => $login['useremail'],
    'logged_in'  => true,
]);
```

---

### 3.  Auth Filter

Digunakan untuk membatasi akses halaman admin

```php
if (!session()->get('logged_in')) {
    return redirect()->to('/user/login');
}
```

---

### 4.  Routing

Menggunakan route manual:

```php
$routes->get('/user', 'User::index');
$routes->match(['get','post'], '/user/login', 'User::login');

$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
});
```

---

### 5.  Seeder

Digunakan untuk membuat data user otomatis

```php
$model->insert([
    'username' => 'admin',
    'useremail' => 'admin@email.com',
    'userpassword' => password_hash('admin123', PASSWORD_DEFAULT),
]);
```

---

##  Konfigurasi Penting (.env)

```ini
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = lab_ci4
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi

session.driver = 'CodeIgniter\Session\Handlers\FileHandler'
session.savePath = writable/session
```

---

##  Cara Menjalankan Project

1. Jalankan XAMPP (Apache & MySQL)
2. Masuk ke folder project:

```bash
C:\xampp_8\htdocs\lab7_php_ci\ci4
```

3. Jalankan server:

```bash
php spark serve
```

4. Buka di browser:

```
localhost/lab7_php_ci/ci4/public/login
```

---

##  Akun Login

* Email: `admin@email.com`
* Password: `admin123`

---

##  Hasil Akhir

* User dapat login 
* Session tersimpan 
* Halaman admin terlindungi 
* Redirect berjalan dengan baik 

<img width="1365" height="680" alt="Screenshot 2026-04-07 223437" src="https://github.com/user-attachments/assets/85debd08-ff40-4364-8908-233b9fb22742" />


---


##  Kesimpulan
Praktikum ini berhasil mengimplementasikan sistem login sederhana menggunakan CodeIgniter 4 dengan fitur session dan filter sebagai pengaman halaman admin.
