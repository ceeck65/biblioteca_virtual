<?php

error_reporting(E_ALL ^ E_NOTICE);
error_reporting(1);

define('RUTA_CONTROLADORES', dirname(__FILE__) . "/aplicacion/controladores/");
define("RUTA_VISTA",  dirname(__FILE__) . "/aplicacion/vistas/");
include "framework/Autocarga.php";
	

	

