<?php

require_once('functions.php');
/**
 * change mode to Write(W)
 */
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link_array =explode('/',$actual_link);
if ($actual_link_array[4]=='chmode') {
	$mode = 'W';
}

/**
 * fetching db collections
 */

/**
 * [$files check if files exisits or not]
 * @var [type]
 */
$files = glob($db_string);

/**
 * If mode is not (W)Write then read files
 */
if($mode!='W'){
	/**
	 * check if files are available 
	 */
	if (count($files) > 0){
		/**
		 * fetch documents
		 */
		require_once('read.php');

	}else{
		/**
		 * if no file exist in db folder show error
		 */
		echo $db_err_msg;
	}
}else{
	/**
	 * (W) Write mode
	 */
	require_once('create.php');
}
?>