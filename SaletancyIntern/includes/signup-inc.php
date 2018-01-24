<?php

if (isset($_POST['submit']))//checks if button is clicked
{
 include_once 'dbh-inc.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

//error handlers
//check for empty
if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd)){
	header("Location: ../signup.php?signup=empty" );
	exit(0);
}
else{
	//check if input is valid
	if(!preg_match("/^[a-zA-Z]*$/", $first)|| !preg_match("/^[a-zA-Z]*$/", $last)){
		header("Location: ../signup.php?signup=invalid" );
	
	exit(0);
}
else{
	//check for valid email
	if( !filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		header("Location: ../signup.php?signup=invalid_email" );
	exit(0);
	}
	else
	{
		$sql =mysqli_query($conn,"SELECT * from users where user_uid ='$uid'");
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0)
		{
			header("Location: ../signup.php?signup=usertaken" );
	exit(0);
		}
		else
		{
			//hashing the password
			$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
			//insert
			$result = mysqli_query($conn, "INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd) VALUES ('$first','$last','$email','$uid','$hashedPwd')");
			if(mysqli_num_rows($result>0)){
				while ($row = mysqli_fetch_assoc($result)) {
					$userid = $row['user_id'];
					mysqli_query($conn,"INSERT INTO profileimg (status) VALUES (1)");
				}

}
			
			header("Location: ../index.php?signup=success" );
	exit(0);
		}
	}
}
}


}
else
{
	header("Location: ../signup.php");
	exit();
}