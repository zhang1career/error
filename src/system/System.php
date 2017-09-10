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
    const ERROR_PARAM_UNDERFLOW = self::BASE_PARAM_UNDERFLOW;
    const ERROR_PARAM_OVERFLOW = self::BASE_PARAM_OVERFLOW;


    public static $MESSAGE = [
        self::ERROR_OK               => 'OK',
        self::ERROR_PARAM_NOT_EXISTS => 'Param not exists',
        self::ERROR_PARAM_UNDERFLOW  => 'Param values too small',
        self::ERROR_PARAM_OVERFLOW   => 'Param values too big',
    ];
}