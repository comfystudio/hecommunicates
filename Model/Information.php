<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 */
class Information extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'information';
	
	public $validate = array(
        'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Please provide a title'		
		),
		'text' => array(
			'rule' => 'notEmpty',
			'message' => 'Please provide some text'		
		)
    ); 
}
