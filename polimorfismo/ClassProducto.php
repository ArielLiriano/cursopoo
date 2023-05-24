<?php

class Producto
{
    public $strDescripcion;
    public $fltPrecio;
    protected $intStockMinimo = 10;
    protected $strStatus = "Activo";

    public function __construct(string $descripcion, float $precio)
    {
        $this->strDescripcion = $descripcion;
        $this->fltPrecio = $precio;
    }

    public function getInfoProducto()
    {
        $arrayProducto = array("producto"=>$this->strDescripcion,
                                "precio"=>$this->fltPrecio,
                                "stock_minimo"=>$this->intStockMinimo,
                                "estado"=>$this->strStatus);
        return $arrayProducto;
    }
}//final de la clase producto
?>