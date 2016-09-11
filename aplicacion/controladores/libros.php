<?php

class Libros extends ControladorBase
{

    private $titulo = "";

    public function __construct($titulo)
    {
        parent::__construct();
        $this->titulo = $titulo;
    }

    public function index()
    {
        if (isset($_SESSION['usuario'])) {
        $consulta = ("ORDER BY fecha_registro desc");
        $libros = ModeloBase::consultar("libros", $consulta);
        Vistas::cargarVista("libros/libros", $libros);
        } else {
            header("Location:" . BASE_URL . "index.php/acceso");
        }

    }

    public function registrarNuevo()
    {
        if ($_SESSION['nivel'] == 1) {
            $autores = ModeloBase::consultar("autores");
            $especialidades = ModeloBase::consultar("especialidades");
            $datos = array("autores" => $autores, "especialidades" => $especialidades);
            Vistas::cargarVista("libros/registro", $datos);
        }
        else {
            header("Location:" . BASE_URL . "index.php/libros");
        }

    }

    public function registrar()
    {
        $portada = self::subirArchivo($_FILES['portada_libro'], "portadas", ["png", "jpeg", "jpg", "gif"]);
        $libro  = self::subirArchivo($_FILES['libro'], "libros", ["pdf"]);

        if (($portada["error"] == true) || ($portada["error"] == true)){
            $especialidades = ModeloBase::consultar("especialidades");
            $autores = ModeloBase::consultar("autores");
            $datos = array("autores" => $autores, "especialidades" => $especialidades, "msg_portada" => $portada, "msg_libro" => $libro);
            Vistas::cargarVista("libros/registro", $datos);
        }

        if (($portada["error"] == false) && ( $portada["error"] == false) ) {

            $datos = array(
                "titulo" => $_POST['titulo'],
                "autor" => $_POST['autor'],
                "categoria" => $_POST['categoria'],
                "enlace" => $libro["msg"],
                "portada" => $portada["msg"],
                "anio_publicacion" => $_POST['anio_publicacion']
            );

            ModeloBase::insertarRegistro("libros", $datos);
            header("Location:" . BASE_URL . "index.php/libros");
        }


    }


    public function subirArchivo(array $archivo, $directorio, $tipo)
    {
       if ($_SESSION['nivel'] == 1) { 
			$tipo_extension = explode('.', $archivo['name']);
			$extension = end($tipo_extension);
			$nuevo_nombre = md5($archivo['name'] . rand(10, 500) . getdate()) . "." . $extension;
			if($archivo['size'] > 10485760){
				return array('error' => true, 'msg' => 'el archivo supera los 10MB permitidos');
			}
			 else if (! in_array($extension, $tipo)) {
				 return array('error' => true, 'msg' => 'El tipo de Archivo no es permitido');
			 }

			else{
				if (move_uploaded_file($archivo["tmp_name"], $ruta . $nuevo_nombre)) {
					return array('error' => false, 'msg' => $nuevo_nombre);
				} else {
					return array('error' => true, 'msg' => "");
				}
			}
		} else {
            header("Location:" . BASE_URL . "index.php/libros");
        }
    
	}
    
    public function eliminarRegistros()
    {
		if ($_SESSION['nivel'] == 1) {
			$id = self::parametros($_SERVER['REQUEST_URI']);
			ModeloBase::eliminarRegistros("libros", "id = $id");
			$resultado = ModeloBase::consultar("libros", null, "id = $id");
			self::eliminarArchivos("portadas", $resultado[0]['portada']);
			self::eliminarArchivos("libros", $resultado[0]['enlace']);
			header("Location:" . BASE_URL . "index.php/libros");
		 } else {
            header("Location:" . BASE_URL . "index.php/libros");
        }		
	}
	
	
	


}
