<?php

class CategoriesView extends View {
	//utworzy obiekt modelu, który wykona odpowiednie operacje na danych, przekaże je do widoku
	
	public function  index() {
        //wywołanie metody load model z klasy widoku (utworzenie obiektu modelu) 
		//żadanie danych od modelu [View.php]
		$cat=$this->loadModel('categories');
		// wskazanie modelowi jakie dane chcemy dostać i przypisanie ich do zmiennej o nazwie catsData 
		//[View.php]
        $this->set('catsData', $cat->getAll());
		//wygenerowanie widoku z pobranymi danymi [View.php]
		//wstawienei danych do ppliku szablonu o nazwie indexCategory.html.php
        $this->render('indexCategory'); 
    }
	
    public function  add() {
        //wygenerowanie widoku z formularzem dodawania kategorii
		//tzn załadowanie pliku szablony addCategory.html.php
		$this->render('addCategory'); 
    
	}
	
	public function  edit() {
        $this->render('editCategory'); //wygenerowanie widoku z formularzem edytowania kategorii
    }
}
?>
