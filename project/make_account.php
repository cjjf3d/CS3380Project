<?php

if(isset($_POST["login"])) {
require('db_credentials_finalProj.php');
$mysqli = new mysqli($servername, $username, $password, $dbname) or die("Can't connect");
$mysqli->query("INSERT INTO Users(UserName, Password) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')");
if($mysqli -> affected_rows > 0){ ?>
Account Creation Successful!
<br>
Redirecting....
<meta http-equiv="refresh" content="3;url=index.php" />
<?php }
else{
echo "Username already exists";
}
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
