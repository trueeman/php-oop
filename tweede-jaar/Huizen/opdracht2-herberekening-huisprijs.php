<?php

// Author: Diego Ballestero
// Opdracht 2: Herbereking Huisprijs

class Room {
    public $length;
    public $width;
    public $height;
    public $volume;


    // Constructs the length, width and height.
    function __construct($length, $width, $height) {
        $this -> length = $length;
        $this -> width = $width;
        $this -> height = $height;
        $this -> volume = $this -> calculateVolume();
    }

    // Returns the value.
    function calculateVolume() {
        return $this -> length * $this -> width * $this -> height;
    }
}


class House {
    public $rooms = [];


    function setRoom($room) {
        $this -> rooms[] = $room;
    }

    function calculateTotalVolume() {
        $totalVolume = 0;
        foreach ($this -> rooms as $room) {
            $totalVolume += $room -> volume;
        }

        return $totalVolume;
    }

    // Constructs the price.
    function calculatePrice($pricePerCubicMeter) {
        $totalVolume = $this -> calculateTotalVolume();

        // Returns the value.
        return $totalVolume * $pricePerCubicMeter;
    }
}

// Voorbeeld van gebruik
$room1 = new Room(5.2, 5.1, 5.5);
$room2 = new Room(4.8, 4.6, 4.9);
$room3 = new Room(5.9, 2.5, 3.1);

$house = new House();
$house -> setRoom($room1);
$house -> setRoom($room2);
$house -> setRoom($room3);

$pricePerCubicMeter = 3000;
$totalVolume = $house -> calculateTotalVolume();
$totalPrice = $house -> calculatePrice($pricePerCubicMeter);


// Prints the room volume.
echo "Inhoud kamers:" . "<br>";

foreach ($house -> rooms as $room) {
    echo "<li>" . "Lengte: $room->length" . "m" . " Breedte: $room->width" . "m" . " Hoogte: $room->height". "m" . "</li>"; 
}

// Prints the result.
echo "<br>";
echo "Volume Totaal = $totalVolume" . "m3" . "<br>" . "Prijs van het huis = €$totalPrice";

?>
