<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 07/09/2017
 * Time: 8:16 PM
 */

namespace phplab\error\system;

use phplab\error\Base;

class System extends Base
{
    const ERROR_OK = self::BASE_OK;

    const ERROR_PARAM_NOT_EXISTS = self::BASE_PARAM_NOT_EXISTS;
    const ERROR_PARAM_SMALLER_THAN_MIN = self::BASE_PARAM_SMALLER_THAN_MIN;
    const ERROR_PARAM_BIGGER_THAN_MAX = self::BASE_PARAM_BIGGER_THAN_MAX;


    private static $__messages = [
        self::ERROR_OK                     => 'OK',
        self::ERROR_PARAM_NOT_EXISTS       => 'Param not exists',
        self::ERROR_PARAM_SMALLER_THAN_MIN => 'Param values too small',
        self::ERROR_PARAM_BIGGER_THAN_MAX  => 'Param values too big',
    ];


    private static $__tips = [
        self::ERROR_PARAM_NOT_EXISTS       => 'name:',
        self::ERROR_PARAM_SMALLER_THAN_MIN => 'min:',
        self::ERROR_PARAM_BIGGER_THAN_MAX  => 'max:',
    ];


    public static function getMessage($error)
    {
        $message = isset(self::$__messages[$error]) ? self::$__messages[$error] : '';
        $tip = isset(self::$__tips[$error]) ? self::$__tips[$error] : '';

        // no tip
        if (!$tip) {
            return $message;
        }

        // give some tip
        return $message . ', ' . $tip;
    }
}
