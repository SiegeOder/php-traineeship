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

    public function testFirstCharacterUpperOtherLower() : void
    {
        $value = $this->exercises->firstCharacterUpperOtherLower('MINSK');
        $this->assertEquals('Minsk', $value);
    }

    public function testFirstCharacterToExclamationMark() : void
    {
        $value = $this->exercises->firstCharacterToExclamationMark('abcde');
        $this->assertEquals('!bcde', $value);
    }

    public function testCountStringValues() : void
    {
        $value = $this->exercises->countStringValues('0011100101001');
        $this->assertEquals(7, $value[0]);
        $this->assertEquals(6, $value[1]);
    }
}