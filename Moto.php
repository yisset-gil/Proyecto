<?php

class Moto{

public $empresa;
public $color = "negra";
public $frenoDisco = true;
public $contenidoTanque;
private $modelo;

private $modelo_permitido = array("2017","2018","2019","2020","2021");

public function pitar(){
    return "beep";
}

public function pedirRevision(){
    echo " <br /> Soy un una Moto de marca  ". $this -> empresa . " necesito una revision.
    <br /> Ncesito repinta mi color " . $this -> color;
}

public function frenarDiscoTrasero(){
    if($this -> frenoDisco) echo " <br /> frenando con el freno disco trasero";
    else echo "  <br /> No tengo freno disco trasero";
}

//Agregar galones de gasolina a el tanque cuando se esta llenando 
public function llenar($cantidad){
    $this -> contenidoTanque += $cantidad;
    return $this;
}

//Extrae galones de gasolina de el tanque cuando este se mueve.
public function corre($kilometros){
    $galonesConsumidos = $kilometros / 50;
    $this -> contenidoTanque -= $galonesConsumidos;
    return $this;
}

public function getModelo(){
    return "El modelo de la moto es ". $this -> modelo;
}

public function setModelo($mod){
   // $this -> modelo =$mod;

    if(in_array($mod, $this-> modelo_permitido)) $this ->modelo =$mod;
    else $this -> modelo = "sin definir";
}
}