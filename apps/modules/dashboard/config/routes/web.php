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
    'action'=>'index',
]);

$router->add('/ideas/add',[
    'module' => 'dashboard',
    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web\\',
    'controller'=>'Ideas',
    'action'=>'store',
])->setName('ideas-add')->via(['POST']);


$router->add('/ideas/rate',[
    'module' => 'dashboard',
    'namespace' => 'Phalcon\Init\Dashboard\Controllers\Web\\',
    'controller'=>'Ideas',
    'action'=>'rate',
])->setName('ideas-rate')->via(['POST']);