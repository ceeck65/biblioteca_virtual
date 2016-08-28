<?php
class Especialidades extends ControladorBase {
    

    public function index() {
        return Vistas::cargarVista("especialidades/index");
    }
    
    function registrar() {
        return Vistas::cargarVista("especialidades/registrar");
        
    }   
     
    function editar() {
        return Vistas::cargarVista("especialidades/editar");
    }
    
 
}