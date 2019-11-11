<?php

$router->add('/asu',[
    'module' => 'dashboard',
    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web\\',
    'controller'=>'Dashboard',
    'action'=>'random',
]);