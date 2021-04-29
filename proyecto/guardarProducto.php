
		<?php
			include_once("modelo.php");
			$Producto = new Producto();
			$Producto->Nombre = $_POST['txtNom'];
			$Producto->Categoria = $_POST['txtCat'];
			$Producto->Proveedor = $_POST['txtPrv'];
			$Producto->Precio = $_POST['txtPre'];
			$Producto->Stock = $_POST['txtStk'];
			$Producto->Guardar();	
		?>
