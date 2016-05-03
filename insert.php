<?php
echo '<script language="javascript">alert("'.$campro.'");</script>';
include "db.php";
if(isset($_POST['insert']))
{
	$title=$_POST['title'];
	$duration=$_POST['duration'];
	$price=$_POST['price'];
	$bibitacora=mysql_query("INSERT INTO `course_details` (`title`,`duration`,`price`) VALUES ('".$title."','".$duration."','".$price,"')");
	$biresponse = $conexion->query($bibitacora);

	mysqli_close($biresponse);
	
	if($biresponse)
		echo "ok";
	else
		echo "error";
}
?>