<?php 
   
	// Configuración

	$servidor = "localhost";
	$usuario  = "root";
	$clave 	  = "123456";
	$base_datos = "biblioteca";

	$conexion =  mysql_connect($servidor, $usuario, $clave);
	mysql_select_db($base_datos);

	if (!$conexion) {
		 die("Conexion a Base de datos incorrecta" . mysqli_connect_error());
	}  else {

		// Aca realizamos la consulta a la base de datos
		$resultado = mysql_query("select * from libros", $conexion);
	?>

			<table cellpadding="10">
				<tr style="margin:10px;text-align:center; font-weight:bold; font-size: 16px">
					<td bgcolor="#FFF00">Titulo</td>
					<td bgcolor="#FFF00">Autor</td>
					<td bgcolor="#FFF00">Categoria</td>
					<td bgcolor="#FFF00">Enlace</td>
				</tr>
	<?php  while($fila = mysql_fetch_array($resultado)){ ?>
		    <tr>
				<td bgcolor="#D1D1D9"><?= $fila["titulo"]; ?></td>
				<td bgcolor="#D1D1D9"><?= $fila["autor"]; ?></td>
				<td bgcolor="#D1D1D9"><?= $fila["categoria"]; ?></td>
				<td bgcolor="#D1D1D9"><?= "<a target='_blank' href=./libros/". $fila["enlace"]. ">Ver</a>" ?></td>
			</tr>

	    <?php  } 
  
	}


	