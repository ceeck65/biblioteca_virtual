<?php

class Acceso extends ControladorBase
{
    public function index()
    {
        if (isset($_SESSION['usuario'])){
            header("Location:" . BASE_URL . "index.php");
        } else {
            Vistas::cargarVista("login");
        }

    }

    public function iniciarSesion()
    {
        $usuario = $_POST["usuario"];
        $clave   = md5($_POST["clave"]);
        $consulta = ("WHERE usuario = '$usuario' AND clave = '$clave'");
        $resultado = ModeloBase::consultar("usuarios", $consulta);

        if ($resultado != NULL) {
            if (!isset($_SESSION['usuario'])) {
                foreach ($resultado as $result){
                    $_SESSION['usuario'] = $result['usuario'];
                    $_SESSION['nombre'] = $result['nombre'];
                    $_SESSION['nivel'] = $result['niveles_id'];
                    $_SESSION['pedro'] = "pedro";
                    header("Location:" . BASE_URL . "index.php");
                }
            }  else {
                header("Location:" . BASE_URL . "index.php");
            }
        } else {
            $error = array("mensage" => "Nombre o contraseña incorrectos!");
            Vistas::cargarVista("login", $error);
        }

    }


    public function cerrarSesion()
    {
        session_destroy();
        header("Location:" . BASE_URL . "index.php/acceso");
    }
    

}