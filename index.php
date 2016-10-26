<?php
require_once "new2.php";
$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";
echo "<br/>";
$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";
echo "<br/>";
$class1->a = 1;
$class1->sum();
echo "<br/>";
$class2->a = 2;
$class2->sum();
echo "<br/>";
?>