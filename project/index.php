<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION["user"])) {
    header("Location: not_authorized.php");
}
?>

<!DOCTYPE html>
<html>
<html>

<head>
    <title>
        CS3280 Project
    </title>

    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jslibs/jquery-2.1.4.min.js"></script>
    <script src="typeahead.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

</head>

<body>
    <!-- Section handleing audio -->
    <div id="controlBar">
        <!-- audio tag is used for playing of songs - songs are to be given to it by a javascript array 
            that represents the current playlist -->
        <audio controls="controls" id="music_audio">
            <source id="music_source" type="audio/mpeg" />
        </audio>

        <button id="play1">Play</button>

        <div id="info">

        </div>
    </div>
    </div>
    <!-- images come from playlist alt image appears if image is null or doesnt display      -->
    <img id="cover" src="images/test.png" alt="ImageHere">
    </div>

    <div id="playTables">
        <table id="playTable">
        </table>
    </div>

    <div id="playlists">

        <div id="name">
            <h1>Your Playlist</h1>
        </div>

        <h4>Show Me playlist</h4>
    </div>

    <!-- Section handling Search bar, login notifier, logout, video implent  -->
    <div id="utility">
        <form>
            <input type="text" name="search" placeholder="Search..">
        </form>
	<button onclick='window.location = "logout.php"'>Logout</button>
    </div>

    <!-- section handling rotating image gallery makes no sense in terms of project but is required-->
    <div id="ads1">
        <img id="image1" src="" alt="ImageHere">
    </div>
    <div id="ads2">
        <img id="image2" src="" alt="ImageHere">
    </div>


</body>

</html>
