jsonDB
======

Light weight JSON File System DB

####Usage
<ul>
	<li>Dowload repo and extract it your root directory</li>
</ul>

<ul>
	<li><b>Reading JSON Documents</b> : Include it in your application by adding <b>include('jsonDB/jsonDB.php')</b> in your page to. This will show all your. JSON documents available in db folder</li>	
</ul>
	
<ul>
	<li><b>Create/Edit JSON Documts</b> : Make a POST request using url syntax <b>http://example.com/jsonDB/chmode</b> with following params</li>
		<ul>
			<li>doc - This will accept string param LIKE <b>'db_sample.json'</b> </li>
			<li>q - This will accept JSON object LIKE  <b>{"employees":[{"firstName":"John", "lastName":"Doe"}]};</b></li>
		</ul>
</ul>

<ul>
	<li>Version : 1.0</li>
	<li>Author : Nishant Mendiratta</li>
	<li>Follow : https://twitter.com/MrMendiratta</li>
</ul>

#####Scope of Improvement
- Saving both JSON OBJECT & JSON OBJECT ARRAY (Need to work on JSON file updation)
