<?php
/**
 * @author Tomasz Wieteska <kontakt@lukasz-socha.pl>
 * @version: 1.0
 * @license http://www.gnu.org/copyleft/lesser.html
 */
 
/**
 * This class includes methods for articles.
 *
 *
 */

class ArticlesModel extends Model {
	
	public function getAll() {
		/*TODO: stworzyć komunikat który wyświetli ewnetualny bład lub poinformuje o sukcesie pobrania danych danych*/
		return $this->select('indexArticles');
    
	}
	
	public function delete($id) {
		
		$sql = 'DELETE FROM articles WHERE id=' . $id;
		$this->conn->query($sql);
		/*TODO: stworzyć komunikat który wyświetli ewnetualny bład lub poinformuje o sukcesie pobrania danych danych*/
		$this->conn->close();
		
	}
	
	public function update($data) {
		
		$sql = 'UPDATE `articles` SET 	`title`="' . $_POST['title'] .'", 
										`autor`="' . $_POST['autor'].'", 
										`id_categories`="' . $_POST['category'] .'",
										`date_add`="' . $_POST['date_add'] . '", 
										`content`="' .$_POST['content'] .
										'" WHERE id="' . $_POST['id'];

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
