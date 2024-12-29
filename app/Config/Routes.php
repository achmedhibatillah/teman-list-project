<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/profil', 'Menu::profil');
$routes->get('/daftar-teman', 'Menu::daftar_teman');
$routes->get('/list-teman', 'Menu::list_teman');
$routes->get('/tambah-teman', 'Menu::tambah_teman');

$routes->get('/tambah-teman-sd', 'Menu::tambah_teman_sd');
$routes->post('/simpan-teman-sd', 'Menu::simpan_teman_sd');

$routes->get('/tambah-teman-smp', 'Menu::tambah_teman_smp');
$routes->post('/simpan-teman-smp', 'Menu::simpan_teman_smp');

$routes->get('/tambah-teman-sma', 'Menu::tambah_teman_sma');
$routes->post('/simpan-teman-sma', 'Menu::simpan_teman_sma');

$routes->get('/tambah-teman-kuliah', 'Menu::tambah_teman_kuliah');
$routes->post('/simpan-teman-kuliah', 'Menu::simpan_teman_kuliah');

$routes->get('/tambah-teman-kerja', 'Menu::tambah_teman_kerja');
$routes->post('/simpan-teman-kerja', 'Menu::simpan_teman_kerja');