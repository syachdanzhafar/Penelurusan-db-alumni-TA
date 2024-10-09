<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// user
$routes->get('/', 'Home::index');
$routes->get('/admin/login', 'LoginController::index');
$routes->get('/user/hal_user', 'User::hal_user');
$routes->get('/user/menu_alumni', 'User::menu_alumni');
$routes->get('/user/detail/(:num)', 'User::detail/$1');
$routes->get('/user/menu_laporan', 'User::menu_laporan');
$routes->get('/user/menu_agenda', 'User::menu_agenda');
$routes->get('/user/menu_pendidikan_lanjutan', 'User::menu_pendidikan_lanjutan');
$routes->get('/user/menu_update_data', 'User::menu_update_data');


// routes login
$routes->post('admin/login', 'LoginController::login');
$routes->get('admin/logout', 'LoginController::logout');

// logout
$routes->get('/admin/logout', 'Home::index');
$routes->get('/admin/login', 'Home::index');


// navigasi
$routes->get('/admin/hal_admin', 'AlumniController::hal_admin');
$routes->get('/admin/alumni/kelola_data_alumni', 'AlumniController::kelola_data_alumni');
$routes->get('/admin/laporan/kelola_laporan', 'LaporanController::kelola_laporan');
$routes->get('/admin/agenda/kelola_agenda', 'AgendaController::kelola_agenda');
$routes->get('/admin/kelas/kelola_kelas', 'KelasController::kelola_kelas');
$routes->get('/admin/wali_kelas/kelola_wali_kelas', 'WaliKelasController::kelola_wali_kelas');
$routes->get('/admin/pendidikan_lanjutan/kelola_pendidikan_lanjutan', 'PendidikanLanjutanController::kelola_pendidikan_lanjutan');


// routes kelola data alumni
$routes->get('/alumni/create', 'AlumniController::create');
$routes->post('/alumni/store', 'AlumniController::store');
$routes->get('/alumni/edit/(:segment)', 'AlumniController::edit/$1');
$routes->post('/alumni/update/(:segment)', 'AlumniController::update/$1');
$routes->get('/alumni/delete/(:segment)', 'AlumniController::delete/$1');
$routes->get('/alumni/detail/(:segment)', 'AlumniController::detail/$1');


// detail
$routes->get('/detail/create', 'DetailController::create');
$routes->post('/detail/store', 'DetailController::store');
$routes->get('/admin/alumni/kelola_data_alumni', 'AlumniController::kelola_data_alumni');
$routes->get('detail/edit/(:num)', 'DetailController::edit/$1');
$routes->post('detail/update/(:segment)', 'DetailController::update/$1');


// routes kelola laporan
// $routes->get('/laporan/create_laporan', 'LaporanController::create_laporan');
// $routes->post('/laporan/store_laporan', 'LaporanController::store_laporan');
// $routes->get('/laporan/edit_laporan/(:segment)', 'LaporanController::edit_laporan/$1');
// $routes->post('/laporan/update_laporan/(:segment)', 'LaporanController::update_laporan/$1');
// $routes->get('/laporan/delete_laporan/(:segment)', 'LaporanController::delete_laporan/$1');
// $routes->get('/laporan/cetak_laporan', 'LaporanController::cetakLaporan');
$routes->get('laporan/cetakpdf', 'LaporanController::cetakPDF');
$routes->get('admin/laporan', 'LaporanController::index');



// routes kelola agenda
$routes->get('/agenda/create_agenda', 'AgendaController::create_agenda');
$routes->post('/agenda/store_agenda', 'AgendaController::store_agenda');
$routes->get('/agenda/edit_agenda/(:segment)', 'AgendaController::edit_agenda/$1');
$routes->post('/agenda/update_agenda/(:segment)', 'AgendaController::update_agenda/$1');
$routes->get('/agenda/delete_agenda/(:segment)', 'AgendaController::delete_agenda/$1');


// routes kelola kelas
$routes->get('/kelas/create_kelas', 'KelasController::create_kelas');
$routes->post('/kelas/store_kelas', 'KelasController::store_kelas');
$routes->get('/kelas/edit_kelas/(:segment)', 'KelasController::edit_kelas/$1');
$routes->post('/kelas/update_kelas/(:segment)', 'KelasController::update_kelas/$1');
$routes->get('/kelas/delete_kelas/(:segment)', 'KelasController::delete_kelas/$1');


// routes kelola wali kelas
$routes->get('/wali_kelas/create_wali_kelas', 'WaliKelasController::create_wali_kelas');
$routes->post('/wali_kelas/store_wali_kelas', 'WaliKelasController::store_wali_kelas');
$routes->get('/wali_kelas/edit_wali_kelas/(:segment)', 'WaliKelasController::edit_wali_kelas/$1');
$routes->post('/wali_kelas/update_wali_kelas/(:segment)', 'WaliKelasController::update_wali_kelas/$1');
$routes->get('/wali_kelas/delete_wali_kelas/(:segment)', 'WaliKelasController::delete_wali_kelas/$1');


// routes kelola pendidikan lanjutan
$routes->get('/pendidikan_lanjutan/create', 'PendidikanLanjutanController::create');
$routes->post('/pendidikan_lanjutan/store', 'PendidikanLanjutanController::store');
$routes->get('/admin/create_pendidikan_lanjutan', 'PendidikanLanjutanController::create');
$routes->post('/pendidikan_lanjutan/store', 'PendidikanLanjutanController::store');
$routes->get('/pendidikan_lanjutan', 'PendidikanLanjutanController::kelola_pendidikan_lanjutan');
$routes->get('/pendidikan_lanjutan/edit_pendidikan_lanjutan/(:segment)', 'PendidikanLanjutanController::edit_pendidikan_lanjutan/$1');
$routes->post('/pendidikan_lanjutan/update_pendidikan_lanjutan/(:segment)', 'PendidikanLanjutanController::update_pendidikan_lanjutan/$1');
$routes->get('/pendidikan_lanjutan/delete_pendidikan_lanjutan/(:segment)', 'PendidikanLanjutanController::delete_pendidikan_lanjutan/$1');
