<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Utils{

	function flatten(array $array) {
		$return = array();
		array_walk_recursive($array, function($a) use (&$return) { $return[] = $a; });
		return $return;
	}

}
?>
