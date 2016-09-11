<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(1);

define('RUTA_CONTROLADORES', dirname(__FILE__) . "/aplicacion/controladores/");
define("RUTA_VISTA",  dirname(__FILE__) . "/aplicacion/vistas/");

define('RUTA_PUBLIC', dirname(__FILE__) . "/public/");

include "framework/Autocarga.php";
	

	

