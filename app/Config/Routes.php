<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ===================================================
// HALAMAN UTAMA & STATIC
// ===================================================
$routes->get('/', 'Artikel::index');         // Homepage menampilkan daftar artikel
$routes->get('/about', 'Home::about');      // Halaman about
$routes->get('/terms', 'Home::terms');      // Halaman terms

// ===================================================
// ARTIKEL FRONT-END
// ===================================================
$routes->get('/artikel', 'Artikel::index');               // List artikel
$routes->get('/artikel/(:segment)', 'Artikel::view/$1'); // Detail artikel berdasarkan slug

// ===================================================
// ADMIN - PROTEKSI HARUS LOGIN (auth filter)
// ===================================================
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    // Dashboard / admin utama -> daftar artikel
    $routes->get('', 'Artikel::admin_index');

    // Daftar artikel
    $routes->get('artikel', 'Artikel::admin_index');

    // Tambah artikel (GET tampilkan form, POST submit form)
    $routes->match(['get', 'post'], 'artikel/add', 'Artikel::add');

    // Edit artikel (GET tampilkan form, POST submit form)
    $routes->match(['get', 'post'], 'artikel/edit/(:segment)', 'Artikel::edit/$1');

    // Hapus artikel
    $routes->get('artikel/delete/(:segment)', 'Artikel::delete/$1');
});

// ===================================================
// AUTH / LOGIN & LOGOUT
// ===================================================
$routes->match(['get', 'post'], 'login', 'Auth::login');   // Halaman login
$routes->get('logout', 'Auth::logout');                    // Logout