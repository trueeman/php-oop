<?php 

class product {
    public $name;

    public $price;
    
    public function formatPrice() {
        return number_format($this -> price, decimals: 2);
    }
}


$game1 = new product();
$game1 -> name = "Call of Duty";
$game1 -> price = 70;

$game2 = new product();
$game2 -> name = "Dark Souls";
$game1 -> price = 30;

$game3= new product();
$game3 -> name = "The Legend of Zelda Breath of the Wild";
$game1 -> price = 60;


echo $game1 -> formatprice() . "<br>"; 
echo $game1 -> name . "<br>";
echo $game1 -> price ."<br>" . "<br>"; 

echo $game2 -> formatprice() . "<br>"; 
echo $game2 -> name . "<br>";
echo $game2 -> price ."<br>" . "<br>"; 

echo $game3 -> formatprice() . "<br>"; 
echo $game3 -> name;
echo $game3 -> price ."<br>" . "<br>"; 

echo  "<br>" .  "<br>";

var_dump($game1, "<br>", $game2, "<br>", $game3);

?>