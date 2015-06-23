<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 29/5/2015
 * Time: 7:20
 */

require_once 'phpunit.php';
class MathTest extends PHPUnit_TestCase
{
    var $fValue1;
    var $fValue2;

    function MathTest($name)
    {
        $this->PHPUnit_TestCase($name);
    }

    function setUp()
    {
        $this->fValue1 = 2;
        $this->fValue2 = 3;
    }
}
require_once "PHPUnit.php";
$suite  = New PHPUnit_TestSuite('Mathtest');
$result = PHPUnit::run($suite);
echo $result->toHtml();
?>