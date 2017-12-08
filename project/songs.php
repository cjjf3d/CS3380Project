<?php

require('db_credentials_finalProj.php');
  $mysqli = new mysqli($servername, $username, $password, $dbname) or die("Can't connect");

        $a = $mysqli->query("Select * from Song");
        $b = array();
        while(($row = $a->fetch_assoc()) != null) {
            array_push($b, $row);
        }
        echo(json_encode ($b) );
?>