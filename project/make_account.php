<?php
require('db_credentials_finalProj.php');
$mysqli = new mysqli($servername, $username, $password, $dbname) or die("Can't connect");
$result = $mysqli->query("INSERT INTO Users(UserName, Password) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')");
if ($result->affected_rows > 0) {
    // echo "<h3 style='margin:auto;'>Account Created!</h3>";
    echo "<meta http-equiv='refresh' content='3; url=index.php'>"
}
else {

}
?>
<style>
    body{
        background: green;
    }
    form{
        position: absolute;
        top: 50%;
    }
        
</style>
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