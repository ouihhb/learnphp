<?php

class Box {
   public $width;
   public $height;
   public $lenght;

   public function volume(){
    return $this->width * $this->height * $this->lenght;
   }
}

$box1 = new Box();
$box1->width = 1;
$box1->height = 2;
$box1->lenght = 3;
var_dump($box1, $box1->volume());

$box2 = new Box();
$box2->width = 3;
$box2->height = 4;
$box2->lenght = 5;
var_dump($box2, $box2->volume());
var_dump($box1, $box1->volume());