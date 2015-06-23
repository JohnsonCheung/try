<?php

/**
 * Created by PhpStorm.
 * User: USER
 * Date: 29/5/2015
 * Time: 18:43
 */
class BarCd
{
    public $s;

    function __construct($s)
    {
        $this->s = $s;
    }

    function response()
    {
        header("Content-type: image/png");
        $t = $this->thumb();
        imagepng($t);
        imagedestroy($t);
    }

    function save_file($file)
    {
        $t = $this->thumb();
        imagepng($t, $file);
        imagedestroy($t);
    }

    function thumb() //Get the barcode font (called 'free3of9') from here http://www.barcodesinc.com/free-barcode-font/
    {
        $s = $this->s;

        $file = "images/barcode.png"; // path to base png image
        $im = imagecreatefrompng($file); // open the blank image
        imagealphablending($im, true); // set alpha blending on
        imagesavealpha($im, true); // save alphablending setting (important)

        $black = imagecolorallocate($im, 0, 0, 0); // colour of barcode

        $font_height = 40; // barcode font size. anything smaller and it will appear jumbled and will not be able to be read by scanners

        //$newwidth = ((strlen($s) * 20) + 41); // allocate width of barcode. each character is 20px across, plus add in the asterisk's
        $newwidth = strlen($s) * 21; // allocate width of barcode. each character is 20px across, plus add in the asterisk's
        $thumb = imagecreatetruecolor($newwidth, 40); // generate a new image with correct dimensions

        imagecopyresized($thumb, $im, 0, 0, 0, 0, $newwidth, 40, 10, 10); // copy image to thumb
        imagettftext($thumb, $font_height, 0, 1, 40, $black, 'c:\\windows\\fonts\\Free3of9.ttf', $s); // add text to image
        return $thumb;
    }
}

//var_dump($_SERVER);
if (isset($_SERVER['REQUEST_URI'])) {
    if ($_REQUEST['code']) {
        $s = $_REQUEST['code'];
        $m = new BarCd($s);
        $m->response();
    }
} else {
    $m = new BarCd('1234');
    $f = "c:\\temp\\johnson.png";
    @unlink($f);
    $m->save_file($f);
    assert(is_file($f));
}
