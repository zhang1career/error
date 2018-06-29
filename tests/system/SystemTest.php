<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 10/09/2017
 * Time: 1:44 PM
 */

namespace phplab\error\tests\system;

use phplab\error\system\System;
use phplab\error\tests\Tests;
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
        $message = System::build(Tests::$ok);
        $this->assertEquals(Tests::$ok_message, $message['errmsg']);
    }

    /**
     * param smaller than min的错误信息
     */
    public function testGetMessageParamSmallerThanMin()
    {
        $message = System::build(Tests::$error_param_smaller_than_min, Tests::$value_16);
        $this->assertEquals(Tests::$error_param_smaller_than_min_message, $message['errmsg']);
    }

    /**
     * param should not be value的错误信息
     */
    public function testGetMessageParamShouldNotBeValue()
    {
        $message = System::build(Tests::$error_param_should_be_string, Tests::$value_0);
        $this->assertEquals(Tests::$error_param_should_be_string_message, $message['errmsg']);
    }

    /****************************************
     * Illegal Tests
     ****************************************/
    /**
     * ok的错误信息
     */
    public function testGetMessageWithUnknownErrorCode()
    {
        $message = System::build(Tests::$error_unknown);
        $this->assertEquals(Tests::$error_unknown_errmsg, $message['errmsg']);
    }


    /****************************************
     * Edge Tests
     ****************************************/

}
