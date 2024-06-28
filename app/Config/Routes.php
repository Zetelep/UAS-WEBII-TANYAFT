<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'AuthController::login');
$routes->post('/auth/authenticate', 'AuthController::authenticate');
$routes->get('/register', 'AuthController::register');
$routes->post('/auth/create', 'AuthController::create');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/dashboard', 'PengajuanController::dashboard', ['filter' => 'auth']);
$routes->get('/pengajuan', 'PengajuanController::index', ['filter' => 'auth']);
$routes->get('/pengajuan/create', 'PengajuanController::create', ['filter' => 'auth']);
$routes->post('/pengajuan/submit', 'PengajuanController::submit', ['filter' => 'auth']);
$routes->get('/pengajuan/detail/(:num)', 'PengajuanController::detail/$1', ['filter' => 'auth']);
$routes->get('/pengajuan/tanggapan/(:num)', 'PengajuanController::tanggapan/$1', ['filter' => 'auth']);
$routes->get('/eresponse', 'PengajuanController::eResponse', ['filter' => 'auth']);



$routes->get('/','AuthController::login');
