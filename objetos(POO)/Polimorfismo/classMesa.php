<?php

require_once("classMueble.php");

class Mesa extends Producto{

    public $strForma;
    public $strTamaño;
    public $strStatus = "agotado";

    public function __construct(string $descripcion, float $precio,string $color, string $material, string $forma, string $tamaño){
        parent::__construct($descripcion, $precio);

        $this->strForma= $forma;
        $this-> strTamaño= $tamaño;
    }
    public function getInfoProduto(){
        $arrProducto = array(
            'producto' => $this -> strDescripcion,
            'precio'=> $this -> fltPrecio,
            'stock minimo' => $this -> intStockMinimo,
            'color'=> $this -> strForma,
            'material'=> $this -> strTamaño,
            'color'=> $this -> strColor,
            'material'=> $this -> strMaterial
        );
       return $arrProducto;
    }
}