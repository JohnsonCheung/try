<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 27/5/2015
 * Time: 9:46
 */
$file = 'md5.php'; // php-5.3.0alpha2-Win32-VC9-x64.zip';
$md5 = md5_file($file);
echo "MD5 file hash of $file $md5";
