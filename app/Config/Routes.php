<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('tienda', 'Home::tienda');
$routes->get('show', 'Home::show');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

