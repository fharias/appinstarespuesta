<?php
App::uses('AppModel', 'Model');
/**
 * Skill Model
 *
 * @property Member $Member
 */
class Skill extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Member' => array(
			'className' => 'Member',
			'joinTable' => 'members_skills',
			'foreignKey' => 'skill_id',
			'associationForeignKey' => 'member_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
