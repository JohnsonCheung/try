<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 27/5/2015
 * Time: 16:45
 */

@mkdir("c:/temp/notexistdir1234/bb");
assert(!is_dir("c:/temp/aa"));
exit();
assert(is_dir("c:/temp/aa/bb"));
rmdir("c:/temp/aa/bb");
rmdir("c:/temp/aa");

mkdir("c:/temp/aa/bb/");
assert(is_dir("c:/temp/aa/"));
assert(is_dir("c:/temp/aa/bb/"));
rmdir("c:/temp/aa/bb/");
rmdir("c:/temp/aa/");

