<?php

include_once 'header.php';

include 'includes/dbh-inc.php';

if(!$_SESSION['u_uid'])
{
	header("Location: signup.php");
}


?>
<section class= "main-container">
	<div class="main-wrapper">
		<p>THIS IS YOUR DASHBOARD</p>
		<center>
		
	</center>
	</div> 
	<center><div class="profile-block">
		<div class="propic">
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="file">
				<button type="submit" name="submit">UPLOAD</button>
			</form>
		</div>
		<div class="profile">
		<?php
		$x = $_SESSION['u_id'] ;
		#echo $x;
		$resuktImg = mysqli_query($conn, "SELECT * FROM profileimg WHERE userid = '$x'");

		while ($rowImg = mysqli_fetch_assoc($resuktImg)) {
			echo " hello";
			echo "<div>";

			if($rowImg['status']==0)
			{
				echo "<img src='includes/profile".$x.".jpg'>";
			}
			else
			{
				echo "<img src='includes/profile.jpg'>";
			}

			echo "</div>";
			# code...
		}

		echo '<table>
			<tr>
				<td> Name</td><td>:'.$_SESSION['u_first'].' '.$_SESSION['u_last'].'</td></tr> <tr><td>Username</td> <td>:'.$_SESSION['u_uid'].'</td></tr>
		 <tr><td>E-mail</td><td>:'.$_SESSION['u_email'].'</td></tr></table>';
		?>
		
		</div>
	</div>
</center>
</section>
<?php

include_once 'footer.php';
?>