<?php


class CategoriesModel extends Model {
   //metoda wstawiająca dane do tabeli categories
    public function insert($data) {
		
		$sql = "INSERT INTO `categories` (`name`) VALUES ('".$_POST["name"]."')";
		
		$this->conn->query($sql);
		
		/* TODO: stworzyć komunikat który wyświetli ewnetualny bład lub poinformuje o sukcesie wstawienia danych
		 * if ($this->conn->query($sql) === TRUE) {
			echo 'New record created successfully';
		} else {
			echo "Error: " . $sql . "<br>" . $this->conn->error;
		}*/
	    $this->conn->close();
    }
    //metoda pobierająca wszystkie rekordy z tabeli categories (bazująca na metodzie select z [Model.php])
	public function getAll() {
		/*TODO: stworzyć komunikat który wyświetli ewnetualny bład lub poinformuje o sukcesie pobrania danych danych*/
		return $this->select('categories');
    
	}
	//metoda usuwająca rekord o przekazanym id
    public function delete($id) {
		
		$sql = 'DELETE FROM categories WHERE id=' . $id;
		$this->conn->query($sql);
		/*TODO: stworzyć komunikat który wyświetli ewnetualny bład lub poinformuje o sukcesie pobrania danych danych*/
		$this->conn->close();
	
    }
	//metoda aktualizuje dany rekord danymi z formularza edycji
	public function update($data) {
		
		$sql = 'UPDATE `categories` SET `name`="' . $_POST['name'] . '" WHERE id=' . $_POST['id'];
		
		$this->conn->query($sql);
		
		/*
		 * TODO: stworzyć komunikat który wyświetli ewnetualny bład lub poinformuje o sukcesie wstawienia danych
		 * if ($this->conn->query($sql) === TRUE) {
		 * 		echo 'New record created successfully';
		 * }else{
		 * 
		 * 		echo "Error: " . $sql . "<br>" . $this->conn->error;
		 * 
		 * }
		 * */
	    $this->conn->close();
    }
}
