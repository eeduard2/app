<?php
include "db.php";

	 
		
		
$bibitacora ="INSERT INTO `course_details` (`title`,`duration`,`price`) VALUES ('hola','hola','hola')";
	$biresponse = $conexion->query($bibitacora);

	mysqli_close($biresponse);
	
	if($biresponse)
		echo "ok";
	else
		echo "error";		

?>