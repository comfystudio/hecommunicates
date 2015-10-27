<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 */
class Project extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'projects';
	
	public $validate = array(
        'name' => array(
			'rule' => 'isUnique',
			'message' => 'The project name must be unique'		
		)
    );
	
	public $hasMany = array(
		'ProjectImage' => array(
			'className' => 'ProjectImage',
			'foreignKey' => 'project_id',
			'dependant' => true,
		)
	);
}
