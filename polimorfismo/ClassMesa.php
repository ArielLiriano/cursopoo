<?php

require_once ("ClassMueble.php");

final class Mesa extends Mueble
{
    private $strForma = "";
    protected $strTamanio;
    public $strStatus = "Activo";

    public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamanio)
    {
        parent::__construct($descripcion, $precio, $marca, $color, $material);
        $this->strTamanio = $tamanio;
    }

    public function setForma(string $forma)
    {
        $this->strForma = $forma;    
    }

    public function getInfoProducto()
    {
        $arrayProducto = array("producto"=>$this->strDescripcion,
                                "precio"=>$this->fltPrecio,
                                "stock_minimo"=>$this->intStockMinimo,
                                "estado"=>$this->strStatus,
                                "color"=>$this->strColor,
                                "Material"=>$this->strMaterial,
                                "tamaño"=>$this->strTamanio,
                                "forma"=>$this->strForma);
        return $arrayProducto;
    }
}
?>