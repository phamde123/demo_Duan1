<?php
    class car
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
        public function getPrice(){
            return $this -> price;
        }
    }
    $bmw = new car("BMW","1200000","BMW");
    $audi = new car("Audi","900000","Audi");
    $toyota = new car("Toyota","400000","Toyota");
    $listCar = [$bmw,$audi,$toyota];
    function sum($list){
        $total = 0;
        foreach ($list as $key => $value) {
            $total += $value -> getPrice();
        }
        echo $total;
    }
    sum($listCar);
?>