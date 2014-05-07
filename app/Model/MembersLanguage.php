<?php
App::uses('AppModel', 'Model');
/**
 * MembersLanguage Model
 *
 * @property Language $Language
 * @property Member $Member
 */
class MembersLanguage extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'language_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Language' => array(
			'className' => 'Language',
			'foreignKey' => 'language_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'member_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
