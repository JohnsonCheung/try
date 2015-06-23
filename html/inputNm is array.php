<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 27/5/2015
 * Time: 3:00
 */
if(count($_REQUEST)>0) {
    var_dump($_REQUEST);
}
echo '<form method="post">';
for($j=0;$j<10;$j++) {
    echo '<input type="text" name="a[]"/><br>';
}
echo '<input type="submit">';