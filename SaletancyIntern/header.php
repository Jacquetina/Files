
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
			<nav>
				<div class="container">
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="dashboard.php">DASHBOARD</a></li>
					</ul>
				</div>
				
				<div class="login">
					<?php

					if (isset($_SESSION['u_uid']))
					{
						echo '<form action="includes/logout-inc.php" method="POST">
						<button type="submit" name="submit">Logout</button>
					</form>';

					}
					else
					{
						echo '<form action="includes/login-inc.php" method="POST">
						<input type="text" name="uid" placeholder="Username/Email">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="submit">Login</button>
					</form>
					<a href="signup.php">Sign Up</a>';
					}
					?>
					
					
				</div>
				
			</nav>
		</header>

</body>
</html>