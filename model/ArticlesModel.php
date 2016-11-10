<?php


class ArticlesModel extends Model {
	
	public function getAll() {
		/*TODO: stworzyć komunikat który wyświetli ewnetualny bład lub poinformuje o sukcesie pobrania danych danych*/
		return $this->select('indexArticles');
	}
	public function insert($data){

	$sql='INSERT INTO `articles` (`title`,`autor`,`id_categories`,`content`,`date_add`) 
	VALUES ("'.$_POST["title"].'","'.
			$_POST["autor"].'","'.
			$_POST["category"].'","'.
			htmlentities($_POST["content"]).'",NOW());';
	
	$this->conn->query($sql);
	$this->conn->close();
	
	}
	
	public function delete($id) {
		
		$sql = 'DELETE FROM articles WHERE id=' . $id;
		
		try{
			
			if(!($this->conn->query($sql))){
				
				throw new Exception($this->conn->error);
				$this->conn->close();
				
				}
				
			}catch (Exception $e){
			
				echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
				exit;
				}
	}
	
	public function update($data) {
		
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	exit;
		$sql = 'UPDATE `articles` SET `title`="'.$_POST['title'].
									  ',`autor`="'.$_POST['autor'].
									  ',`content`="'.$_POST['content'].
									  ', `id_categories`="'.$_POST['category'].' 
									WHERE id=' . $_POST['id'];
	echo '<pre>';
	var_dump($sql);
	echo '</pre>';
	exit;
		
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

