<?php

use App\Router;
use App\Controllers\PageController;

$router = new Router();

$router->get('/', PageController::class, 'index');

$router->dispatch();