<?php 
//default aplication url

$default_url = 'artykuly/idex';

//DB config

$name_DB ="mvc";
$server_DB="edulinux.pl";
$user_DB ="mvcuser";
$password_DB="mvcuser";

//autoloader klas

/*
	$autoload_path = array(
	'controller' => './controller/',
	'model' => './model/',
	'router' => './router/',
	'templates' =>'./templates/',
	'view' => './view/'
	 );
*/

set_include_path(get_include_path().PATH_SEPARATOR."controller");
set_include_path(get_include_path().PATH_SEPARATOR."model");
set_include_path(get_include_path().PATH_SEPARATOR."router");
set_include_path(get_include_path().PATH_SEPARATOR."view");
set_include_path(get_include_path().PATH_SEPARATOR."config");

//funkcja automatycznie ładująca klasy wg zapotrzebowania


 ?>