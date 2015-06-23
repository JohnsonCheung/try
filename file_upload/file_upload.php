<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 27/5/2015
 * Time: 3:30
 */
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

$uploaddir = 'c:\\xampp\\htdocs\\loadplan\\upload\\';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
var_dump($uploadfile);
var_dump($_FILES);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";

?>
<form action=".">
<input type="submit"/>
</form>