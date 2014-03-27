<?php
App::uses('AppModel', 'Model');
/**
 * Article Model
 *
 */
class Article extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'article_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

}
