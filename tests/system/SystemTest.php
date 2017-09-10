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
        $message = System::getMessage(Tests::$error_ok);
        $this->assertEquals(Tests::$error_ok_message, $message);
    }

    /**
     * param smaller than min的错误信息
     */
    public function testGetMessageParamSmallerThanMin()
    {
        $message = System::getMessage(Tests::$error_param_smaller_than_min, 16);
        $this->assertEquals(Tests::$error_param_smaller_than_min_message, $message);
    }

    /****************************************
     * Illegal Tests
     ****************************************/
    /**
     * ok的错误信息
     */
    public function testGetMessageWithUnknownErrorCode()
    {
        $message = System::getMessage(Tests::$error_unknown);
        $this->assertEmpty($message);
    }


    /****************************************
     * Edge Tests
     ****************************************/

}
