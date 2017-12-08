<?php
    $key=$_GET['key'];
    $array = array();

    require('db_credentials_finalProj.php');
    $mysqli = new mysqli($servername, $username, $password, $dbname) or die("Can't connect");
    
    $query=mysql_query("Select * From Song Where TrackName LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['title'];
    }
    echo json_encode($array);
?>