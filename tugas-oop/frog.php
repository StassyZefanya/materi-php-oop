<?php

class frog extends hewan {

    public $name;
public $legs;
public $cold_blooded;
public $jump;

function __construct($name, $legs, $cold_blooded, $jump)
{
    $this->nama = $name;
    $this->kaki = $legs;
    $this->cold_blooded = $cold_blooded;
    $this->loncat = $jump;
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
function get_jump()
{
    return $this->loncat;
}
}

$kodok = new frog("KATAG", "4", "cold blooded", "hip-hop");
echo "nama : " . $kodok->get_name();
echo "<BR>";
echo "kaki : " . $kodok->get_kaki();
echo "<BR>";
echo $kodok->get_cold_blooded() . " : no";
echo "<BR>";
echo "lompat : " . $kodok->get_jump();

?>