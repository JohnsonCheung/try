<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 18/6/2015
 * Time: 15:26
 */
print_r(1,true);
session_start();?>
<table>
<tr><td>$_SESSION<td><?php print_r($_SESSION);?>
<tr><td>session_id()<td><?php print_r(session_id()); ?>
<tr><td>cookie<td><?php print_r($_COOKIE); ?>
</tr></table>
