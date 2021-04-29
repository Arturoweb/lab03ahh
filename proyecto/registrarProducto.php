<!DOCTYPE html>
<html>
<head>
	<title>Crear nuevo Producto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css\sForm.css">
</head>
<body>
	<header><h2>Registro de nuevo Producto</h2></header>
	<main>
		<form method="POST" action="guardarProducto.php">
			<p>
				<label>Nombre del Producto:</label>
				<input type="text" name="txtNom" placeholder="Nombre del Producto">
			</p>
			<p>
				<label>Categoria:</label>
				<input type="text" name="txtCat" placeholder="Categoria del Producto">
				
			</p>
			<p>
				<label>Proveedor:</label>
				<input type="text" name="txtPrv" placeholder="Proveedor del Producto">
			</p> 
			<p>
				<label>Precio Unitario:</label>
				<input type="number" step="any" name="txtPre" min="0" placeholder="Precio">
			</p>
			<p>
				<label>Stock:</label>
				<input type="number" name="txtStk" min="0" placeholder="Unidades en Stock">
			</p>
			<input type="submit" name="" value="Guardar">
			
		</form>

	</main>
	<footer></footer>
</body>
</html>