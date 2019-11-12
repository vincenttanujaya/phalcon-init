<?php

$router->add('/coba',[
    'module' => 'dashboard',
    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web\\',
    'controller'=>'Dashboard',
    'action'=>'random',
]);

$router->add('/ideas',[
    'module' => 'dashboard',
    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web\\',
    'controller'=>'Ideas',
    'action'=>'store',
]);

$router->add('/ideas',[
    'module' => 'dashboard',
    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web\\',
    'controller'=>'Ideas',
    'action'=>'index',
]);