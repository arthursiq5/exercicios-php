<?php

namespace App\Test\Linguagem\Arrays;

use PHPUnit\Framework\TestCase;

class ArraysMultidimensionaisTest extends TestCase
{
    public function testPrimeiroArrayMultidimensional(): void
    {
        $people = [
            'online' => ['David', 'Amy'],
            'offline' => ['John', 'Rob', 'Jack'],
            'away' => ['Arthur', 'Daniel']
        ];

        $this->assertIsArray($people);
        $this->assertIsArray($people['online']);
        $this->assertIsArray($people['offline']);
        $this->assertIsArray($people['away']);

        $this->assertEquals(['David', 'Amy'], $people['online']);
        $this->assertEquals(['John', 'Rob', 'Jack'], $people['offline']);
        $this->assertEquals(['Arthur', 'Daniel'], $people['away']);
    }
}
