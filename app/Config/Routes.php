<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('logout', 'User_R::logout');
$routes->get('/hospitals', 'Pages::hospitals');
$routes->get('/loginask', 'Pages::showme/loginask');
$routes->get('/registerask', 'Pages::showme/registerask');
$routes->get('/about', 'Pages::showme/about');
$routes->get('dashboard', 'Dashboard::index',['filter' => 'auth']);
$routes->get('hdashboard', 'Dashboard::hdashboard',['filter' => 'hauth']);
$routes->match(['get','post'],'/login', 'User_R::index');
$routes->match(['get','post'],'/register', 'User_R::register');
$routes->match(['get','post'],'/profile', 'User_R::profile',);
$routes->match(['get','post'],'/updateprofile', 'User_R::updateprofile',['filter' => 'auth']);
$routes->match(['get','post'],'/hlogin', 'Hospital::index');
$routes->match(['get','post'],'/hregister', 'Hospital::hregister');
$routes->match(['get','post'],'/hprofile', 'Hospital::hprofile',['filter' => 'hauth']);
$routes->match(['get','post'],'/hupdateprofile', 'Hospital::hupdateprofile',['filter' => 'hauth']);

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
