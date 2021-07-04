<?php

namespace App\Test\DigitalInnovationOne\Servicos;

use App\DigitalInnovationOne\Servicos\Validacoes;
use PHPUnit\Framework\TestCase;

class ValidacoesTest extends TestCase
{
    private Validacoes $Validacoes;

    public function setUp(): void
    {
        parent::setUp();
        $this->Validacoes = new Validacoes();
    }

    public function testValidaNome(): void
    {
        $this->assertTrue($this->Validacoes->validaNome('Arthur'));
        $this->assertFalse($this->Validacoes->validaNome(''));
        $this->assertFalse($this->Validacoes->validaNome('jo'));
        $this->assertFalse($this->Validacoes->validaNome('Charlingtonglaevionbeecheknavarelildiscreison'));
    }
    
}
