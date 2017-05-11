<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class enigmeTest extends TestCase
{
  public function testTrubk(){
    $this->assertEquals(2, Enigme::solve(1, 1));
  }
  public function test1Trubk(){
    $this->assertEquals(36, Enigme::solve(10, 20));
  }
  public function test2Trubk(){
    $this->assertEquals(36, Enigme::solve(15, 15));
  }
  public function test3Trubk(){
    $this->assertEquals(22, Enigme::solve(9, 9));
  }
  public function test4Trubk(){
    $this->assertEquals(310, Enigme::solve(100, 100));
  }
  public function test5Trubk(){
    $this->assertEquals(1750, Enigme::solve(500, 500));
  }
  public function test6Trubk(){
    $this->assertEquals(3720, Enigme::solve(1000, 1000));
  }
  public function test7Trubk(){
    $this->assertEquals(47040, Enigme::solve(10000, 10000));
  }
}


?>
