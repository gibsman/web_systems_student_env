<?php

function HOME(){
	echo 'Стартовая страница';
}
Router::get('^\/home$', 'home');
Router::get('^\/$', 'home');
?>