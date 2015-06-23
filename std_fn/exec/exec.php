<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 28/5/2015
 * Time: 6:13
 */

/*
echo "before ...<br>\n";
//passthru('"C:\\Program Files\\Microsoft Office\\Office14\\EXCEL.EXE"');
echo "after ...<br>\n";
echo '<pre>';
*/
// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
echo "before ..21.<br>\n";
exec("start c:/xampp/htdocs/loadplan/pgm/bin/exec.xlsm");
//shell_exec('"c:/program files/microsoft office/office14/excel.exe"');
echo "after ...32<br>\n";



/*
// of the shell command in $retval.
$last_line = system('ls /', $retval);

// Printing additional info

echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;
*/
?>