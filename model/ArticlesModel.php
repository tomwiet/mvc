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
}

