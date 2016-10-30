<?php
/**
 * @author Tomasz Wieteska <tomasz.wieteska@zsznr2.pl>
 * @version: 1.0
 * @license http://www.gnu.org/copyleft/lesser.html
 */
 

 
/**
 * categories controller class
 * includes methods of catrgories controller
 */

//zadaniem kontrolera jest przekazanie do modelu żadania przetworzenia danych oraz
//wywołanie widoku który te dane zaprezentuje

class CategoriesController extends Controller {
	//metoda wywołują widok który będzie prezentował dane odebrane z modelu model 
	//(spis kategorii)
	public function index() {
        
		//wywołanie metody ładującej widok (tworzącej obiekt reprezentujący widok dla kategorii)
		//z [Controller.php].W zmiennej $view znajdzie się obiekt reprezentujący widok
		$view=$this->loadView('categories'); 
        //wywołanie metody index z pliku [CategoriesView.php],która przygotuje obiekt modelu, 
		//który pobierze z bazy danych wszystkie rekordy z tabeli przechowującej informacje na temat kategorii 
		//przekaże je do widoku
		$view->index();
 
    }
	//metoda wywołująca widok tworzący formularz dodawania kategorii
    public function add() {
		//wywołanie metody z pliku [Controller.php], tworzącej obiekt widoku 
		//w zmiennej $view znajdzie się obiekt reprezentujący widok
        $view=$this->loadView('categories');
		//wywołanie metody add() z pliku [CategoriesView.php] która wygeneruje formularz dodawania kategorii
        $view->add(); 
    }
	//metoda wywołująca model który wstawi do bazy dane z formularza dodawania kategorii
	//dane sa przekazane z formularza metodą POST (nie mozna użyć GET, tablica $_GET słuzy nam do przekazywania 
	//parametrów na podstawie których kontrolery uruchamiają odpowiednie działania modeli i widoków)
    public function insert() {
		//wywołanie metody z pliku [Model.php], tworzącej obiekt modelu.
		//W zmiennej $model znajdzie się obiekt reprezentujący model
        $model=$this->loadModel('categories');
		//wywołanie metody insert() z pliku [CategoriesModel.php], która wstawi dane to tabeli categories.
        //do metody przekazywana jest tablica $_POST, która tworzy się po wysłaniu danych z formularza dodania kategorii
		$model->insert($_POST);
		//wywołanie metody redirect() z pliku [Controller.php], która załaduje plik index.php.
		//Na podstawie przekazanych w adresie parametrów zostanie wyświetlony odpowiedni widok 
		//(tutaj spis kategorii(widok index))
        $this->redirect('?task=categories&action=index');
    }
	//metoda wywołująca model który usunie kategorie o podanym w tablicy $_GET identyfikatorze.
	//id wpisywany jest do tablicy $_GET na podstawie parametru zawartego w odnośniku powodującym wywołanie akacji 
	//usuniecia danej kategorii. Odnośnik znajduje się w pliku szablonu spisu kategorii indexCategory.html.php
    public function delete() {
		//wywołanie metody z pliku [Model.php], tworzącej obiekt modelu.
		//W zmiennej $model znajdzie się obiekt reprezentujący model
        $model=$this->loadModel('categories');
		//wywołanie metody delete() z pliku [CategoriesModel.php], która usunie dane w tabeli categories.
        //do metody przekazywana jest id elementu do usunięcia.
        $model->delete($_GET['id']);
        $this->redirect('?task=categories&action=index');
    }
	//metoda wywołująca widok tworzący formularz edycji kategorii
	public function edit() {
        //wywołanie metody ładującej widok, która stworzy obiekt widoku
		$view=$this->loadView('categories');
        //wywołanie metody edit z pliku [CategoriesView.php] która ma za zadania wygenerowanie strony 
		//z formularzem edycji kategorii
		$view->edit(); 
    }
	 //metoda wywołująca model który zaktualizuje nazwę kategorii o podanym w tablicy $_POST identyfikatorze.
	//id wpisywany jest do tablicy $_GET na podstawie parametru zawartego w odnośniku powodującym wywołanie akcji edycji
	//danej kategorii (odnośnik znajduje się w pliku szablonu editCategory.html.php i wstawiany jest do ukrytego pola formularza
	//dzięki czemu po wysłaniu danych z formularza znajdzie się on w tablicy $_POST. 
	//(nie mozna użyć GET, tablica $_GET słuzy nam do przekazywania parametrów na podstawie których 
	//kontrolery uruchamiają odpowiednie działania modeli i widoków)
	 public function update() {
		//wywołanie metody z pliku [Model.php], tworzącej obiekt modelu.
		//W zmiennej $model znajdzie się obiekt reprezentujący model
        $model=$this->loadModel('categories');
		//wywołanie metody update() z pliku [CategoriesModel.php], która zaktualizuje dane w tabeli categories.
        //do metody przekazywana jest tablica $_POST, która tworzy się po wysłaniu danych z formularza dodania kategorii
        $model->update($_POST);
		//wywołanie metody redirect() z pliku [Controller.php], która załaduje plik index.php.
		//Na podstawie przekazanych w adresie parametrów zostanie wyświetlony odpowiedni widok 
		//(tutaj spis kategorii(widok index))
        $this->redirect('?task=categories&action=index');
	 
	 }
	
}
