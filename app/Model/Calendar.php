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

}
