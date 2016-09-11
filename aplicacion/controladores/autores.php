<?php

class Autores extends ControladorBase {

    public function index()
    {
        if (isset($_SESSION['usuario'])) {
            $autores = ModeloBase::consultar("autores");
            Vistas::cargarVista("autores/index", $autores);
        } else {
            header("Location:" . BASE_URL . "index.php/acceso");
        }

    }
    public function editar()
    {
		 Vistas::cargarvista("autores/editar");
    }
		 
	public function registrar()
    {
		Vistas::cargarVista("autores/registrar");
	}

	public function registrarNuevo()
    {
        $datos = array(
            "nombre" => $_POST["nombre"],
            "detalle" => $_POST["detalle"]
        );
        ModeloBase::insertarRegistro("autores", $datos);
        header("Location:" . BASE_URL . "index.php/autores");
    }

    public function test() {
        $args = array("nombre" => "pedro", "edad" => 25);
        Vistas::cargarVista("autores/test", $args);
        BaseDatos::conexion();
    }

 
 
    
    

}
