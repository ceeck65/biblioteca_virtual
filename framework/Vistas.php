<?php

/**
 * Clase de Vista
 *  Esta clase es la encargada de parsear o mostrar las vistas que se definen en el controlador
 */
class Vistas {

    protected static $data;
    private static $instancia;

    public function __construct() {
        self::$instancia = & $this;
    }

    const EXTENSION = ".php";

    /**
     * Este método o función es el encargado de cargar las vistas, este recibe dos paramétros el primero es obligatorio es el
     * nombre de la plantilla ejemplo "libros", el segundo es un arreglo de datos el cual son parametros  que se pueden enviar 
     * a la vistas. 
     * @param type $plantilla
     * @param array $args
     * @return array
     */
    public static function cargarVista($plantilla, array $args = NULL) {
        $contenido = RUTA_VISTA . $plantilla . self::EXTENSION;
        include(RUTA_VISTA . "plantilla/index.php");
        return $args;
    }

}
