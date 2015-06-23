<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/6/2015
 * Time: 20:09
 */
//setcookie('a',password_hash('johnson',PASSWORD_DEFAULT));
echo crypt('user') . "<br>\n";
$A = password_hash("user", PASSWORD_DEFAULT);
echo $A  . "<br>\n";
