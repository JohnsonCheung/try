<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 18/6/2015
 * Time: 15:09
 */
session_start();
session_destroy();
header('Location: session_dump.php');