<?php

require('db_credentials_finalProj.php');
		$mysqli = new mysqli($servername, $username, $password, $dbname) or die("Can't connect");
		echo("hello");

?>
