<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 26/5/2015
 * Time: 4:00
 */

class A {
    function aa() {
        echo 'aa';
    }
}
// this will break
//class a {
//
//}
$a = new a();
$a->aa();