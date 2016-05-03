<?php
include "db.php";
$data=array();
//$q=mysqli_query("select * from `course_details`");
$sql = "select * from `course_details`";
$q = mysqli_query($con, $sql) or die("Error " . mysqli_error($con));

while ($row=mysqli_fetch_object($q)){
	$data[]=$row;
}
echo json_encode($data);
?>