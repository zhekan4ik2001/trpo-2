<?php
use PHPUnit\Framework\TestCase;
use Plastinin\LineEquation;
use Plastinin\PlastininException;

class LineTest extends TestCase
{
    public function testLineEquation(){
        $test = new LineEquation();

        $this->assertEquals(
            0,
            $test->lineEquation(1,0)
        );
        $this->assertEquals(
            -1,
            $test->lineEquation(1,1)
        );
        $this->expectException(PlastininException::class);
        $test->lineEquation(0,0);
    }
}