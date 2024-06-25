<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/transaksi', 'Transaksi::index');
$routes->get('/verifikasi', 'Verifikasi::index');
$routes->get('/verifikasi/monitor', 'Verifikasi::monitor');
$routes->get('/tiket', 'Tiket::index');
$routes->get('/users', 'Users::index');
