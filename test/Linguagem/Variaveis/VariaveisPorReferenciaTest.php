<?php

namespace App\Test\Variaveis;

use PHPUnit\Framework\TestCase;

class VariaveisPorReferenciaTest extends TestCase
{
    public function testVariaveisMixedPorReferencia(): void
    {
        $message1 = '[MESSAGE] mensagem 1';
        $message2 = '[MESSAGE] mensagem 2';

        $a = $message1;
        $b = &$a; // $b é uma referência de $a

        $this->assertEquals($message1, $a);
        $this->assertEquals($message1, $b);

        $b = $message2;

        $this->assertEquals($message2, $a);
        $this->assertEquals($message2, $b);

    }
}
