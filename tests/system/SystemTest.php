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
     * 入参之集合增量
     */
    public function testGetMessage()
    {
        $message = System::getMessage(Tests::$error_ok);
        $this->assertEquals(Tests::$error_ok_message, $message);
    }

    /****************************************
     * Illegal Tests
     ****************************************/

    /****************************************
     * Edge Tests
     ****************************************/

}
