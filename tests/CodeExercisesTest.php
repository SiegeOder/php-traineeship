<?php

namespace Trainee\Tests;

use Trainee\Exercises\CodeExercises;
use PHPUnit\Framework\TestCase;

class CodeExercisesTest extends TestCase
{
    private CodeExercises $exercises;

    public function setUp(): void
    {
        $this->exercises = new CodeExercises();
    }

    public function testCountDigits(): void
    {
        $result = $this->exercises->countDigits(100);
        $this->assertEquals(3, $result);
    }

    public function testStringToUpperCase(): void
    {
        $result = $this->exercises->stringToUpperCase('minsk');
        $this->assertEquals('MINSK', $result);
    }

    public function testFirstCharacterUpperOtherLower(): void
    {
        $result = $this->exercises->firstCharacterUpperOtherLower('MINSK');
        $this->assertEquals('Minsk', $result);
    }

    public function testFirstCharacterToExclamationMark(): void
    {
        $result = $this->exercises->firstCharacterToExclamationMark('abcde');
        $this->assertEquals('!bcde', $result);
    }

    public function testCountStringValues(): void
    {
        $result = $this->exercises->countStringValues('0011100101001');
        $this->assertEquals(7, $result[0]);
        $this->assertEquals(6, $result[1]);
    }

    public function testCountWords(): void
    {
        $result = $this->exercises->countWords('aaa bbb ccc ddd bbb ccc ddd ccc ddd ddd');
        $expect = [
            'ddd' => 4,
            'ccc' => 3,
            'bbb' => 2,
            'aaa' => 1
        ];
        $this->assertEquals($expect, $result);
    }

    public function testIsPalindrome(): void
    {
        $result = $this->exercises->isPalindrome('Was it a cat I saw');
        $this->assertEquals(true, $result);
    }

    public function testFindLessThanAverage(): void
    {
        $result = $this->exercises->findLessThanAverage([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $this->assertEquals([1, 2, 3, 4, 5], $result);
    }

    public function testHasThree(): void
    {
        $result = $this->exercises->hasThree([1, 2, 4, 5]);
        $this->assertEquals(false, $result);
    }

    public function testMergeArrays(): void
    {
        $result = $this->exercises->mergeArrays([1, 2, 3], ['a', 'b', 'c']);
        $this->assertEquals([1, 2, 3, 'a', 'b', 'c'], $result);
    }

    public function testSplitKeysValues(): void
    {
        $array = [
            'a' => 1,
            'b' => 2,
            'c' => 3,
        ];
        $keys = [];
        $values = [];
        $this->exercises->splitKeysValues($array, $keys, $values);
        $this->assertEquals(['a', 'b', 'c'], $keys);
        $this->assertEquals([1, 2, 3], $values);
    }

    public function testGetSquares(): void
    {
        $squares = $this->exercises->getSquares([1, 2, 3, 4, 5]);
        $this->assertEquals([1, 4, 9, 16, 25], $squares);
    }

    public function testRsortByType(): void
    {
        $array = [5.1, 6, 1, 2.2, 'foo', 13, 7.1, 'bar', 5];
        $sorted = [13, 6, 5, 1, 'foo', 'bar', 7.1, 5.1, 2.2];
        $this->exercises->rsortByType($array);
        $this->assertEquals($sorted, $array);
    }

    public function testExcludeUniqueElements(): void
    {
        $array = ['foo', 'bar', 'baz', 'foo', 'bar'];
        $result = $this->exercises->excludeUniqueElements($array);
        $this->assertEquals(['foo', 'bar', 'foo', 'bar'], $result);
    }
}
