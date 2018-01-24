<?php

session_start();

if( isset($_POST['submit']))
{
	include 'dbh-inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handlers
	//check if inputs empty

	if(empty($uid)||empty($pwd))
	{
		header("Location: ../index.php?login=empty");
		exit();
	}
	else
	{
		$result = mysqli_query($conn, "SELECT * FROM users WHERE user_uid ='$uid' OR user_email = '$uid'");
		$res = mysqli_num_rows($result);
		if($res < 1)
		{
			header("Location: ../index.php?login=error");
		exit();
		}
		else
		{
			if($row =mysqli_fetch_assoc($result))
			{
				$unhashedpwd = password_verify($pwd, $row['user_pwd']);

				if ($unhashedpwd == false)
				{
					header("Location: ../index.php?login=error!");
		exit();
				}
				else if($unhashedpwd == true)
			{
					//log in
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					$p = $row['user_id'];
					mysqli_query($conn,"INSERT INTO profileimg (userid) VALUES '$p'");
					#echo "$_SESSION['u_id']";"
					header("Location: ../dashboard.php?login=success");
		exit();
				}
			}

		}

	}

}
else
	{
		header("Location: ../index.php?login= error");
		exit();
	}