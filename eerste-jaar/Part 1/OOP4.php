<?php 

class product {
    public $name;

    public $price;

    public $catagory;


    public function set_name($name) {
        $this -> name = ucfirst($name);
    }
    
    public function formatPrice() {
        return number_format($this -> price, decimals: 2);
    }

    public function set_catagory($catagory) {
        $this -> catagory = strtoupper($catagory);        
    }
}


$game1 = new product();
$game1 -> set_name("terraria");
$game1 -> set_catagory("sandbox");
$game1 -> price = 10;


echo $game1 -> formatprice() . "<br>"; 
echo $game1 -> name . "<br>";
echo $game1 -> catagory . "<br>";
echo $game1 -> price . "<br>" . "<br>";


var_dump($game1);

?>