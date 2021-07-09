<?php

namespace App\Test\Linguagem\Variaveis;

use PHPUnit\Framework\TestCase;

class VariaveisPorReferenciaTest extends TestCase
{
    public function testVariaveisMixedPorReferencia(): void
    {
        $message1 = '[MESSAGE] mensagem 1';
        $message2 = '[MESSAGE] mensagem 2';
        $message3 = 3.14;

        $a = $message1;
        $b = &$a; // $b é uma referência de $a

        $this->assertIsString($a);
        $this->assertEquals($message1, $a);
        $this->assertEquals($message1, $b);
        $this->assertSame($a, $b);

        $b = $message2;
        $this->assertIsString($a);
        $this->assertEquals($message2, $a);
        $this->assertEquals($message2, $b);
        $this->assertSame($a, $b);

        $a = $message3;
        $this->assertIsFloat($a);
        $this->assertEquals($message3, $a);
        $this->assertEquals($message3, $b);
        $this->assertSame($a, $b);
    }
}
