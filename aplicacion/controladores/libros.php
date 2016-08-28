<?php

class Libros extends ControladorBase {
    
    private $titulo = "";

    public function __construct($titulo) {
        parent::__construct();
        $this->titulo = $titulo;   
    }

    public function index() {
       
        $libros = ModeloBase::consultar("libros");
        Vistas::cargarVista("libros/libros", $libros);
        
       
    }

    public function registrarNuevo() {
       Vistas::cargarVista("libros/registro");  
        $datos = array (
            "titulo" => $_POST['titulo'],
            "autor" => $_POST['autor'],
            "categoria" => $_POST['categoria'],
            "enlace"  => $_POST['url']    
        );
        
        if ($datos != null) {
             ModeloBase::insertarRegistro("libros", $datos);
        }
        
       
    }

}
