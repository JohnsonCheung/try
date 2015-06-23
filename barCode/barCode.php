<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 29/5/2015
 * Time: 18:43
 */
//For displaying barcodes

//Arguments are:
//  code    Number you want outputted as a barcode

//You can use this script in two ways:
//  From a webpage/PHP script   <img src='/images/barcode.php?code=12345'/>
//  Directly in your web browser    http://www.example.com/images/barcode.php?code=12345

//Outputs the code as a barcode, surrounded by an asterisk (as per standard)
//Will only output numbers, text will appear as gaps
//Image width is dynamic, depending on how much data there is

//Get the barcode font (called 'free3of9') from here http://www.barcodesinc.com/free-barcode-font/
function crt_barCd_png($s)
{
    header("Content-type: image/png");
    $file = "images/barcode.png"; // path to base png image
    $im = imagecreatefrompng($file); // open the blank image
    imagealphablending($im, true); // set alpha blending on
    imagesavealpha($im, true); // save alphablending setting (important)

    $black = imagecolorallocate($im, 0, 0, 0); // colour of barcode

    $font_height = 40; // barcode font size. anything smaller and it will appear jumbled and will not be able to be read by scanners

    $newwidth = ((strlen($s) * 20) + 41); // allocate width of barcode. each character is 20px across, plus add in the asterisk's
    $thumb = imagecreatetruecolor($newwidth, 40); // generate a new image with correct dimensions

    imagecopyresized($thumb, $im, 0, 0, 0, 0, $newwidth, 40, 10, 10); // copy image to thumb
    imagettftext($thumb, $font_height, 0, 1, 40, $black, 'c:\\windows\\fonts\\Free3of9.ttf', $s); // add text to image

    if (is_null($f)) {
        imagepng($thumb);
    }
    imagedestroy($thumb);
}

$s = @$_GET['code'];
if (is_null($s))
    $s = "1234";
crt_barCd_png($s);
?>