<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->post('/prueba', 'Home::prueba');

$routes->get('/', 'Home::index');
$routes->get('/registro', 'Home::registro');
$routes->post('/registrar', 'Home::registrar');
$routes->post('/login', 'Home::login');
$routes->get('/salir', 'Home::salir');
$routes->add('/contacto', 'ContactoController::index');
$routes->add('/hola', 'ContactoController::otraPagina');
$routes->post('/metodoPOST', 'ContactoController::metodoPOST');
$routes->add('/CRUD', 'CRUDController::index');
$routes->post('/crear', 'CRUDController::crear');
$routes->post('/actualizar', 'CRUDController::actualizar');
$routes->get('/obtenerID/(:any)', 'CRUDController::obtenerID/$1');
$routes->get('/eliminar/(:any)', 'CRUDController::eliminar/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
