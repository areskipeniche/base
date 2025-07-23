<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home.index']);
// Testes Páginas Estáticas
$routes->get('about', 'Home::index', ['as' => 'about.index']);
$routes->get('services', 'Home::index', ['as' => 'services.index']);
$routes->get('contact', 'Home::index', ['as' => 'contact.index']);

# Rotas Públicas, sem autenticação
$routes->group('', ['namespace' => 'App\Controllers'], function ($routes) {
  $routes->get('login', 'User\Login::index', ['as' => 'login']);
  $routes->post('login/authenticate', 'User\Login::authenticate');
  $routes->get('unauthorized', 'Error::unauthorized', ['as' => 'error.unauthorized']);  
});

$routes->group('dashboard', ['namespace' => 'App\Controllers', 'filter' => 'Auth'], function ($routes) {
  $routes->get('/', 'Dashboard::index', ['as' => 'dashboard.index']);
  $routes->get('user', 'Dashboard::user', ['as' => 'dashboard.user']);
});


service('auth')->routes($routes);
