<?php

trait Singleton {

  static $instance;

  private function __construct() {
  }

  public static function getInstance(){
    if (self::$instance == null)
      self::$instance = new self();
    return self::$instance;
  }
}


class Test{

  const TEST_CONST = "Тестовая константа";

//  static $instance;

  public function getTestConst(){
    echo self::TEST_CONST;
  }

  use Singleton;
}



$testObj = Test::getInstance();
echo "Instance isset: ".isset(Test::$instance);
$testObj1 = Test::getInstance();


echo PHP_EOL;
var_dump($testObj === $testObj1);
