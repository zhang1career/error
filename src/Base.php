<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 10/09/2017
 * Time: 4:15 AM
 */

namespace phplab\error;

class Base
{
    /** target */
    const PATH      = 1000;
    const FILE      = 1100;
    const FUNCTION  = 1200;
    const PARAM     = 1300;
    const RUNTIME   = 2400;
    const RETURN    = 1600;

    const NAMESPACE = 2000;
    const GLASS     = 2100;   // class
    const METHOD    = 2200;
    const MEMBER    = 2300;

    const DATASET   = 3000;   // array
    const INDEX     = 3100;

    const OBJECT    = 4000;   // object
    const PROPERTY  = 4100;


    /** status */
    const OK                    = 0;

    const NOT_EXISTS            = 10;
    const NOT_AVAILABLE         = 11;

    const TYPE                  = 20;
    const TYPE_SHOULD_BE_NUMBER = 21;
    const TYPE_SHOULD_BE_ARRAY  = 22;
    const TYPE_SHOULD_BE_OBJECT = 23;
    const TYPE_SHOULD_BE_STRING = 24;

    const VALUE_TOO_BIG         = 30;
    const VALUE_TOO_SMALL       = 31;
    const VALUE_SHOULD_BE       = 32;
    const VALUE_SHOULD_NOT_BE   = 33;

    /**
     * @var $messages
     */
    public static $messages;

    /**
     * @param $errno
     * @return array
     */
    public static function build($errno)
    {
        $message = isset(static::$messages[$errno]) ? static::$messages[$errno] : 'undefined message';

        return [
            'errno'  => $errno,
            'errstr' => $message,
        ];
    }
}
