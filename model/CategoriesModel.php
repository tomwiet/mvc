<?php


class CategoriesModel extends Model {
 
    public function insert($data) {
		//var_dump($_POST) . '<br>';
		$sql = "INSERT INTO `categories` (`name`) VALUES ('".$_POST["name"]."')";
		//echo ($sql);
		//exit;
		$this->conn->query($sql);
		/*if ($this->conn->query($sql) === TRUE) {
			echo 'New record created successfully';
		} else {
			echo "Error: " . $sql . "<br>" . $this->conn->error;
		}*/
	    $this->conn->close();
    }
    
	public function getAll() {
    
		return $this->select('categories');
    
	}
	
    public function delete($id) {
		
		$sql = 'DELETE FROM categories WHERE id=' . $id;
		$this->conn->query($sql);
		$this->conn->close();
	
    }
	
	public function update($data) {
		
		$sql = 'UPDATE `categories` SET `name`="' . $_POST['name'] . '" WHERE id=' . $_POST['id'];
		//echo ('<pre>'.$sql.'</pre>');
		//exit;
		$this->conn->query($sql);
		/*if ($this->conn->query($sql) === TRUE) {
			echo 'New record created successfully';
		} else {
			echo "Error: " . $sql . "<br>" . $this->conn->error;
		}*/
	    $this->conn->close();
    }
}
