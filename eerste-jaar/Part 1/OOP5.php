<?php 

class product {
    public $name;

    public $price;


    public function __construct($name, $price) {
        $this -> name = ucfirst($name);
        $this -> price = $price;
    }

    
    public function formatPrice() {
        return number_format($this -> price, decimals: 2);
    }
}


$game1 = new product("terraria", 10);


echo $game1 -> formatprice() . "<br>"; 
echo $game1 -> name . "<br>";
echo $game1 -> price . "<br>" . "<br>";


var_dump($game1);

?>