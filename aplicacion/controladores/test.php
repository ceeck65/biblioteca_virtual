<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author ceeck65
 */
class Test  extends ControladorBase {
    
    public function index() {
        echo "hola";
    }
    
    public function nuevo() {
        return Vistas::cargarVista("test/index");
    } 
   
}
