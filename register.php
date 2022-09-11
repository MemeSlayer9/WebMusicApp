<?php 
include("includes/classes/Account.php");
include("includes/classes/Constants.php");
include("includes/config.php");

$account = new Account($conn);

include("includes/handlers/register.php");
include("includes/handlers/login.php");

function getInputValue($name){
	if (isset($_POST[$name])) {
		echo $_POST[$name];

	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to </title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
	<?php
	if(isset($_POST['registerButton'])) {
		echo '<script>
			$(document).ready(function(){
				$("#loginForm").hide();
				$("#registerForm").show();
			});
		</script>';
	}
	else {
		echo '<script>
			$(document).ready(function(){
				$("#loginForm").show();
				$("#registerForm").hide();
			});
		</script>';
	}




		?>
	
	<div id="background">
		<div id="loginContainer">

		<div id="inputContainer">

			<form id="loginForm" action="register.php" method="POST">
				<h1>Login to your Account</h1>
				<?php echo $account->getError(Constants:: $loginFailed); ?>
				<label for="Loginusername">Username</label>
				<input type="Loginusername" name="Loginusername" type="text" value="<?php getInputValue('Loginusername')?>" placeholder="User" required>
				<br>
				<br>
				<label for="Loginpassword">Password</label>
				<input type="password" name="Loginpassword" type="password" placeholder="password" required>
				<br>
				<br>
					<button type="submit" name="Loginbutton">LOG IN</button>

					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account yet? Signup here.</span>
					</div>
					
				</form>

			
			<form id="registerForm" action="register.php" method="POST">
				<h1>Hello</h1>
			 
			<?php echo $account->getError(Constants:: $usernameCharacters); ?>
			<?php echo $account->getError(Constants:: $usernameTaken); ?>
	 
				<label for="username">Username</label>
				<input type="username" name="username" type="text" value="<?php getInputValue('username') ?>" placeholder="User" required>
				<br>
				<br>
			<?php echo $account->getError(Constants::$firstNameCharacters); ?>
			<label for="firstName">First name</label>
						<input id="firstName" name="firstName" type="text" placeholder="e.g. Kent" value="<?php getInputValue('firstName') ?>" required>
				<br>
				<br>
			<?php echo $account->getError(Constants::$lastNameCharacters); ?>
			<label for="lastName">Last name</label>
						<input id="lastName" name="lastName" type="text" placeholder="e.g. Amarado" value="<?php getInputValue('lastName') ?>" required>
				<br>
				<br>
			<?php echo $account->getError(Constants::$emailDoNotMatch); ?>
			<?php echo $account->getError(Constants::$emailInvalid); ?>
			<?php echo $account->getError(Constants:: $emailTaken); ?>
				<label for="email">Email</label>
				<input type="email" name="email" type="email" placeholder="kent@gmail.com" value="<?php getInputValue('email') ?>"required>
				<br>
				<br>
				<label for="email2">Confirm Email</label>
				<input type="email2" name="email2" type="email" placeholder="kent@gmail.com" value="<?php getInputValue('email2') ?>"required>
				<br>
				<br>
			<?php echo $account->getError(Constants::$passwordDoNoMatch); ?>
			<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
			<?php echo $account->getError(Constants::$passwordCharacters); ?>
				<label for="Password">Password</label>
				<input type="password" name="password" type="password" placeholder="Password" required>
				<br>
				<br>
				<label for="Password2">Confirm Password</label>
				<input type="password" name="password2" type="password" placeholder="Password" required>
				<br>
				<br>
				<button  type="submit" name="registerButton">Register</button>
					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? Log in here.</span>
					</div>
			</form>
		</div>
			<div id="loginText">
				<h1>Get great music, right now</h1>
				<h2>Listen to loads of songs for free</h2>
				<ul>
					<li>Discover music you'll fall in love with</li>
					<li>Create your own playlist</li>
					<li>Follow artist to keep up to date</li>
				</ul>
			</div>
	</div>
</div>
</body>
</html>
