<?php 


//database config

$name_DB ="mvc";
$server_DB="edulinux.pl";
$user_DB ="mvcuser";
$password_DB="mvcuser";

//ustawienie ścieżek z których będą includowane pliki przez funkcje __autoload()
set_include_path(get_include_path().PATH_SEPARATOR."controller");
set_include_path(get_include_path().PATH_SEPARATOR."model");
set_include_path(get_include_path().PATH_SEPARATOR."router");
set_include_path(get_include_path().PATH_SEPARATOR."view");
set_include_path(get_include_path().PATH_SEPARATOR."config");

 ?>