<?php

class udin extends hewan {

public $name;
public $legs;
public $cold_blooded;
public $yell;

function __construct($name, $legs, $cold_blooded, $yell)
{
    $this->nama = $name;
    $this->kaki = $legs;
    $this->cold_blooded = $cold_blooded;
    $this->yell = $yell;
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
function get_yell() {
    return $this->yell;
}
}

$wangsaf = new udin("kunyuk", "2", "cold blooded", "uooooooooooooooo");
echo "nama : " . $wangsaf->get_name();
echo "<BR>";
echo "kaki : " . $wangsaf->get_kaki();
echo "<BR>";
echo $wangsaf->get_cold_blooded() . " : no";
echo "<BR>";
echo "suara : " . $wangsaf->get_yell();


?>