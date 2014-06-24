<?php
/**
 * AttachSchema
 * 
 * PHP Version 5.3+
 *
 * @version       1.0
 * @link          https://github.com/krolow/Attach
 * @package       Attach.Config.Schema
 * @author        Vinícius Krolow <krolow@gmail.com>
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class AttachSchema extends CakeSchema
{

/**
 * Attachments table
 * 
 * @var array
 */
	public $attachments = array(
		'id' => array(
			'type' => 'integer',
			'null' => false,
			'default' => null,
			'key' => 'primary',
			'collate' => null,
			'comment' => ''
		),
		'filename' => array(
			'type' => 'string',
			'null' => false,
			'default' => null,
			'length' => 150,
			'collate' => 'utf8_general_ci',
			'comment' => '',
			'charset' => 'utf8'
		),
		'model' => array(
			'type' => 'string',
			'null' => false,
			'default' => null,
			'length' => 150,
			'collate' => 'utf8_general_ci',
			'comment' => '',
			'charset' => 'utf8'
		),
		'foreign_key' => array(
			'type' => 'integer',
			'null' => false,
			'default' => null,
			'collate' => null,
			'comment' => ''
		),
		'type' => array(
			'type' => 'string',
			'null' => false,
			'default' => null,
			'length' => 100,
			'collate' => 'utf8_general_ci',
			'comment' => '',
			'charset' => 'utf8'
		),
		'original_name' => array(
			'type' => 'string',
			'null' => false,
			'default' => NULL
		),
		'size' => array(
			'type' => 'integer',
			'null' => false,
			'default' => NULL
		),		
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array(
			'charset' => 'utf8',
			'collate' => 'utf8_general_ci',
			'engine' => 'InnoDB'
		)
	);

/**
 * Before callback
 *
 * @param Array $event Event
 * 
 * @return bool
 */
	public function before($event = array()) {
		return true;
	}

/**
 * After callback
 *
 * @param Array $event Event
 * 
 * @return bool
 */
	public function after($event = array()) {
		return true;
	}

}
