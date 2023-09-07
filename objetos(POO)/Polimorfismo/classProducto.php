<?php

class Producto{

    public $strDescripcion;
    public $fltPrecio;
    public $intStockMinimo = 10;

    protected $strStatus="activo";

    public function __construct (string $descripcion, float $precio){
        $this->strDescripcion= $descripcion;
        $this->fltPrecio=$precio;
    }

    public function getInfoProducto(){
        $arrProducto = array(
            'producto' => $this -> strDescripcion,
            'precio'=> $this -> fltPrecio,
            'stock minimo' => $this -> intStockMinimo,
            'estado'=> $this -> strStatus
        );

    return $arrProducto;
    }

}