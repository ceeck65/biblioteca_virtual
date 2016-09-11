<?php


class Usuarios extends ControladorBase {
   
     public function index() 
     {	 
       if (isset($_SESSION['usuario'])) { 
		 if($_SESSION['nivel'] == 1){
				$usuarios = ModeloBase::consultar("usuarios");
				return Vistas::cargarVista("usuarios/index", $usuarios);
			 } else {
				header("Location:" . BASE_URL . "index.php"); 
			}  
		} else {
            header("Location:" . BASE_URL . "index.php/acceso");
        }
    }
    
    function registrar() {
		if ($_SESSION['nivel'] == 1) {
			return Vistas::cargarVista("usuarios/registrar");
        } else {
            header("Location:" . BASE_URL . "index.php");
        }
    }   
   
    function registro(){
		if ($_SESSION['nivel'] == 1) {
			$datos = array(
				"nombre" => $_POST['nombre'],
				"usuario" => $_POST['usuario'],
				"clave" => md5($_POST['contrasena']),
				"niveles_id" => 2
			);
			$usuario = $_POST['usuario'];
			$resultado = ModeloBase::consultar("usuarios", null, "usuario = '$usuario'");
			
			if(! isset($resultado)){
				ModeloBase::insertarRegistro("usuarios", $datos);
				header('Location: '. BASE_URL . "index.php/usuarios/index");
			} else {
				$datos = array("msg" => "El usuario $usuario se encuentra registrado, ingrese un nombre de usuario diferente");
                Vistas::cargarVista("usuarios/registrar", $datos);
			}
		 } else {
            header("Location:" . BASE_URL . "index.php/usuarios");
        }	
    }
            
    function editar() {
        return Vistas::cargarVista("usuarios/editar");
    }
    
    public function eliminarRegistros()
    {
		if ($_SESSION['nivel'] == 1) {
			$id = self::parametros($_SERVER['REQUEST_URI']);
			ModeloBase::eliminarRegistros("usuarios", "id = $id");
			$resultado = ModeloBase::consultar("usuarios", null, "id = $id");
			header("Location:" . BASE_URL . "index.php/usuarios");
		 } else {
            header("Location:" . BASE_URL . "index.php/usuarios");
        }		
	}
    
}
