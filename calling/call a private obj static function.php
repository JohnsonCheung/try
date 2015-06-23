<?php

/**
 * Created by PhpStorm.
 * User: USER
 * Date: 26/5/2015
 * Time: 3:48
 */
class AA
{
    private static function fnPrivate($a, $b)
    {
        echo "ok to call a private static fn of an object.  \$a=[$a]  \$b=[$b]\n";
    }

    public static function fnPublic($a, $b)
    {
        echo "ok to call a public static fn of an object. \$a=[$a] \$b=[$b]\n";
    }

    public static function call_static_meth($nm, ...$prmAy)
    {
        call_user_func_array("AA::$nm", $prmAy);
    }
}

AA::call_static_meth("fnPublic","aa","bb");
AA::call_static_meth("fnPrivate","aa","bb");
call_user_func("AA::fnPublic","aa","bb");
// call_user_func("AA::fnPrivate");
