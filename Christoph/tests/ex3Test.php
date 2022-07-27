<?php
namespace TDD\Test;
use TDD\ex3;
use PHPUnit\Framework\TestCase;

class ex3Test extends TestCase {
    public function testAvg () {
        $obj = new ex3();
        $result = $obj->avg([14,32,40,53,61]);
        $this->assertEquals(40,$result,"average should be 40");
    }
}