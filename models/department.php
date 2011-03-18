<?php
class Department extends AppModel {
	var $name = 'Department';
	var $displayField = 'name';
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This field is required.',
				//'allowEmpty' => false,
				//'required' => false,
				'last' => true, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'must_be_unique' => array(
				'rule' => 'isUnique',
				'message' => 'Sorry, this department name already exists',
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'department_id',
			'dependent' => false,
		)
	);

}
?>
