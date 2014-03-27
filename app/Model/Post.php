<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'post_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

}
