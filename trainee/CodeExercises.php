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
}