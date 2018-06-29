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
    const PATH      = 10;
    const FILE      = 11;
    const FUNCTION  = 12;
    const PARAM     = 13;
    const RUNTIME   = 24;
    const RETURN    = 16;

    const NAMESPACE = 20;
    const GLASS     = 21;   // class
    const METHOD    = 22;
    const MEMBER    = 23;

    const DATASET   = 30;   // array
    const INDEX     = 31;

    const OBJECT    = 40;   // object
    const PROPERTY  = 41;


    /** status */
    const OK                    = 0;

    const NOT_EXISTS            = 10;
    const NOT_AVAILABLE         = 11;

    const TYPE_SHOULD_BE_NUMBER = 20;
    const TYPE_SHOULD_BE_STRING = 21;

    const VALUE_TOO_BIG         = 30;
    const VALUE_TOO_SMALL       = 31;
}
