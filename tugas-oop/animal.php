<?php

class hewan  {
    
public $name;
public $legs;
public $cold_blooded;

function __construct($name, $legs, $cold_blooded)
{
    $this->nama = $name;
    $this->kaki = $legs;
    $this->cold_blooded = $cold_blooded;
}
function get_name()
{
    return $this->nama;
}
function get_kaki()
{
    return $this->kaki;
}
function get_cold_blooded()
{
    return $this->cold_blooded;
}
}

$bebas = new hewan("domba", "4", "cold blooded");
echo "nama : " . $bebas->get_name();
echo "<BR>";
echo "kaki : " . $bebas->get_kaki();
echo "<BR>";
echo $bebas->get_cold_blooded() . " : no"

?>