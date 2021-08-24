<?php

namespace App\Test\Algoritmos\Facil;

use App\Algoritmos\Facil\KeepHydrated;
use PHPUnit\Framework\TestCase;


class KeepHydratedTest extends TestCase
{
    public function testFixed(): void
    {
        $this->assertEquals(1, KeepHydrated::litres(2));
        $this->assertEquals(0, KeepHydrated::litres(1.4));
        $this->assertEquals(6, KeepHydrated::litres(12.3));
        $this->assertEquals(0, KeepHydrated::litres(0.82));
        $this->assertEquals(5, KeepHydrated::litres(11.8));
        $this->assertEquals(893, KeepHydrated::litres(1787));
        $this->assertEquals(0, KeepHydrated::litres(0));
    }
}
