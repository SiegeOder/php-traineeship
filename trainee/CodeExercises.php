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
}