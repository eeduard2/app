
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=" img/tab.png" type="image/x-icon">
    <link rel="shortcut icon" href=" img/tab.png" type="image/x-icon" />
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href=" css/bootstrap.css" >
    <link rel="stylesheet" href=" css/style.css">
    
	<script src=" js/jquery.js"></script>
    <script src=" js/jquery-migrate-1.2.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/forms.js"></script>
  
    
    <style>
      /* cambiar el color de fondo a la barra */
nav.navbar {
    background-color:#000080;
}

header {
    background-color: #FFFFFF;
}

div.container {
    background-color: #FFFFFF;
}
div.menuheader {
    background-color: #000080;
}


div.row_4 {
    background-color: #4169E1;
}
footer {
    background-color:#4169E1;
}

div.row_0 {
	padding: 63px 0 112px;
	
	background: #ffffff;
}
div.row {

  
  background: #4169E1;
}

  </style>
</head>
<body >
<!--==============================header=================================-->
<header id="header" class"header">
      <div  class="container" >
        <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img alt="Grill point" src="img/tab.png"></a></h1>
      </div>
      <div class="menuheader">
          <div class="container">
            <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                <ul class="nav sf-menu">
                  <li class="active" ><a href="../index.php">Inicio</a>
                    
                  </li>
                  <li><a href="../colegio.php">Colegio</a></li>
                   <li><a href="../cdi.php">CDI 797</a></li>
                  
                  
                  <li><a href="../iglesia.php">Sobre Nosotros</a>
                  
                      </li>
                  <li><a href="../contactenos.php">Contactenos</a></li>
                  <li><a>Localización</a>
          <ul>    
          <li class="C"><a href="../mapa.php">Mapa</a></li>
          <li><a href="../video.php">Recorrido Virtual</a></li></ul>
                  </li>
                </ul>
            </nav>
          </div>
      </div>
</header>
<!--==============================content=================================-->
<div id="content" class="row_0" >
    <!--==============================row8=================================-->
   
				<form action="<?php $PHP_SELF ?>" method="post" role="form" name="formLogin" class="form-horizontal" autocomplete="off">
				<input type=hidden name="accion">
					<div class="form-group">
						<input type=hidden name="id" value="">
						<input type=hidden name="puesto" value="">
						  	<label class="col-md-4 control-label" for="user" >Usuario</label>
						  	<div class="col-md-3">
						    
						    	<input name="user" id="user" class="user form-control" value="" required type="text">
						
						   	</div>
					</div>
						
					<div class="form-group">
						  	<label class="col-md-4 control-label" for="contra">Contraseña</label>
						  	<div class="col-md-3">
						    
						    	<input  name="contra" id="contra" class=" form-control" required type="password">
						
						   	</div>
					</div>

						<div class="form-group" align="">
						  	<div class="col-md-offset-4 col-md-10">
						  		<a type="reset" href="../index.php" class="btn btn-default">Cancelar</a>
                  				<button onclick="" type="submit" class="btn btn-primary">Entrar</button>
						    	
						    	
						    </div>
                <div class="col-md-offset-4 col-md-10">
                <a href="olvidecontra.php" class="">Olvide mi contraseña</a></div>
						</div>

				</form>
</div>
<!--==============================footer=================================-->
<footer>
    <div class="container">
        <div class="row_4">
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <ul class="social_icons clearfix">
                     <li><a href="#"><img src="../img/follow_icon1.png" alt=""></a></li>
                     <li><a href="#"><img src="../img/follow_icon2.png" alt=""></a></li>
                     <li><a href="#"><img src="../img/follow_icon3.png" alt=""></a></li>
                     <li><a href="#"><img src="../img/follow_icon4.png" alt=""></a></li>
                </ul>
            </div>
            
            <div  class="col-lg-4 col-md-4 col-sm-4 footercol">
                <p class="footerpriv">&copy; 2015 &bull; <a class="privacylink" href="index-5.html">Derechos Reservados</a> <a rel="nofollow"  target="_blank"></a></p>
            </div>
        </div>
    </div>

</footer>

<script src="js/jquery.js"></script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src=".js/bootstrap.min.js"></script>
    <script src="js/fuelux.min.js"></script>
    <script src="js/fuelux.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/moment-with-locales.js"></script>
    <script src="js/bootbox.min.js"></script>




<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
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