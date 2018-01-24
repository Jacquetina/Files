<<?php 
if (isset($_POST['submit']))
{
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileType = $_FILES['file']['type'];
	$fileSize = $_FILES['file']['size'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileError = $_FILES['file']['error'];

	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed =array('jpg','png','jpeg');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if($fileSize >50000){

				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
move_uploaded_file($fileTmpName,$fileDestination);
header("Location: dashboard.php?uploadsuccess");

			}
			else
			{
				echo "your file is too big";
			}
			# code...
		}
		else
			{
				echo "there was an error uploading your program";
			}
	}
	else
	{
		echo "you cannot upload fles of this type";
	}
}

 ?>