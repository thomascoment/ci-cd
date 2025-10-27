<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Math;

final class MathTest extends TestCase
{
    private Math $math;
    public function setUp(): void
    {
        parent::setUp();
        $this->math = new Math;
    }
    public function testAdd():void
    {
        $this->assertEquals(
            9, $this->math->add(4,5)
        );
    }

    public function testSubstract():void
    {
        $this->assertEquals(
            10, $this->math->substract(15,5)
        );
    }

    public function testMultiply():void
    {
        $this->assertEquals(
            10, $this->math->multiply(2,5)
        );
    }

    public function testDivide():void
    {
        $this->assertEquals(
            2, $this->math->divide(10,5)
        );
    }
}