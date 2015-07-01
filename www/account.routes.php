<?php
Router::get('^\/user(\/?)$', 'user');
Router::get('^\/user\/(\w+)(\/?)', 'tr');

function user(){
    echo "Введите номер пользователя";
}
function tr(){
    $parts =  explode('/', $_SERVER['REQUEST_URI'] );
    echo "Страница пользователя $parts[2]";
}

?>