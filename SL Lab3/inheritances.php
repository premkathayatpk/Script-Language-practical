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
    public function message(){
      echo "This is a Berry";
    }
  }
  $obj = new berry("Apple","Red");
  $obj-> message();
  $obj-> get_Info();
  ?>