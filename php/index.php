<?php

echo "Hello";

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

class Car{

  public $model;
  public $price;

  public function __construct($model,$price){
      $this ->model = $model;
      $this ->price = $price;

  }
  public function txt(){
    return "This is " .$this->model .  "and it's price is " . $this->price . "!";
  }
 }



?>
