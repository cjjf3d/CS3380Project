<?php
require('db_credentials_finalProj.php');
$mysqli = new mysqli($servername, $username, $password, $dbname) or die("Can't connect");
$result = $mysqli->query("INSERT INTO Users(UserName, Password) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')");
if ($result->affected_rows > 0) {
	header("Location: index.php");
}
else {
	header("Location: not_authorized.php");
}
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
