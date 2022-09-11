<?php 
include("../../config.php");

if(isset($_POST['playlistId']) && isset($_POST['songId'])) {
	$playlistId = $_POST['playlistId'];
	$songId = $_POST['songId'];

 $orderIdQuery = mysqli_query($conn, "SELECT MAX(playlistOrder) + 1 as playlistOrder FROM playlistssongs WHERE playlistId=$'playlistId'");
 	$row = mysqli_fetch_array($orderIdQuery);
 	$order = $row['playlistOrder'];

 $query = mysqli_query($conn, "INSERT INTO playlistssongs VALUES('', '$songId', '$playlistId', '$order')");



} else {
	echo "Playlist or songId  was not passed into addtoplaylist.php";
}

?>