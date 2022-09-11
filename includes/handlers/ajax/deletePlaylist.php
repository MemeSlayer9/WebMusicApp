<?php
include("../../config.php");

if(isset($_POST['playlistId'])) {
	$playlistId = $_POST['playlistId'];

	$playlistQuery = mysqli_query($conn, "DELETE FROM playlists WHERE id='$playlistId'");
	$songsQuery = mysqli_query($conn, "DELETE FROM playlistssongs WHERE playlistId='$playlistId'");	
} else {
	echo "Playlist was not passed into delete playlist";
}

?>