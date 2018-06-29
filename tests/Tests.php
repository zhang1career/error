<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 07/09/2017
 * Time: 8:21 PM
 */

namespace phplab\error\tests;

class Tests
{
    public static $ok = 0;
    public static $ok_message = 'OK';

    public static $error_param_smaller_than_min = 1331;
    public static $error_param_smaller_than_min_message = 'Param values too small';

    public static $error_param_should_be_string = 1321;
    public static $error_param_should_be_string_message = 'Param should be string';

    public static $error_unknown = 99999999;
    public static $error_unknown_errmsg = 'undefined message';


    public static $value_0 = 0;
    public static $value_16 = 16;
}
