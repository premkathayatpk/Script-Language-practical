<?php
class Rectangle{
  public $length;
  public $width;


function __construct($l, $b) {
  $this->length = $l;
  $this->width =$b;
}
function __destruct(){
  echo "Object is being destroyed"."\n";
  }
}
$rectangle =new Rectangle(4,5);
?>