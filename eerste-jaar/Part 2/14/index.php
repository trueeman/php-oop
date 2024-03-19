<?php 

declare(strict_types = 1);


require_once 'Music.php';
require_once 'ListenList.php';


$kees = new ListenList();


$music1 = new Music('Bach', 'Klassiek',  3);
$music2 = new Music('ABC', 'House', 2);


$kees -> addMusic($music1);
$kees -> addMusic($music2);


echo $music1 -> getName() . "<br> <br>";

var_dump($kees);

?>