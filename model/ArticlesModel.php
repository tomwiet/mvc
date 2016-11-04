<?php


class ArticlesModel extends Model {
	
	public function getAll() {
		/*TODO: stworzyć komunikat który wyświetli ewnetualny bład lub poinformuje o sukcesie pobrania danych danych*/
		return $this->select('indexArticles');
	}
	public function insert($data){
/*	    echo '<pre>';
		var_dump($_POST);
		echo '</pre>';
		exit;*/
	$sql='INSERT INTO `articles` (`title`,`autor`,`id_categories`,`content`,`date_add`) 
	VALUES ("'.$_POST["title"].'","'.
			$_POST["autor"].'","'.
			$_POST["category"].'","'.
			$_POST["content"].'",NOW());';
			echo $sql;
		exit;
	$this->conn->query($sql);
	 $this->conn->close();
	
    		

	}
}

