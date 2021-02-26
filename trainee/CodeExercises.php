<?php

namespace Trainee\Exercises;

class CodeExercises
{
    /**
     * Get a number of digits.
     *
     * @param int $value
     * @return int
     */
    public function countDigits(int $value): int
    {
        return strlen((string)$value);
    }

    /**
     * Make the string uppercase.
     *
     * @param string $string
     * @return string
     */
    public function stringToUpperCase(string $string): string
    {
        return strtoupper($string);
    }

    /**
     * Make the first character in the string upper case, other characters lower case.
     *
     * @param string $string
     * @return string
     */
    public function firstCharacterUpperOtherLower(string $string): string
    {
        return ucfirst(strtolower($string));
    }

    /**
     * Set the first character in the string as '!'.
     *
     * @param string $string
     * @return string
     */
    public function firstCharacterToExclamationMark(string $string): string
    {
        return substr_replace($string, '!', 0, 1);
    }

    /**
     * Get a number of values in the string.
     *
     * @param string $string
     * @return array
     */
    public function countStringValues(string $string): array
    {
        return array_count_values(str_split($string));
    }

    /**
     * Get popularity of words in the string.
     *
     * @param string $string
     * @return array
     */
    public function countWords(string $string): array
    {
        $result = array_count_values(str_word_count($string, 1));
        arsort($result);
        return $result;
    }

    /**
     * Determine if the string is palindrome or not.
     *
     * @param string $string
     * @return bool
     */
    public function isPalindrome(string $string): bool
    {
        $string = strtolower(str_replace(' ', '', $string));
        return strrev($string) == $string;
    }

    /**
     * Get the values that are less than the average value in the array.
     *
     * @param array $array
     * @return array
     */
    public function findLessThanAverage(array $array): array
    {
        $average = array_sum($array) / count($array);
        $lessThanAverage = [];
        foreach ($array as $item) {
            if ($item < $average) $lessThanAverage[] = $item;
        }
        return $lessThanAverage;
    }

    /**
     * Determine if the array has element 3 or not.
     *
     * @param array $array
     * @return bool
     */
    public function hasThree(array $array): bool
    {
        return in_array(3, $array, true);
    }

    /**
     * Merge the elements of two arrays together.
     *
     * @param array $first
     * @param array $second
     * @return array
     */
    public function mergeArrays(array $first, array $second): array
    {
        return array_merge($first, $second);
    }

    /**
     * Copy keys and values from the array to the keys and the values arrays.
     *
     * @param array $array
     * @param array $keys
     * @param array $values
     */
    public function splitKeysValues(array $array, array &$keys, array &$values): void
    {
        $keys = array_keys($array);
        $values = array_values($array);
    }

    /**
     * Get an array of squares of the array's values.
     *
     * @param array $array
     * @return array
     */
    public function getSquares(array $array): array
    {
        $getSquare = fn($item) => pow($item, 2);
        return array_map($getSquare, $array);
    }

    /**
     * Sort the array in descending order with the variables of different types.
     *
     * @param array $array
     */
    public function rsortByType(array &$array): void
    {
        $isInteger = fn($value) => is_int($value);
        $isNotInteger = fn($value) => !is_int($value);
        $integers = array_filter($array, $isInteger);
        $notIntegers = array_filter($array, $isNotInteger);
        rsort($integers);
        rsort($notIntegers, SORT_NATURAL);
        $array = array_merge($integers, $notIntegers);
    }

    /**
     * Get an array of values exclude unique elements from the array.
     *
     * @param array $array
     * @return array
     */
    public function excludeUniqueElements(array $array): array
    {
        $isUnique = fn($item) => $item === 1;
        $counted = array_count_values($array);
        $unique = array_keys(array_filter($counted, $isUnique));
        return array_values(array_diff($array, $unique));
    }
}
