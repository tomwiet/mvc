<?php


class ArticlesView extends View {
	
	public function  index() {
        //wywołanie metody LoadModel z klasy widoku [View.php] (utworzenie obiektu modelu) 
		//żadanie danych od modelu [View.php]
		$model=$this->loadModel('articles');
		// wskazanie modelowi jakie dane chcemy dostać i przypisanie ich do zmiennej o nazwie catsData 
		//[View.php]
        $this->set('artsData', $model->getArts());
		//wygenerowanie widoku z pobranymi danymi [View.php]
		//wstawienei danych do pliku szablonu o nazwie indexCategory.html.php
        $this->render('indexArticles'); 
    }
}
