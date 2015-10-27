<?php
App::uses('AppController', 'Controller');

class ProjectsController extends AppController {
	
	public function admin_index(){
		$this->Project->recursive = 0;
        $this->set('projects', $this->paginate());
	}
	
	public function admin_add(){
		if($this->request->is('Post')){
			$this->Project->create();
			if($this->Project->save($this->request->data)){
				 $this->flashMessage(__d('projects', 'Success! Project was created'), 'alert-success', array('action' => 'index'));
			}else{
				 $this->flashMessage(__d('projects', 'Error creating project.  Please try again'), 'alert-error');
			}
			 
		 }
	}
	
	public function admin_delete($id = null){
		if ($this->Project->delete($id, true)) {
			$projectImages = $this->Project->ProjectImage->find('all', array('conditions' => array('ProjectImage.project_id' => $id), 'fields' => array('ProjectImage.id'), 'recursive' => -1));
			foreach($projectImages as $image){
				$this->Project->ProjectImage->delete($image['ProjectImage']['id']);
			}
            $this->flashMessage(__d('projects', 'The Project has been deleted'), 'alert-success', array('action' => 'index'));
        } else {
            $this->flashMessage('Invalid Project.', 'alert-error', array('action' => 'index'));
        }
	}
	
	public function admin_edit($id = null) {
		$project = $this->Project->find('first', array('conditions' => array('Project.id' => $id), 'fields' => array('Project.id', 'Project.name'), 'recursive' => '-1'));
		$this->set(compact('project'));
        if ($this->request->is('Post')) {
			if($project){
				$this->Project->id = $id;
				 if ($this->Project->save($this->request->data)) {
					 $this->flashMessage(__d('projects', 'The Project has been updated'), 'alert-success', array('action' => 'index'));
				 }
			}else{
				$this->flashMessage('Invalid Project.', 'alert-error', array('action' => 'index'));
			}
        }
    }
	
	public function random(){
		$fields = array(
			'ProjectImage.id', 'ProjectImage.image_file_name', 'ProjectImage.name'
		);
		$randoms = $this->Project->ProjectImage->find('all', array('limit' => 10, 'recursive' => '-1', 'order' => 'rand()', 'fields' => $fields));
		$this->set(compact('randoms'));
	}
	
	public function index(){
		$contain = array(
			'ProjectImage' => array(
				'fields' => array(
					'ProjectImage.image_file_name', 'ProjectImage.id', 'ProjectImage.name'
				),
				'limit' => '1',
				'order' => 'ProjectImage.order ASC'
			)
		);
		$projects = $this->Project->find('all', array('fields' => array('Project.id', 'Project.name', 'Project.created'), 'contain' => $contain, 'order' => 'created DESC'));
		$this->set(compact('projects'));
	}
	
	public function view($id){
		$contain = array(
			'ProjectImage' => array(
				'fields' => array(
					'ProjectImage.image_file_name', 'ProjectImage.id', 'ProjectImage.name'
				),
				'order' => 'ProjectImage.order ASC'
			)
		);
		$project = $this->Project->find('first', array('fields' => array('Project.id', 'Project.name', 'Project.created'), 'contain' => $contain, 'order' => 'created DESC', 'conditions' => array('Project.id' => $id)));
		if(!$project){
			$this->flashMessage('Invalid Project.', 'alert-error', array('action' => 'index'));
		}
		$projectList = $this->Project->find('list');
		$next = 0;
		foreach($projectList as $key => $list){
			if($project['Project']['id'] < $key){
				$next = $key;
				break;	
			}
		}
		if ($next == 0){
			foreach($projectList as $key => $list){
				if($project['Project']['id'] > $key){
					$next = $key;
					break;	
				}
			}
		}
		$this->set(compact('project', 'next'));
	}
	
}