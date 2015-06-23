<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 10/6/2015
 * Time: 5:03
 */
test_unset();
function test_unset()
{
    $a = [1, 2, 3];
    assert(count($a) === 3);
    unset($a[0]);
    assert(count($a) === 2);
    pass(__FUNCTION__);
}

function pass($s)
{
    echo 'pass: ' . $s;
}