<?php

	class Inicio extends ControladorBase {

		public function index()
		{
            $consulta = ("ORDER BY fecha_registro DESC LIMIT 20");
		    $resultado = ModeloBase::consultar("libros", $consulta);
            Vistas::cargarVista('index', $resultado);
		}
	}
