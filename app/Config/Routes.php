<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/', 'Home::index');
$routes->get('/contoh/index', 'Contoh::index');
$routes->get('/contoh/about', 'Contoh::about');

$routes->get('/contoh/(:any)', 'Contoh::about/$1');
$routes->get('/admin', 'Admin\Users::index');
$routes->get('/admin/about', 'Admin\Users::about');
$routes->get('/admin/contact', 'Admin\Users::contact');
$routes->get('/mahasiswa', 'Admin\Mahasiswa');



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
