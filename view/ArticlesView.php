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
	public function add() {
		$model = $this->loadModel('articles');
		$this->set('cats',$model->select('categories','name, id'));
		$this->render('addArticle');
		
		
		}
		
	public function edit() {
		
		$model=$this->loadModel('articles');
		$this->set('art',$model->select('indexArticles','*','id='.$_GET['id']));
		$this->art = $this->art[0];
		$model = $this->loadModel('categories');
		$this->set('cats',$model->select('categories','*'));
		$this->render('editArticle');
		}
}
