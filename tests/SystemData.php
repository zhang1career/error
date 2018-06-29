<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 07/09/2017
 * Time: 8:21 PM
 */

namespace phplab\error\tests;

use phplab\error\System;

class SystemData
{
    public static $ok = 0;
    public static $ok_message = 'OK';

    public static $error_param_smaller_than_min = System::ERROR_PARAM_SMALLER_THAN_MIN;
    public static $error_param_smaller_than_min_message = 'Param values too small';

    public static $error_param_should_be_string = System::ERROR_PARAM_SHOULD_BE_STRING;
    public static $error_param_should_be_string_message = 'Param should be string';

    public static $error_unknown = 99999999;
    public static $error_unknown_errmsg = 'undefined message';


    public static $value_0 = 0;
    public static $value_16 = 16;
}
