<?php

class linkRouter {
	private static $path="";
	private static $arr= array();
	public static function route(){

		//pobranie wpisanego w pasek przeglądarki adresu i obcięcię ostatniego slasha (jeśli jest wpisany) 
		//i jesli ścieżka nie jest pusta
		if(isset($_SERVER['PATH_INFO'])){
	
			self::$path = trim($_SERVER['PATH_INFO'],'/');
	
		}

		self::$arr = explode('/', self::$path); //rozbijamy ścieżkę na tablicę na podstawie / 

		$_GET['controller'] = self::$arr[0];
		$_GET['view'] = self::$arr[1];

		for($i=2;$i<count(self::$arr);$i+=2){
			if(isset(self::$arr[$i])&& isset(self::$arr[$i+1])){
	
			$_GET[self::$arr[$i]] =self::$arr[$i+1];
		
			}
	
		};
	
	}
}
?>