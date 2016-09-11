<?php
 


class ModeloBase {
 
   
    public $conexion = "";
 
    /**
     * Conexión activa a la base de datos
     * Permite cambiar la conexión activa: setActiveConnection($id)
     */
    public $conexionActiva = 0;
 
    /**
     * Consultas que se han ejecutado y que se guardan
     * en caché para volver a ejecutarlas
     * si fuese necesario
     */
    public $consultaCache = array();
 
    /**
     * Los datos que se han recuperado, también se cachean para
     * su posterior uso
     */
    public $datosCache = array();
 
    /**
     * Registro de la última consulta
     */
    public $ultimo;
 
    /**
     * Constructor de la clase
     */
    public function __construct()
    {
        $this->conexion = self::conexion;
        
    }
 
    /**
     * Crea una nueva conexión a base de datos
     * @param String SERVIDOR
     * @param String USUARIO
     * @param String CONTRASEÑA
     * @param String BASE DE DATOS
     * @return int El identificador de la conexión
     */
    public function conexion()
    {
        $conexion = new mysqli(SERVIDOR, USUARIO, CLAVE, BASE_DATOS );
        
        $id_conexion = count( $conexion )-1;
        if( mysqli_connect_errno() )
        {
           // trigger_error('Error al conectar con el servidor. '.$conexion[$id_conexion]->error, E_USER_ERROR);
        }   
        return $conexion; 
    }
 
    /**
     * Cierra la conexión activa
     * @return void
     */
    public function cerrarConnection()
    {
       // $conexion[$this->conexionActiva]->close();
    }
 
    /**
     * Cambia la conexión activa
     * @param int El identificador de la nueva conexión
     * @return void
     */
    public function activarConexion( $nueva )
    {
        $this->conexionActiva = $nueva;
    }

    
    
    public static function consultar($tabla, $consulta = null, $condicion = null){
        
        if($consulta  === null && $condicion === null) {
            $consultar = "SELECT * FROM  {$tabla}";
            $resultado = self::conexion()->query($consultar); 
        }
        
        if($consulta  !== null && $condicion === null) {
            $consultar = "SELECT * FROM {$tabla} {$consulta}";
            $resultado = self::conexion()->query($consultar);
        }
        
      if($condicion != null) {
            $consultar = "SELECT * FROM {$tabla} where {$condicion}";
            $resultado = self::conexion()->query($consultar);
        }

        if (is_bool($resultado)) {
            $rows = $resultado;
        } else {
            while($row = $resultado->fetch_array())
            {
                $rows[] = $row;
            }
        }

        return $rows;
    }
    
    
    /**
     * Elimina un registro en la base de datos
     * @param String La tabla de la que se desea eliminar un registro
     * @param String La condición que se ha de cumplir para ser eliminado el registro
     * @param int El número de registros que se eliminarán
     * @return void
     */
    public static function eliminarRegistros( $tabla, $condicion, $limite )
    {
        $limite = ( $limite == '' ) ? '' : ' LIMIT ' . $limite;
        $eliminar = "DELETE FROM {$tabla} WHERE {$condicion} {$limite}";
          
       self::conexion()->query( $eliminar );
    }
 
    /**
     * Actualizar datos
     * @param String La tabla
     * @param array de cambios campo => valor
     * @param String La condición que se ha de cumplir para ser actualizado
     * @return bool
     */
    public static function actualizarRegistros( $tabla, $cambios, $condicion )
    {
        $actualizar = "UPDATE " . $tabla . " SET ";
        foreach( $cambios as $campos => $valores )
        {
            $actualizar .= "`" . $campos . "`='{$valores}',";
        }
 
        // remove our trailing ,
        $actualizar = substr($actualizar, 0, -1);
        if( $condicion != '' )
        {
            $actualizar .= "WHERE " . $condicion;
        }
          // $this->ejecutarConsulta( $actualizar );
 
		self::conexion()->query( $actualizar );
 
        return true;
 
    }
 
    /**
     * Inserta registros
     * @param String La tabla
     * @param array datos para insertar campo=> valor
     * @return bool
     */
    public static function insertarRegistro( $tabla, array $datos )
    {
        // Configuración de variables para campo y valor
        $campos  = "";
        $valores = "";
        
        // Rellena las variables con los campos y sus valores
        foreach ($datos as $clave => $valor)
        {
            $campos  .= "`$clave`,";
           // $valores  .= "`$valor`,";
            $valores .= ( is_numeric( $valor ) && ( intval( $valor ) == $valor ) ) ? $valor."," : "'$valor',";
        }
        
        // Quitamos la coma del final
        $campos = substr($campos, 0, -1);  
        // Quitamos la coma del final
        $valores = substr($valores, 0, -1);
        
        $insertar = "INSERT INTO $tabla ({$campos}) VALUES({$valores})";
        
        self::conexion()->query( $insertar );  
        return true;
    }
 
    /**
     * Ejecuta una consulta
     * @param String La consulta
     * @return void
     */
    public static function ejecutarConsulta( $queryStr )
    {
     
        if( !$resultado = (self::conexion()->query( $queryStr )) )
        {
          //  trigger_error('Error al ejecutar la consulta: ', E_USER_ERROR);
        }
        else
        {
           // $this->ultimo = $resultado;
        }
    }
 
    /**
     * Obtener las filas de la consulta ejecutada más recientemente, con exclusión de las consultas cacheadas
     * @return array
     */
    public function obtioneFilas()
    {
        return $this->ultimo->fetch_array(MYSQLI_ASSOC);
    }
 
    /**
     * Obtiene el número de las filas afectadas en la última consulta realizada
     * @return int the number of affected rows
     */
    public function filasAfectas()
    {
        return $this->$this->conexion[$this->conexionActiva]->filas_afectadas;
    }
 
 
    /**
     * Destruir el objeto
     * Cierra todas las conexiones a la base de datos
     */
    public function __deconstruct()
    {
        foreach( $this->conexion as $conexion )
        {
            $conexion->close();
        }
    }
}
?>
