<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 18/6/2015
 * Time: 14:52
 */
if (!session_start()) {
    die('session_start() fails');
} else {
    echo('session started');
}

$_SESSION['A'] = 'A';
var_dump($_SESSION);
var_dump(session_id());
var_dump($_COOKIE);
;
