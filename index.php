<?php
    use Common\Base\Http\Route;
    require_once "autoload.php";
    $router = new Route($_SERVER['REQUEST_URI']);
    $router->Routing();
