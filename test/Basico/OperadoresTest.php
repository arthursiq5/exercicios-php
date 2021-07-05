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

    public function testIncrementAndDecrement(): void
    {
        $a = 2;
        $b = $a++;
        $this->assertEquals(3, $a);
        $this->assertEquals(2, $b);

        $a = 2;
        $b = ++$a;
        $this->assertEquals(3, $a);
        $this->assertEquals(3, $b);

        $a = 2;
        $b = $a--;
        $this->assertEquals(1, $a);
        $this->assertEquals(2, $b);

        $a = 2;
        $b = --$a;
        $this->assertEquals(1, $a);
        $this->assertEquals(1, $b);
    }

    public function testComparision(): void
    {
        // equal
        $this->assertTrue(true == true);
        $this->assertTrue(1 == 1);
        $this->assertTrue(1 == '1');
        $this->assertFalse(1 == 2);

        // identical
        $this->assertTrue(1 === 1);
        $this->assertFalse(1 === '1');

        // not equal
        $this->assertTrue(1 != 2);
        $this->assertFalse(1 != 1);
        $this->assertTrue(1 <> 2);
        $this->assertFalse(1 <> 1);

        // not identical
        $this->assertTrue(1 !== '1');
        $this->assertFalse(1 !== 1);
    }
}
