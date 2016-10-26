<?php
require_once "new1.php";
class ConcreteClass2 extends AbstractClass
{
public function getValue() {
return "ConcreteClass2";
}
public function prefixValue($prefix) {
return "{$prefix}ConcreteClass2";
}
public $a;
public function f1(){
return $this->a;
}
public $g;
public function f2(){
return $this->g;
}
};
?>