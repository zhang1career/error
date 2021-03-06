<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 07/09/2017
 * Time: 8:16 PM
 */

namespace phplab\error;

class System extends Base
{
    const OK = Base::OK;

    const ERROR_PARAM_NOT_EXISTS            = Base::PARAM + Base::NOT_EXISTS;
    const ERROR_PARAM_SMALLER_THAN_MIN      = Base::PARAM + Base::VALUE_TOO_SMALL;
    const ERROR_PARAM_BIGGER_THAN_MAX       = Base::PARAM + Base::VALUE_TOO_BIG;
    const ERROR_PARAM_SHOULD_BE_VALUE       = Base::PARAM + Base::VALUE_SHOULD_BE;
    const ERROR_PARAM_SHOULD_NOT_BE_VALUE   = Base::PARAM + Base::VALUE_SHOULD_NOT_BE;
    const ERROR_PARAM_TYPE                  = Base::PARAM + Base::TYPE;
    const ERROR_PARAM_SHOULD_BE_NUMBER      = Base::PARAM + Base::TYPE_SHOULD_BE_NUMBER;
    const ERROR_PARAM_SHOULD_BE_ARRAY       = Base::PARAM + Base::TYPE_SHOULD_BE_ARRAY;
    const ERROR_PARAM_SHOULD_BE_OBJECT      = Base::PARAM + Base::TYPE_SHOULD_BE_OBJECT;
    const ERROR_PARAM_SHOULD_BE_STRING      = Base::PARAM + Base::TYPE_SHOULD_BE_STRING;

    const ERROR_FUNCTION_NOT_EXISTS         = Base::FUNCTION + Base::NOT_EXISTS;
    const ERROR_METHOD_NOT_EXISTS           = Base::METHOD + Base::NOT_EXISTS;

    const ERROR_INDEX_NOT_EXISTS            = Base::INDEX + Base::NOT_EXISTS;
    const ERROR_PROPERTY_NOT_EXISTS         = Base::PROPERTY + Base::NOT_EXISTS;


    public static $messages = [
        self::OK                           => 'OK',

        self::ERROR_PARAM_NOT_EXISTS       => 'Param not exists',
        self::ERROR_PARAM_SMALLER_THAN_MIN => 'Param values too small',
        self::ERROR_PARAM_BIGGER_THAN_MAX  => 'Param values too big',
        self::ERROR_PARAM_SHOULD_BE_VALUE  => 'Param should be value',
        self::ERROR_PARAM_SHOULD_NOT_BE_VALUE => 'Param should not be value',
        self::ERROR_PARAM_TYPE              => 'Param has wrong type',
        self::ERROR_PARAM_SHOULD_BE_NUMBER => 'Param should be number',
        self::ERROR_PARAM_SHOULD_BE_ARRAY  => 'Param should be array',
        self::ERROR_PARAM_SHOULD_BE_OBJECT => 'Param should be object',
        self::ERROR_PARAM_SHOULD_BE_STRING => 'Param should be string',

        self::ERROR_FUNCTION_NOT_EXISTS    => 'Function does not exist',
        self::ERROR_METHOD_NOT_EXISTS      => 'Method does not exist',

        self::ERROR_INDEX_NOT_EXISTS       => 'Index does not exist',
        self::ERROR_PROPERTY_NOT_EXISTS    => 'Property does not exist',
    ];
}
