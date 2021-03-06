<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 07/09/2017
 * Time: 8:21 PM
 */

namespace phplab\error\tests\system;

use phplab\error\System;

class Data
{
    public static $ok = System::OK;
    public static $ok_message = 'OK';

    public static $error_param_smaller_than_min = System::ERROR_PARAM_SMALLER_THAN_MIN;
    public static $error_param_smaller_than_min_message = 'Param values too small';

    public static $error_param_should_be_value = System::ERROR_PARAM_SHOULD_BE_VALUE;
    public static $error_param_should_be_value_message = 'Param should be value';

    public static $error_param_should_not_be_value = System::ERROR_PARAM_SHOULD_NOT_BE_VALUE;
    public static $error_param_should_not_be_value_message = 'Param should not be value';

    public static $error_param_has_wrong_type = System::ERROR_PARAM_TYPE;
    public static $error_param_has_wrong_type_message = 'Param has wrong type';

    public static $error_param_should_be_string = System::ERROR_PARAM_SHOULD_BE_STRING;
    public static $error_param_should_be_string_message = 'Param should be string';

    public static $error_function_does_not_exist = System::ERROR_FUNCTION_NOT_EXISTS;
    public static $error_function_does_not_exist_message = 'Function does not exist';

    public static $error_unknown = 99999999;
    public static $error_unknown_message = 'undefined message';


    public static $value_0 = 0;
    public static $value_16 = 16;
}
