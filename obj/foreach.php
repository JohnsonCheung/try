<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 24/5/2015
 * Time: 10:42
 */
class ClassA {
    public $a;
    public $b;
    function __construct($a,$b) {
        $this->a = $a;
        $this->b = $b;
    }
}

$a = new ClassA("Johnson","Cheung");
foreach($a as $k=>$v) {
    echo "key=[$k] value=[$v]\n";
}
