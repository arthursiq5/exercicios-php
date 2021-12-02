<?php

namespace App\Test\Linguagem\Funcoes;

use App\Linguagem\Funcoes\Recursividade;
use PHPUnit\Framework\TestCase;

class RecursividadeTest extends TestCase
{
    public function testSomaAteN(): void
    {
        $this->assertEquals(3, Recursividade::somaAteN(2));
        $this->assertEquals(6, Recursividade::somaAteN(3));
        $this->assertEquals(10, Recursividade::somaAteN(4));
        $this->assertEquals(15, Recursividade::somaAteN(5));
        $this->assertEquals(21, Recursividade::somaAteN(6));
    }
}
