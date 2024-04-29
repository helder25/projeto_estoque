<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/cadastro', 'Home::cadastro');

$routes->get('/login', 'Login::index');
$routes->post('/login/authenticate', 'Login::authenticate');
