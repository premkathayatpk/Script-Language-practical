<?php
class fruit{
  public $name;
  public $color;

  public function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
  }
  public function get_Info(){
    echo "Name of Fruit = ".$this->name;
    echo "<br>Color of Fruit = ".$this->color;

  }
}
class berry extends fruit{
 public $weight;
  public function __construct($name, $color,$weight){
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  public function get_Info(){
    echo "Name = ".$this->name;
    echo "<br>Color = ".$this->color;
    echo "<br>Weight  = ".$this->weight;

  }
}
$obj = new berry("Banana","Yellow",10);
$obj-> get_Info();
?>