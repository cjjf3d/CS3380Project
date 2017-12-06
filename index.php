<?php
	session_start();
	
	$message = '';
	
	$target = $_GET['target'];
	$action = $_POST['action'];
	$data = null;
	
	switch($action) {
		case 'delete':
			$message = deletePlaylist();
			break;
		case 'add':
			list($target, $message, $data) = addPlaylist();
			break;
		case 'edit':
			list($target, $message, $data) = editPlaylist();
			break;
		case 'update':
			list($target, $message, $data) = updatePlaylist();
	}

	function addPlaylist() {
		$message = '';
		
		if ($_POST['cancel']) {
			$message = 'Adding new playlist was cancelled.';
			return array('', $message);
		}

		// Create connection
		require('db_credentials.php');
		$mysqli = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($mysqli->connect_error) {
			$message = $mysqli->connect_error;
		} else {
			$sql = "INSERT INTO Playlist (title, description, category, addDate) VALUES ('$title', '$description', '$category', NOW())"; //needs modification to fit parameters of Playlist table
	
			if ($result = $mysqli->query($sql)) {
				$message = "Playlist was added";
			} else {
				$message = $mysqli->error;
			}

		}
		
		return array('', $message);
	}
	function deletePlaylist() {
		$id = $_POST['id'];
	
		$message = "";
	
		if (!$id) {
			$message = "No playlist was specified to delete.";
		} else {
			// Create connection
			require('db_credentials.php');
			$mysqli = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($mysqli->connect_error) {
				$message = $mysqli->connect_error;
			} else {
				$id = $mysqli->real_escape_string($id);
				$sql = "DELETE FROM Playlist WHERE PlaylistID = $id";
				if ( $result = $mysqli->query($sql) ) {
					$message = "Playlist was deleted.";
				} else {
					$message = $mysqli->error;
				}
				$mysqli->close();
			}
		}
	
		return $message;
	}


	//needs delete user function, update playlist, current functions need refining/rewriting
?>