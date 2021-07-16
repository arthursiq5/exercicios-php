<?php

namespace App\Linguagem\Funcoes;

class CalculaImc
{
    public static function calculaImc(float $peso = null, float $altura = null): float
    {
        $temParametroNulo = empty($peso) || empty($altura);
        $temParametroNegativo = $peso <= 0 || $altura <= 0;

        if ($temParametroNulo || $temParametroNegativo) {
            return 0;
        }

        return round($peso / ($altura ** 2), 1);
    }
}
