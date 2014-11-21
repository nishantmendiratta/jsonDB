<?php
	/**
	 * setting headers to accept json request
	 */
	header('Content-Type: application/json');
	
	/**
	 * [$json_obj save post request in variable]
	 * @var [type]
	 */
	if(isset($_POST['q']) && $_POST['q']!=''){

		$json_obj = $_POST['q'];

		if(isset($_POST['doc']) && $_POST['doc']!='')
			$json_doc_name = $_POST['doc'];

		/**
		 * [$response saving data on file]
		 * @var [type]
		 */
		$response = save_file($json_doc_name,$json_obj);

		/**
		 * Showing whole file in response
		 */
		echo json_encode($response);
		//die();
	}else{
		echo json_encode('Missing some data');
		//die();
	}
?>


