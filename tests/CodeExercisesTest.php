<?php

namespace Trainee\Tests;

use Trainee\Exercises\CodeExercises;
use PHPUnit\Framework\TestCase;

class CodeExercisesTest extends TestCase
{
    private $exercises;

    public function setUp(): void
    {
        $this->exercises = new CodeExercises();
    }

    public function testCountDigits() : void
    {
        $value = $this->exercises->countDigits(100);
        $this->assertEquals(3, $value);
    }

    public function testStringToUpperCase() : void
    {
        $value = $this->exercises->stringToUpperCase('minsk');
        $this->assertEquals('MINSK', $value);
    }

    public function test() : void
    {
        $value = $this->exercises->firstCharacterUpperOtherLower('MINSK');
        $this->assertEquals('Minsk', $value);
    }
}