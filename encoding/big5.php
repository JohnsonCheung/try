<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 27/5/2015
 * Time: 22:00
 */
function big5__tst() {
    $a = "翻譯這個網頁";
    $b = mb_convert_encoding($a,"BIG-5");
    echo $a . "<br>\n";
    echo $b . "<br>\n";
}

big5__tst();