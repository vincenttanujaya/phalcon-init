<?php

$router->add('/coba',[
    'module' => 'dashboard',
    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web\\',
    'controller'=>'Dashboard',
    'action'=>'random',
]);