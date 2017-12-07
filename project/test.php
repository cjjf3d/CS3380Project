<?php

require('db_credentials.php');
		$mysqli = new mysqli($servername, $username, $password, $dbname) or die("Can't connect");

?>