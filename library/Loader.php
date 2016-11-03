<?php


class Loader {
	
	static function loadJS($name){
		
		$path='js/'.$name.'js';
		
		echo '<script type="text/javascript src="'.$path.'"></script>';
		
	}
}
