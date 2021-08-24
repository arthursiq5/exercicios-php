<?php

namespace App\Test\Algoritmos\Facil;

use App\Algoritmos\Facil\KeepHydrated;
use PHPUnit\Framework\TestCase;


class KeepHydratedTest extends TestCase
{
    public function testFixed(): void
    {
        $fn = fn($x) => KeepHydrated::litres($x);
        $this->assertEquals(1,  $fn(2));
        $this->assertEquals(0,  $fn(1.4));
        $this->assertEquals(6,  $fn(12.3));
        $this->assertEquals(0,  $fn(0.82));
        $this->assertEquals(5,  $fn(11.8));
        $this->assertEquals(893,  $fn(1787));
        $this->assertEquals(0,  $fn(0));
    }

    public function testGoHorseCode(): void
    {
        $fn = fn($x) => KeepHydrated::gohorseLitres($x);
        $this->assertEquals(1,  $fn(2));
        $this->assertEquals(0,  $fn(1.4));
        $this->assertEquals(6,  $fn(12.3));
        $this->assertEquals(0,  $fn(0.82));
        $this->assertEquals(5,  $fn(11.8));
        $this->assertEquals(893,  $fn(1787));
        $this->assertEquals(0,  $fn(0));
    }
}
