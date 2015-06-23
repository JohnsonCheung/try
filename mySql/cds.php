<?php
        mysql_connect("localhost", "root", "ritachan");
        mysql_select_db("cdcol");

        $result=mysql_query("SELECT titel,interpret,jahr FROM cds ORDER BY interpret");
        echo '<table>';
        while ($row = mysql_fetch_array($result)) {
        	echo '<tr>';
            echo '<td>';
            echo $row['interpret'];
            echo '<td>';
            echo $row['titel'];
            echo '<td>';
            echo $row['jahr'];
            echo '</tr>';
        }
        echo '</table>';
        mysql_query("INSERT INTO cds (titel,interpret,jahr) VALUES('titel','interpret',1);");
?>
