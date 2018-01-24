<?php
include_once 'header.php';
?>
<section class= "main-container">
	<div class="main-wrapper">
		<p>Signup</p>
		<center>
		<form class="signup-form" action="includes/signup-inc.php" method="POST">
			<input type="text" name="first" placeholder="First Name"><br>
			<input type="text" name="last" placeholder="Last Name"><br>
			<input type="email" name="email" placeholder="E-Mail"><br>
			<input type="text" name="uid" placeholder="Userame"><br>
			<input type="password" name="pwd" placeholder="Password"><br>
			<button type="submit" name="submit">Sign Up</button>
		</form>
	</center>
	</div> 
</section>
<?php 
include_once 'footer.php'
?>