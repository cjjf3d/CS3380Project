<?php

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}


if(isset($_POST["login"])) {
    require('db_credentials.php');
    $mysqli = new mysqli($servername, $username, $password, $dbname) or die("Can't connect");
    $result = $mysqli->query("SELECT * FROM Users WHERE UserName = '" . $_POST["username"] . "' AND Password = '" . $_POST["password"] . "'");
    if($result->num_rows > 0) {
        $_SESSION["user"] = $_POST["username"];
        header("Location: index.php");
    }
    else {
        echo "<script>alert('Invalid Login');</script>";
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

<a href="make_account.php">Make Account</a>

</body>
</html>