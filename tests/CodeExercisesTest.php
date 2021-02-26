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

    public function testCountWords() : void
    {
        $value = $this->exercises->countWords('aaa bbb ccc ddd bbb ccc ddd ccc ddd ddd');
        $expect = [
            'ddd' => 4,
            'ccc' => 3,
            'bbb' => 2,
            'aaa' => 1
        ];
        $this->assertEquals($expect, $value);
    }

    public function testIsPalindrome() : void
    {
        $value = $this->exercises->isPalindrome('Was it a cat I saw');
        $this->assertEquals(true, $value);
    }

    public function testFindLessThanAverage() : void
    {
        $value = $this->exercises->findLessThanAverage([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $this->assertEquals([1, 2, 3, 4, 5], $value);
    }

    public function testHasThree() : void
    {
        $value = $this->exercises->hasThree([1, 2, 4, 5]);
        $this->assertEquals(false, $value);
    }

    public function testMergeArrays() : void
    {
        $value = $this->exercises->mergeArrays([1, 2, 3], ['a', 'b', 'c']);
        $this->assertEquals([1, 2, 3, 'a', 'b', 'c'], $value);
    }
}
