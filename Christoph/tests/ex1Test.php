<?php
namespace TDD\Test;
use PHPUnit\Framework\TestCase;
use TDD\ex1;

class ex1Test extends TestCase {
    public function testSum() {
        $obj = new ex1();
        $numbers = [5, 12, 24, 36];
        $result = $obj->sum($numbers);
        $this->assertEquals(77, $result, "Sum should be 77");
    }
    public function testAge() {
        $obj = new ex1();
        $current = 2022;
        $birth = 1990;
        $result = $obj->age($current, $birth);
        $this->assertEquals(32, $result, "Age should be 32");
    }
    public function testBark() {
        $dog = new ex1();
        $this->assertEquals("woof woof", $dog->bark(), "must return 'woof woof'");
    }
}