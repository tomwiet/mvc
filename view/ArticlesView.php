<?php


class ArticlesView extends View {
	
	public function  index() {
        //wywołanie metody LoadModel z klasy widoku [View.php] (utworzenie obiektu modelu) 
		//żadanie danych od modelu [View.php]
		$model=$this->loadModel('articles');
		// wskazanie modelowi jakie dane chcemy dostać i przypisanie ich do zmiennej o nazwie catsData 
		//[View.php]
        $this->set('artsData', $model->getAll());
		//wygenerowanie widoku z pobranymi danymi [View.php]
		//wstawienei danych do pliku szablonu o nazwie indexCategory.html.php
        $this->render('indexArticles'); 
    }
	
	public function show($id) {
		
		$model=$this->loadModel('articles');
		
		$this->set('artData', $model->select('indexArticles','*','id='.$id));
		
		$this->artData = $this->artData[0];
		
		$this->render('showArticle');
		}
		
	public function edit($id) {
		
		$model=$this->loadModel('articles');
		
		$this->set('artData', $model->select('indexArticles','*','id='.$id));
		$this->artData = $this->artData[0];
		
		$model_cat=$this->loadModel('categories');
		$this->set('catsData',$model_cat->select('categories'));
		
		$this->render('editArticle');
		
	}
	
	public function add() {
		
		$model_cat=$this->loadModel('categories');
		$this->set('catsData',$model_cat->select('categories'));
		
		$this->render('addArticle');
		
		}
}
