<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Ventas</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="css\sTabla01.css">
</head>
<body>
	<header><h1>Lista de Productos</h1><hr>
			<p><a href='registrarProducto.php'>Crear nuevo Producto</a></p>
	</header>
	<main class="container">
		<table class="t-products">
			<caption></caption>
			<thead>
				<tr>
					<td>Codigo</td>
					<td>Nombre</td>
					<td>Precio</td>
					<td>Stock</td>
					<td>Categoria</td>
					<td>Empresa Proveedora</td>
					<td></td>
					<td></td>

				</tr>
			</thead>
			<tbody>				
				<?php
					include_once("productos.php");
					$prod = new Producto();
					echo $prod->Vista();
				?>
			</tbody>
			<tfoot></tfoot>
		</table>
	</main>
	<footer><hr><p>Derechos Reservado</p></footer>
</body>
</html>