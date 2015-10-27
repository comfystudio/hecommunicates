<?php
App::uses('AppModel', 'Model');
//App::uses('Security', 'Utility'); 
//App::import('Component','Auth'); 
/**
 * User Model
 *
 * @property Item $Item
 */
 
class ProjectImage extends AppModel {	
	
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		
	);
	
	var $actsAs = array(
			'UploadPack.Upload' => array(
				'image' => array(
					'styles' => array(
						'thumb' => '80x80'
					)
				)
			)
		);
	


/**
 * hasMany associations
 *
 * @var array
 */
 
 	public $belongsTo = array(
			'Project' => array(
				'className' => 'Project',
				'foreignKey' => 'project_id',
				'counterCache' => true
			)
	);
}
