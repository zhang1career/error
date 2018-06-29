<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 10/09/2017
 * Time: 1:44 PM
 */

namespace phplab\error\tests\system;

use phplab\error\System;
use phplab\error\tests\SystemData;
use PHPUnit\Framework\TestCase;

class SystemTest extends TestCase
{
    /****************************************
     * Function Tests
     ****************************************/
    /**
     * ok的错误信息
     */
    public function testGetMessageOK()
    {
        $message = System::build(SystemData::$ok);
        $this->assertEquals(SystemData::$ok_message, $message['errmsg']);
    }

    /**
     * param smaller than min的错误信息
     */
    public function testGetMessageParamSmallerThanMin()
    {
        $message = System::build(SystemData::$error_param_smaller_than_min, SystemData::$value_16);
        $this->assertEquals(SystemData::$error_param_smaller_than_min_message, $message['errmsg']);
    }

    /**
     * param should not be value的错误信息
     */
    public function testGetMessageParamShouldNotBeValue()
    {
        $message = System::build(SystemData::$error_param_should_be_string, SystemData::$value_0);
        $this->assertEquals(SystemData::$error_param_should_be_string_message, $message['errmsg']);
    }

    /****************************************
     * Illegal Tests
     ****************************************/
    /**
     * ok的错误信息
     */
    public function testGetMessageWithUnknownErrorCode()
    {
        $message = System::build(SystemData::$error_unknown);
        $this->assertEquals(SystemData::$error_unknown_errmsg, $message['errmsg']);
    }


    /****************************************
     * Edge Tests
     ****************************************/

}
