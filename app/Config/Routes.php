<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ========== FRONTEND ==========
$routes->get('/', 'Home::index');  // Semua section (home, about, services, dll) ada di halaman ini
$routes->post('/contact/send', 'Home::sendContact'); // Form contact tetap pakai POST

// ========== ADMIN (PUBLIK: login) ==========
$routes->get('/admin/login', 'Admin::login');
$routes->post('/admin/authenticate', 'Admin::authenticate');
$routes->get('/admin/logout', 'Admin::logout');

// ========== ADMIN (TERPROTEKSI: wajib login) ==========
$routes->get('/admin', 'Admin::index', ['filter' => 'auth']);

$routes->group('admin', ['namespace' => 'App\Controllers\Admin', 'filter' => 'auth'], function ($routes) {
    // Services
    $routes->get('services', 'Service::index');
    $routes->get('services/create', 'Service::create');
    $routes->post('services/store', 'Service::store');
    $routes->get('services/edit/(:num)', 'Service::edit/$1');
    $routes->post('services/update/(:num)', 'Service::update/$1');
    $routes->post('services/delete/(:num)', 'Service::delete/$1');

    // Products
    $routes->get('products', 'Product::index');
    $routes->get('products/create', 'Product::create');
    $routes->post('products/store', 'Product::store');
    $routes->get('products/edit/(:num)', 'Product::edit/$1');
    $routes->post('products/update/(:num)', 'Product::update/$1');
    $routes->post('products/delete/(:num)', 'Product::delete/$1');

    // Portfolio
    $routes->get('portfolio', 'Portfolio::index');
    $routes->get('portfolio/create', 'Portfolio::create');
    $routes->post('portfolio/store', 'Portfolio::store');
    $routes->get('portfolio/edit/(:num)', 'Portfolio::edit/$1');
    $routes->post('portfolio/update/(:num)', 'Portfolio::update/$1');
    $routes->post('portfolio/delete/(:num)', 'Portfolio::delete/$1');

    // Testimonials
    $routes->get('testimonials', 'Testimonial::index');
    $routes->get('testimonials/create', 'Testimonial::create');
    $routes->post('testimonials/store', 'Testimonial::store');
    $routes->get('testimonials/edit/(:num)', 'Testimonial::edit/$1');
    $routes->post('testimonials/update/(:num)', 'Testimonial::update/$1');
    $routes->post('testimonials/delete/(:num)', 'Testimonial::delete/$1');

    // Contact (Admin Panel)
    $routes->get('contact', 'Contact::index');
    $routes->post('contact/delete/(:num)', 'Contact::delete/$1');
});
