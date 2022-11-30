<?php 
use miniframework\App\Controller\HomeController;
use miniframework\App\Core\Router;
require_once __DIR__. '/../vendor/autoload.php';

Router::addRoute('GET','/', HomeController::class, 'index',[] );
Router::run();
