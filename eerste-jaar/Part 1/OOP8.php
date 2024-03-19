<?php 

class product {
    public $name;

    public $price;

    public $currency;

    public function __construct($price, $name = "een game", $currency = "&euro") {
        $this -> name = ucfirst($name);
        $this -> price = $price;
        $this -> currency = $currency; 
    }

    
    public function formatPrice() {
        return number_format($this -> price, decimals: 2);
    }


    public function getProduct() {
        return "Het product " . $this -> name .  " kost " . $this -> currency . " " . $this -> price . "<br> <br>";
    }
}


$game1 = new product(2, "Techno Beats", "€");
$game2 = new product(10, "Trap Mix", "€");
$game3 = new product(50, "Drake's first single", "€");


echo $game1 -> getProduct();
echo $game2 -> getProduct();
echo $game3 -> getProduct();


// echo $game1 -> formatprice() . "<br>"; 


// echo $game1 -> name . "<br>";
// echo $game1 -> currency;
// echo $game1 -> price . "<br>" . "<br>";


var_dump($game1);

?> 