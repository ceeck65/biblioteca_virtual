<?php

class ControladorBase
{

    private static $instance;


    public function __construct()
    {
        self::$instance =& $this;
    }


    public function Index()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);

        $controlador = $url[3];
        $metodo = $url[4];

        if (isset($controlador)) {
            $controlador;
        } elseif (empty($controlador)) {
            $controlador = "Inicio";
        }

        if (isset($metodo)) {
            $metodo;
        } else {
            $metodo = "index";
        }
        

        $clase_controlador = strtolower($controlador);
        
        if (file_exists(RUTA_CONTROLADORES . $clase_controlador . ".php")) {
            require "aplicacion/controladores/" . $clase_controlador . ".php";
            $metodos = get_class_methods($clase_controlador);
           
     
            if (in_array($this->metodoCamello($metodo), $metodos)) {
                call_user_func(array($clase_controlador, $this->metodoCamello($metodo)));
            } else if ($metodo = "index") {
                call_user_func(array($clase_controlador, "index"));
            } else {
                echo MENSAJE_NO_METODO;
            }
        } else {
            echo NO_CONTROLADOR;
        }
    }

    public static function metodoCamello($value)
    {

        if ($pos = strrpos($value, "-")) {
            return preg_replace("/\-(.)/e", "strtoupper('\\1')", $value);
        }
        if ($pos = strrpos($value, "_")) {
            //	return ucfirst(preg_replace_callback("/\_(.)/e","strtoupper('\\1')", $value));
            return preg_replace("/\_(.)/e", "strtoupper('\\1')", $value);
        } else{
            return $value;
        }
    }


	public static function parametros($url)
    {
        $url = explode('/', $url);
        return $url[5];
    }
    
    public static function eliminarArchivos($carpeta, $archivo)
    {
		if(is_dir(RUTA_PUBLIC . $directorio . $carpeta . "/")){
					$ruta =  RUTA_PUBLIC . $directorio . $carpeta . "/";		
			if ($abreArchivo = opendir($ruta)){
				while (($archivo = readdir($abreArchivo)) !== false){
				  if($archivo == $archivo){
						unlink($archivo);
					}
				}					
			}
		}
	}


}

$index = new ControladorBase();
$index->Index();


