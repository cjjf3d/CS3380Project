<?php
require('db_credentials_finalProj.php');
$mysqli = new mysqli($servername, $username, $password, $dbname) or die("Can't connect");
$result = $mysqli->query("INSERT INTO Users(UserName, Password) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')");

	header("Location: index.php");
?>

<html>

<body>
    <form action="" method="post">
        <label>Username</label>
        <input name="username" />

        <label>Password</label>
        <input type="password" name="password" />

        <input type="submit" name="login" value="Login" />
    </form>
</body>

</html>
