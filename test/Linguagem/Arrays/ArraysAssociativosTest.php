<?php

namespace App\Test\Arrays;

use PHPUnit\Framework\TestCase;

class ArraysAssociativosTest extends TestCase
{
    public function testPrimeiroArrayAssociativo(): void
    {
        $people = [
            "David" => "27",
            "Amy"=>"21",
            "John"=>"42"
        ];

        $this->assertEquals(3, count($people));
        $this->assertEquals('27', $people['David']);
        $this->assertEquals('21', $people['Amy']);
        $this->assertEquals('42', $people['John']);
    }
}
