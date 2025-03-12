<?php
/**
 * Clase de ejemplo para documentación con phpDocumentor.
 */
class Ejemplo {
    /** @var string $mensaje Mensaje de la clase */
    private $mensaje;

    /**
     * Constructor de la clase.
     * @param string $mensaje Mensaje inicial.
     */
    public function __construct($mensaje) {
        $this->mensaje = $mensaje;
    }

    /**
     * Devuelve el mensaje.
     * @return string El mensaje de la clase.
     */
    public function obtenerMensaje() {
        return $this->mensaje;
    }
}
?>
