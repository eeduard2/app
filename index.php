
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    
  
</head>
<body >
<!--==============================header=================================-->
 
<!--==============================content=================================-->
<div id="content" class="row_0" >
    <!--==============================row8=================================-->
   <form action="POST">
     <label >user</label>
     <input type="text" name="user" id="">

 <label >pass</label>
     <input type="text" name="contra" id="">

   </form>
				 
</div>
<!--==============================footer=================================-->
 

 
</body>
</html>
<?php 
 
include 'css/conexion.php';

$u=$_POST['user'];
$p=$_POST['contra'];

 $inser ="INSERT INTO `usuario` (`usuario`, `pass`) VALUES ('".$u."','".$p."')";
 
 
  $response = $conexion->query($inser);

  if ($response==true) {
    echo '<script language="javascript">alert("Guardado Exitozamente");</script>'; 
  }else echo '<script language="javascript">alert("Usuario ya existe");</script>'; 

  



 ?>