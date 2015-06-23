<?php
$o = [];
$o[2] = "2";
$o[1] = "1";
foreach($o as $k=>$v) {
    echo "$k => $v\n";
}
echo "----\n";
ksort($o);
foreach($o as $k=>$v) {
    echo "$k => $v\n";
}
?>