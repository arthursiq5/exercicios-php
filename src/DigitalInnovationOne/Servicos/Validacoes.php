<?php

namespace App\DigitalInnovationOne\Servicos;

class Validacoes
{
    public function validaNome(string $nome): bool
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

    public function validaIdade($idade): bool
    {
        $idade = trim($idade);
        if (!is_numeric($idade)) {
            return false;
        }

        if ($idade < 0)
        {
            return false;
        }

        return true;
    }
}
