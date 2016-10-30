<?php


class ArticlesModel extends Model {
	
	public function getArts() {
		/*TODO: stworzyć komunikat który wyświetli ewnetualny bład lub poinformuje o sukcesie pobrania danych danych*/
		return $this->select('articles','id,title,date_add,autor,Id_categories');
    
	}
}
