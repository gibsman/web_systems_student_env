<?php
include_once 'Router.php';
// вызывает {module}.routes.php
modules_load_routes();

$r = new Router();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);