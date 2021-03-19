<?php
use PHPUnit\Framework\TestCase;
use Plastinin\QuadEquation;
use Plastinin\PlastininException;

class QuadTest extends TestCase
{
    public function testQuadEquation(){
        $test = new QuadEquation();

        $this->assertEquals(
            [0],
            $test->solve(0,2,0)
        );

        $this->assertEquals(
            [0,-0.5],
            $test->solve(4,2,0)
        );

        $this->assertEquals(
            [1,-1],
            $test->solve(2,0,-2)
        );

        $this->expectException(PlastininException::class);
        $test->solve(0,0,0);

        $this->expectException(PlastininException::class);
        $test->solve(1,2,2);
    }
}