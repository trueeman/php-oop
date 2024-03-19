<?php

class product {
    public $name = "Een gedeelte van de tosti.";
}


$brood1 = new product();
$brood1 -> name = "Boven broodje.";

$kaas = new product();
$kaas -> name = "Kaas gedeelte.";

$ham = new product();
$ham -> name = "Ham gedeelte.";

$brood2 = new product();
$brood2 -> name = "Onder broodje.";

var_dump($brood1, "<br>", $kaas, "<br>", $ham, "<br>", $brood2);

echo  "<br>" .  "<br>";

echo $brood1 -> name . "<br>" . $kaas -> name . "<br>" . $ham -> name . 
"<br>" . $brood2 -> name;

?>