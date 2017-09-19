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
    const BASE_PATH = 0000;
    const BASE_FILE = 0100;
    const BASE_FUNCTION = 0200;
    const BASE_PARAM = 0300;
    const BASE_RETURN = 0400;

    const BASE_NAMESPACE = 1000;
    const BASE_OBJECT = 1100;
    const BASE_METHOD = 1200;

    const BASE_ITEM = 6000;
    const BASE_TARGET = 8000;


    const BASE_OK = 0;

    const BASE_NOT_EXISTS = 10;
    const BASE_NOT_AVAILABLE = 11;

    const BASE_TYPE_SHOULD_BE_NUMBER = 20;
    const BASE_TYPE_SHOULD_BE_STRING = 21;

    const BASE_VALUE_TOO_BIG = 30;
    const BASE_VALUE_TOO_SMALL = 31;
}
