<?php
require "./../vendor/autoload.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

// ./views/
define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new \Router\Router();

$router->register('/', ['Controllers\HomeController', 'index']);
$router->register('/users', ['Controllers\HomeController', 'usersAPI']);

$router->register('/contact', function () {
    return 'Contact';
});

/*$router->register('/classe', function () {
    return 'Classe';
});*/

try {
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (\Exceptions\RouteNotFoundException $error)
{
    echo $error->getMessage();
}
