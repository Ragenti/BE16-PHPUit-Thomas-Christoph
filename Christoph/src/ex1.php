<?php
namespace TDD;

class ex1 {
    public function sum(array $num = []) {
        return array_sum($num);
    }
    public function age($current, $birth) {
        return ($current - $birth);
    }
    public function bark() {
        return "woof woof";
    }
}