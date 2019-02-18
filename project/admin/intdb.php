<?php

include("db.php");
$title=$_POST['title'];
$info=$_POST['info'];
$type=$_POST['type'];


$filetmp=$_FILES['pimage']['tmp_name'];
	$filename=$_FILES['pimage']['name'];
	$uploaddir='pictures/';
	$uploadfile=$uploaddir.basename($filename);
	if(move_uploaded_file($filetmp, $uploadfile)){
		$q1="INSERT INTO `mypics` (`title`, `content`, `image`, `type`) VALUES ('$title', '$info', '$uploadfile', '$type')";
		if(mysqli_query($db,$q1)){
			if((int)$type==0){

			echo '<script>alert("your image is saved");location.href="intupload.php";</script>';
		}
		else{
						echo '<script>alert("your image is saved");location.href="extupload.php";</script>';

		}
		}
	}
	else{
			echo '<script>alert("your image is not saved so try again ");location.href="intupload.php";</script>';
	}


?>