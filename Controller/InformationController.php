<?php
App::uses('AppController', 'Controller');

class InformationController extends AppController {
	
	public function admin_index(){
		$this->Information->recursive = 0;
		$this->paginate = array('order' => 'Information.order ASC');
        $this->set('informations', $this->paginate());
	}
	
	public function admin_add(){
		if($this->request->is('Post')){
			$this->Information->create();
			if($this->Information->save($this->request->data)){
				 $this->flashMessage(__d('informations', 'Success! Information was created'), 'alert-success', array('action' => 'index'));
			}else{
				 $this->flashMessage(__d('informations', 'Error creating information.  Please try again'), 'alert-error');
			}
		 }
	}
	
	
	public function admin_delete($id = null){
		if ($this->Information->delete($id)) {
            $this->flashMessage(__d('Information', 'The Information has been deleted'), 'alert-success', array('action' => 'index'));
        } else {
            $this->flashMessage('Invalid Information.', 'alert-error', array('action' => 'index'));
        }
	}
	
	
	public function admin_edit($id = null) {
		$information = $this->Information->find('first', array('conditions' => array('Information.id' => $id), 'fields' => array('Information.id', 'Information.title', 'Information.text', 'Information.order'), 'recursive' => '-1'));
		$this->set(compact('information'));
        if ($this->request->is('Post')) {
			if($information){
				$this->Information->id = $id;
				 if ($this->Information->save($this->request->data)) {
					 $this->flashMessage(__d('information', 'The Information has been updated'), 'alert-success', array('action' => 'index'));
				 }
			}else{
				$this->flashMessage('Invalid Information.', 'alert-error', array('action' => 'index'));
			}
        }
    }
	
	
	public function index($id = null){
		$informationList = $this->Information->find('list');
		if($id == null){
			$information = $this->Information->find('first', array('fields' => array('Information.id', 'Information.title', 'Information.text'), 'order' => 'Information.order ASC', 'recursive' => '-1'));	
		}else{
			$information = $this->Information->find('first', array('fields' => array('Information.id', 'Information.title', 'Information.text'), 'recursive' => '-1', 'conditions' => array('Information.id' => $id)));	
		}
		$this->set(compact('informationList', 'information', 'id'));
	}
}