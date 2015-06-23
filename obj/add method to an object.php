<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 24/5/2015
 * Time: 10:47
 */
class ClassA {
    public $a;
    public $b;
    function __construct($a,$b) {
        $this->a = $a;
        $this->b = $b;
    }
}

$a = new ClassA(1,2);
$fn = function () {
    $a = $this->a;
    $b = $this->b;
    echo "a=[$a] b=[$b]\n";
};
$a->echo = $fn;
$x = $a->echo;
$x();
