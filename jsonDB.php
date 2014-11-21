<?php 

/**
 * jsonDB.php includes all configuration of jsonDB application  
 */


/**
 * [$env could be DEV or PROD]
 * @var string
 */
$env = 'DEV';

if ($env=='DEV') {
	$env_var = 1;
}elseif ($env='PROD') {
	$env_var = 0;
}

/**
 * Handling php errors for DEV & PROD
 */
ini_set('display_errors', $env_var);


/**
 * [$db_directory defining db directory]
 * @var string
 */
$db_directory = './db/';

/**
 * defining db type
 */
$db_type = '.json';

/**
 * db string
 */
$db_string = $db_directory.'*'.$db_type;

/**
 * db error flag
 */
$db_err = 0;

/**
 * Read(R) or Write(W) mode by default
 */
$mode = 'R';

/**
 * 
 */
$actual_link_array[4] = 'NA';

/**
 * [$json_doc_name description]
 * @var string
 */
$json_doc_name = 'db_sample.json';

/**
 * db error msg
 */
$db_err_msg = 'Unable to connect to database directory';
/**
 * [$connect path of connection file]
 * @var string
 */
$connect  = './scripts/connect.php'; 

/**
 * [$functions description]
 * @var string
 */
$functions = './scripts/functions.php';

/**
 * including connect.php in applications
 */
require_once($connect); 
/**
 * Including functions 
 */
require_once($functions);

?>
