<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 23/4/2015
 * Time: 21:03
 */
// var_dump($_SERVER);
//echo crypt("ritachn")."\n";
//echo __file__."\n";
//echo serialize($_SERVER);
// phpinfo();
//echo json_encode($_SERVER);
if (isset($_SERVER['HTTP_HOST'])) {
    echo 'from browser' . '<br>';
} else {
    echo 'local script' . "\n";
}
var_dump($_SERVER);
echo "----------------------<br>\n";
echo '$_GET';
var_dump($_GET);

echo "----------------------<br>\n";
echo '$_REQUEST';
var_dump($_REQUEST);
var_dump($_REQUEST===$_GET);
echo "----------------------<br>\n";
echo '$_POST';
var_dump($_POST);
?>