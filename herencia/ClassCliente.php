<?php
require_once ("ClassPersona.php");
class Cliente extends Persona
{
    protected $fltCredito;
    function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad);
    }
    public function setCredito(string $credito)
    {
        $this->fltCredito = $credito;
    }
    public function getCredito():string
    {
        return $this->fltCredito;
    }
    public function getDatosPersonales()
    {
        $datos = "
            <h2>Datos Personales</h2>
            DPI: {$this->intDpi} <br>
            Nombre: {$this->strNombre} <br>
            Edad: {$this->intEdad} <br>
        ";
        return $datos;
    }
    public function setMensaje(string $mensaje){
        $this->mensaje = $mensaje;
    }
    public function getMensaje():string{
        return $this->mensaje . ' ' .$this->strNombre;
    }
}// fin de la clase empleado
?>