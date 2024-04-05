<?php
class Cars{
  static public $numCars = 0;
  static public function addToNumCars($num){
    $num = (int)$num;
    self :: $numCars += $num;
  }
}
echo "Numbers of Cars", "<br>";
echo Cars:: $numCars;
echo "<br>";
Cars :: addToNumCars(3);
echo Cars:: $numCars;
echo "<br>";

Cars :: addToNumCars(-1);
echo Cars:: $numCars;
?>