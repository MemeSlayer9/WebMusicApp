<?php
include("includes/config.php");
include("includes/classes/User.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");
include("includes/classes/Playlist.php");


if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = new User($conn, $_SESSION['userLoggedIn']);
	$username = $userLoggedIn->getUsername();
	echo "<script>userLoggedIn = '$username';</script>";
}
else {
	header("Location: register.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Welcome To What?</title>
 	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/script.js"></script>

</head>
<body>

<script>

</script>
	<div id="mainContainer">

		<div id="topContainer">
			<?php include("includes/navBar.php");?>
			<div id="mainViewContainer">
				<div id="mainContent">
					