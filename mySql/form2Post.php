<?php
$con = new mysqli("localhost", "root", "ritachan", "test");
var_dump($_REQUEST);
var_dump($_SERVER);
$a1 = @$_REQUEST['a1'];
$a2 = @$_REQUEST['a2'];
$a3 = @$_REQUEST['a3'];
$con->query("INSERT INTO aaa (a1,a2,a3) VALUES('$a1','$a2',$a3);");
$result = $con->query("SELECT a1,a2,a3 FROM aaa");

echo '<form method="post"><table>';
while ($row = $result->fetch_array()) {
    $a1 = $row['a1'];
    $a2 = $row['a2'];
    $a3 = $row['a3'];
    echo '<tr>';
    echo "<td><input type='text' name='a1' value='$a1'/>";
    echo "<td><input type='text' name='a2' value='$a2'/>";
    echo "<td><input type='text' name='a3' value='$a3'/>";
}
echo '</table><input type="submit"/></form>';
?>