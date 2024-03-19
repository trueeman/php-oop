<?php 

class Flower {
    // Attributes
    private $name;
    private $color;

    // Constructor
    function __construct($name, $color) {
        $this -> color = $color;
        $this -> name = $name;
    }
}

$flower1 = new Flower("sunflower", "yellow");

$flower2 = new Flower("violet", "purple");

var_dump($flower1, "<br>", $flower2, "<br>");

$flower1 -> $color = "brown";

var_dump($flower1);

?>