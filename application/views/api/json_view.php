<?php

/**
 * Json Output Page
 *
 * This page is design for Output json message.
 * Included Set HTTP mime type and more.
 *
 * @package		CodeIgniter
 * @subpackage	UDsync
 * @author 		a20968
 * @category 	View
 * @link 		https://github.com/a20968/UDSync
*/

$this->output->set_content_type('application/json'); //Set HTTP mime type

echo $json; //Output message

exit; //Stop script running