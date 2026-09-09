<?php
$numbers = array(1, 2, 3);
$numbers = [1, 2, 3];
var_dump($numbers[1]);
$numbers[2] = 5;
var_dump($numbers[2]);
$test = [1, 'ldldl', true, [1, 2, 3]];
var_dump($test);
var_dump($test[3][1]);
$test = [
  'name' => 'Maksim',
  'age' => 18,
  1,
  2,
  3,
  'color' => 'green',
];
var_dump($test['name']);