<?php

class Box {
   use HasColor;
   public $width;
   private $height;
   protected $lenght;


   public function volume(){
    return $this->width * $this->height * $this->lenght;
   }
}

class MetalBox extends Box {
   public $weightPerUnit;
   public function mass(){
    return $this->volume() * $this->weightPerUnit;
   }
}

$box1 =new Box();
$box1->height = 10;
var_dump($box1->lenght);

$metal1 = new MetalBox();
var_dump($metal1);

trait HasColor {
   public $color;
   public function setColor($color) [
      $this->color = $color;
   ]
}