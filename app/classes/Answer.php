<?php


class Answer
{
    const ANSWERS = [
        'yes',
        'no',
        'maybe',
    ];

    /**
     * generate random answer
     * @return string
     */
    public static function generate() : string
    {
        return self::ANSWERS[array_rand(self::ANSWERS)];
    }
}