<?php
/**
 * @author Tomasz Wieteska <tomasz.wieteska@zsznr2.pl>
 * @version: 1.0
 * @license http://www.gnu.org/copyleft/lesser.html
 */
 

 
/**
 * categories view class
 * includes methods of catrgories view
 */

//zadaniem widoku jest prezentacja danych
class CategoriesView extends View {
	
	//utworzy obiekt modelu, który wykona odpowiednie operacje na danych, przekaże je do widoku
	public function  index() {
        //wywołanie metody LoadModel z klasy widoku [View.php] (utworzenie obiektu modelu) 
		//żadanie danych od modelu [View.php]
		$model=$this->loadModel('categories');
		// wskazanie modelowi jakie dane chcemy dostać i przypisanie ich do zmiennej o nazwie catsData 
		//[View.php]
        $this->set('catsData', $model->getAll());
		//wygenerowanie widoku z pobranymi danymi [View.php]
		//wstawienei danych do pliku szablonu o nazwie indexCategory.html.php
        $this->render('indexCategory'); 
    }
	
    public function  add() {
        //wygenerowanie widoku z formularzem dodawania kategorii
		//tzn załadowanie pliku szablonu addCategory.html.php
		$this->render('addCategory'); 
    
	}
	
	public function  edit() {
		//wygenerowanie widoku z formularzem edytowania kategorii
		//tzn załadowanie pliku szablonu editCategory.html.php
        $this->render('editCategory'); 
    }
}
?>
