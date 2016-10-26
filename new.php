<?php
abstract class AbstractClass {
abstract protected function getValue();
abstract protected function prefixValue($prefix);
public function printOut() {
print $this->getValue() . "\n";
 }
 public  function sum(){
$n = $this->f1();
$sum = $n+$n;
echo $sum;
}
public  function bush(){
$b = $this->f2();
$bush = $b*$b;
echo $bush;
}
};
?>