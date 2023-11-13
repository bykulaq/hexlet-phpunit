<?php
//namespace Hexlet\Phpunit\Tests;

namespace Php\Package\Tests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Capital\capitalize;


class CapitalTest extends TestCase
{
    public function testCapitalize(): void
    {
        $this->assertTrue('Hello' == capitalize('hello'));
    }
}