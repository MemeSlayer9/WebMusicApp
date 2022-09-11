<?php 
include("includes/includedFiles.php");
?>


<div class="playlistContainer">

	<div class="gridViewContainer">
		<h2>PLAYLISTS</h2>

			<div class="buttonItems">
				<button class="button green" onclick="createPlaylist()">NEW PLAYLISTS</button>
			</div>



			<?php

			$username = $userLoggedIn->getUsername();

			$playlistsQuery = mysqli_query($conn, "SELECT * FROM playlists WHERE owner='$username'");



				if(mysqli_num_rows($playlistsQuery) == 0){
				echo "<span class='noResults'>You dont have any playlists yet</span>";
				}
				
				while ($row =mysqli_fetch_array($playlistsQuery)) {

				$playlist = new Playlist($conn, $row);	

					echo "<div class='gridViewItem' role='link' tabindex='0'
					 onclick='openPage(\"playlist.php?id=" . $playlist->getId() . "\")'>
					<div class='playlistsImage'>
					<img src='assets/img/icons/playlist.png'>
					</div>
					<div class='gridViewInfo'>" 
					. $playlist->getName() .
							"</div>
					</div>";



				}
	?>



	</div>
</div>