<?php
	error_reporting (E_ERROR);
	//error_reporting (E_ALL);

	$conn = pg_connect("host=localhost port=5432 dbname=usuario user=postgres password=masterkey");

	if (!$conn) 
	  die('<p>Connection failed: <p>');
?>