<?php
include("db.php");
$id=$_POST['id'];
$q1="delete from mypics where id='$id'";
$res=mysqli_query($db,$q1);
if($res){
	echo "successfully deleted image";
}
else{
	echo "image deletion was unscuccessful";
}

?>