<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 07/09/2017
 * Time: 8:16 PM
 */

namespace phplab\error\system;

use phplab\error\Base;

define('OK', Base::OK);

define('ERROR_PARAM_NOT_EXISTS', Base::PARAM + Base::NOT_EXISTS);
define('ERROR_PARAM_SMALLER_THAN_MIN', Base::PARAM + Base::VALUE_TOO_SMALL);
define('ERROR_PARAM_BIGGER_THAN_MAX', Base::PARAM + Base::VALUE_TOO_BIG);
define('ERROR_PARAM_SHOULD_BE_NUMBER', Base::PARAM + Base::TYPE_SHOULD_BE_NUMBER);
define('ERROR_PARAM_SHOULD_BE_STRING', Base::PARAM + Base::TYPE_SHOULD_BE_STRING);

define('ERROR_METHOD_NOT_EXISTS', Base::METHOD + Base::NOT_EXISTS);

define('ERROR_INDEX_NOT_EXISTS', Base::INDEX + Base::NOT_EXISTS);
define('ERROR_PROPERTY_NOT_EXISTS', Base::PROPERTY + Base::NOT_EXISTS);


class System extends Base
{


    private static $messages = [
        OK                     => 'OK',
        ERROR_PARAM_NOT_EXISTS       => 'Param not exists',
        ERROR_PARAM_SMALLER_THAN_MIN => 'Param values too small',
        ERROR_PARAM_BIGGER_THAN_MAX  => 'Param values too big',
        ERROR_PARAM_SHOULD_BE_NUMBER => 'Param should be number',
        ERROR_PARAM_SHOULD_BE_STRING => 'Param should be string',

        ERROR_METHOD_NOT_EXISTS      => 'Method not exists',

        ERROR_INDEX_NOT_EXISTS       => 'Item not exsts',
        ERROR_PROPERTY_NOT_EXISTS    => 'Target not exists',
    ];


    private static $tips = [
        ERROR_PARAM_NOT_EXISTS       => 'name:',
        ERROR_PARAM_SMALLER_THAN_MIN => 'min:',
        ERROR_PARAM_BIGGER_THAN_MAX  => 'max:',
        ERROR_PARAM_SHOULD_BE_NUMBER => 'value:',
        ERROR_PARAM_SHOULD_BE_STRING => 'value:',

        ERROR_METHOD_NOT_EXISTS      => 'name:',

        ERROR_INDEX_NOT_EXISTS       => 'name:',
        ERROR_PROPERTY_NOT_EXISTS    => 'name:',
    ];

    /**
     * Get error message, with tip if necessary
     * @param $error
     * @param null $tip_value
     * @return mixed|string
     */
    public static function getMessage($error, $tip_value = null)
    {
//        var_dump(self::$messages);die();
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
