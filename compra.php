<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INFOCE</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="scripts.js"></script>
</head>
<body>
<?php include 'template/header.php'; ?>
<?php include 'template/menu.php'; ?> <br><br><br><br>
<div class="page-nav">
        
        <button id="checkout" class="button-checkout" onclick="pay()" >Carrito</button>
    </div>

<div align=center class="page-content">
        <div class="product-container">
            
            <img src="img/product-1.jpg" />
            <h2>nombre</h2>
            <h3>55€</h3>
            <button class="btn" onclick="add('product-1', 55)">Agregar</button>
            <a href="producto1.php">
            <button class="btn"  name="Detalles" value="Detalles" >Detalles</button>
</a>

        </div>
        

        <div class="product-container">
            <h3>nombre</h3>
            <img src="img/product-2.jpg" />
            <h1>$300</h1>
            <button class="btn" onclick="add('product-2', 300)">Agregar</button>
            <button class="btn"  name="Detalles" value="Detalles">Detalles</button>
        </div>

</div>
 
</body>
<?php include 'template/footer.php'; ?> 
</html>