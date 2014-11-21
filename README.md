jsonDB
======

Light weight JSON File System DB

####Usage
<ul type='numeric'>
	<li>Dowload repo and extract it your root directory</li>
	<ul>
		<li>#####Reading JSON Documents</li>
		<li>Include it in your application by adding <b>include('jsonDB/jsonDB.php')</b> in your page to. This will show all your .JSON documents available in db folder</li>	
	</ul>
	<ul>
		<li>#####Create/Edit JSON Documts</li>
		<li>Make a POST request using url syntax <b>http://example.com/jsonDB/chmode</b> with following params</li>
		<ul>
			<li>doc - This will accept string param LIKE 'db_sample.json' </li>
			<li>q - This will accept jsong object LIKE  {"employees":[{"firstName":"John", "lastName":"Doe"}]};</li>
		</ul>
	</ul>
	<ul>
		<li>Author : Nishant Mendiratta</li>
		<li>Follow : https://twitter.com/MrMendiratta</li>
	</ul>
	<li>Version : 1.0</li>
</ul>

