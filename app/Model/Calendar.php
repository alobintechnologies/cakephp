<?php
App::uses('AppModel', 'Model');
/**
 * Calendar Model
 *
 */
class Calendar extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'calendar_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

	/**
    * Articles belong to a user (when added/edited) and a category
    */
    public $belongsTo = array(
        'User' => array(
            'className'    => 'User',
            'foreignKey'   => 'user_id'
        ),
        'Category' => array(
            'className' => 'Category',
            'foreignKey' => 'category_id'
        )
    );

    /**
    * Articles may have many article values and many comments related to it
    */
    public $hasMany = array(
        'ArticleValue' => array(
            'dependent' => true
        ),
        'Comment' => array(
            'dependent' => true
        )
    );

    /**
    * Articles must have a title
    */
    public $validate = array(
        'title' => array(
            'rule' => array(
                'notEmpty'
            )
        )
    );
}
