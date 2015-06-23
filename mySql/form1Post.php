<?php
        $con = new mysqli("localhost", "root", "ritachan", "test");
        $a1 = @$_REQUEST['a1'];
        $a2 = @$_REQUEST['a2'];
        $a3 = @$_REQUEST['a3'];
        $con->query("INSERT INTO aaa (a1,a2,a3) VALUES('$a1','$a2',$a3);");
        $result=$con->query("SELECT a1,a2,a3 FROM aaa");

        echo '<form><table>';
        while ($row = $result->fetch_array()) {
        	echo '<tr>';
            echo '<td>';
            echo $row['a1'];
            echo '<td>';
            echo $row['a2'];
            echo '<td>';
            echo $row['a3'];
            echo '</tr>';
        }
        echo '</table></form>';
?>