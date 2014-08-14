<?php
class StructureController extends AppController{

	public function index(){

		//vérifier existence
		if ($this->request->is('post')){

			 //debug($this->request->data);

			 $structure = $this->Structure->findBynom_court($this->request->data['Structure']['nom_court']);
			 
			 if(!empty($structure)){
			 	$this->set('result', $structure['Structure']['nom_court']);
			 	$this->set(compact('test'));
			 	$this->render('viewstructure');
			 }else{
			 	$this->render('searchnull');
			 }
		}
	}

	public function view($id){
		debug($this->request);
		//die();
		return $this->Structure->findBynom_court($id);
	}

	public function add(){

		//vérifier existence

		//Si inexistante -> création

		//Affichage

	}


}