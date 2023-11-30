<?php

namespace Php\Package\Tests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Capital\capitalize;


class CapitalTest extends TestCase
{
    public function testCapitalize(): void
    {
        $this->assertTrue('Hello' == capitalize('hello'));
    }

//    public function testSomeCode(): void
//    {
//        // вызывается какой-то код, который печатает на экран
//        echo 'some output';
//        $this->expectOutputString('some output');
//    }

    public function testSomeCode(): void
    {
        $this->expectException(\Exception::class);
    }
}