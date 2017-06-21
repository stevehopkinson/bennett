<?php
use Cake\Core\Plugin;
use Cake\Routing\Router;

Router::scope('/', function ($routes) {
    $routes->extensions(['json']);

    $routes->connect('/users', [
        'controller' => 'Users',
        'action' => 'index'
    ]);
});
