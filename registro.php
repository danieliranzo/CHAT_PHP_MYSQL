<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="formulario";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INFOCE</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body background="img/fondolegal.jpg">
<?php include 'template/header.php'; ?>
<?php include 'template/menu.php'; ?> 

<form action="registro.php" class="formulario" method="POST">
    
    <h1>Registrate</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="usuario" placeholder="Nombre Completo">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="correo" placeholder="Correo Electronico">
         
         </div>
		 <div class="input-contenedor">
         <i class="fas fa-home icon"></i>
         <input type="text" name="direccion" placeholder="Dirección">
         
         </div>
		 <div class="input-contenedor">
         <i class="fas fa-car icon"></i>
         <input type="text" name="codigopostal" placeholder="Código Postal">
         
         </div>
		 
		 <div class="input-contenedor">
         <i class="fas fa-phone icon"></i>
         <input type="text" name="telefono" placeholder="Teléfono">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="contraseña" placeholder="Contraseña">
         
         </div>
         <input type="submit" name="registrarse" value="Registrate" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="login/index.php">Iniciar Sesion</a></p>
     </div>
    </form><br><br>
    <script src="contacto.js"></script>
</body>
</html>
<?php
	if(isset($_POST['registrarse'])){    
       
		$usuario =$_POST["usuario"];
		$correo=$_POST["correo"];
		$direccion=$_POST["direccion"];
		$codigopostal=$_POST["codigopostal"];
		$telefono=$_POST["telefono"];
		$contraseña=$_POST["contraseña"];
		

		$insertarDatos = "INSERT INTO usuarios VALUES('$id',
                                                    '$usuario',
													'$correo',
													'$direccion',
													'$codigopostal',
													'$telefono',
													'$contraseña'
												               )";

		
$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

if(!$ejecutarInsertar){
    echo"Error En la linea de sql";
}
}
?><?php include 'template/footer.php'; ?> 