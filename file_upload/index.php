<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 27/5/2015
 * Time: 2:49
 */
?>
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="file_upload.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field
    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
    -->
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file"/><br>
    <input type="submit" value="Send File"/>
</form>

<!--
<?php
var_dump($_FILES);
if(is_null($_FILES)) exit();

foreach ($_FILES["userfile"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["userfile"]["tmp_name"][$key];
        $name = $_FILES["userfile"]["name"][$key];
        move_uploaded_file($tmp_name, "tmp/$name");
    }
}
?>
 -->