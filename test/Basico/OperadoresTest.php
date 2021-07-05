<?php

namespace App\Test\Basico;

use PHPUnit\Framework\TestCase;

class OperadoresTest extends TestCase
{
    public function testOperadoresBasicos(): void
    {
        $num1 = 8;
        $num2 = 6;
        
        $this->assertEquals(14, $num1 + $num2);
        $this->assertEquals(2, $num1 - $num2);
        $this->assertEquals(48, $num1 * $num2);
        $this->assertEquals(1.33, round($num1 / $num2, 2));

        $this->assertEquals(2, $num1 % $num2);
    }
}
