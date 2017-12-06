<?php
	function deleteTask() {
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
					$message = "Task was deleted.";
				} else {
					$message = $mysqli->error;
				}
				$mysqli->close();
			}
		}
	
		return $message;
	}

?>