<?php
include 'config/config.php';
//include 'controller/categories.php';

function __autoload($className){
	
    include_once($className.".php");
}
if (!isset($_GET['task'])){
	
	$_GET['task'] = 'categories';
	$_GET['action'] = 'index';
	
}
if($_GET['task']=='categories') {
    //tworzy nowy obiekt kontrolera na podstawie klasy CategoriesControler
	$ob = new CategoriesController(); 
	//wywołuje metodę o nazwie zawartej w parametrze action adresu url
	//która ma za zadanie przygotować model i widok dla żądanej akcji [CategoriesControler.php]
	$action = $_GET['action'];
    $ob->$action(); 
}
?>