<?php

use App\Controllers\Auth;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->group('auth' ,static function($routes): void{
//      $routes->get('', 'Auth: :index');
//      $routes->post('login', 'Auth: :login');
// });
// $routes->get('/pelanggan', 'Pelanggan::index');
// $routes->get('/pelanggan/tambah', 'Pelanggan::create');

$routes->group('lokasi', static function ($routes) {
    $routes->get('', 'Lokasi::index');
    $routes->get('tambah', 'Lokasi::create');
    $routes->post('store', 'Lokasi::store');
    $routes->get('ubah/(:num)', 'Lokasi::ubah/$1');
    $routes->post('update/(:num)', 'Lokasi::update/$1');
    $routes->get('delete(:num)', 'Lokasi::delete/$1');
});

$routes->group('tenda', static function ($routes) {
    $routes->get('', 'Tenda::index');
    $routes->get('tambah', 'Tenda::create');
    $routes->post('store', 'Tenda::store');
    $routes->get('ubah/(:num)', 'Tenda::ubah/$1');
    $routes->post('update/(:num)', 'Tenda::update/$1');
    $routes->get('delete(:num)', 'Tenda::delete/$1');
});
$routes->group('pelanggan', static function ($routes) {
    $routes->get('', 'Pelanggan::index');
    $routes->get('tambah', 'Pelanggan::create');
    $routes->post('store', 'Pelanggan::store');
    $routes->get('ubah/(:num)', 'Pelanggan::ubah/$1');
    $routes->post('update/(:num)', 'Pelanggan::update/$1');
    $routes->get('delete(:num)', 'Pelanggan::delete/$1');
});

$routes->group('pembayaran', static function ($routes) {
    $routes->get('', 'Pembayaran::index');
    $routes->get('tambah', 'Pembayaran::create');
    $routes->post('store', 'Pembayaran::store');
    $routes->get('ubah/(:num)', 'Pembayaran::ubah/$1');
    $routes->post('update/(:num)', 'Pembayaran::update/$1');
    $routes->get('delete(:num)', 'Pembayaran::delete/$1');
});

$routes->group('penyewaan', static function ($routes) {
    $routes->get('', 'Penyewaan::index');
    $routes->get('tambah', 'Penyewaan::create');
    $routes->post('store', 'Penyewaan::store');
    $routes->get('ubah/(:num)', 'Penyewaan::ubah/$1');
    $routes->post('update/(:num)', 'Penyewaan::update/$1');
    $routes->get('delete(:num)', 'Penyewaan::delete/$1');
});

$routes->group('testimoni', static function ($routes) {
    $routes->get('', 'Testimoni::index');
    $routes->get('tambah', 'Testimoni::create');
    $routes->post('store', 'Testimoni::store');
    $routes->get('ubah/(:num)', 'Testimoni::ubah/$1');
    $routes->post('update/(:num)', 'Testimoni::update/$1');
    $routes->get('delete(:num)', 'Testimoni::delete/$1');
});

$routes->group('status', static function ($routes) {
    $routes->get('', 'Status::index');
    $routes->get('tambah', 'Status::create');
    $routes->post('store', 'Status::store');
    $routes->get('ubah/(:num)', 'Status::ubah/$1');
    $routes->post('update/(:num)', 'Status::update/$1');
    $routes->get('delete(:num)', 'Status::delete/$1');
});

$routes->group('pemesanan', static function ($routes) {
    $routes->get('', 'Pemesanan::index');
    $routes->get('tambah', 'Pemesanan::create');
    $routes->post('store', 'Pemesanan::store');
    $routes->get('ubah/(:num)', 'Pemesanan::ubah/$1');
    $routes->post('update/(:num)', 'Pemesanan::update/$1');
    $routes->get('delete(:num)', 'Pemesanan::delete/$1');
});
