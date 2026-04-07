# Lab7Web - Praktikum 1 Pemrograman Web 2 (CodeIgniter 4)

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