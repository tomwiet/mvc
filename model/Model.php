<?php
/**
 * 
 * @author Łukasz Socha <kontakt@lukasz-socha.pl>
 * @version: 1.0
 * @license http://www.gnu.org/copyleft/lesser.html
 */
 
/**
 * This class includes methods for models.
 *
 * @abstract
 */

abstract class Model{
    /**
     * object of the class mysqli
     *
     * @var object
     */
    protected $conn;
 
    /**
     * It sets connect with the database.
     *
     * @return void
     */
	 //kostruktor obiektu. Przy tworzeniu jakiegokolwiek obiektu modelu nawiązywane jest połaczenie z bazą danych
    public function  __construct() {
		
		include 'config/config.php';
		
		$this->conn = new mysqli($server_DB,$user_DB,$password_DB,$name_DB);
		//ustawienei kodowania w jakim baza będzie oddawać dane
		$this->conn->set_charset("utf8");
		
		if($this->conn->connect_error){
		
			die("Connection failed: " . $this->conn->connect_error);
			
		}
		
 
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
				
				throw new Exception ('Nie można utowrzyć modelu. Brak pliku('.$path.')');
			}
			
		} catch (Exception $e){
			
				echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
				exit;
				}

		return $model_ob;
 
    }
    /*
     * It selects data from the database.
     *@param string $table Table
     * @param <type> $fields Fields to select (default * (all))
     * @param <type> $where Condition to query
     * @param <type> $order Order ($record ASC/DESC)
     * @param <type> $limit LIMIT
     * @return array
     */
	 //metoda która na podstawie przekazanych parametrów konstruuje zapytanie SELECT, wysyła je do bazy
	 // i odbiera z niej dane
    public function select($table, $fields='*', $where=NULL, $order=NULL, $limit=NULL) {
		
		$sql ='SELECT '.$fields.' FROM '.$table;
		if($where != NULL)
			$sql= $sql.' WHERE '.$where;
		if($order != NULL)
			$sql = $sql.' ORDER BY '.$order;
		if($limit != NULL)
			$sql = $sql.' LIMIT '.$limit;
			
		$result = $this->conn->query($sql);
		
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
			
				$data[]=$row;
		
			}
			
		}else{
			
			$data= NULL;
		}
		
		$this->conn->close();
		
		return $data;
	}
	
	
}
?>