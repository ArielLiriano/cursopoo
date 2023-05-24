<?php

 class Usuario{

    private $strNombre;
    private $strEmail;
    private $strTipo;
    private $strClave;
    protected $strFechaRegistro;
    static $strEstado = "Activo";

    function __construct(string $nombre, string $email, string $tipo)
    {
        $this->strNombre = $nombre;
        $this->strEmail = $email;
        $this->strTipo = $tipo;
        $this->strClave = rand();
        date_default_timezone_set("America/Santo_domingo");
        $this->strFechaRegistro = date('Y-m-d h:i:s A');
    }

    public function getNombre():string
    {
        return $this->strNombre;
    }
    public function getEmail():string
    {
        return $this->strEmail;
    }
    public function getTipo():string
    {
        return $this->strTipo;
    }
    public function getPerfil()
    {
        echo "Datos del usuario <br>";
        echo "Nombre: ".$this->strNombre . "<br>";
        echo "Email: ".$this->strEmail. "<br>";
        echo "Tipo: ".$this->strTipo. "<br>";
        echo "Fecha registro: ".$this->strFechaRegistro. "<br>";
        echo "Contraseña: ".$this->strClave. "<br>";
        echo "Estado: ".self::$strEstado. "<br>";
    }
    public function setCambiarClave(string $pass)
    {
        $this->strClave = $pass;
    }
 }//Fin de la clase usuario

?>