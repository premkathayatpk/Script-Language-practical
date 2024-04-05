<?php
class Cars{
  static public $numCars = 0;
  static public function addToNumCars($num){
    $num = (int)$num;
    self :: $numCars += $num;
  }
}