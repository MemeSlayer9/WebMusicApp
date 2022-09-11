<?php 
include("includes/includedFiles.php");
?>
<?php
$songQuery = mysqli_query($conn, "SELECT id FROM songs ORDER BY RAND() LIMIT 10");

$resultArray = array();

while ($row = mysqli_fetch_array($songQuery)) {

	array_push($resultArray, $row['id']);  
}

$jsonArray = json_encode($resultArray);


?>

<script>


$(document).ready(function(){
 

	updateVolumeProgressBar1(audioElement.audio);

	

	$(".volumeBar1 .progressBar1").mousedown(function() {
		mouseDown = true;
	});

	$(".volumeBar1 .progressBar1").mousemove(function(e) {
		if(mouseDown == true) {

			var percentage = e.offsetX / $(this).width();

			if(percentage >= 0 && percentage <= 1) {
				audioElement.audio.volume = percentage;
			}
		}
	});

	$(".volumeBar1 .progressBar1").mouseup(function(e) {
		var percentage = e.offsetX / $(this).width();

		if(percentage >= 0 && percentage <= 1) {
			audioElement.audio.volume = percentage;
		}
	});


	$(document).mouseup(function(){
		mouseDown = false;
	});



});

 


function setMute(){
	audioElement.audio.muted = 	!audioElement.audio.muted;
	var imageName = audioElement.audio.muted ? "volume-mute.png" : "volume.png";
	$(".controlButton.volume img").attr("src", "assets/img/icons/" + imageName);
}





</script>


 				<div class="nowPlayingCenter">

				<div class="volumeBar1" >
					<button class="controlButton volume" title="Volume button" onclick="setMute()">
					<img src="assets/img/icons/volume.png" alt="Volume">
				</button>
						<div class="progressBar1">
								<div class="progressBarBg1">
									<div class="progress1">
									</div>
								</div>
							</div>

						
					
				</div>
				
			</div>
			
		</div>
	</div>