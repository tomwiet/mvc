<?php

/**
 * @author Łukasz Socha <kontakt@lukasz-socha.pl>
 * @version: 1.0
 * @license http://www.gnu.org/copyleft/lesser.html
 */
 

 
/**
 * This class includes methods for controllers.
 * Klasa głównego kontrolera, zawiera metody wspólne dla wszystkich kontrolerów.
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
    //tworzy obiekt widoku
	public function loadView($name, $path='view/') {

		$name=ucfirst($name.'View'); //np ArticlesView
		$path=$path.$name.'.php'; //np views/ArticlesView.php
		try {
			
			if(is_file($path)){
				$view_ob = new $name();
			
			}else{
				
				throw new Exception ('Nie można otworzyć widoku. Brak pliku('.$path.')');
				
				}
		}catch(Exception $e) {
			
            echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
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
	 //tworzy obiekt modelu
    
	public function loadModel($name, $path='model/') {
		$name=ucfirst($name.'Model'); //np ArticlesModel
		$path=$path.$name.'.php'; //np views/ArticlesModel.php
		try{
			if(is_file($path)){
			
				$model_ob = new $name();
			
			}else{
				
				throw new Exception('Nie można utowrzyć modelu. Brak pliku ('.$path.' )');
			
			}
			
		} catch (Exception $e) {
			
			echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
 
		}
		
		return $model_ob;
	}
}
?>