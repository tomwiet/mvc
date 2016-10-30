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
		try {
			if(is_file($path)){
				
				$model_ob = new $name();
			
			}else{
				
				throw new Exception('Nie można utowrzyć modelu. Brak pliku ('.$path.')');
			
			}
				
		} catch(Exception $e){
			
			echo $e->getMessage().'<br />
			File: '.$e->getFile().'<br />
			Code line: '.$e->getLine().'<br />
			Trace: '.$e->getTraceAsString();
		
			exit;
		}
		
		return $model_ob;
 
    }
    /**
     * It includes template file.
     *
     * @return void
     */
	//załadowanie i wyświetlenie szablonu
    public function render($name,$path='templates/') {
		
		$path=$path.$name.'.html.php'; //np articles.html.php
		
		try{
			
			if(is_file($path)) {
				
				require $path;
			
			} else {
			
				throw new Exception('Brak szablonu widoku dla '.$name);
			}
			
		} catch(Exception $e){
			
			echo $e->getMessage().'<br />
			File: '.$e->getFile().'<br />
			Code line: '.$e->getLine().'<br />
			Trace: '.$e->getTraceAsString();
			
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
	//przpisanie datych do zmiennej której nazwa przakazana jest do metodu w parametrze $name 
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
	 //metoda umożliwia pobranie danych ze zmiennej której nazwa przakazana jest do metodu w parametrze $name 
    public function get($name) {
		
		return $this->$name;
 
    }
}
?>
