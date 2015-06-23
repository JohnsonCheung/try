<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 9/6/2015
 * Time: 23:12
 */
include_once '/../phpFn/db.php';
$con = db_con("sec");
$tim = (new DateTime())->format("Y-m-d H:i:s");

runsql($con, "update act set tim = '$tim' where act=1;");
$con->close();