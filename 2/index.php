<?php
class A {
  public function foo() {
    static $x = 0;
    echo ++$x;
  }
}

$a1 = new A();
$a2 = new A();

$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

$a2->foo();

echo "<br>Потому что static $x не завистит от объекта, и меняется в классе.";
echo "<hr>";

class B {
  public function foo() {
    static $x = 0;
    echo ++$x;
  }
}

class D extends A {
}

$a1 = new B();
$b1 = new D();

$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

echo "<br>Потому что static $x меняется в дочернем классе независимо от родительского.";
echo "<hr>";
