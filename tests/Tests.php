<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 07/09/2017
 * Time: 8:21 PM
 */

namespace phplab\error\tests;

use phplab\error\system\System;

class Tests
{
    public static $error_ok = 0;
    public static $error_ok_message = 'OK';

    public static $error_param_smaller_than_min = 331;
    public static $error_param_smaller_than_min_message = 'Param values too small, min:16';

    public static $error_param_should_be_string = 321;
    public static $error_param_should_be_string_message = 'Param should be string, value:0';


    public static $error_unknown = 99999999;


    public static $value_0 = 0;
    public static $value_16 = 16;
}
