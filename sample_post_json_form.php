<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<button onClick="save_json();">Save Data</button>
	<h3>Following script will execute once you click Save Data</h3>
	<strong>Two params required</strong>
	<ul>
		<li>file_name</li>
		<li>json_data</li>
	</ul>
<pre>
&ltscript type="text/javascript"&gt

	function save_json(){
		
		var file_name = 'db_sample.json';
		
		var json_data = {"employees":[
				{"firstName":"John", "lastName":"Doe"}, 
				{"firstName":"Anna", "lastName":"Smith"},
				{"firstName":"Peter", "lastName":"Jones"}
				]};

		
		$.ajax({
		    type: 'POST',
		    url: 'http://localhost:8888/jsonDB/chmode',
		    data: {doc:file_name,q: JSON.stringify(json_data)},
		    dataType: 'json',
		    success: function(msg) {
			console.log(msg);
			}
		}); 

	}

&lt/script&gt
</pre>

	<script type="text/javascript">
		<!-- save json -->
		function save_json(){
		var file_name = 'db_sample.json';
		var json_data = {"employees":[
					    	{"firstName":"John", "lastName":"Doe"}, 
					    	{"firstName":"Anna", "lastName":"Smith"},
					    	{"firstName":"Peter", "lastName":"Jones"}
						]};

			
			$.ajax({
			    type: 'POST',
			    url: 'http://localhost:8888/jsonDB/chmode',
			    data: {doc:file_name,q: JSON.stringify(json_data)},
			    success: function(msg) {
	      			$( ".success_msg" ).show();
	      			setTimeout(function(){
	      				$( ".success_msg" ).hide();
	      			},1000);
	      		}
			}); 
		}
	</script>

	<div class='success_msg' id='success_msg'>
		Data saved!
	</div>
	<script type="text/javascript">
		$( ".success_msg" ).hide();
	</script>