<?php
use PHPUnit\Framework\TestCase;
use Plastinin\PlastininLog;

final class MyLogTest extends TestCase{

    public function testLog():void{
        $this->expectOutputString("htg\n\r");
        PlastininLog::log("htg");
        PlastininLog::write();

        $this->expectOutputString("htg\n\rhtg\n\rkfgdjl\n\r");
        PlastininLog::log("kfgdjl");
        PlastininLog::write();
   }
   public function testInstance(){
        $this->assertInstanceOf(
            PlastininLog::class,
            PlastininLog::Instance()
        );

    }
}