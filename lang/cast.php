<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 18/5/2015
 * Time: 10:12
 */

echo 'trim(null)=[' . trim(null) . "]\n";
echo 'trim(null)==null? ';
$a = is_null(trim(null));
if ($a) {
    echo 'yes';
} else {
    echo 'no';
}
echo "\n";

echo 'trim(null)==""? ';
$a = trim(null)==="";
if ($a) {
    echo 'yes';
} else {
    echo 'no';
}
echo "\n";

$o = [];
$o[1] = "1....";
$o[0] = "0....";
foreach ($o as $k => $v) {
    echo "$k=>$v";
    echo "\n";
}
echo "\$o['1'] is {$o['1']}";
$b = "1";
$a = (int)$b;
assert($a == $b);
$b = 1;