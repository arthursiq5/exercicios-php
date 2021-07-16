<?php

namespace App\Test\Linguagem\Funcoes;

use App\Linguagem\Funcoes\CalculaImc;
use PHPUnit\Framework\TestCase;

class CalculaImcTest extends TestCase
{
    public function testCalculaImc(): void
    {
        $this->assertEquals(26.1, CalculaImc::calculaImc(80, 1.75));
        $this->assertEquals(24.7, CalculaImc::calculaImc(80, 1.80));
        $this->assertEquals(23.1, CalculaImc::calculaImc(75, 1.80));
    }
    public function testCalculaImcParametroNulo(): void
    {
        $this->assertEquals(0, CalculaImc::calculaImc());
        $this->assertEquals(0, CalculaImc::calculaImc(25));
        $this->assertEquals(0, CalculaImc::calculaImc(null, 25));
    }

    public function testCalculaImcParametroNegativo(): void
    {
        $this->assertEquals(0, CalculaImc::calculaImc(-80, 1.75));
    }
}
