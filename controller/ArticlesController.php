<?php


class ArticlesController extends Controller {
	
	public function index() {
       
		$view=$this->loadView('articles'); 
        
		$view->index();
 
    }
}
