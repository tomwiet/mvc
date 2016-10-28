<?php

/**
 * @author Łukasz Socha <kontakt@lukasz-socha.pl>
 * @version: 1.0
 * @license http://www.gnu.org/copyleft/lesser.html
 */
 
/**
 * This class includes methods for controllers.
 *
 * @abstract
 */
abstract class Controller{
 
    /**
     * It redirects URL.
     *
     * @param string $url URL to redirect
     *
     * @return void
     */
    public function redirect($url) {
		
		header("location:".$url);
 
    }
    /**
     * It loads the object with the view.
     *
     * @param string $name name class with the class
     * @param string $path pathway to the file with the class
     *
     * @return object
     */
    //tworzy obiekt widoku który odbierze dane w celu ich prezentacji
	public function loadView($name, $path='view/') {

		$name=ucfirst($name.'View'); //np ArticlesView
		$path=$path.$name.'.php'; //np views/ArticlesView.php
		
		if(is_file($path)){
			$view_ob = new $name();
			}else{
				echo 'Nie można utowrzyć widoku. Brak pliku('.$path.' z klasą widoku (from Controler.php)';
				exit;
				}
		return $view_ob;
 
    }
    /**
     * It loads the object with the model.
     *
     * @param string $name name class with the class
     * @param string $path pathway to the file with the class
     *
     * @return object
     */
    public function loadModel($name, $path='model/') {
		$name=ucfirst($name.'Model'); //np ArticlesModel
		$path=$path.$name.'.php'; //np views/ArticlesModel.php
		
		if(is_file($path)){
			$model_ob = new $name();
			}else{
				echo 'Nie można utowrzyć modelu. Brak pliku( '.$path.' ) z klasą modelu (from Controller.php)';
				exit;
				}
		return $model_ob;
 
    }
}
?>