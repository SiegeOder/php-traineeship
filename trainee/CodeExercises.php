<?php

namespace Trainee\Exercises;

class CodeExercises
{
    /**
     * returns number of digits in the parameter
     *
     * @param int $value
     * @return int
     */
    public function countDigits(int $value) : int
    {
        return strlen((string) $value);
    }

    /**
     * makes a string uppercase
     *
     * @param string $value
     * @return string
     */
    public function stringToUpperCase(string $value) : string
    {
        return strtoupper($value);
    }

    /**
     * makes a string first character upper case, other characters lower case
     *
     * @param string $value
     * @return string
     */
    public function firstCharacterUpperOtherLower(string $value) : string
    {
        return ucfirst(strtolower($value));
    }

    /**
     * makes a string first character '!'
     *
     * @param string $value
     * @return string
     */
    public function firstCharacterToExclamationMark(string $value) : string
    {
        return substr_replace($value, '!', 0, 1);
    }

    /**
     * returns number of values in a string
     *
     * @param string $value
     * @return array
     */
    public function countStringValues(string $value) : array
    {
        return array_count_values(str_split($value, 1));
    }

    /**
     * returns popularity of words in a string
     *
     * @param string $value
     * @return array
     */
    public function countWords(string $value) : array
    {
        $result = array_count_values(str_word_count($value, 1));
        arsort($result);
        return $result;
    }

    /**
     * checks if a string is a palindrome
     *
     * @param string $value
     * @return bool
     */
    public function isPalindrome(string $value) : bool
    {
        $value = strtolower(str_replace(' ', '', $value));
        return strrev($value) == $value;
    }

    /**
     * returns values that are less than the average in an array
     *
     * @param array $value
     * @return array
     */
    public function findLessThanAverage(array $value) : array
    {
        $average = array_sum($value)/count($value);
        $lessThanAverage = [];
        foreach ($value as $item)
        {
            if ($item < $average) $lessThanAverage[] = $item;
        }
        return $lessThanAverage;
    }

    /**
     * checks if an array has value 3
     *
     * @param array $value
     * @return bool
     */
    public function hasThree(array $value) : bool
    {
        return in_array(3, $value, true);
    }
}
