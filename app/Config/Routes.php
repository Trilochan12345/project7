<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/welcome', 'Home::index');

$routes->get('/', 'Home::login');

$routes->post('/', 'Home::login');

$routes->get('/register', 'Home::register');

$routes->get('/dashboard', 'Home::dashboard');

$routes->get('/dispatch', 'Home::dispatch');

$routes->get('/codes', 'Home::codes');

$routes->get('/coders', 'Home::coders');

$routes->get('/additem', 'Home::additem');
