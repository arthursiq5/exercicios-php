<?php

namespace App\Linguagem\Funcoes;

class Recursividade
{
    public static function somaAteN(int $n): int
    {
        if ($n > 0) return $n + Recursividade::somaAteN($n - 1);
        return 0;
    }
}
