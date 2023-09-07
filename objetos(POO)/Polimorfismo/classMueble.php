<?php

require_once("classProducto.php");

class Mueble extends Producto{

    public $strColor;
    public $strMaterial;
    public $strStatus = "agotado";

    public function __construct(string $descripcion, float $precio, string $color, string $material){
        parent::__construct($descripcion, $precio);

        $this->strColor= $color;
        $this-> strMaterial= $material;
    }
    public function getInfoProduto(){
        $arrProducto = array(
            'producto' => $this -> strDescripcion,
            'precio'=> $this -> fltPrecio,
            'stock minimo' => $this -> intStockMinimo,
            'estado'=> $this -> strStatus,
            'color'=> $this -> strColor,
            'material'=> $this -> strMaterial
        );
       return $arrProducto;
    }
}