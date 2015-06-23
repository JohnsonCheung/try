<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 26/5/2015
 * Time: 3:57
 */
function aa()
{

    $xls = new COM("c:/xampp/htdocs/loadplan/pgm/bin/exec.xlsm");
    $a = 1;
}

function bb()
{
    $xls = new COM("excel.application");
    $xls->visible = true;
    $a = 1;
}

function cc()
{
    $x = new COM("excel.application");
    $w = $x->WorkBooks;
    $x->visible = true;
    echo "done";
}

function dd() {
    $x = new com("excel.application");

    $w = $x->workbooks->open(__DIR__ . "/a.xlsx");
    echo "done1";
}
dd();
?>