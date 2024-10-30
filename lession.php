<?php
    $products = ["iphone","samsung","xiaomi"];
    foreach($products as $value){
        echo $value;
    }



    class Food
    {
        public $name;
        public $price;
        public $discriptions;
        public function __construct($name,$price,$discriptions)
        {
            $this -> name = $name;
            $this -> price = $price;
            $this -> discriptions = $discriptions;
        }
        public function getname(){
            return $this -> name;
        }

    }
    $noodle = new Food("noodle",30000,"Bún bò Huế");
    $ramen = new Food("ramen",40000,"ít đường");
    $pizza = new Food("pizza",50000,"hải sản");

    $foods = [$noodle,$ramen,$pizza];
    function allname($foods){
        foreach ($foods as $key => $food) {
           echo $food -> getname(). "<br>";
        }
    }
    allname($foods);
?>