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

    private $__message = [
        self::ERROR_OK                     => 'OK',
        self::ERROR_PARAM_NOT_EXISTS       => 'Param not exists',
        self::ERROR_PARAM_SMALLER_THAN_MIN => 'Param values too small',
        self::ERROR_PARAM_BIGGER_THAN_MAX  => 'Param values too big',
    ];

    public function getMessage($error)
    {
        return isset($this->__message[$error]) ? $this->__message[$error] : '';
    }
}