<?php

namespace App\Entity;

use Exception;

use function PHPUnit\Framework\throwException;

final class Math
{
    public function add(int $a, int $b): int
    {
        $add = $a + $b;
        return $add;
    }

    public function substract(int $a, int $b): int
    {
        $substract = $a - $b;
        return $substract;
    }

    public function multiply(int $a, int $b): int
    {
        $multiply = $a * $b;
        return $multiply;
    }

    public function divide(int $a, int $b): int
    {
        $divide = $a / $b;
        return $divide;
    }
}
