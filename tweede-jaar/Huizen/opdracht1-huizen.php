<?php

// Author: Diego Ballestero
// Opdracht 1: Huizen

class House {
    public $floor;
    public $rooms;
    public $width;
    public $height;
    public $depth;
    public $volume;
    public $price;


    // Constructs the floor, rooms and price.
    function __construct($floor, $rooms, $price) {
        $this -> floor = $floor;
        $this -> rooms = $rooms;
        $this -> price = $price;
    }

    // Constructs the volume.
    function calculateVolume($width, $height, $depth) {
        $this -> width = $width;
        $this -> height = $height;
        $this -> depth = $depth;
        $this -> setVolume();
    }

    // Calculates the volume. 
    function setVolume() {
        $this -> volume = $this -> width * $this -> height * $this -> depth;
    }

    // Returns the values.
    function getFloor() {
        return $this -> floor;
    }

    function getRooms() {
        return $this -> rooms;
    }

    function getVolume() {
        return $this -> volume;
    }

    function getPrice() {
        return $this -> price;
    }
}


$house1 = new House(2, 4, 150000);
$house1 -> calculateVolume(1, 10, 10);

$house2 = new House(3, 6, 225000);
$house2 -> calculateVolume(1, 15, 10);

$house3 = new House(2, 3, 112500);
$house3 -> calculateVolume(5, 5, 3);


// Prints all the houses.
echo "Dit house heeft " . $house1 -> getFloor() . " verdiepingen, " . $house1 -> getRooms() . 
" kamers en heeft een volume van " . $house1 -> getVolume() . " m3 <br> " .
"De prijs van het house is: " . $house1 -> getPrice() . "<br>";

echo "Dit house heeft " . $house2 -> getFloor() . " verdiepingen, " . $house2 -> getRooms() . 
" kamers en heeft een volume van " . $house2 -> getVolume() . " m3 <br> " .
"De prijs van het house is: " . $house2 -> getPrice() . "<br>";

echo "Dit house heeft " . $house3 -> getFloor() . " verdiepingen, " . $house3 -> getRooms() . 
" kamers en heeft een volume van " . $house3 -> getVolume() . " m3 <br> " .
"De prijs van het house is: " . $house3 -> getPrice() . "<br>";

?>
