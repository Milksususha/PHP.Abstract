<?php
require_once "new.php";
class ConcreteClass1 extends AbstractClass
{
protected function getValue() {
return "ConcreteClass1";
}
public function prefixValue($prefix) {
return "{$prefix}ConcreteClass1";
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