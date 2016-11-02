<?php


class ArticlesView extends View {

	
	public function  index() {
       
		$model=$this->loadModel('articles');
		
        $this->set('artsData', $model->getAll());
	
        $this->render('indexArticles'); 
    }
}
