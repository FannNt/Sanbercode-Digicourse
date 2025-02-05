<?php
require "Animal.php";
require "Ape.php";
require "Frog.php";
$sheep = new Animal("shaun");

echo "Name : $sheep->name <br>";
echo "Legs : $sheep->legs <br>";
echo "Cold blooded : $sheep->cold_blooded <br>";

$kodok = new Frog("buduk");
echo "<br> Name : $kodok->name <br>";
echo "Legs : $kodok->legs <br>";
echo "Cold blooded : $kodok->cold_blooded <br>";
echo "Jump : " . $kodok->jump() . "<br>";

$sungokong = new Ape('Kera Sakti');
echo "<br> Name : $sungokong->name <br>";
echo "Legs : $sungokong->legs <br>";
echo "Cold blooded : $sungokong->cold_blooded <br>";
echo "Yell : " . $sungokong->yell();


