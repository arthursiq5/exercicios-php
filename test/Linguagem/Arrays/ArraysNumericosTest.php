<?php

namespace App\Test\Linguagem\Arrays;

use PHPUnit\Framework\TestCase;

class ArraysNumericosTest extends TestCase
{
    public function testSintaxeAntigaENova(): void
    {
        $this->assertEquals([], array());
    }

    public function testArrayInicial(): void
    {
        $nome1 = 'David';
        $nome2 = 'Amy';
        $nome3 = 'John';

        $nomes = [
            $nome1,
            $nome2,
            $nome3
        ];

        $this->assertEquals($nome1, $nomes[0]);
        $this->assertEquals($nome2, $nomes[1]);
        $this->assertEquals($nome3, $nomes[2]);
    }
}
