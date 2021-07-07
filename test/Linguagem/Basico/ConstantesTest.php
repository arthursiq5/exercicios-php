<?php

namespace App\Test\Linguagem\Basico;

use PHPUnit\Framework\TestCase;

define("PRIMEIRA_CONSTANTE", 'Olá, Mundo!');

class ConstantesTest extends TestCase
{
    public function testValorConstante()
    {
        $this->assertEquals('Olá, Mundo!', PRIMEIRA_CONSTANTE);
        $this->assertIsString(PRIMEIRA_CONSTANTE);
    }

}
