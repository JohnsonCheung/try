<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 23/6/2015
 * Time: 14:27
 */
$a = ['a'=>1, 'b'=>2];
$b = new stdClass();
$b->a = 1;
$b->b = 2;
$c = [1,2];
$d = [1,2,3];
unset($d[1]);
$e = [1,2,3];
unset($e[0]);
$f = [1,2,3];
unset($f[2]);

var_dump(json_encode($a));

var_dump(json_encode($b));
var_dump(json_encode($c));
var_dump(json_encode($d));
var_dump(json_encode($e));
var_dump(json_encode($f));
var_dump($f);
var_dump([0=>1,1=>2]);
var_dump(['0'=>1,'1'=>2]);
var_dump(array_keys([1,2]));
