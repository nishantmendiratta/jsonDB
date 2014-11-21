<?php

/**
 * [save_file description]
 * @param  [string] $json_doc_name [name of file]
 * @param  [json] $json_obj      [json data]
 * @return [type]                [create and edit json file]
 */
function save_file($doc_name,$json_obj){
	
	/**
	 * [$json creating temperary json array]
	 * @var array
	 */
	$json_temp = array();

	/**
	 * [$data get contents of existing file (if exists) else create new]
	 * @var [type]
	 */
	$data = file_get_contents ($GLOBALS['db_directory'].$doc_name);

	/**
	 * [$json_temp decoding existing json object]
	 * @var [type]
	 */
    $json_temp = json_decode($data, true);

    /**
     * appending new data
     */
    $json_temp[] = json_decode($json_obj);

    /**
     * [$file open file in write mode]
     * @var [type]
     */
	$file = fopen($GLOBALS['db_directory'].$doc_name,'w+');
	
	/**
	 * write contents on file
	 */
	fwrite($file, json_encode($json_temp));
	
	/**
	 * returning new array 
	 */
	fclose($file);

	/**
	 * returning whole json file
	 */
	return $json_temp;
}
?>