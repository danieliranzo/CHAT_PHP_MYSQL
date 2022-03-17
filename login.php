
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
<body>
<?php include 'template/header.php'; ?>
<?php include 'template/menu.php'; ?> 

<form action="validar.php"  class="formulario">
    
    <h1>Login</h1>
     <div class="contenedor">
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="usuario" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="contraseña" placeholder="Contraseña">
         
         </div>
         <input type="submit" value="Login" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>
     </div>
    </form>



<?php include 'template/footer.php'; ?> 
</body>
</html>
