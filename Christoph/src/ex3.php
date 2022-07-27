<?php
namespace TDD;

class ex3 {
    public function avg (array $num = []) {
        $sum = array_sum($num);
        $count = count($num);
        $average = $sum / $count;
        return $average;
    }
}