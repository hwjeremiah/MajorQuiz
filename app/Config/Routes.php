<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('login');

$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/students', 'Students::index');
$routes->get('/students/create', 'Students::create');
$routes->post('/students/store', 'Students::store');
$routes->get('/students/edit/(:num)', 'Students::edit/$1');
$routes->post('/students/update/(:num)', 'Students::update/$1');
$routes->get('/students/delete/(:num)', 'Students::delete/$1');
$routes->delete('students/delete/(:num)', 'Students::delete/$1');
$routes->post('students/store', 'Students::store');
