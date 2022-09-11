<?php
if (isset($_POST['Loginbutton'])) {
	 $username = $_POST['Loginusername'];
	 $password = $_POST['Loginpassword'];


	 $result = $account->login($username, $password);

	 
	if($result == true) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}
}


?>