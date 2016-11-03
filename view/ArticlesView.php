<?php


class ArticlesView extends View {

	
	public function  index() {
       
		$model=$this->loadModel('articles');
		
        $this->set('artsData', $model->getAll());
	
        $this->render('indexArticles'); 
    }
	
	public function show($data) {
		
		$model=$this->loadModel('articles');
		
		$this->set('artData', $model->select('indexArticles','*','id='.$data['id']));
		$this->artData = $this->artData[0];
		
		$this->render('showArticle'); 
		
		}
}
