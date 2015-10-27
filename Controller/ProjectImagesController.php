<?php
App::uses('AppController', 'Controller');

class ProjectImagesController extends AppController {
	
	public function admin_index($id = null){
		$project = $this->ProjectImage->Project->find('first', array('conditions' => array('Project.id' => $id), 'fields' => array('Project.name', 'Project.id'), 'recursive' => '-1'));
		if(!$id || empty($project)){
			$this->flashMessage(__d('project', 'Project does not exist.'), 'alert-error', array('controller' => 'projects', 'action' => 'index'));
		}else{
			$this->paginate = array('recursive' => '-1', 'conditions' => array('ProjectImage.project_id' => $id), 'order' => 'ProjectImage.order ASC');
			$this->set('projectImages', $this->paginate());
			$this->set(compact('project'));
		}
	}
	
	public function admin_add($id = null){
		$project = $this->ProjectImage->Project->find('first', array('conditions' => array('Project.id' => $id), 'fields' => array('Project.name', 'Project.id'), 'recursive' => '-1'));
		if(!$id || empty($project)){
			$this->flashMessage(__d('project', 'Project does not exist.'), 'alert-error', array('controller' => 'projects', 'action' => 'index'));
		}
		if($this->request->is('Post')){
			$this->ProjectImage->create();
			if($this->ProjectImage->save($this->request->data)){
				 $this->flashMessage(__d('projectImages', 'Success! Project Image was created'), 'alert-success', array('action' => 'index', $id));
			}else{
				 $this->flashMessage(__d('projectImages', 'Error creating project image.  Please try again'), 'alert-error', $id);
			}
		}
		$this->set(compact('project'));
	}
	
	public function admin_delete($id = null, $project_id = null){
		if ($this->ProjectImage->delete($id)) {
            $this->flashMessage(__d('projectImages', 'The Project Image has been deleted'), 'alert-success', array('action' => 'index', $project_id));
        } else {
            $this->flashMessage('Invalid Project Image.', 'alert-error', array('action' => 'index', $project_id));
        }
	}
	
	public function admin_edit($id = null, $project_id = null) {
		$projectImage = $this->ProjectImage->find('first', array('conditions' => array('ProjectImage.id' => $id), 'fields' => array('ProjectImage.id', 'ProjectImage.name', 'ProjectImage.project_id', 'ProjectImage.order', 'ProjectImage.image_file_name'), 'recursive' => '-1'));
		$this->set(compact('projectImage'));
        if ($this->request->is('Post')) {
			if($projectImage){
				$this->ProjectImage->id = $id;
				 if ($this->ProjectImage->save($this->request->data)) {
					 $this->flashMessage(__d('projectImages', 'The Project Image has been updated'), 'alert-success', array('action' => 'index', $project_id));
				 }
			}else{
				$this->flashMessage('Invalid Project.', 'alert-error', array('action' => 'index', $project_id));
			}
        }
    }
	
	/*public function admin_index(){
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
		if ($this->Project->delete($id)) {
            $this->flashMessage(__d('projects', 'The Project has been deleted'), 'alert-success', array('action' => 'index'));
        } else {
            $this->flashMessage('Invalid Project.', 'alert-error', array('action' => 'index'));
        }
	}
	
	public function admin_edit($id = null) {
        if ($this->request->is('Post')) {
			$project = $this->Project->findById($id);
			if($project){
				$this->Project->id = $id;
				 if ($this->Project->save($this->request->data)) {
					 $this->flashMessage(__d('projects', 'The Project has been updated'), 'alert-success', array('action' => 'index'));
				 }
			}else{
				$this->flashMessage('Invalid Project.', 'alert-error', array('action' => 'index'));
			}
        }
    }*/
	
}