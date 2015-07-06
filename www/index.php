<?php
include_once 'Router.php';
include_once 'fenom/src/Fenom.php';
Fenom::registerAutoload();

function get_fenom() {
    return Fenom::factory('', 'cache/', array('auto_reload' => true));
}
session_start();
$content = Router::process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
$Fenom = get_fenom();
$Fenom->display('/fenom/sandbox/templates/pract/main.tpl', $content);
?>