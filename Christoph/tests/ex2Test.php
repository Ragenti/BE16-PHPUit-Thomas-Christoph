<?php
namespace TDD\Test;
use TDD\ex2;
use PHPUnit\Framework\TestCase;

class ex2Test extends TestCase {
    public function testSum () {
        $obj = new ex2();
        $result = $obj->sum(15,32,33,42,92);
        $this->assertEquals(214, $result, "Sum should be 214");
    }
}
