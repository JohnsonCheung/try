<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 9/6/2015
 * Time: 14:34
 */
$pwd = "johnson";
$a = password_hash($pwd, PASSWORD_DEFAULT);
$b =  password_verify($pwd, $a);
echo "hashed = " . $a . "\n";
echo "verify = ";
if ($b)
    echo "ok\n";
else
    echo "not ok\n";
//echo password_hash("sdlkfjsdf", PASSWORD_BCRYPT);