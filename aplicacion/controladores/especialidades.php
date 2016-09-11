<?php
class Especialidades extends ControladorBase {
    

    public function index() {
        if (isset($_SESSION['usuario'])) {
            $datos = ModeloBase::consultar("especialidades");
            return Vistas::cargarVista("especialidades/index", $datos);
        } else {
            header("Location:" . BASE_URL . "index.php/acceso");
        }
    }
    
    function registrar() {
        return Vistas::cargarVista("especialidades/registrar");
    }

    public function registrarNuevo()
    {
        if ($_SESSION['nivel'] == 1) {
            $datos = array(
                "nombre" => $_POST["nombre"],
                "detalle" => $_POST["detalle"]
            );
            ModeloBase::insertarRegistro("especialidades", $datos);
            header("Location:" . BASE_URL . "index.php/especialidades");
        }
    }
    
    
    function editar() {
        return Vistas::cargarVista("especialidades/editar");
    }
    
 
}