<?php

class ArticlesController extends Controller {
	
	public function index() {
        
		//wywołanie metody ładującej widok (tworzącej obiekt reprezentujący widok dla kategorii)
		//z [Controller.php].W zmiennej $view znajdzie się obiekt reprezentujący widok
		$view=$this->loadView('articles'); 
        //wywołanie metody index z pliku [ArticlesView.php],która przygotuje obiekt modelu, 
		//który pobierze z bazy danych wszystkie rekordy z tabeli przechowującej informacje na temat kategorii 
		//przekaże je do widoku
		$view->index();
 
    }
	
	public function show() {
		
		$view=$this->loadView('articles');
	
		$view->show($_GET['id']);
		
	}
	
	public function edit(){
		
		$view=$this->loadView('articles');
		
		$view->edit($_GET['id']);
		
		}
}
