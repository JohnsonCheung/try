<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 18/6/2015
 * Time: 11:57
 */
$page = @$_REQUEST['page'];
switch($page) {
    case '1':
        http_redirect('http://www.google.com/');
        break;
    case '2':
        http_redirect('http://www.yahoo.com/');
        break;
    default:
        http_redirect('http://www.jetft.com/');
}

function http_redirect($url) {
    header('Location: ' . $url);
}