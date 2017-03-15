<?php

use PHPUnit\Framework\TestCase;
use AndPizza\MakeTime\MakeTime;

class MakeTimeTest extends TestCase
{
    public function testCalculateWithZeroPies()
    {
        $this->assertEquals(
            600,
            (new MakeTime())->calculate(['orderDetails'=>['totalPies'=>0]])
        );
    }

    public function testCalculateWithOnePie()
    {
        $this->assertEquals(
            600,
            (new MakeTime())->calculate(['orderDetails'=>['totalPies'=>1]])
        );
    }

    public function testCalculateWithFivePies()
    {
        $this->assertEquals(
            1200,
            (new MakeTime())->calculate(['orderDetails'=>['totalPies'=>5]])
        );
    }

    public function testCalculateWithEightPies()
    {
        $this->assertEquals(
            1650,
            (new MakeTime())->calculate(['orderDetails'=>['totalPies'=>8]])
        );
    }
}
