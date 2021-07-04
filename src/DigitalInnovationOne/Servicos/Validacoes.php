<?php

namespace App\DigitalInnovationOne\Servicos;

class Validacoes
{
    public function validaNome(string $nome)
    {
        if (empty($nome)) {
            return false;
        }

        if (strlen($nome) < 3) {
            return false;
        }

        if (strlen($nome) > 40) {
            return false;
        }

        return true;
    }

    public function validaIdade(mixed $idade)
    {

    }
}
