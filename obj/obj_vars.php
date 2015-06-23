<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 24/5/2015
 * Time: 10:45
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
$b = get_object_vars($a);
var_dump($b);
