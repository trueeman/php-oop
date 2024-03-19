<?php 

class product {
    public $name;

    public $price;

    public $currency;

    public $currency_dollar;

    
    public function __construct($price, $name = "Een spel", $currency = "&euro", $currency_dollar = "&dollar") {
        $this -> name = ucfirst($name);
        $this -> price = $price;
        $this -> currency = $currency;
        $this -> currency_dollar = $currency_dollar;
    }
    
    public function formatPrice() {
        return number_format($this -> price, decimals: 2);
    }
}


$game1 = new product(price: 10, currency: "€");


// echo $game1 -> formatprice() . "<br>"; 
echo $game1 -> name . "<br>";
echo $game1 -> currency;
echo $game1 -> price . "<br>" . "<br>";


$game1 = new product(price: 10, currency_dollar: "$");


echo $game1 -> name . "<br>";
echo $game1 -> currency_dollar;
echo $game1 -> price . "<br>" . "<br>";



var_dump($game1);

?>