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
    public function  __construct() {
		include 'config/config.php';
		$this->conn = new mysqli($server_DB,$user_DB,$password_DB,$name_DB);
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
    public function loadModel($name, $path='model/') {
		$name=ucfirst($name.'Model'); //np ArticlesModel
		$path=$path.$name.'.php'; //np views/ArticlesModel.php
		
		if(is_file($path)){
			$model_ob = new $name();
			}else{
				echo 'Nie można utowrzyć modelu. Brak pliku('.$path.' z klasą modelu (from Model.php)';
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
    public function select($table, $fields='*', $where=NULL, $order=NULL, $limit=NULL) {
		
		$sql ='SELECT '.$fields.' FROM '.$table;
		if($where != NULL)
			$sql= $sql.' WHERE '.$where;
		if($order != NULL)
			$sql = $sql.' ORDER BY '.$order;
		if($limit != NULL)
			$sql = $sql.' LIMIT '.$limit;
		$result = $this->conn->query($sql);
		//$data=array();
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
			
				$data[]=$row;
		
			}
			
		}else{
			
			$data= NULL;
		}
		
		//$this->conn->close();
		return $data;
	}
	
	
}
?>