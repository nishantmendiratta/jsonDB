<!DOCTYPE html>
<html>
<head>
	<!-- meta links -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<LINK rel='stylesheet' href='style.css' type='text/css'>
	<title>jsonDB</title>
</head>
<body>
	
	<div class='app'>
	<?php 
		/**
		 * including configuration file.
		 */
		require_once('jsonDB.php') 
	?>
	</div>

	<div class='container'>
		<h3>Sample form to save data in json format</h3>
		<?php
			/**
			 * Including form to submit
			 */
		 	include('sample_post_json_form.php'); 
		 ?>
	</div>


	</body>
</html>