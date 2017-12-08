<?php

require('db_credentials_finalProj.php');
		$mysqli = new mysqli($servername, $username, $password, $dbname) or die("Can't connect");

        $a = $mysqli->query("Select * from PlayMusic");
        $b = $a->fetch_array();
        echo(json_encode ($b) );
?>