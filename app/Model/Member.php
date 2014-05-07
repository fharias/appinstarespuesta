<?php

App::uses('AppModel', 'Model');

/**
 * Member Model
 *
 * @property Administrator $Administrator
 * @property Company $Company
 * @property Title $Title
 * @property Category $Category
 * @property City $City
 * @property Expertrating $Expertrating
 * @property Meeting $Meeting
 * @property Language $Language
 * @property Skill $Skill
 */
class Member extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Administrator' => array(
            'className' => 'Administrator',
            'foreignKey' => 'administrator_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Company' => array(
            'className' => 'Company',
            'foreignKey' => 'company_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Title' => array(
            'className' => 'Title',
            'foreignKey' => 'title_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'category_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'City' => array(
            'className' => 'City',
            'foreignKey' => 'city_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'ExpertRating' => array(
            'className' => 'ExpertRating',
            'foreignKey' => 'expertrating_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Meeting' => array(
            'className' => 'Meeting',
            'foreignKey' => 'member_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Language' => array(
            'className' => 'Language',
            'joinTable' => 'members_languages',
            'foreignKey' => 'member_id',
            'associationForeignKey' => 'language_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        ),
        'Skill' => array(
            'className' => 'Skill',
            'joinTable' => 'members_skills',
            'foreignKey' => 'member_id',
            'associationForeignKey' => 'skill_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                    $this->data[$this->alias]['password']
            );
        }
        return true;
    }

}
