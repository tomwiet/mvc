<?php
/**
 * @author Łukasz Socha <kontakt@lukasz-socha.pl>
 * @version: 1.0
 * @license http://www.gnu.org/copyleft/lesser.html
 */
 
/**
 * This class includes methods for views.
 *
 * @abstract
 */
abstract class View{
 
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
				echo 'Nie można utowrzyć modelu. Brak pliku('.$path.' ) z klasą modelu (from View.php)';
				exit;
				}
		return $model_ob;
 
    }
    /**
     * It includes template file.
     *
     * @return void
     */
	//pobranie szablonu do którego wstawimy dane 
    public function render($name,$path='templates/') {
		
		$path=$path.$name.'.html.php'; //np articles.html.php
		
		if(is_file($path)) {
                require $path;
            } else {
					echo 'Brak szablonu widoku dla '.$name;
				}
 
    }
    /**
     * It sets data.
     *
     * @param string $name
     * @param mixed $value
     *
     * @return void
     */
    public function set($name, $value) {
		
		$this->$name=$value;
 
    }
    /**
     * It gets data.
     *
     * @param string $name
     *
     * @return mixed
     */
    public function get($name) {
		
		return $this->$name;
 
    }
}
?>
