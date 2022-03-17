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
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php include 'template/header.php'; ?>
<?php include 'template/menu.php'; ?> 
<div align="center">
<div class="contenedor" >
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST" >
			<div class="contenedor-inputs" >		
				<input type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="correo" placeholder="Correo">
				

				<div class="sexo">
					<input type="radio" name="sexo" id="hombre" value="hombre">
					<label class="label-radio hombre" for="hombre">Hombre</label>

					<input type="radio" name="sexo" id="mujer" value="mujer">
					<label class="label-radio mujer" for="mujer">Mujer</label>
				</div>

				<div class="terminos">
					<input type="checkbox" name="terminos" id="terminos">
					<label for="terminos">Acepto Terminos y Condiciones</label>
				</div>

				<ul class="error" id="error"></ul>
			</div>

			<input type="submit" class="btn" name="enviar" value="Enviar">
		</form>
		
		
	</div>
</div>
	<script src="contacto.js"></script>
</body>
</html>
<?php
	if(isset($_POST['enviar'])){
		$nombre =$_POST["nombre"];
		$correo=$_POST["correo"];
		$sexo=$_POST["sexo"];
		$id= rand(1,99);

		$insertarDatos = "INSERT INTO datos VALUES('$nombre',
													'$correo',
													'$sexo',
													'$id')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>


<?php include 'template/footer.php'; ?> 
