<?php
namespace Laao\DemoPackage\Tests;

use Laao\DemoPackage\Demo;
use PHPunit\Framework\TestCase;
class DemoTest extends TestCase{
    public function testDemo(){
        $demo = new Demo();
        $this->assertEquals('foo',$demo->foo());
    }
}