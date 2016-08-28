<?php


class Usuarios extends ControladorBase {
   
     public function index() {
        return Vistas::cargarVista("usuarios/index");
    }
    
    function registrar() {
        return Vistas::cargarVista("usuarios/registrar");
        
    }   
     
    function editar() {
        return Vistas::cargarVista("usuarios/editar");
    }
    
    
}
