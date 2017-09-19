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

    const ERROR_PARAM_NOT_EXISTS = self::BASE_PARAM | self::BASE_NOT_EXISTS;
    const ERROR_PARAM_SMALLER_THAN_MIN = self::BASE_PARAM | self::BASE_VALUE_TOO_SMALL;
    const ERROR_PARAM_BIGGER_THAN_MAX = self::BASE_PARAM | self::BASE_VALUE_TOO_BIG;
    const ERROR_PARAM_SHOULD_BE_NUMBER = self::BASE_PARAM | self::BASE_TYPE_SHOULD_BE_NUMBER;
    const ERROR_PARAM_SHOULD_BE_STRING = self::BASE_PARAM | self::BASE_TYPE_SHOULD_BE_STRING;

    const ERROR_METHOD_NOT_EXISTS = self::BASE_METHOD | self::BASE_NOT_EXISTS;

    const ERROR_ITEM_NOT_EXISTS = self::BASE_ITEM | self::BASE_NOT_EXISTS;
    const ERROR_TARGET_NOT_EXISTS = self::BASE_TARGET | self::BASE_NOT_EXISTS;

    private static $messages = [
        self::ERROR_OK                     => 'OK',
        self::ERROR_PARAM_NOT_EXISTS       => 'Param not exists',
        self::ERROR_PARAM_SMALLER_THAN_MIN => 'Param values too small',
        self::ERROR_PARAM_BIGGER_THAN_MAX  => 'Param values too big',
        self::ERROR_PARAM_SHOULD_BE_NUMBER => 'Param should be nerumb',
        self::ERROR_PARAM_SHOULD_BE_STRING => 'Param should not be string',

        self::ERROR_METHOD_NOT_EXISTS      => 'Method not exists',

        self::ERROR_ITEM_NOT_EXISTS        => 'Item not exsts',
        self::ERROR_TARGET_NOT_EXISTS      => 'Target not exists',
    ];


    private static $tips = [
        self::ERROR_PARAM_NOT_EXISTS       => 'name:',
        self::ERROR_PARAM_SMALLER_THAN_MIN => 'min:',
        self::ERROR_PARAM_BIGGER_THAN_MAX  => 'max:',
        self::ERROR_PARAM_SHOULD_BE_NUMBER => 'value:',
        self::ERROR_PARAM_SHOULD_BE_STRING => 'value:',

        self::ERROR_METHOD_NOT_EXISTS      => 'name:',

        self::ERROR_ITEM_NOT_EXISTS        => 'name:',
        self::ERROR_TARGET_NOT_EXISTS      => 'name:',
    ];

    /**
     * Get error message, with tip if necessary
     * @param $error
     * @param null $tip_value
     * @return mixed|string
     */
    public static function getMessage($error, $tip_value = null)
    {
        $message = isset(self::$messages[$error]) ? self::$messages[$error] : '';
        $tip = isset(self::$tips[$error]) ? self::$tips[$error] : '';

        // no tip
        if (!$tip) {
            return $message;
        }

        // give some tip
        return $message . ', ' . $tip . $tip_value;
    }
}
