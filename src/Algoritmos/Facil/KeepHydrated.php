<?php

namespace App\Algoritmos\Facil;

/*
Nathan loves cycling.

Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling.

You get given the time in hours and you need to return the number of litres Nathan will drink, rounded to the smallest value.

For example:

time = 3 ----> litres = 1

time = 6.7---> litres = 3

time = 11.8--> litres = 5
*/

class KeepHydrated
{
    public static function litres($t): int
    {
        return floor($t*0.5);
    }

    public static function gohorseLitres($t) {
        // don't do this, it's a gambi made with gohorse
        $result = array_reverse(explode('.', (($t * .5) + 0.001)));
        return (int) array_pop($result);
    }
}
