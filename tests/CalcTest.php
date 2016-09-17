<?php

class CalcTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->calc = new \App\Calc;
    }

    public function testKaisa()
    {
        $this->assertEquals(55, $this->calc->kaisa(10));
    }
}
