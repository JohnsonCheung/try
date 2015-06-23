<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["newsession"]="bb";
/*it is my new session*/
echo $_SESSION["newsession"];
$_SESSION["newsession"]="cc";
echo $_SESSION["newsession"];
/*session updated*/

/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["newsession"]="aa";
unset($_SESSION["newsession"]);
// echo $_SESSION["newsession"];
/*session deleted. if you try using this you've got an error*/
?>