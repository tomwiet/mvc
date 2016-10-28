<?php

//zadaniem kontrolera jest przekazanie do modelu żadania przetworzenia danych oraz
		//wywołanie widoku który te dane zaprezentuje
class CategoriesController extends Controller {
	//metoda wywołują widok który będzie przedstawiał dane przekazane przez model
	public function index() {
        
		//wywołanie metody ładującej widok (tworzącej obiekt reprezentujący widok dla kategorii)
		//[Controller.php] w zmiennej view znajdzie się obiekt reprezentujący widok
		$view=$this->loadView('categories'); 
        //wywołanie medody index która przygotuje obiekt modelu, który wykona na danych żadaną akcję o 
		//odbierze od niego dane i przekaże do widoku [CategoriesView.php]
		//[]
		$view->index(); 
    }
	
    public function add() {
        $view=$this->loadView('categories');
        $view->add(); //wywołanie metody add - wygenerowanie strony z formularzem dodawania kategorii
    }
	
    public function insert() {
        $model=$this->loadModel('categories');
        $model->insert($_POST);
        $this->redirect('?task=categories&action=index');
    }
	
    public function delete() {
        $model=$this->loadModel('categories');
        $model->delete($_GET['id']);
        $this->redirect('?task=categories&action=index');
    }
	
	public function edit() {
        //wywołanie metody ładującej widok która stworzy obiekt widoku
		$view=$this->loadView('categories');
        //wywołanie metody edit która ma za zadania wygenerowanie strony z formularzem edycji kategorii
		$view->edit(); 
    }
	
	 public function update() {
		 
        $model=$this->loadModel('categories');
        $model->update($_POST);
        $this->redirect('?task=categories&action=index');
	 
	 }
	
}
