<?php


class ArticlesController extends Controller {
	
	public function index() {
       
		$view=$this->loadView('articles'); 
        
		$view->index();
 
    }
	public function show(){
	
	$view =$this->loadView('articles');
	$view->show($_GET);
	
	}
	
	public function add(){
	
	$view =$this->loadView('articles');
	$view->add();
	
	
	}
	
	public function insert(){
	
	$model=$this->loadModel('articles');
	$model->insert($_POST);
	$this->redirect('?task=articles&action=index');
	}
	
	public function delete(){
		
		$model=$this->loadModel('articles');
		$model->delete($_GET['id']);
		$this->redirect('?task=articles&action=index');
		
		}
		
	public function edit(){
		
		$view = $this->loadView('articles');
		$view->edit();
		//$this->redirect('?task=articles&action=index');
		
		}
	
}
