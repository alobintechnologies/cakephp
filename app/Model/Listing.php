<?php
App::uses('AppModel', 'Model');
/**
 * Listing Model
 *
 */
class Listing extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'listing_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

}
