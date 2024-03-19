<?php 

class product {
    public function __construct(public $price, public $name = "Een ",  public $currency = "&euro") {
        $this -> name = ucfirst($name);
    }

    
    public function formatPrice() {
        return number_format($this -> price, decimals: 2);
    }
}


$game1 = new product(10, "terraria", "€");


// echo $game1 -> formatprice() . "<br>"; 
echo $game1 -> name . "<br>";
echo $game1 -> currency;
echo $game1 -> price . "<br>" . "<br>";


var_dump($game1);

?>