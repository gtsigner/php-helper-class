<?php
/**
 * Created by PhpStorm.
 * User: godtoy
 * Date: 10/6/2017
 * Time: 4:03 PM
 */

namespace Oeynet\Helper\Tests;


use Oeynet\Helper\HttpHelper;
use PHPUnit\Framework\TestCase;

class AssertTest extends TestCase
{

    public function testHttpHelper()
    {
        HttpHelper::http("http://blog.oeynet.com", []);
    }
}