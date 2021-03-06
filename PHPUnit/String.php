<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 29/5/2015
 * Time: 7:21
 */
class String
{
    //contains the internal data
    var $data;

    // constructor
    function String($data) {
        $this->data = $data;
    }

    // creates a deep copy of the string object
    function copy() {
        $ret = new String($this->data);
        return $ret;
    }

    // adds another string object to this class
    function add($string) {
        $this->data = $this->data.$string->toString("%ss");
    }

    // returns the formated string
    function toString($format) {
        $ret = sprintf($format, $this->data);
        return $ret;
    }
}
?>