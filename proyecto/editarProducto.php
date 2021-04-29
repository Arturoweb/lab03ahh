<!DOCTYPE html>
<html>
<head>
	<title>Crear nuevo Producto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css\sForm.css">
</head>
<body>
	<header><h2>Editar Producto</h2></header>
	<main>
		<form method="POST" action="editarProducto.php">
			
		<?php 

		if ($_GET) {

			include_once("productos.php");
			$Producto = new Producto();
			$Producto->Codigo=$_GET['cod'];
			$Producto->Buscar();

		?>
				
			<p>
				<label>Codigo del Producto:</label>
				<input type="text" name="txtCod" value="<?php echo $Producto->Codigo; ?>">
			</p>
			<p>
				<label>Nombre del Producto:</label>
				<input type="text" name="txtNom" value="<?php echo $Producto->Nombre; ?>">
			</p>
			<p>
				<label>Categoria:</label>
				<input type="text" name="txtCat" value="<?php echo $Producto->Categoria; ?>">
			</p>
			<p>
				<label>Proveedor:</label>
				<input type="text" name="txtPrv" value="<?php echo $Producto->Proveedor; ?>">
				
			</p> 
			<p>
				<label>Precio Unitario:</label>
				<input type="number" step="any" name="txtPre" min="0" placeholder="Preciio" value="<?php echo $Producto->Precio; ?>">
			</p>
			<p>
				<label>Stock:</label>
				<input type="number" name="txtStk" min="0" placeholder="Unidades en Stock" value="<?php echo $Producto->Stock; ?>">
			</p>
			<input type="submit" name="" value="Guardar Cambios">
			
		</form>

		
		<?php
			
		}
				
				
		if ($_POST) {

			include_once("productos.php");
			$Producto = new Producto();
			$Producto->Codigo = $_POST['txtCod'];
			$Producto->Nombre = $_POST['txtNom'];
			$Producto->Categoria = $_POST['txtCat'];
			$Producto->Proveedor = $_POST['txtPrv'];
			$Producto->Precio = $_POST['txtPre'];
			$Producto->Stock = $_POST['txtStk'];
			$Producto->Actualizar();
				
			}
		?>

				
	</main>
	<footer></footer>
</body>
</html>