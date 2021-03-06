<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 10/09/2017
 * Time: 1:44 PM
 */

namespace phplab\error\tests\system;

use phplab\error\System;
use PHPUnit\Framework\TestCase;

class SystemTest extends TestCase
{
    /****************************************
     * Function Tests
     ****************************************/
    /**
     * ok 的错误信息
     */
    public function testBuildOK()
    {
        $message = System::build(Data::$ok);
        $this->assertEquals(Data::$ok_message, $message['errstr']);
    }

    /**
     * param smaller than min 的错误信息
     */
    public function testBuildParamSmallerThanMin()
    {
        $message = System::build(Data::$error_param_smaller_than_min);
        $this->assertEquals(Data::$error_param_smaller_than_min_message, $message['errstr']);
    }

    /**
     * param should be value 的错误信息
     */
    public function testBuildParamShouldBeValue()
    {
        $message = System::build(Data::$error_param_should_be_value);
        $this->assertEquals(Data::$error_param_should_be_value_message, $message['errstr']);
    }

    /**
     * param should not be value 的错误信息
     */
    public function testBuildParamShouldNotBeValue()
    {
        $message = System::build(Data::$error_param_should_not_be_value);
        $this->assertEquals(Data::$error_param_should_not_be_value_message, $message['errstr']);
    }

    /**
     * param has wrong type 的错误信息
     */
    public function testBuildParamHasWrongType()
    {
        $message = System::build(Data::$error_param_has_wrong_type);
        $this->assertEquals(Data::$error_param_has_wrong_type_message, $message['errstr']);
    }

    /**
     * param should be string 的错误信息
     */
    public function testBuildParamShouldBeString()
    {
        $message = System::build(Data::$error_param_should_be_string);
        $this->assertEquals(Data::$error_param_should_be_string_message, $message['errstr']);
    }

    /**
     * function does not exist 的错误信息
     */
    public function testBuildFunctionDoesNotExist()
    {
        $message = System::build(Data::$error_function_does_not_exist);
        $this->assertEquals(Data::$error_function_does_not_exist_message, $message['errstr']);
    }

    /****************************************
     * Illegal Tests
     ****************************************/
    /**
     * ok的错误信息
     */
    public function testBuildWithUnknownErrorCode()
    {
        $message = System::build(Data::$error_unknown);
        $this->assertEquals(Data::$error_unknown_message, $message['errstr']);
    }


    /****************************************
     * Edge Tests
     ****************************************/

}
