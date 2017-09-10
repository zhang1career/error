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
    public static $error_ok              = System::ERROR_OK;
    public static $error_ok_message      = 'OK';

    public static $error_param_smaller_than_min = System::ERROR_PARAM_SMALLER_THAN_MIN;
    public static $error_param_smaller_than_min_message = 'Param values too small, min:16';



    public static $error_unknown         = 99999999;
}
