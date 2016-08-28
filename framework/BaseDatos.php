<?php 

   class BaseDatos {

    public static function conexion()
    {
	$conexion =  mysql_connect(SERVIDOR, USUARIO, CLAVE);
	mysql_select_db(BASE_DATOS);

            if (!$conexion) {
                die("Conexion a Base de datos incorrecta" . mysqli_connect_error());

            }  else {
                return $conexion;
        } 
        
    }
} 

