<?php

	/**
	 * fetching file path of each file in db folder
	 */
	foreach (glob($db_string) as $file_path) {
		
		/**
		 * if file path is not set show error
		 */
		if(!isset($file_path)){
	    	$db_err=1;
	        break;
	    }
	    
	    /**
	     * [$file_path_array creating array out of file path string]
	     * @var [type]
	     */
	    $file_path_array = explode("/",$file_path);

	    /**
	     * [$file_name extracting file name]
	     * @var [type]
	     */
	    $file_name = $file_path_array[2];

	    echo "<a class='file_anchor' href='$file_path'>$file_name</a>";
	    echo "<hr>";
	}
	
	/**
	 * if db_error flag is 1 show error
	 */
	if($db_err)
		echo $db_err_msg;

?>